<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StyleInsert.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
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
 * StyleInsert
 *
 * @description Represents a single document style to insert.
 */
class StyleInsert implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "StyleInsert";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'style_name' => 'string',
        'style_type' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'style_name' => 'null',
        'style_type' => 'null'
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
        'style_name' => 'StyleName',
        'style_type' => 'StyleType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'style_name' => 'setStyleName',
        'style_type' => 'setStyleType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'style_name' => 'getStyleName',
        'style_type' => 'getStyleType'
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

    const STYLE_TYPE_PARAGRAPH = 'Paragraph';
    const STYLE_TYPE_CHARACTER = 'Character';
    const STYLE_TYPE_TABLE = 'Table';
    const STYLE_TYPE_LIST = 'List';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleTypeAllowableValues()
    {
        return [
            self::STYLE_TYPE_PARAGRAPH,
            self::STYLE_TYPE_CHARACTER,
            self::STYLE_TYPE_TABLE,
            self::STYLE_TYPE_LIST
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
        $this->container['style_name'] = isset($data['style_name']) ? $data['style_name'] : null;
        $this->container['style_type'] = isset($data['style_type']) ? $data['style_type'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStyleTypeAllowableValues();
        if (!in_array($this->container['style_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'style_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }


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
        $allowedValues = $this->getStyleTypeAllowableValues();
        if (!in_array($this->container['style_type'], $allowedValues)) {
            return false;
        }


        return true;
    }

    /*
     * Gets style_name
     *
     * @return string
     */
    public function getStyleName()
    {
        return $this->container['style_name'];
    }

    /*
     * Sets style_name
     *
     * @param string $style_name Gets or sets the case sensitive name of the style to create.
     *
     * @return $this
     */
    public function setStyleName($style_name)
    {
        $this->container['style_name'] = $style_name;
        return $this;
    }

    /*
     * Gets style_type
     *
     * @return string
     */
    public function getStyleType()
    {
        return $this->container['style_type'];
    }

    /*
     * Sets style_type
     *
     * @param string $style_type Gets or sets the StyleType value that specifies the type of the style to create.
     *
     * @return $this
     */
    public function setStyleType($style_type)
    {
        $allowedValues = $this->getStyleTypeAllowableValues();
        if ((!is_numeric($style_type) && !in_array($style_type, $allowedValues)) || (is_numeric($style_type) && !in_array($allowedValues[$style_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'style_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['style_type'] = $style_type;
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

