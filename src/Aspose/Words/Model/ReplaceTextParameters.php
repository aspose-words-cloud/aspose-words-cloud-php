<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReplaceTextParameters.php">
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
 * ReplaceTextParameters
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * ReplaceTextParameters
 *
 * @description Class for document replace text request building.
 */
class ReplaceTextParameters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ReplaceTextParameters";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'old_value' => 'string',
        'new_value' => 'string',
        'is_match_case' => 'bool',
        'is_match_whole_word' => 'bool',
        'is_old_value_regex' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'old_value' => null,
        'new_value' => null,
        'is_match_case' => null,
        'is_match_whole_word' => null,
        'is_old_value_regex' => null
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
        'old_value' => 'OldValue',
        'new_value' => 'NewValue',
        'is_match_case' => 'IsMatchCase',
        'is_match_whole_word' => 'IsMatchWholeWord',
        'is_old_value_regex' => 'IsOldValueRegex'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'old_value' => 'setOldValue',
        'new_value' => 'setNewValue',
        'is_match_case' => 'setIsMatchCase',
        'is_match_whole_word' => 'setIsMatchWholeWord',
        'is_old_value_regex' => 'setIsOldValueRegex'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'old_value' => 'getOldValue',
        'new_value' => 'getNewValue',
        'is_match_case' => 'getIsMatchCase',
        'is_match_whole_word' => 'getIsMatchWholeWord',
        'is_old_value_regex' => 'getIsOldValueRegex'
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
        $this->container['old_value'] = isset($data['old_value']) ? $data['old_value'] : null;
        $this->container['new_value'] = isset($data['new_value']) ? $data['new_value'] : null;
        $this->container['is_match_case'] = isset($data['is_match_case']) ? $data['is_match_case'] : null;
        $this->container['is_match_whole_word'] = isset($data['is_match_whole_word']) ? $data['is_match_whole_word'] : null;
        $this->container['is_old_value_regex'] = isset($data['is_old_value_regex']) ? $data['is_old_value_regex'] : null;
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
     * Gets old_value
     *
     * @return string
     */
    public function getOldValue()
    {
        return $this->container['old_value'];
    }

    /*
     * Sets old_value
     *
     * @param string $old_value Gets or sets old text value (or regex pattern IsOldValueRegex) to replace.
     *
     * @return $this
     */
    public function setOldValue($old_value)
    {
        $this->container['old_value'] = $old_value;

        return $this;
    }

    /*
     * Gets new_value
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->container['new_value'];
    }

    /*
     * Sets new_value
     *
     * @param string $new_value Gets or sets new text value to replace by.
     *
     * @return $this
     */
    public function setNewValue($new_value)
    {
        $this->container['new_value'] = $new_value;

        return $this;
    }

    /*
     * Gets is_match_case
     *
     * @return bool
     */
    public function getIsMatchCase()
    {
        return $this->container['is_match_case'];
    }

    /*
     * Sets is_match_case
     *
     * @param bool $is_match_case Gets or sets a value indicating whether flag, true means the search is case-sensitive; false means the search is not case-sensitive.
     *
     * @return $this
     */
    public function setIsMatchCase($is_match_case)
    {
        $this->container['is_match_case'] = $is_match_case;

        return $this;
    }

    /*
     * Gets is_match_whole_word
     *
     * @return bool
     */
    public function getIsMatchWholeWord()
    {
        return $this->container['is_match_whole_word'];
    }

    /*
     * Sets is_match_whole_word
     *
     * @param bool $is_match_whole_word Gets or sets a value indicating whether flag, means that only whole word matched are replaced.
     *
     * @return $this
     */
    public function setIsMatchWholeWord($is_match_whole_word)
    {
        $this->container['is_match_whole_word'] = $is_match_whole_word;

        return $this;
    }

    /*
     * Gets is_old_value_regex
     *
     * @return bool
     */
    public function getIsOldValueRegex()
    {
        return $this->container['is_old_value_regex'];
    }

    /*
     * Sets is_old_value_regex
     *
     * @param bool $is_old_value_regex Gets or sets a value indicating whether flag, means that OldValue contains regex expression.
     *
     * @return $this
     */
    public function setIsOldValueRegex($is_old_value_regex)
    {
        $this->container['is_old_value_regex'] = $is_old_value_regex;

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
