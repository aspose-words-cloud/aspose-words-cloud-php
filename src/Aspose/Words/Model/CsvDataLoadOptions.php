<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CsvDataLoadOptions.php">
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
 * CsvDataLoadOptions
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * CsvDataLoadOptions
 *
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
        'has_headers' => 'bool',
        'delimiter' => 'string',
        'quote_char' => 'string',
        'comment_char' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'has_headers' => null,
        'delimiter' => null,
        'quote_char' => null,
        'comment_char' => null
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
        'has_headers' => 'HasHeaders',
        'delimiter' => 'Delimiter',
        'quote_char' => 'QuoteChar',
        'comment_char' => 'CommentChar'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_headers' => 'setHasHeaders',
        'delimiter' => 'setDelimiter',
        'quote_char' => 'setQuoteChar',
        'comment_char' => 'setCommentChar'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_headers' => 'getHasHeaders',
        'delimiter' => 'getDelimiter',
        'quote_char' => 'getQuoteChar',
        'comment_char' => 'getCommentChar'
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
        $this->container['has_headers'] = isset($data['has_headers']) ? $data['has_headers'] : null;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['quote_char'] = isset($data['quote_char']) ? $data['quote_char'] : null;
        $this->container['comment_char'] = isset($data['comment_char']) ? $data['comment_char'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['has_headers'] === null) {
            $invalidProperties[] = "'has_headers' can't be null";
        }
        if ($this->container['delimiter'] === null) {
            $invalidProperties[] = "'delimiter' can't be null";
        }
        if ($this->container['quote_char'] === null) {
            $invalidProperties[] = "'quote_char' can't be null";
        }
        if ($this->container['comment_char'] === null) {
            $invalidProperties[] = "'comment_char' can't be null";
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

        if ($this->container['has_headers'] === null) {
            return false;
        }
        if ($this->container['delimiter'] === null) {
            return false;
        }
        if ($this->container['quote_char'] === null) {
            return false;
        }
        if ($this->container['comment_char'] === null) {
            return false;
        }
        return true;
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
     * @param bool $has_headers has_headers
     *
     * @return $this
     */
    public function setHasHeaders($has_headers)
    {
        $this->container['has_headers'] = $has_headers;

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
     * @param string $delimiter delimiter
     *
     * @return $this
     */
    public function setDelimiter($delimiter)
    {
        $this->container['delimiter'] = $delimiter;

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
     * @param string $quote_char quote_char
     *
     * @return $this
     */
    public function setQuoteChar($quote_char)
    {
        $this->container['quote_char'] = $quote_char;

        return $this;
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
     * @param string $comment_char comment_char
     *
     * @return $this
     */
    public function setCommentChar($comment_char)
    {
        $this->container['comment_char'] = $comment_char;

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


