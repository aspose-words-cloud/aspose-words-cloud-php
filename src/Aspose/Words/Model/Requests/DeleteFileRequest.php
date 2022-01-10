<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteFileRequest.php">
 *   Copyright (c) 2022 Aspose.Words for Cloud
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
use Aspose\Words\Model\Response\DeleteFileResponse;
use phpseclib3\Crypt\RSA;

/*
 * Request model for deleteFile operation.
 */
class DeleteFileRequest extends BaseApiRequest
{
    /*
     * Path of the file including the file name and extension e.g. /folder1/file.ext.
     */
    public $path;

    /*
     * Storage name.
     */
    public $storage_name;

    /*
     * File version ID to delete.
     */
    public $version_id;

    /*
     * Initializes a new instance of the DeleteFileRequest class.
     *
     * @param string $path Path of the file including the file name and extension e.g. /folder1/file.ext.
     * @param string $storage_name Storage name.
     * @param string $version_id File version ID to delete.
     */
    public function __construct($path, $storage_name = null, $version_id = null)
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
        $this->version_id = $version_id;
    }

    /*
     * Path of the file including the file name and extension e.g. /folder1/file.ext.
     */
    public function get_path()
    {
        return $this->path;
    }

    /*
     * Path of the file including the file name and extension e.g. /folder1/file.ext.
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }

    /*
     * Storage name.
     */
    public function get_storage_name()
    {
        return $this->storage_name;
    }

    /*
     * Storage name.
     */
    public function set_storage_name($value)
    {
        $this->storage_name = $value;
        return $this;
    }

    /*
     * File version ID to delete.
     */
    public function get_version_id()
    {
        return $this->version_id;
    }

    /*
     * File version ID to delete.
     */
    public function set_version_id($value)
    {
        $this->version_id = $value;
        return $this;
    }

    /*
     * Create request data for operation 'deleteFile'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequestData($config)
    {
        if ($this->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteFile');
        }

        $resourcePath = '/words/storage/file/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $filename = null;
        // path params
        if ($this->path !== null) {
            $localName = lcfirst('Path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->path), $resourcePath);
        }
        else {
            $localName = lcfirst('Path');
            $resourcePath = str_replace('{' . $localName . '}', '', $resourcePath);
        }

        // remove empty path parameters
        $resourcePath = str_replace("//", "/", $resourcePath);
        // query params
        if ($this->storage_name !== null) {
            $localName = lcfirst('StorageName');
            $localValue = is_bool($this->storage_name) ? ($this->storage_name ? 'true' : 'false') : $this->storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->version_id !== null) {
            $localName = lcfirst('VersionId');
            $localValue = is_bool($this->version_id) ? ($this->version_id ? 'true' : 'false') : $this->version_id;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        if (property_exists($this, 'password') && $this->password != null)
        {
            unset($queryParams['password']);
            $pub = RSA::loadPublicKey($config->getRsaKey());
            $queryParams['encryptedPassword'] = base64_encode($pub->withPadding(RSA::ENCRYPTION_PKCS1)->encrypt($this->password));
        }

        $resourcePath = ObjectSerializer::parseURL($config, $resourcePath, $queryParams);

        // body params
        $_tempBody = null;
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
        $result['method'] = 'DELETE';
        $result['url'] = $resourcePath;
        $result['headers'] = $headerParams;
        $result['body'] = $httpBody;
        return $result;
    }

    /*
     * Create request for operation 'deleteFile'
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

    public function deserializeResponse($responseContent)
    {
        return NULL;
    }
}
