<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReplaceWithTextRequest.php">
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

namespace Aspose\Words\Model\Requests;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Words\ObjectSerializer;
use Aspose\Words\HeaderSelector;
use Aspose\Words\Model\Response\ReplaceWithTextResponse;

/*
 * Request model for replaceWithText operation.
 */
class ReplaceWithTextRequest
{
    /*
     * The filename of the input document.
     */
    public $name;

    /*
     * The range start identifier.
     */
    public $range_start_identifier;

    /*
     * Model with text for replacement.
     */
    public $range_text;

    /*
     * The range end identifier.
     */
    public $range_end_identifier;

    /*
     * Original document folder.
     */
    public $folder;

    /*
     * Original document storage.
     */
    public $storage;

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;

    /*
     * Password for opening an encrypted document.
     */
    public $password;

    /*
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $dest_file_name;

    /*
     * Initializes a new instance of the ReplaceWithTextRequest class.
     *
     * @param string $name The filename of the input document.
     * @param string $range_start_identifier The range start identifier.
     * @param \Aspose\Words\Model\ReplaceRange $range_text Model with text for replacement.
     * @param string $range_end_identifier The range end identifier.
     * @param string $folder Original document folder.
     * @param string $storage Original document storage.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param string $dest_file_name Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public function __construct($name, $range_start_identifier, $range_text, $range_end_identifier = null, $folder = null, $storage = null, $load_encoding = null, $password = null, $dest_file_name = null)
    {
        $this->name = $name;
        $this->range_start_identifier = $range_start_identifier;
        $this->range_text = $range_text;
        $this->range_end_identifier = $range_end_identifier;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->dest_file_name = $dest_file_name;
    }

    /*
     * The filename of the input document.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The filename of the input document.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }

    /*
     * The range start identifier.
     */
    public function get_range_start_identifier()
    {
        return $this->range_start_identifier;
    }

    /*
     * The range start identifier.
     */
    public function set_range_start_identifier($value)
    {
        $this->range_start_identifier = $value;
        return $this;
    }

    /*
     * Model with text for replacement.
     */
    public function get_range_text()
    {
        return $this->range_text;
    }

    /*
     * Model with text for replacement.
     */
    public function set_range_text($value)
    {
        $this->range_text = $value;
        return $this;
    }

    /*
     * The range end identifier.
     */
    public function get_range_end_identifier()
    {
        return $this->range_end_identifier;
    }

    /*
     * The range end identifier.
     */
    public function set_range_end_identifier($value)
    {
        $this->range_end_identifier = $value;
        return $this;
    }

