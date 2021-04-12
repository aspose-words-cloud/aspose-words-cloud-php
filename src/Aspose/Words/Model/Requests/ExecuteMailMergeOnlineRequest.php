<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExecuteMailMergeOnlineRequest.php">
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
use Aspose\Words\Model\Response\ExecuteMailMergeOnlineResponse;

/*
 * Request model for executeMailMergeOnline operation.
 */
class ExecuteMailMergeOnlineRequest
{
    /*
     * File with template.
     */
    public $template;

    /*
     * File with mailmerge data.
     */
    public $data;

    /*
     * The flag indicating whether to execute Mail Merge operation with regions.
     */
    public $with_regions;

    /*
     * The cleanup options.
     */
    public $cleanup;

    /*
     * The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "template" will be used instead.
     */
    public $document_file_name;

    /*
     * Initializes a new instance of the ExecuteMailMergeOnlineRequest class.
     *
     * @param \SplFileObject $template File with template.
     * @param \SplFileObject $data File with mailmerge data.
     * @param bool $with_regions The flag indicating whether to execute Mail Merge operation with regions.
     * @param string $cleanup The cleanup options.
     * @param string $document_file_name The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "template" will be used instead.
     */
    public function __construct($template, $data, $with_regions = null, $cleanup = null, $document_file_name = null)
    {
        $this->template = $template;
        $this->data = $data;
        $this->with_regions = $with_regions;
        $this->cleanup = $cleanup;
        $this->document_file_name = $document_file_name;
    }

    /*
     * File with template.
     */
    public function get_template()
    {
        return $this->template;
    }

    /*
     * File with template.
     */
    public function set_template($value)
    {
        $this->template = $value;
        return $this;
    }

    /*
     * File with mailmerge data.
     */
    public function get_data()
    {
        return $this->data;
    }

    /*
     * File with mailmerge data.
     */
    public function set_data($value)
    {
        $this->data = $value;
        return $this;
    }

    /*
     * The flag indicating whether to execute Mail Merge operation with regions.
     */
    public function get_with_regions()
    {
        return $this->with_regions;
    }

    /*
     * The flag indicating whether to execute Mail Merge operation with regions.
     */
    public function set_with_regions($value)
    {
        $this->with_regions = $value;
        return $this;
    }

    /*
     * The cleanup options.
     */
    public function get_cleanup()
    {
        return $this->cleanup;
    }

    /*
     * The cleanup options.
     */
    public function set_cleanup($value)
    {
        $this->cleanup = $value;
        return $this;
    }

    /*
     * The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "template" will be used instead.
     */
    public function get_document_file_name()
    {
        return $this->document_file_name;
    }

    /*
     * The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "template" will be used instead.
     */
    public function set_document_file_name($value)
    {
        $this->document_file_name = $value;
        return $this;
    }

    /*
     * Create request data for operation 'executeMailMergeOnline'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequestData($config)
    {
        if ($this->template === null) {
            throw new \InvalidArgumentException('Missing the required parameter $template when calling executeMailMergeOnline');
        }
        if ($this->data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling executeMailMergeOnline');
        }

        $resourcePath = '/words/MailMerge';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $filename = null;

        // remove empty path parameters
        $resourcePath = str_replace("//", "/", $resourcePath);
        // query params
        if ($this->with_regions !== null) {
            $localName = lcfirst('WithRegions');
            $localValue = is_bool($this->with_regions) ? ($this->with_regions ? 'true' : 'false') : $this->with_regions;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->cleanup !== null) {
            $localName = lcfirst('Cleanup');
            $localValue = is_bool($this->cleanup) ? ($this->cleanup ? 'true' : 'false') : $this->cleanup;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->document_file_name !== null) {
            $localName = lcfirst('DocumentFileName');
            $localValue = is_bool($this->document_file_name) ? ($this->document_file_name ? 'true' : 'false') : $this->document_file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }

        $resourcePath = ObjectSerializer::parseURL($config, $resourcePath, $queryParams);
        // form params
        if ($this->template !== null) {
            $multipart = true; 
            $filename = ObjectSerializer::toFormValue($this->template);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['template'] = ['content' => $contents, 'mime' => 'application/octet-stream'];
        }
        // form params
        if ($this->data !== null) {
            $multipart = true; 
            $filename = ObjectSerializer::toFormValue($this->data);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['data'] = ['content' => $contents, 'mime' => 'application/octet-stream'];
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
     * Create request for operation 'executeMailMergeOnline'
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
