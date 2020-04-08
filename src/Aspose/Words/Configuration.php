<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Configuration.php">
 *   Copyright (c) 2019 Aspose.Words for Cloud
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
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Words;

/*
 * Represents a set of configuration settings
 */
class Configuration
{
    private static $_defaultConfiguration;

    /*
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];
    
    /*
     * AppKey for API
     *
     */
    protected $appKey = '';
    
    /*
     * AppSid for API
     * @var string
     */
    protected $appSid = '';

    /*
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /*
     * Access token for OAuth
     *
     * @var string
     */
    protected $accessToken = '';
    
    /*
     * Refresh token for OAuth
     *
     * @var string
     */
    protected $refreshToken = '';

    /*
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /*
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /*
     * The host
     *
     * @var string
     */
    protected $host = 'https://api.aspose.cloud';
	
    /*
     * Version of API to use, possible values are v4.0
     * @var string
     */
    protected $base_path = "v4.0";

    /*
     * User agent of the HTTP request, set to "PHP-Swagger" by default
     *
     * @var string
     */
    protected $userAgent = "php sdk";

    /*
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /*
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /*
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;
    
    /*
     * Version of Aspose.Words Cloud API
     *
     */
    protected $clientVersion = '20.4';

    /*
     * Constructor
	 * @param string   $appSid client app sid
     * @param string   $appKey app key
     * @param string   $baseUrl base url for requests
     */
    public function __construct(string $appSid, string $appKey, string $baseUrl)
    {
        $this->tempFolderPath = sys_get_temp_dir();
        date_default_timezone_set('UTC');
		if (isset($baseUrl) && trim($baseUrl) != '') {
            $this->setHost($baseUrl);
		}
		$this->setAppSid($appSid);
		$this->setAppKey($appKey);
    }
    
    /*
     * Gets client version
     *
     */
    public function getClientVersion()
    {
        return $this->clientVersion;
    }

    /*
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }
    
    /*
     * Sets AppSid
     *
     * @param string $appSid
     *
     * @return $this
     */
    public function setAppSid($appSid)
    {
        $this->appSid = $appSid;
        return $this;
    }
    
    /*
     * Gets AppSid
     * @return $appSid
     */
    public function getAppSid()
    {
        return $this->appSid;
    }
    
    /*
     * Sets AppKey
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        return $this;
    }
    
    /*
     * Gets AppKey
     * @return $appKey
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /*
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /*
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /*
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /*
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /*
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }
    
    /*
     * Sets the refresh token for OAuth
     *
     * @param string $refreshToken Token for OAuth
     *
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    /*
     * Gets the refresh token for OAuth
     *
     * @return string refresh token for OAuth
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /*
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /*
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /*
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /*
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /*
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        if (substr($this->host, -1) !== '/') {
            $this->host = $this->host . '/';
        }
        return $this;
    }

    /*
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }
	
    /*
     * Gets the base_path
     *
     * @return string base_path
     */
    public function getBasePath()
    {
        return $this->base_path;
    }

    /*
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /*
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /*
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /*
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /*
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /*
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /*
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /*
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /*
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$_defaultConfiguration === null) {
            self::$_defaultConfiguration = new Configuration('', '', '');
        }

        return self::$_defaultConfiguration;
    }

    /*
     * Sets the detault configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$_defaultConfiguration = $config;
    }

    /*
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Aspose\Words) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 20.3.0' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /*
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }
}