    /*
     * Original document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Original document folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }

    /*
     * Original document storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Original document storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public function get_load_encoding()
    {
        return $this->load_encoding;
    }

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public function set_load_encoding($value)
    {
        $this->load_encoding = $value;
        return $this;
    }

    /*
     * Password for opening an encrypted document.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * Password for opening an encrypted document.
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }

    /*
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public function get_dest_file_name()
    {
        return $this->dest_file_name;
    }

    /*
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public function set_dest_file_name($value)
    {
        $this->dest_file_name = $value;
        return $this;
    }

    /*
     * Create request data for operation 'replaceWithText'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequestData($config)
    {
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling replaceWithText');
        }
        if ($this->range_start_identifier === null) {
            throw new \InvalidArgumentException('Missing the required parameter $range_start_identifier when calling replaceWithText');
        }
        if ($this->range_text === null) {
            throw new \InvalidArgumentException('Missing the required parameter $range_text when calling replaceWithText');
        }

        $resourcePath = '/words/{name}/range/{rangeStartIdentifier}/{rangeEndIdentifier}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $filename = null;
        // path params
        if ($this->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }
        else {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', '', $resourcePath);
        }
        // path params
        if ($this->range_start_identifier !== null) {
            $localName = lcfirst('RangeStartIdentifier');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->range_start_identifier), $resourcePath);
        }
        else {
            $localName = lcfirst('RangeStartIdentifier');
            $resourcePath = str_replace('{' . $localName . '}', '', $resourcePath);
        }
        // path params
        if ($this->range_end_identifier !== null) {
            $localName = lcfirst('RangeEndIdentifier');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->range_end_identifier), $resourcePath);
        }
        else {
            $localName = lcfirst('RangeEndIdentifier');
            $resourcePath = str_replace('{' . $localName . '}', '', $resourcePath);
        }

        // remove empty path parameters
        $resourcePath = str_replace("//", "/", $resourcePath);
        // query params
        if ($this->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($this->folder) ? ($this->folder ? 'true' : 'false') : $this->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($this->storage) ? ($this->storage ? 'true' : 'false') : $this->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->load_encoding !== null) {
            $localName = lcfirst('LoadEncoding');
            $localValue = is_bool($this->load_encoding) ? ($this->load_encoding ? 'true' : 'false') : $this->load_encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->password !== null) {
            $localName = lcfirst('Password');
            $localValue = is_bool($this->password) ? ($this->password ? 'true' : 'false') : $this->password;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->dest_file_name !== null) {
            $localName = lcfirst('DestFileName');
            $localValue = is_bool($this->dest_file_name) ? ($this->dest_file_name ? 'true' : 'false') : $this->dest_file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }

        $resourcePath = ObjectSerializer::parseURL($config, $resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($this->range_text)) {
            if (is_string($this->range_text)) {
                $_tempBody = ['content' => "\"" . $this->range_text . "\"", 'mime' => 'application/json'];
            } else {
                $_tempBody = ['content' => $this->range_text, 'mime' => 'application/json'];
            }
        }
        $headerParams = [];
        // for model (json/xml)
        if (isset($_tempBody)) {
            $headerParams['Content-Type'] = $_tempBody['mime'];
            if (gettype($_tempBody['content']) === 'string') {
                $httpBody = ObjectSerializer::sanitizeForSerialization($_tempBody['content']);
            } else {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody['content']));
            }
        } elseif (count($formParams) > 1) {
            $multipartContents = [];
            foreach ($formParams as $formParamName => $formParamValue) {
                $multipartContents[] = [
                    'name' => $formParamName,
                    'contents' => $formParamValue['content'],
                    'headers' => ['Content-Type' => $formParamValue['mime']]
                ];
            }
            // for HTTP post (form)
            $httpBody = new MultipartStream($multipartContents);
            $headerParams['Content-Type'] = "multipart/form-data; boundary=" . $httpBody->getBoundary();
        }

        $result = array();
        $result['method'] = 'POST';
        $result['url'] = $resourcePath;
        $result['headers'] = $headerParams;
        $result['body'] = $httpBody;
        return $result;
    }

    /*
     * Create request for operation 'replaceWithText'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequest($config)
    {
        $reqdata = $this->createRequestData($config);
        $defaultHeaders = [];

        if ($config->getAccessToken() !== null) {
            $defaultHeaders['Authorization'] = 'Bearer ' . $config->getAccessToken();
        }

        if ($config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $config->getClientVersion();

        $reqdata['headers'] = array_merge($defaultHeaders, $reqdata['headers']);
        $req = new Request(
            $reqdata['method'],
            $reqdata['url'],
            $reqdata['headers'],
            $reqdata['body']
        );

        if ($config->getDebug()) {
            $this->_writeRequestLog($reqdata['method'], $reqdata['url'], $reqdata['headers'], $reqdata['body']);
        }

        return $req;
    }

    /*
     * Gets response type of this request.
     */
    public function getResponseType()
    {
        return '\Aspose\Words\Model\DocumentResponse';
    }

    public function deserializeResponse($responseContent)
    {
        return ObjectSerializer::deserialize($responseContent, '\Aspose\Words\Model\DocumentResponse', []);
    }
}
