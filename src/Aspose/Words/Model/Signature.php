<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Signature.php">
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
 * Signature
 *
 * @description The REST response with a document signature collection. This response is returned by the Service when handling any "https://api.aspose.cloud/v4.0/words/Test.doc/signatures" REST API requests.
 */
class Signature implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Signature";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'comments' => 'string',
        'issuer_name' => 'string',
        'is_valid' => 'bool',
        'signature_type' => 'string',
        'signature_value' => 'string',
        'sign_time' => '\DateTime',
        'subject_name' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'comments' => 'null',
        'issuer_name' => 'null',
        'is_valid' => 'null',
        'signature_type' => 'null',
        'signature_value' => 'null',
        'sign_time' => 'null',
        'subject_name' => 'null'
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
        'issuer_name' => 'IssuerName',
        'is_valid' => 'IsValid',
        'signature_type' => 'SignatureType',
        'signature_value' => 'SignatureValue',
        'sign_time' => 'SignTime',
        'subject_name' => 'SubjectName'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comments' => 'setComments',
        'issuer_name' => 'setIssuerName',
        'is_valid' => 'setIsValid',
        'signature_type' => 'setSignatureType',
        'signature_value' => 'setSignatureValue',
        'sign_time' => 'setSignTime',
        'subject_name' => 'setSubjectName'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comments' => 'getComments',
        'issuer_name' => 'getIssuerName',
        'is_valid' => 'getIsValid',
        'signature_type' => 'getSignatureType',
        'signature_value' => 'getSignatureValue',
        'sign_time' => 'getSignTime',
        'subject_name' => 'getSubjectName'
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
        $this->container['issuer_name'] = isset($data['issuer_name']) ? $data['issuer_name'] : null;
        $this->container['is_valid'] = isset($data['is_valid']) ? $data['is_valid'] : null;
        $this->container['signature_type'] = isset($data['signature_type']) ? $data['signature_type'] : null;
        $this->container['signature_value'] = isset($data['signature_value']) ? $data['signature_value'] : null;
        $this->container['sign_time'] = isset($data['sign_time']) ? $data['sign_time'] : null;
        $this->container['subject_name'] = isset($data['subject_name']) ? $data['subject_name'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (!isset($this->container['is_valid'])) {
            throw new \InvalidArgumentException('Property IsValid in Signature is required.');
        }

        if (!isset($this->container['sign_time'])) {
            throw new \InvalidArgumentException('Property SignTime in Signature is required.');
        }

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
     * @param string $comments Gets or sets the signing purpose comment.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
        return $this;
    }


    /*
     * Gets issuer_name
     *
     * @return string
     */
    public function getIssuerName()
    {
        return $this->container['issuer_name'];
    }

    /*
     * Sets issuer_name
     *
     * @param string $issuer_name Gets or sets the subject distinguished name of the certificate isuuer.
     *
     * @return $this
     */
    public function setIssuerName($issuer_name)
    {
        $this->container['issuer_name'] = $issuer_name;
        return $this;
    }


    /*
     * Gets is_valid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /*
     * Sets is_valid
     *
     * @param bool $is_valid Gets or sets a value indicating whether this digital signature is valid.
     *
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;
        return $this;
    }


    /*
     * Gets signature_type
     *
     * @return string
     */
    public function getSignatureType()
    {
        return $this->container['signature_type'];
    }

    /*
     * Sets signature_type
     *
     * @param string $signature_type Gets or sets the type of the digital signature.
     *
     * @return $this
     */
    public function setSignatureType($signature_type)
    {
        $this->container['signature_type'] = $signature_type;
        return $this;
    }


    /*
     * Gets signature_value
     *
     * @return string
     */
    public function getSignatureValue()
    {
        return $this->container['signature_value'];
    }

    /*
     * Sets signature_value
     *
     * @param string $signature_value Gets or sets an array of bytes representing a signature value as base64 string.
     *
     * @return $this
     */
    public function setSignatureValue($signature_value)
    {
        $this->container['signature_value'] = $signature_value;
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
     * @param \DateTime $sign_time Gets or sets the time the document was signed.
     *
     * @return $this
     */
    public function setSignTime($sign_time)
    {
        $this->container['sign_time'] = $sign_time;
        return $this;
    }


    /*
     * Gets subject_name
     *
     * @return string
     */
    public function getSubjectName()
    {
        return $this->container['subject_name'];
    }

    /*
     * Sets subject_name
     *
     * @param string $subject_name Gets or sets the subject distinguished name of the certificate that was used to sign the document.
     *
     * @return $this
     */
    public function setSubjectName($subject_name)
    {
        $this->container['subject_name'] = $subject_name;
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

