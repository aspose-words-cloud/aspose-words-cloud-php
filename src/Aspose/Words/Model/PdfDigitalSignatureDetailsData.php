<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PdfDigitalSignatureDetailsData.php">
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
 * PdfDigitalSignatureDetailsData
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * PdfDigitalSignatureDetailsData
 *
 * @description container class for details of digital signature.
 */
class PdfDigitalSignatureDetailsData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfDigitalSignatureDetailsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'certificate_filename' => 'string',
        'hash_algorithm' => 'string',
        'location' => 'string',
        'reason' => 'string',
        'signature_date' => '\DateTime'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'certificate_filename' => null,
        'hash_algorithm' => null,
        'location' => null,
        'reason' => null,
        'signature_date' => 'date-time'
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
        'certificate_filename' => 'CertificateFilename',
        'hash_algorithm' => 'HashAlgorithm',
        'location' => 'Location',
        'reason' => 'Reason',
        'signature_date' => 'SignatureDate'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificate_filename' => 'setCertificateFilename',
        'hash_algorithm' => 'setHashAlgorithm',
        'location' => 'setLocation',
        'reason' => 'setReason',
        'signature_date' => 'setSignatureDate'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificate_filename' => 'getCertificateFilename',
        'hash_algorithm' => 'getHashAlgorithm',
        'location' => 'getLocation',
        'reason' => 'getReason',
        'signature_date' => 'getSignatureDate'
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
        $this->container['certificate_filename'] = isset($data['certificate_filename']) ? $data['certificate_filename'] : null;
        $this->container['hash_algorithm'] = isset($data['hash_algorithm']) ? $data['hash_algorithm'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['signature_date'] = isset($data['signature_date']) ? $data['signature_date'] : null;
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
     * Gets certificate_filename
     *
     * @return string
     */
    public function getCertificateFilename()
    {
        return $this->container['certificate_filename'];
    }

    /*
     * Sets certificate_filename
     *
     * @param string $certificate_filename Gets or sets certificate's filename using for signing.
     *
     * @return $this
     */
    public function setCertificateFilename($certificate_filename)
    {
        $this->container['certificate_filename'] = $certificate_filename;

        return $this;
    }

    /*
     * Gets hash_algorithm
     *
     * @return string
     */
    public function getHashAlgorithm()
    {
        return $this->container['hash_algorithm'];
    }

    /*
     * Sets hash_algorithm
     *
     * @param string $hash_algorithm Gets or sets hash algorithm.
     *
     * @return $this
     */
    public function setHashAlgorithm($hash_algorithm)
    {
        $this->container['hash_algorithm'] = $hash_algorithm;

        return $this;
    }

    /*
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /*
     * Sets location
     *
     * @param string $location Gets or sets location of the signing.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /*
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /*
     * Sets reason
     *
     * @param string $reason Gets or sets reason for the signing.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /*
     * Gets signature_date
     *
     * @return \DateTime
     */
    public function getSignatureDate()
    {
        return $this->container['signature_date'];
    }

    /*
     * Sets signature_date
     *
     * @param \DateTime $signature_date Gets or sets date of the signing.
     *
     * @return $this
     */
    public function setSignatureDate($signature_date)
    {
        $this->container['signature_date'] = $signature_date;

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
