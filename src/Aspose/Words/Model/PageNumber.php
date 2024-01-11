<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageNumber.php">
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
        'alignment' => 'string',
        'format' => 'string',
        'is_top' => 'bool',
        'page_starting_number' => 'int',
        'set_page_number_on_first_page' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'alignment' => 'null',
        'format' => 'null',
        'is_top' => 'null',
        'page_starting_number' => 'null',
        'set_page_number_on_first_page' => 'null'
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
        'alignment' => 'Alignment',
        'format' => 'Format',
        'is_top' => 'IsTop',
        'page_starting_number' => 'PageStartingNumber',
        'set_page_number_on_first_page' => 'SetPageNumberOnFirstPage'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alignment' => 'setAlignment',
        'format' => 'setFormat',
        'is_top' => 'setIsTop',
        'page_starting_number' => 'setPageStartingNumber',
        'set_page_number_on_first_page' => 'setSetPageNumberOnFirstPage'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alignment' => 'getAlignment',
        'format' => 'getFormat',
        'is_top' => 'getIsTop',
        'page_starting_number' => 'getPageStartingNumber',
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
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['is_top'] = isset($data['is_top']) ? $data['is_top'] : null;
        $this->container['page_starting_number'] = isset($data['page_starting_number']) ? $data['page_starting_number'] : null;
        $this->container['set_page_number_on_first_page'] = isset($data['set_page_number_on_first_page']) ? $data['set_page_number_on_first_page'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (!isset($this->container['is_top'])) {
            throw new \InvalidArgumentException('Property IsTop in PageNumber is required.');
        }

        if (!isset($this->container['set_page_number_on_first_page'])) {
            throw new \InvalidArgumentException('Property SetPageNumberOnFirstPage in PageNumber is required.');
        }

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
     * @param string $format Gets or sets the page number format, e.g. "{PAGE} of {NUMPAGES}".
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
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
     * Gets page_starting_number
     *
     * @return int
     */
    public function getPageStartingNumber()
    {
        return $this->container['page_starting_number'];
    }

    /*
     * Sets page_starting_number
     *
     * @param int $page_starting_number Gets or sets the starting page number of the document.
     *
     * @return $this
     */
    public function setPageStartingNumber($page_starting_number)
    {
        $this->container['page_starting_number'] = $page_starting_number;
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

