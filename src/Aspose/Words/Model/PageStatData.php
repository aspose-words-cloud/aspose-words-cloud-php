<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageStatData.php">
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
 * PageStatData
 *
 * @description Container for the page's statistical data.
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
        'footnotes_stat_data' => '\Aspose\Words\Model\FootnotesStatData',
        'paragraph_count' => 'int',
        'word_count' => 'int',
        'page_number' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'footnotes_stat_data' => 'null',
        'paragraph_count' => 'null',
        'word_count' => 'null',
        'page_number' => 'null'
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
        'footnotes_stat_data' => 'FootnotesStatData',
        'paragraph_count' => 'ParagraphCount',
        'word_count' => 'WordCount',
        'page_number' => 'PageNumber'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'footnotes_stat_data' => 'setFootnotesStatData',
        'paragraph_count' => 'setParagraphCount',
        'word_count' => 'setWordCount',
        'page_number' => 'setPageNumber'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'footnotes_stat_data' => 'getFootnotesStatData',
        'paragraph_count' => 'getParagraphCount',
        'word_count' => 'getWordCount',
        'page_number' => 'getPageNumber'
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
        $this->container['footnotes_stat_data'] = isset($data['footnotes_stat_data']) ? $data['footnotes_stat_data'] : null;
        $this->container['paragraph_count'] = isset($data['paragraph_count']) ? $data['paragraph_count'] : null;
        $this->container['word_count'] = isset($data['word_count']) ? $data['word_count'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {

        if (isset($this->container['footnotes_stat_data'])) {
            $this->getFootnotesStatData()->validate();
        }

        if (!isset($this->container['paragraph_count'])) {
            throw new \InvalidArgumentException('Property ParagraphCount in PageStatData is required.');
        }

        if (!isset($this->container['word_count'])) {
            throw new \InvalidArgumentException('Property WordCount in PageStatData is required.');
        }

        if (!isset($this->container['page_number'])) {
            throw new \InvalidArgumentException('Property PageNumber in PageStatData is required.');
        }

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
     * @param \Aspose\Words\Model\FootnotesStatData $footnotes_stat_data Gets or sets the detailed statistics on the footnotes.
     *
     * @return $this
     */
    public function setFootnotesStatData($footnotes_stat_data)
    {
        $this->container['footnotes_stat_data'] = $footnotes_stat_data;
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
     * @param int $paragraph_count Gets or sets the total count of paragraphs in the page.
     *
     * @return $this
     */
    public function setParagraphCount($paragraph_count)
    {
        $this->container['paragraph_count'] = $paragraph_count;
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
     * @param int $word_count Gets or sets the total count of words in the page.
     *
     * @return $this
     */
    public function setWordCount($word_count)
    {
        $this->container['word_count'] = $word_count;
        return $this;
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
     * @param int $page_number Gets or sets the page number.
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;
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

