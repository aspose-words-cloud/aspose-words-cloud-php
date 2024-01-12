<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ProtectionData.php">
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
 * ProtectionData
 *
 * @description Container for the data about protection of the document.
 */
class ProtectionData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ProtectionData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'protection_type' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'protection_type' => 'null'
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
        'protection_type' => 'ProtectionType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'protection_type' => 'setProtectionType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'protection_type' => 'getProtectionType'
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

    const PROTECTION_TYPE_ALLOW_ONLY_REVISIONS = 'AllowOnlyRevisions';
    const PROTECTION_TYPE_ALLOW_ONLY_COMMENTS = 'AllowOnlyComments';
    const PROTECTION_TYPE_ALLOW_ONLY_FORM_FIELDS = 'AllowOnlyFormFields';
    const PROTECTION_TYPE_READ_ONLY = 'ReadOnly';
    const PROTECTION_TYPE_NO_PROTECTION = 'NoProtection';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtectionTypeAllowableValues()
    {
        return [
            self::PROTECTION_TYPE_ALLOW_ONLY_REVISIONS,
            self::PROTECTION_TYPE_ALLOW_ONLY_COMMENTS,
            self::PROTECTION_TYPE_ALLOW_ONLY_FORM_FIELDS,
            self::PROTECTION_TYPE_READ_ONLY,
            self::PROTECTION_TYPE_NO_PROTECTION
        ];
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
        $this->container['protection_type'] = isset($data['protection_type']) ? $data['protection_type'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (isset($this->container['protection_type'])) {
            $allowedValuesProtectionType = $this->getProtectionTypeAllowableValues();
            if (!in_array($this->container['protection_type'], $allowedValuesProtectionType)) {
                throw new \InvalidArgumentException('Property ProtectionType in ProtectionData has invalid format.');
            }
        }
        if (!isset($this->container['protection_type'])) {
            throw new \InvalidArgumentException('Property ProtectionType in ProtectionData is required.');
        }

    }

    /*
     * Gets protection_type
     *
     * @return string
     */
    public function getProtectionType()
    {
        return $this->container['protection_type'];
    }

    /*
     * Sets protection_type
     *
     * @param string $protection_type Gets or sets type of the protection.
     *
     * @return $this
     */
    public function setProtectionType($protection_type)
    {
        $allowedValues = $this->getProtectionTypeAllowableValues();
        if ((!is_numeric($protection_type) && !in_array($protection_type, $allowedValues)) || (is_numeric($protection_type) && !in_array($allowedValues[$protection_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'protection_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['protection_type'] = $protection_type;
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

