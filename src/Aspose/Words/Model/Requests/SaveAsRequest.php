<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SaveAsRequest.php">
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
use Aspose\Words\Model\Response\SaveAsResponse;
use phpseclib3\Crypt\RSA;

/*
 * Request model for saveAs operation.
 */
class SaveAsRequest extends BaseApiRequest
{
    /*
     * The filename of the input document.
     */
    public $name;

    /*
     * Save options.
     */
    public $save_options_data;

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
     * Password of protected Word document. Use the parameter to pass a password via SDK. SDK encrypts it automatically. We don't recommend to use the parameter to pass a plain password for direct call of API.
     */
    public $password;

    /*
     * Password of protected Word document. Use the parameter to pass an encrypted password for direct calls of API. See SDK code for encyption details.
     */
    public $encrypted_password;

    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;

    /*
     * Initializes a new instance of the SaveAsRequest class.
     *
     * @param string $name The filename of the input document.
     * @param \Aspose\Words\Model\SaveOptionsData $save_options_data Save options.
     * @param string $folder Original document folder.
     * @param string $storage Original document storage.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password of protected Word document. Use the parameter to pass a password via SDK. SDK encrypts it automatically. We don't recommend to use the parameter to pass a plain password for direct call of API.
     * @param string $encrypted_password Password of protected Word document. Use the parameter to pass an encrypted password for direct calls of API. See SDK code for encyption details.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     */
    public function __construct($name, $save_options_data, $folder = null, $storage = null, $load_encoding = null, $password = null, $encrypted_password = null, $fonts_location = null)
    {
        $this->name = $name;
        $this->save_options_data = $save_options_data;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->encrypted_password = $encrypted_password;
        $this->fonts_location = $fonts_location;
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
     * Save options.
     */
    public function get_save_options_data()
    {
        return $this->save_options_data;
    }

    /*
     * Save options.
     */
    public function set_save_options_data($value)
    {
        $this->save_options_data = $value;
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
     * Create request data for operation 'saveAs'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequestData($config)
    {
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling saveAs');
        }
        if ($this->save_options_data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $save_options_data when calling saveAs');
        }

        $resourcePath = '/words/{name}/saveAs';
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
        if ($this->fonts_location !== null) {
            $localName = lcfirst('FontsLocation');
            $localValue = is_bool($this->fonts_location) ? ($this->fonts_location ? 'true' : 'false') : $this->fonts_location;
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
        if (isset($this->save_options_data)) {
            if (is_string($this->save_options_data)) {
                $_tempBody = ['content' => "\"" . $this->save_options_data . "\"", 'mime' => 'application/json'];
            } else {
                $_tempBody = ['content' => $this->save_options_data, 'mime' => 'application/json'];
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
        $result['method'] = 'PUT';
        $result['url'] = $resourcePath;
        $result['headers'] = $headerParams;
        $result['body'] = $httpBody;
        return $result;
    }

    /*
     * Create request for operation 'saveAs'
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
        return '\Aspose\Words\Model\SaveResponse';
    }

    public function deserializeResponse($responseContent)
    {
        return ObjectSerializer::deserialize($responseContent, '\Aspose\Words\Model\SaveResponse', []);
    }
}
