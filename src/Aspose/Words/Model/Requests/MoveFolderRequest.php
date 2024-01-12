<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MoveFolderRequest.php">
 *   Copyright (c) 2024 Aspose.Words for Cloud
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
use Aspose\Words\Model\Response\MoveFolderResponse;
use Aspose\Words\Encryptor;

/*
 * Request model for moveFolder operation.
 */
class MoveFolderRequest extends BaseApiRequest
{
    /*
     * Destination folder path to move to e.g '/dst'.
     */
    public $dest_path;

    /*
     * Source folder path e.g. /Folder1.
     */
    public $src_path;

    /*
     * Source storage name.
     */
    public $src_storage_name;

    /*
     * Destination storage name.
     */
    public $dest_storage_name;

    /*
     * Initializes a new instance of the MoveFolderRequest class.
     *
     * @param string $dest_path Destination folder path to move to e.g '/dst'.
     * @param string $src_path Source folder path e.g. /Folder1.
     * @param string $src_storage_name Source storage name.
     * @param string $dest_storage_name Destination storage name.
     */
    public function __construct($dest_path, $src_path, $src_storage_name = null, $dest_storage_name = null)
    {
        $this->dest_path = $dest_path;
        $this->src_path = $src_path;
        $this->src_storage_name = $src_storage_name;
        $this->dest_storage_name = $dest_storage_name;
    }

    /*
     * Destination folder path to move to e.g '/dst'.
     */
    public function get_dest_path()
    {
        return $this->dest_path;
    }

    /*
     * Destination folder path to move to e.g '/dst'.
     */
    public function set_dest_path($value)
    {
        $this->dest_path = $value;
        return $this;
    }

    /*
     * Source folder path e.g. /Folder1.
     */
    public function get_src_path()
    {
        return $this->src_path;
    }

    /*
     * Source folder path e.g. /Folder1.
     */
    public function set_src_path($value)
    {
        $this->src_path = $value;
        return $this;
    }

    /*
     * Source storage name.
     */
    public function get_src_storage_name()
    {
        return $this->src_storage_name;
    }

    /*
     * Source storage name.
     */
    public function set_src_storage_name($value)
    {
        $this->src_storage_name = $value;
        return $this;
    }

    /*
     * Destination storage name.
     */
    public function get_dest_storage_name()
    {
        return $this->dest_storage_name;
    }

    /*
     * Destination storage name.
     */
    public function set_dest_storage_name($value)
    {
        $this->dest_storage_name = $value;
        return $this;
    }

    /*
     * Create request data for operation 'moveFolder'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequestData($config)
    {
        if ($this->dest_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dest_path when calling moveFolder');
        }
        if ($this->src_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $src_path when calling moveFolder');
        }

        $resourcePath = '/words/storage/folder/move/{srcPath}';
        $formParams = [];
        $filesContent = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $filename = null;
        // path params
        if ($this->src_path !== null) {
            $localName = lcfirst('SrcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->src_path), $resourcePath);
        }
        else {
            $localName = lcfirst('SrcPath');
            $resourcePath = str_replace('{' . $localName . '}', '', $resourcePath);
        }

        // remove empty path parameters
        $resourcePath = str_replace("//", "/", $resourcePath);
        // query params
        if ($this->dest_path !== null) {
            $localName = lcfirst('DestPath');
            $localValue = is_bool($this->dest_path) ? ($this->dest_path ? 'true' : 'false') : $this->dest_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->src_storage_name !== null) {
            $localName = lcfirst('SrcStorageName');
            $localValue = is_bool($this->src_storage_name) ? ($this->src_storage_name ? 'true' : 'false') : $this->src_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->dest_storage_name !== null) {
            $localName = lcfirst('DestStorageName');
            $localValue = is_bool($this->dest_storage_name) ? ($this->dest_storage_name ? 'true' : 'false') : $this->dest_storage_name;
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
     * Create request for operation 'moveFolder'
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
        return NULL;
    }

    public function deserializeResponse($response)
    {
        return NULL;
    }
}
