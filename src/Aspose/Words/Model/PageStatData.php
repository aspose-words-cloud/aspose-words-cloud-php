<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageStatData.php">
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
 * PageStatData
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * PageStatData
 *
 * @description Container for the page&#x27;s statistical data.
 */
class PageStatData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PageStatData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'page_number' => 'int',
        'word_count' => 'int',
        'paragraph_count' => 'int',
        'footnotes_stat_data' => '\Aspose\Words\Model\FootnotesStatData'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'page_number' => 'int32',
        'word_count' => 'int32',
        'paragraph_count' => 'int32',
        'footnotes_stat_data' => null
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
        'page_number' => 'PageNumber',
        'word_count' => 'WordCount',
        'paragraph_count' => 'ParagraphCount',
        'footnotes_stat_data' => 'FootnotesStatData'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_number' => 'setPageNumber',
        'word_count' => 'setWordCount',
        'paragraph_count' => 'setParagraphCount',
        'footnotes_stat_data' => 'setFootnotesStatData'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_number' => 'getPageNumber',
        'word_count' => 'getWordCount',
        'paragraph_count' => 'getParagraphCount',
        'footnotes_stat_data' => 'getFootnotesStatData'
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
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['word_count'] = isset($data['word_count']) ? $data['word_count'] : null;
        $this->container['paragraph_count'] = isset($data['paragraph_count']) ? $data['paragraph_count'] : null;
        $this->container['footnotes_stat_data'] = isset($data['footnotes_stat_data']) ? $data['footnotes_stat_data'] : null;
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
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /*
     * Sets page_number
     *
     * @param int $page_number Gets or sets page number.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /*
     * Gets word_count
     *
     * @return int
     */
    public function getWordCount()
    {
        return $this->container['word_count'];
    }

    /*
     * Sets word_count
     *
     * @param int $word_count Gets or sets total count of words in the page.
     *
     * @return $this
     */
    public function setWordCount($word_count)
    {
        $this->container['word_count'] = $word_count;

        return $this;
    }

    /*
     * Gets paragraph_count
     *
     * @return int
     */
    public function getParagraphCount()
    {
        return $this->container['paragraph_count'];
    }

    /*
     * Sets paragraph_count
     *
     * @param int $paragraph_count Gets or sets total count of paragraphs in the page.
     *
     * @return $this
     */
    public function setParagraphCount($paragraph_count)
    {
        $this->container['paragraph_count'] = $paragraph_count;

        return $this;
    }

    /*
     * Gets footnotes_stat_data
     *
     * @return \Aspose\Words\Model\FootnotesStatData
     */
    public function getFootnotesStatData()
    {
        return $this->container['footnotes_stat_data'];
    }

    /*
     * Sets footnotes_stat_data
     *
     * @param \Aspose\Words\Model\FootnotesStatData $footnotes_stat_data footnotes_stat_data
     *
     * @return $this
     */
    public function setFootnotesStatData($footnotes_stat_data)
    {
        $this->container['footnotes_stat_data'] = $footnotes_stat_data;

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
