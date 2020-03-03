<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PdfEncryptionDetailsData.php">
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
/*
 * PdfEncryptionDetailsData
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * PdfEncryptionDetailsData
 *
 * @description container class for details of encryption.
 */
class PdfEncryptionDetailsData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfEncryptionDetailsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'encryption_algorithm' => 'string',
        'owner_password' => 'string',
        'permissions' => 'string',
        'user_password' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'encryption_algorithm' => null,
        'owner_password' => null,
        'permissions' => null,
        'user_password' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'encryption_algorithm' => 'EncryptionAlgorithm',
        'owner_password' => 'OwnerPassword',
        'permissions' => 'Permissions',
        'user_password' => 'UserPassword'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encryption_algorithm' => 'setEncryptionAlgorithm',
        'owner_password' => 'setOwnerPassword',
        'permissions' => 'setPermissions',
        'user_password' => 'setUserPassword'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encryption_algorithm' => 'getEncryptionAlgorithm',
        'owner_password' => 'getOwnerPassword',
        'permissions' => 'getPermissions',
        'user_password' => 'getUserPassword'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['encryption_algorithm'] = isset($data['encryption_algorithm']) ? $data['encryption_algorithm'] : null;
        $this->container['owner_password'] = isset($data['owner_password']) ? $data['owner_password'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['user_password'] = isset($data['user_password']) ? $data['user_password'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /*
     * Gets encryption_algorithm
     *
     * @return string
     */
    public function getEncryptionAlgorithm()
    {
        return $this->container['encryption_algorithm'];
    }

    /*
     * Sets encryption_algorithm
     *
     * @param string $encryption_algorithm Gets or sets specifies the encryption algorithm to use.
     *
     * @return $this
     */
    public function setEncryptionAlgorithm($encryption_algorithm)
    {
        $this->container['encryption_algorithm'] = $encryption_algorithm;

        return $this;
    }

    /*
     * Gets owner_password
     *
     * @return string
     */
    public function getOwnerPassword()
    {
        return $this->container['owner_password'];
    }

    /*
     * Sets owner_password
     *
     * @param string $owner_password Gets or sets specifies the owner password for the encrypted PDF document.
     *
     * @return $this
     */
    public function setOwnerPassword($owner_password)
    {
        $this->container['owner_password'] = $owner_password;

        return $this;
    }

    /*
     * Gets permissions
     *
     * @return string
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /*
     * Sets permissions
     *
     * @param string $permissions Gets or sets specifies the operations that are allowed to a user on an encrypted PDF document.
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /*
     * Gets user_password
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->container['user_password'];
    }

    /*
     * Sets user_password
     *
     * @param string $user_password Gets or sets specifies the user password required for opening the encrypted PDF document.
     *
     * @return $this
     */
    public function setUserPassword($user_password)
    {
        $this->container['user_password'] = $user_password;

        return $this;
    }
    /*
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /*
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /*
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /*
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
