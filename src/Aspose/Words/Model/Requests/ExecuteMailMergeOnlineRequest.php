<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExecuteMailMergeOnlineRequest.php">
 *   Copyright (c) 2025 Aspose.Words for Cloud
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
use Aspose\Words\Encryptor;

/*
 * Request model for executeMailMergeOnline operation.
 */
class ExecuteMailMergeOnlineRequest extends BaseApiRequest
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
     * Field options.
     */
    public $options;

    /*
     * The flag indicating whether to execute Mail Merge operation with regions.
     */
    public $with_regions;

    /*
     * The flag indicating whether fields in whole document are updated while executing of a mail merge with regions.
     */
    public $merge_whole_document;

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
     * @param \Aspose\Words\Model\FieldOptions $options Field options.
     * @param bool $with_regions The flag indicating whether to execute Mail Merge operation with regions.
     * @param bool $merge_whole_document The flag indicating whether fields in whole document are updated while executing of a mail merge with regions.
     * @param string $cleanup The cleanup options.
     * @param string $document_file_name The filename of the output document, that will be used when the resulting document has a dynamic field {filename}. If it is not set, the "template" will be used instead.
     */
    public function __construct($template, $data, $options = null, $with_regions = null, $merge_whole_document = null, $cleanup = null, $document_file_name = null)
    {
        $this->template = $template;
        $this->data = $data;
        $this->options = $options;
        $this->with_regions = $with_regions;
        $this->merge_whole_document = $merge_whole_document;
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
     * Field options.
     */
    public function get_options()
    {
        return $this->options;
    }

    /*
     * Field options.
     */
    public function set_options($value)
    {
        $this->options = $value;
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
     * The flag indicating whether fields in whole document are updated while executing of a mail merge with regions.
     */
    public function get_merge_whole_document()
    {
        return $this->merge_whole_document;
    }

    /*
     * The flag indicating whether fields in whole document are updated while executing of a mail merge with regions.
     */
    public function set_merge_whole_document($value)
    {
        $this->merge_whole_document = $value;
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
        if ($this->options !== null) {
            $this->options->validate();
        }


        $resourcePath = '/words/MailMerge';
        $formParams = [];
        $filesContent = [];
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
        if ($this->merge_whole_document !== null) {
            $localName = lcfirst('MergeWholeDocument');
            $localValue = is_bool($this->merge_whole_document) ? ($this->merge_whole_document ? 'true' : 'false') : $this->merge_whole_document;
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
        if (property_exists($this, 'password') && $this->password != null)
        {
            unset($queryParams['password']);
            $queryParams['encryptedPassword'] = $config->getEncryptor()->encrypt($this->password);
        }

        $resourcePath = ObjectSerializer::parseURL($config, $resourcePath, $queryParams);
        // form params
        if ($this->template !== null) {
            $filename = ObjectSerializer::toFormValue($this->template);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            array_push($formParams, ['name' => 'Template', 'content' => $contents, 'mime' => 'application/octet-stream']);
        }
        // form params
        if ($this->data !== null) {
            $filename = ObjectSerializer::toFormValue($this->data);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            array_push($formParams, ['name' => 'Data', 'content' => $contents, 'mime' => 'application/octet-stream']);
        }
        // form params
        if ($this->options !== null) {
            array_push($formParams, ['name' => 'Options', 'content' => ObjectSerializer::toFormValue($this->options), 'mime' => 'application/json']);
        }

        foreach ($filesContent as $fileContent)
        {
            $fileContent->encryptPassword($config->getEncryptor());
            if ($fileContent->getSource() == 'Request') {
                $filesContent_filename = ObjectSerializer::toFormValue($fileContent->getContent());
                $filesContent_handle = fopen($filesContent_filename, "rb");
                $filesContent_fsize = filesize($filesContent_filename);
                $filesContent_contents = fread($filesContent_handle, $filesContent_fsize);
                array_push($formParams, ['name' => $fileContent->getReference(), 'content' => $filesContent_contents, 'mime' => 'application/octet-stream']);
            }
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
            if ($_tempBody['mime'] == 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody['content']));
            } else {
                $httpBody = ObjectSerializer::sanitizeForSerialization($_tempBody['content']);
            }
        } elseif (count($formParams) > 1) {
            $multipartContents = [];
            foreach ($formParams as $formParam) {
                $multipartContents[] = [
                    'name' => $formParam['name'],
                    'contents' => $formParam['content'],
                    'headers' => ['Content-Type' => $formParam['mime']]
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

    public function deserializeResponse($response)
    {
        return ObjectSerializer::deserialize($response, '\SplFileObject', $response->getHeaders());
    }
}
