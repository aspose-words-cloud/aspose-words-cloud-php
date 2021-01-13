<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertDocumentRequest.php">
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
use Aspose\Words\Model\Response\ConvertDocumentResponse;

/*
 * Request model for convertDocument operation.
 */
class ConvertDocumentRequest
{
    /*
     * Converting document.
     */
    public $document;

    /*
     * The format to convert.
     */
    public $format;

    /*
     * The path to the output document on a local storage.
     */
    public $out_path;

    /*
     * The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "sourceFilename" will be used instead.
     */
    public $file_name_field_value;

    /*
     * Original document storage.
     */
    public $storage;

    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;

    /*
     * Initializes a new instance of the ConvertDocumentRequest class.
     *
     * @param \SplFileObject $document Converting document.
     * @param string $format The format to convert.
     * @param string $out_path The path to the output document on a local storage.
     * @param string $file_name_field_value The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "sourceFilename" will be used instead.
     * @param string $storage Original document storage.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     */
    public function __construct($document, $format, $out_path = null, $file_name_field_value = null, $storage = null, $fonts_location = null)
    {
        $this->document = $document;
        $this->format = $format;
        $this->out_path = $out_path;
        $this->file_name_field_value = $file_name_field_value;
        $this->storage = $storage;
        $this->fonts_location = $fonts_location;
    }

    /*
     * Converting document.
     */
    public function get_document()
    {
        return $this->document;
    }

    /*
     * Converting document.
     */
    public function set_document($value)
    {
        $this->document = $value;
        return $this;
    }

    /*
     * The format to convert.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * The format to convert.
     */
    public function set_format($value)
    {
        $this->format = $value;
        return $this;
    }

    /*
     * The path to the output document on a local storage.
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /*
     * The path to the output document on a local storage.
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
        return $this;
    }

    /*
     * The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "sourceFilename" will be used instead.
     */
    public function get_file_name_field_value()
    {
        return $this->file_name_field_value;
    }

    /*
     * The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "sourceFilename" will be used instead.
     */
    public function set_file_name_field_value($value)
    {
        $this->file_name_field_value = $value;
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
     * Folder in filestorage with custom fonts.
     */
    public function get_fonts_location()
    {
        return $this->fonts_location;
    }

    /*
     * Folder in filestorage with custom fonts.
     */
    public function set_fonts_location($value)
    {
        $this->fonts_location = $value;
        return $this;
    }

    /*
     * Create request data for operation 'convertDocument'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequestData($config)
    {
        if ($this->document === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document when calling convertDocument');
        }
        if ($this->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling convertDocument');
        }

        $resourcePath = '/words/convert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $filename = null;

        // remove empty path parameters
        $resourcePath = str_replace("//", "/", $resourcePath);
        // query params
        if ($this->format !== null) {
            $localName = lcfirst('Format');
            $localValue = is_bool($this->format) ? ($this->format ? 'true' : 'false') : $this->format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->out_path !== null) {
            $localName = lcfirst('OutPath');
            $localValue = is_bool($this->out_path) ? ($this->out_path ? 'true' : 'false') : $this->out_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->file_name_field_value !== null) {
            $localName = lcfirst('FileNameFieldValue');
            $localValue = is_bool($this->file_name_field_value) ? ($this->file_name_field_value ? 'true' : 'false') : $this->file_name_field_value;
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
        if ($this->fonts_location !== null) {
            $localName = lcfirst('FontsLocation');
            $localValue = is_bool($this->fonts_location) ? ($this->fonts_location ? 'true' : 'false') : $this->fonts_location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }

        $resourcePath = ObjectSerializer::parseURL($config, $resourcePath, $queryParams);
        // form params
        if ($this->document !== null) {
            $multipart = true; 
            $filename = ObjectSerializer::toFormValue($this->document);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['document'] = ['content' => $contents, 'mime' => 'application/octet-stream'];
        }

        // body params
        $_tempBody = null;
        if (count($formParams) == 1) {
            $_tempBody = array_shift($formParams);
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
        $result['method'] = 'PUT';
        $result['url'] = $resourcePath;
        $result['headers'] = $headerParams;
        $result['body'] = $httpBody;
        return $result;
    }

    /*
     * Create request for operation 'convertDocument'
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
        return '\SplFileObject';
    }

    public function deserializeResponse($responseContent)
    {
        return ObjectSerializer::deserialize($responseContent, '\SplFileObject', []);
    }
}
