<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ObjectSerializer.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------
 */

namespace Aspose\Words;

/*
 * ObjectSerializer
 */
class ObjectSerializer
{
    /*
     * Executes url parsing
     */
    public static function parseURL($config, $url, $queryParams) 
    {
        $urlQuery = http_build_query($queryParams);
        $result = $config->getHost() . $config->getBasePath() . $url;
        if (false == empty($urlQuery))
        {
             $result = $result . "?" . $urlQuery;
        }

        return $result;
    }

    /*
     * Creates the batch part data from request
     */
    public static function createBatchPart($config, $request) 
    {
        $requestData = $request->createRequestData($config);
        $stream = new \GuzzleHttp\Psr7\AppendStream();
        $prefixPath = $config->getHost() . $config->getBasePath() . "/words/";
        $relPath = substr($requestData['url'], strlen($prefixPath));

        $stream->addStream(\GuzzleHttp\Psr7\Utils::streamFor($requestData['method'] . " " . $relPath . " \r\n"));
        foreach ($requestData['headers'] as $key => $value) {
            $stream->addStream(\GuzzleHttp\Psr7\Utils::streamFor($key . ": " . $value . "\r\n"));
        }

        $stream->addStream(\GuzzleHttp\Psr7\Utils::streamFor("\r\n"));
        $body = $requestData['body'];
        if (isset($body)) {
            $stream->addStream(\GuzzleHttp\Psr7\Utils::streamFor($body));
        }

        return $stream;
    }

    /*
     * Parse the multipart form data from response
     */
    public static function parseMultipart($response)
    {
        $separator = "\r\n\r\n";
        $contentType = $response->getHeader('Content-Type')[0];
        preg_match('/boundary=(.*)$/', $contentType, $matches);
        $boundary = trim($matches[1], "\"");

        $a_blocks = preg_split("/-+$boundary/", $response->getBody());
        array_pop($a_blocks);

        $result = [];
        foreach ($a_blocks as $id => $block) {
            if (empty($block)) {
                continue;
            }

            $dataIndex = strpos($block, $separator);
            if ($dataIndex === false) {
                continue;
            }

            $headersData = substr($block, 0, $dataIndex);
            $bodyData = substr($block, $dataIndex + strlen($separator));
            $bodyData = trim($bodyData, "\r\n");
            $headers = [];
            foreach (preg_split('/\r\n/', $headersData) as $headerLine) {
                $headerParts = preg_split('/:/', $headerLine);
                if (count($headerParts) == 2) {
                    $headers[trim($headerParts[0])] = trim($headerParts[1]);
                }
            }

            $result[] = [
                'headers' => $headers,
                'body' => $bodyData
            ];
        }

        return $result;
    }

    /*
     * Parse a single part.
     */
    public static function parseSinglePart($part, $responseType)
    {
        $separator = "\r\n\r\n";
        $block = $part['body'];
        $headers = $part['headers'];

        $dataIndex = strpos($block, $separator);
        if ($dataIndex === false) {
            $headersData = $block;
            $bodyData = null;
        } else {
            $headersData = substr($block, 0, $dataIndex);
            $bodyData = substr($block, $dataIndex + strlen($separator));
        }

        $headerLines = preg_split('/\r\n/', $headersData);
        if (count($headerLines) == 0) {
            throw new ApiException("Failed to parse batch part data.", 400, null, null);
        }

        $statusLine = $headerLines[0];
        for ($q = 1; $q < count($headerLines); $q++) {
            $headerLine = $headerLines[$q];
            $headerParts = preg_split('/:/', $headerLine);
            if (count($headerParts) == 2) {
                $headers[trim($headerParts[0])] = trim($headerParts[1]);
            }
        }

        $statusCode = intval(preg_split('/ /', $statusLine)[0]);
        $partResult = null;
        if ($statusCode != 200) {
            $partResult = new ApiException(sprintf('[%d] Error connecting to the API', $statusCode), $statusCode, $headers, $bodyData);
        } else if ($responseType !== null) {
            $partResult = ObjectSerializer::deserialize($bodyData, $responseType, $headers);
        }

        return $partResult;
    }

