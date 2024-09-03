<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SignOptions.php">
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

namespace Aspose\Words\Model;
use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * SignOptions
 *
 * @description Container class for digital signature options.
 */
class SignOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SignOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'comments' => 'string',
        'decryption_password' => 'string',
        'provider_id' => 'string',
        'signature_line_id' => 'string',
        'signature_line_image_filename' => 'string',
        'sign_time' => '\DateTime'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'comments' => 'null',
        'decryption_password' => 'null',
        'provider_id' => 'null',
        'signature_line_id' => 'null',
        'signature_line_image_filename' => 'null',
        'sign_time' => 'null'
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
        'comments' => 'Comments',
        'decryption_password' => 'DecryptionPassword',
        'provider_id' => 'ProviderId',
        'signature_line_id' => 'SignatureLineId',
        'signature_line_image_filename' => 'SignatureLineImageFilename',
        'sign_time' => 'SignTime'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comments' => 'setComments',
        'decryption_password' => 'setDecryptionPassword',
        'provider_id' => 'setProviderId',
        'signature_line_id' => 'setSignatureLineId',
        'signature_line_image_filename' => 'setSignatureLineImageFilename',
        'sign_time' => 'setSignTime'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comments' => 'getComments',
        'decryption_password' => 'getDecryptionPassword',
        'provider_id' => 'getProviderId',
        'signature_line_id' => 'getSignatureLineId',
        'signature_line_image_filename' => 'getSignatureLineImageFilename',
        'sign_time' => 'getSignTime'
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
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['decryption_password'] = isset($data['decryption_password']) ? $data['decryption_password'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['signature_line_id'] = isset($data['signature_line_id']) ? $data['signature_line_id'] : null;
        $this->container['signature_line_image_filename'] = isset($data['signature_line_image_filename']) ? $data['signature_line_image_filename'] : null;
        $this->container['sign_time'] = isset($data['sign_time']) ? $data['sign_time'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
    }

    /*
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /*
     * Sets comments
     *
     * @param string $comments Gets or sets comments on the digital signature. Default value is empty string.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
        return $this;
    }


    /*
     * Gets decryption_password
     *
     * @return string
     */
    public function getDecryptionPassword()
    {
        return $this->container['decryption_password'];
    }

    /*
     * Sets decryption_password
     *
     * @param string $decryption_password Gets or sets the password to decrypt source document. Default value is empty string.
     *
     * @return $this
     */
    public function setDecryptionPassword($decryption_password)
    {
        $this->container['decryption_password'] = $decryption_password;
        return $this;
    }


    /*
     * Gets provider_id
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /*
     * Sets provider_id
     *
     * @param string $provider_id Gets or sets the class Guid of the signature cryptography provider. Default value is Empty (all zeroes) Guid.
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;
        return $this;
    }


    /*
     * Gets signature_line_id
     *
     * @return string
     */
    public function getSignatureLineId()
    {
        return $this->container['signature_line_id'];
    }

    /*
     * Sets signature_line_id
     *
     * @param string $signature_line_id Gets or sets user defined signature line Guid. Default value is Empty (all zeroes) Guid.
     *
     * @return $this
     */
    public function setSignatureLineId($signature_line_id)
    {
        $this->container['signature_line_id'] = $signature_line_id;
        return $this;
    }


    /*
     * Gets signature_line_image_filename
     *
     * @return string
     */
    public function getSignatureLineImageFilename()
    {
        return $this->container['signature_line_image_filename'];
    }

    /*
     * Sets signature_line_image_filename
     *
     * @param string $signature_line_image_filename Gets or sets the image that will be shown in associated SignatureLine. Default value is empty string.
     *
     * @return $this
     */
    public function setSignatureLineImageFilename($signature_line_image_filename)
    {
        $this->container['signature_line_image_filename'] = $signature_line_image_filename;
        return $this;
    }


    /*
     * Gets sign_time
     *
     * @return \DateTime
     */
    public function getSignTime()
    {
        return $this->container['sign_time'];
    }

    /*
     * Sets sign_time
     *
     * @param \DateTime $sign_time Gets or sets the date of signing. Default value is current time (Now).
     *
     * @return $this
     */
    public function setSignTime($sign_time)
    {
        $this->container['sign_time'] = $sign_time;
        return $this;
    }


    /*
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
	#[\ReturnTypeWillChange]
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
	#[\ReturnTypeWillChange]
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
	#[\ReturnTypeWillChange]
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
	#[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
     * Collect all FileReference variables to list
     */
    public function collectFilesContent($resultFilesContent)
    {
        return $resultFilesContent;
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

