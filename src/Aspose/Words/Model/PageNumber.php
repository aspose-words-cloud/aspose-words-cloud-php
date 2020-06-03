<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageNumber.php">
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
 * PageNumber
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * PageNumber
 *
 * @description Class is used for insert page number request building.
 */
class PageNumber implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PageNumber";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'format' => 'string',
        'alignment' => 'string',
        'is_top' => 'bool',
        'set_page_number_on_first_page' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'format' => null,
        'alignment' => null,
        'is_top' => null,
        'set_page_number_on_first_page' => null
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
        'format' => 'Format',
        'alignment' => 'Alignment',
        'is_top' => 'IsTop',
        'set_page_number_on_first_page' => 'SetPageNumberOnFirstPage'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
        'alignment' => 'setAlignment',
        'is_top' => 'setIsTop',
        'set_page_number_on_first_page' => 'setSetPageNumberOnFirstPage'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
        'alignment' => 'getAlignment',
        'is_top' => 'getIsTop',
        'set_page_number_on_first_page' => 'getSetPageNumberOnFirstPage'
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['is_top'] = isset($data['is_top']) ? $data['is_top'] : null;
        $this->container['set_page_number_on_first_page'] = isset($data['set_page_number_on_first_page']) ? $data['set_page_number_on_first_page'] : null;
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
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /*
     * Sets format
     *
     * @param string $format Gets or sets page number format, e.g. \"{PAGE} of {NUMPAGES}\".
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /*
     * Gets alignment
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /*
     * Sets alignment
     *
     * @param string $alignment Gets or sets text alignment, possible values are left, right, center or justify.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /*
     * Gets is_top
     *
     * @return bool
     */
    public function getIsTop()
    {
        return $this->container['is_top'];
    }

    /*
     * Sets is_top
     *
     * @param bool $is_top Gets or sets a value indicating whether if true the page number is added at the top of the page, else at the bottom.
     *
     * @return $this
     */
    public function setIsTop($is_top)
    {
        $this->container['is_top'] = $is_top;

        return $this;
    }

    /*
     * Gets set_page_number_on_first_page
     *
     * @return bool
     */
    public function getSetPageNumberOnFirstPage()
    {
        return $this->container['set_page_number_on_first_page'];
    }

    /*
     * Sets set_page_number_on_first_page
     *
     * @param bool $set_page_number_on_first_page Gets or sets a value indicating whether if true the page number is added on first page too.
     *
     * @return $this
     */
    public function setSetPageNumberOnFirstPage($set_page_number_on_first_page)
    {
        $this->container['set_page_number_on_first_page'] = $set_page_number_on_first_page;

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