    /*
     * Parse the multipart response as batch
     */
    public static function parseBatchResponse($response, $requests)
    {
        $parts = ObjectSerializer::parseMultipart($response);
        $result = [];

        if (count($parts) != count($requests)) {
            throw new ApiException("Request and response parts mismatch.", 400, null, null);
        }

        for ($i = 0; $i < count($requests); $i++) {
            $part = $parts[$i];
            $request = $requests[$i];
            $responseType = $request->getResponseType();
            $result[] = self::parseSinglePart($part, $responseType);
        }

        return $result;
    }

    /*
     * Serialize data
     *
     * @param mixed  $data   the data to serialize
     * @param string $type   the SwaggerType of the data
     * @param string $format the format of the Swagger type of the data
     *
     * @return string|object serialized form of $data
     */
    public static function sanitizeForSerialization($data, $type = null, $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof \DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(\DateTime::ISO8601);
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif (is_object($data)) {
            $values = [];
            $formats = $data::swaggerFormats();
            foreach ($data::swaggerTypes() as $property => $swaggerType) {
                $getter = $data::getters()[$property];
                $value = $data->$getter();
                if ($value !== null
                    && !in_array($swaggerType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)
                    && method_exists($swaggerType, 'getAllowableEnumValues')
                    && !in_array($value, $swaggerType::getAllowableEnumValues())
                ) {
                        $imploded = implode("', '", $swaggerType::getAllowableEnumValues());
                        throw new \InvalidArgumentException("Invalid value for enum '$swaggerType', must be one of: '$imploded'");
                }
                if ($value !== null) {
                    $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $swaggerType, $formats[$property]);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }

    /*
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif
     *
     * @param string $filename filename to be sanitized
     *
     * @return string the sanitized filename
     */
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }

    /*
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return implode("/", array_map("rawurlencode", explode("/", self::toString($value))));
    }

    /*
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param string[]|string|\DateTime $object an object to be serialized to a string
     *
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return self::toString($object);
        }
    }

    /*
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        return self::toString($value);
    }

    /*
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string|\SplFileObject $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue($value)
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        } else {
            return self::toString($value);
        }
    }

    /*
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     *
     * @param string|\DateTime $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString($value)
    {
        return $value;
    }

    /*
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $collectionFormat           the format use for serialization (csv,
     *                                           ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    public static function serializeCollection(array $collection, $collectionFormat, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && ('multi' === $collectionFormat)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
        }
        switch ($collectionFormat) {
        case 'pipes':
            return implode('|', $collection);
        case 'tsv':
            return implode("\t", $collection);
        case 'ssv':
            return implode(' ', $collection);
        case 'csv':
            // Deliberate fall through. CSV is default format.
        default:
            return implode(',', $collection);
        }
    }

    /*
     * Deserialize a JSON string into an object
     *
     * @param mixed    $data        object or primitive to be deserialized
     * @param string   $class       class name is passed as a string
     * @param string[] $httpHeaders HTTP headers
     *
     * @return object|array|null an single or an array of $class instances
     */
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        } elseif (substr($class, 0, 4) === 'map[') { // for associative array e.g. map[string,int]
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, null);
                }
            }
            return $deserialized;
        } elseif (strcasecmp(substr($class, -2), '[]') === 0) {
            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }
            return $values;
        } elseif ($class === 'object') {
            settype($data, 'array');
            return $data;
        } elseif ($class === '\DateTime') {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                return \DateTime::createFromFormat(\DateTime::ISO8601, $data);
            } else {
                return null;
            }
        } elseif (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        } elseif ($class === '\SplFileObject') {
            // \Psr\Http\Message\StreamInterface $data 

            // determine file name
            if (array_key_exists('Content-Disposition', $httpHeaders)
                && preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)
            ) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath() . self::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }

            $file = fopen($filename, 'w');
            if (gettype($data) === 'string') {
                fwrite($file, $data);
            } else {
                while ($chunk = $data->read(200)) {
                    fwrite($file, $chunk);
                }
            }
            fclose($file);

            return new \SplFileObject($filename, 'r');
        } elseif (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues())) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        } else {
            // If a discriminator is defined and points to a valid subclass, use it.
            $discriminator = $class::DISCRIMINATOR;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '\Aspose\Words\Model\\' . $data->{$discriminator};
                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }
            $instance = new $class();
            foreach ($instance::swaggerTypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                    continue;
                }

                $propertyValue = $data->{$instance::attributeMap()[$property]};
                if (isset($propertyValue)) {
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }
            return $instance;
        }
    }
}
