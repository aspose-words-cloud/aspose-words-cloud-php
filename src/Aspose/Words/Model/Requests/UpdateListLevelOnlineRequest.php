<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UpdateListLevelOnlineRequest.php">
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
use Aspose\Words\Model\Response\UpdateListLevelOnlineResponse;
use phpseclib3\Crypt\RSA;

/*
 * Request model for updateListLevelOnline operation.
 */
class UpdateListLevelOnlineRequest extends BaseApiRequest
{
    /*
     * The document.
     */
    public $document;

    /*
     * The list Id.
     */
    public $list_id;

    /*
     * List object.
     */
    public $list_update;

    /*
     * The list level.
     */
    public $list_level;

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;

    /*
     * Password of protected Word document. Use the parameter to pass a password via SDK. SDK encrypts it automatically. We don't recommend to use the parameter to pass a plain password for direct call of API.
     */
    public $password;

    /*
     * Password of protected Word document. Use the parameter to pass an encrypted password for direct calls of API. See SDK code for encyption details.
     */
    public $encrypted_password;

    /*
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $dest_file_name;

    /*
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public $revision_author;

    /*
     * The date and time to use for revisions.
     */
    public $revision_date_time;

    /*
     * Initializes a new instance of the UpdateListLevelOnlineRequest class.
     *
     * @param \SplFileObject $document The document.
     * @param int $list_id The list Id.
     * @param \Aspose\Words\Model\ListLevelUpdate $list_update List object.
     * @param int $list_level The list level.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password of protected Word document. Use the parameter to pass a password via SDK. SDK encrypts it automatically. We don't recommend to use the parameter to pass a plain password for direct call of API.
     * @param string $encrypted_password Password of protected Word document. Use the parameter to pass an encrypted password for direct calls of API. See SDK code for encyption details.
     * @param string $dest_file_name Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param string $revision_author Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     * @param string $revision_date_time The date and time to use for revisions.
     */
    public function __construct($document, $list_id, $list_update, $list_level, $load_encoding = null, $password = null, $encrypted_password = null, $dest_file_name = null, $revision_author = null, $revision_date_time = null)
    {
        $this->document = $document;
        $this->list_id = $list_id;
        $this->list_update = $list_update;
        $this->list_level = $list_level;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->encrypted_password = $encrypted_password;
        $this->dest_file_name = $dest_file_name;
        $this->revision_author = $revision_author;
        $this->revision_date_time = $revision_date_time;
    }

    /*
     * The document.
     */
    public function get_document()
    {
        return $this->document;
    }

    /*
     * The document.
     */
    public function set_document($value)
    {
        $this->document = $value;
        return $this;
    }

    /*
     * The list Id.
     */
    public function get_list_id()
    {
        return $this->list_id;
    }

    /*
     * The list Id.
     */
    public function set_list_id($value)
    {
        $this->list_id = $value;
        return $this;
    }

    /*
     * List object.
     */
    public function get_list_update()
    {
        return $this->list_update;
    }

    /*
     * List object.
     */
    public function set_list_update($value)
    {
        $this->list_update = $value;
        return $this;
    }

    /*
     * The list level.
     */
    public function get_list_level()
    {
        return $this->list_level;
    }

    /*
     * The list level.
     */
    public function set_list_level($value)
    {
        $this->list_level = $value;
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
     * Password of protected Word document. Use the parameter to pass a password via SDK. SDK encrypts it automatically. We don't recommend to use the parameter to pass a plain password for direct call of API.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * Password of protected Word document. Use the parameter to pass a password via SDK. SDK encrypts it automatically. We don't recommend to use the parameter to pass a plain password for direct call of API.
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }

    /*
     * Password of protected Word document. Use the parameter to pass an encrypted password for direct calls of API. See SDK code for encyption details.
     */
    public function get_encrypted_password()
    {
        return $this->encrypted_password;
    }

    /*
     * Password of protected Word document. Use the parameter to pass an encrypted password for direct calls of API. See SDK code for encyption details.
     */
    public function set_encrypted_password($value)
    {
        $this->encrypted_password = $value;
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
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public function get_revision_author()
    {
        return $this->revision_author;
    }

    /*
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public function set_revision_author($value)
    {
        $this->revision_author = $value;
        return $this;
    }

    /*
     * The date and time to use for revisions.
     */
    public function get_revision_date_time()
    {
        return $this->revision_date_time;
    }

    /*
     * The date and time to use for revisions.
     */
    public function set_revision_date_time($value)
    {
        $this->revision_date_time = $value;
        return $this;
    }

    /*
     * Create request data for operation 'updateListLevelOnline'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequestData($config)
    {
        if ($this->document === null) {
            throw new \InvalidArgumentException('Missing the required parameter $document when calling updateListLevelOnline');
        }
        if ($this->list_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_id when calling updateListLevelOnline');
        }
        if ($this->list_update === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_update when calling updateListLevelOnline');
        }
        if ($this->list_level === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_level when calling updateListLevelOnline');
        }

        $resourcePath = '/words/online/put/lists/{listId}/listLevels/{listLevel}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $filename = null;
        // path params
        if ($this->list_id !== null) {
            $localName = lcfirst('ListId');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->list_id), $resourcePath);
        }
        else {
            $localName = lcfirst('ListId');
            $resourcePath = str_replace('{' . $localName . '}', '', $resourcePath);
        }
        // path params
        if ($this->list_level !== null) {
            $localName = lcfirst('ListLevel');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->list_level), $resourcePath);
        }
        else {
            $localName = lcfirst('ListLevel');
            $resourcePath = str_replace('{' . $localName . '}', '', $resourcePath);
        }

        // remove empty path parameters
        $resourcePath = str_replace("//", "/", $resourcePath);
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
        if ($this->encrypted_password !== null) {
            $localName = lcfirst('EncryptedPassword');
            $localValue = is_bool($this->encrypted_password) ? ($this->encrypted_password ? 'true' : 'false') : $this->encrypted_password;
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
        // query params
        if ($this->revision_author !== null) {
            $localName = lcfirst('RevisionAuthor');
            $localValue = is_bool($this->revision_author) ? ($this->revision_author ? 'true' : 'false') : $this->revision_author;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->revision_date_time !== null) {
            $localName = lcfirst('RevisionDateTime');
            $localValue = is_bool($this->revision_date_time) ? ($this->revision_date_time ? 'true' : 'false') : $this->revision_date_time;
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
        // form params
        if ($this->document !== null) {
            $multipart = true; 
            $filename = ObjectSerializer::toFormValue($this->document);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['document'] = ['content' => $contents, 'mime' => 'application/octet-stream'];
        }
        // form params
        if ($this->list_update !== null) {
            $multipart = true; 
            $formParams['list_update'] = ['content' => ObjectSerializer::toFormValue($this->list_update), 'mime' => 'application/json'];
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
     * Create request for operation 'updateListLevelOnline'
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
        return 'UpdateListLevelOnlineResponse';
    }

    public function deserializeResponse($responseContent)
    {
        $multipart = ObjectSerializer::parseMultipart($responseContent);
        return new UpdateListLevelOnlineResponse(
          ObjectSerializer::deserialize(json_decode($multipart[0]['body']), '\Aspose\Words\Model\ListResponse', []),
          ObjectSerializer::deserialize($multipart[1]['body'], '\SplFileObject', []));
    }
}
