<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CsvDataLoadOptions.php">
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
 * CsvDataLoadOptions
 *
 * @description Represents options for parsing CSV data.
 */
class CsvDataLoadOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CsvDataLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'comment_char' => 'string',
        'delimiter' => 'string',
        'has_headers' => 'bool',
        'quote_char' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'comment_char' => 'null',
        'delimiter' => 'null',
        'has_headers' => 'null',
        'quote_char' => 'null'
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
        'comment_char' => 'CommentChar',
        'delimiter' => 'Delimiter',
        'has_headers' => 'HasHeaders',
        'quote_char' => 'QuoteChar'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment_char' => 'setCommentChar',
        'delimiter' => 'setDelimiter',
        'has_headers' => 'setHasHeaders',
        'quote_char' => 'setQuoteChar'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment_char' => 'getCommentChar',
        'delimiter' => 'getDelimiter',
        'has_headers' => 'getHasHeaders',
        'quote_char' => 'getQuoteChar'
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
        $this->container['comment_char'] = isset($data['comment_char']) ? $data['comment_char'] : null;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['has_headers'] = isset($data['has_headers']) ? $data['has_headers'] : null;
        $this->container['quote_char'] = isset($data['quote_char']) ? $data['quote_char'] : null;
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
     * Gets comment_char
     *
     * @return string
     */
    public function getCommentChar()
    {
        return $this->container['comment_char'];
    }

    /*
     * Sets comment_char
     *
     * @param string $comment_char Gets or sets the character that is used to comment lines of CSV data.
     *
     * @return $this
     */
    public function setCommentChar($comment_char)
    {
        $this->container['comment_char'] = $comment_char;
        return $this;
    }

    /*
     * Gets delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->container['delimiter'];
    }

    /*
     * Sets delimiter
     *
     * @param string $delimiter Gets or sets the character to be used as a column delimiter.
     *
     * @return $this
     */
    public function setDelimiter($delimiter)
    {
        $this->container['delimiter'] = $delimiter;
        return $this;
    }

    /*
     * Gets has_headers
     *
     * @return bool
     */
    public function getHasHeaders()
    {
        return $this->container['has_headers'];
    }

    /*
     * Sets has_headers
     *
     * @param bool $has_headers Gets or sets a value indicating whether the first record of CSV data contains column names.
     *
     * @return $this
     */
    public function setHasHeaders($has_headers)
    {
        $this->container['has_headers'] = $has_headers;
        return $this;
    }

    /*
     * Gets quote_char
     *
     * @return string
     */
    public function getQuoteChar()
    {
        return $this->container['quote_char'];
    }

    /*
     * Sets quote_char
     *
     * @param string $quote_char Gets or sets the character that is used to quote field values.
     *
     * @return $this
     */
    public function setQuoteChar($quote_char)
    {
        $this->container['quote_char'] = $quote_char;
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

