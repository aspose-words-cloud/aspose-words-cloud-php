<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="JsonDataLoadOptions.php">
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
 * JsonDataLoadOptions
 *
 * @description Represents options for parsing JSON data. An instance of this class can be passed into constructors of Aspose.Words.Reporting.JsonDataSource.
 */
class JsonDataLoadOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "JsonDataLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'always_generate_root_object' => 'bool',
        'exact_date_time_parse_formats' => 'string[]',
        'simple_value_parse_mode' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'always_generate_root_object' => 'null',
        'exact_date_time_parse_formats' => 'null',
        'simple_value_parse_mode' => 'null'
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
        'always_generate_root_object' => 'AlwaysGenerateRootObject',
        'exact_date_time_parse_formats' => 'ExactDateTimeParseFormats',
        'simple_value_parse_mode' => 'SimpleValueParseMode'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'always_generate_root_object' => 'setAlwaysGenerateRootObject',
        'exact_date_time_parse_formats' => 'setExactDateTimeParseFormats',
        'simple_value_parse_mode' => 'setSimpleValueParseMode'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'always_generate_root_object' => 'getAlwaysGenerateRootObject',
        'exact_date_time_parse_formats' => 'getExactDateTimeParseFormats',
        'simple_value_parse_mode' => 'getSimpleValueParseMode'
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

    const SIMPLE_VALUE_PARSE_MODE_LOOSE = 'Loose';
    const SIMPLE_VALUE_PARSE_MODE_STRICT = 'Strict';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSimpleValueParseModeAllowableValues()
    {
        return [
            self::SIMPLE_VALUE_PARSE_MODE_LOOSE,
            self::SIMPLE_VALUE_PARSE_MODE_STRICT
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
        $this->container['always_generate_root_object'] = isset($data['always_generate_root_object']) ? $data['always_generate_root_object'] : null;
        $this->container['exact_date_time_parse_formats'] = isset($data['exact_date_time_parse_formats']) ? $data['exact_date_time_parse_formats'] : null;
        $this->container['simple_value_parse_mode'] = isset($data['simple_value_parse_mode']) ? $data['simple_value_parse_mode'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (!isset($this->container['always_generate_root_object'])) {
            throw new \InvalidArgumentException('Property AlwaysGenerateRootObject in JsonDataLoadOptions is required.');
        }

        if (isset($this->container['simple_value_parse_mode'])) {
            $allowedValuesSimpleValueParseMode = $this->getSimpleValueParseModeAllowableValues();
            if (!in_array($this->container['simple_value_parse_mode'], $allowedValuesSimpleValueParseMode)) {
                throw new \InvalidArgumentException('Property SimpleValueParseMode in JsonDataLoadOptions has invalid format.');
            }
        }
        if (!isset($this->container['simple_value_parse_mode'])) {
            throw new \InvalidArgumentException('Property SimpleValueParseMode in JsonDataLoadOptions is required.');
        }

    }

    /*
     * Gets always_generate_root_object
     *
     * @return bool
     */
    public function getAlwaysGenerateRootObject()
    {
        return $this->container['always_generate_root_object'];
    }

    /*
     * Sets always_generate_root_object
     *
     * @param bool $always_generate_root_object Gets or sets a value indicating whether a generated data source will always contain an object for a JSON root element. If a JSON root element contains a single complex property, such an object is not created by default. The default value is false.
     *
     * @return $this
     */
    public function setAlwaysGenerateRootObject($always_generate_root_object)
    {
        $this->container['always_generate_root_object'] = $always_generate_root_object;
        return $this;
    }


    /*
     * Gets exact_date_time_parse_formats
     *
     * @return string[]
     */
    public function getExactDateTimeParseFormats()
    {
        return $this->container['exact_date_time_parse_formats'];
    }

    /*
     * Sets exact_date_time_parse_formats
     *
     * @param string[] $exact_date_time_parse_formats Gets or sets exact formats for parsing JSON date-time values while loading JSON. The default is null. Strings encoded using Microsoft® JSON date-time format (for example, "/Date(1224043200000)/") are always recognized as date-time values regardless of a value of this property. The property defines additional formats to be used while parsing date-time values from strings in the following way: • When Aspose.Words.Reporting.JsonDataLoadOptions.ExactDateTimeParseFormats is null, the ISO-8601 format and all date-time formats supported for the current, English USA, and English New Zealand cultures are used additionally in the mentioned order. • When Aspose.Words.Reporting.JsonDataLoadOptions.ExactDateTimeParseFormats contains strings, they are used as additional date-time formats utilizing the current culture. • When Aspose.Words.Reporting.JsonDataLoadOptions.ExactDateTimeParseFormats is empty, no additional date-time formats are used.
     *
     * @return $this
     */
    public function setExactDateTimeParseFormats($exact_date_time_parse_formats)
    {
        $this->container['exact_date_time_parse_formats'] = $exact_date_time_parse_formats;
        return $this;
    }


    /*
     * Gets simple_value_parse_mode
     *
     * @return string
     */
    public function getSimpleValueParseMode()
    {
        return $this->container['simple_value_parse_mode'];
    }

    /*
     * Sets simple_value_parse_mode
     *
     * @param string $simple_value_parse_mode Gets or sets a mode for parsing JSON simple values (null, boolean, number, integer, and string) while loading JSON. Such a mode does not affect parsing of date-time values. The default is Aspose.Words.Reporting.JsonSimpleValueParseMode.Loose.
     *
     * @return $this
     */
    public function setSimpleValueParseMode($simple_value_parse_mode)
    {
        $allowedValues = $this->getSimpleValueParseModeAllowableValues();
        if ((!is_numeric($simple_value_parse_mode) && !in_array($simple_value_parse_mode, $allowedValues)) || (is_numeric($simple_value_parse_mode) && !in_array($allowedValues[$simple_value_parse_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'simple_value_parse_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['simple_value_parse_mode'] = $simple_value_parse_mode;
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

