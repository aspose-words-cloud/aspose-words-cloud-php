<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CommentBase.php">
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
 * CommentBase
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * CommentBase
 *
 * @description Comment.
 */
class CommentBase implements ArrayAccess
{
    const DISCRIMINATOR = 'Discriminator{propertyName&#x3D;&#x27;Type&#x27;, mapping&#x3D;null}';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CommentBase";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'range_start' => '\Aspose\Words\Model\DocumentPosition',
        'range_end' => '\Aspose\Words\Model\DocumentPosition',
        'author' => 'string',
        'initial' => 'string',
        'date_time' => '\DateTime',
        'text' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'range_start' => null,
        'range_end' => null,
        'author' => null,
        'initial' => null,
        'date_time' => 'date-time',
        'text' => null
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
        'range_start' => 'RangeStart',
        'range_end' => 'RangeEnd',
        'author' => 'Author',
        'initial' => 'Initial',
        'date_time' => 'DateTime',
        'text' => 'Text'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'range_start' => 'setRangeStart',
        'range_end' => 'setRangeEnd',
        'author' => 'setAuthor',
        'initial' => 'setInitial',
        'date_time' => 'setDateTime',
        'text' => 'setText'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'range_start' => 'getRangeStart',
        'range_end' => 'getRangeEnd',
        'author' => 'getAuthor',
        'initial' => 'getInitial',
        'date_time' => 'getDateTime',
        'text' => 'getText'
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
        $this->container['range_start'] = isset($data['range_start']) ? $data['range_start'] : null;
        $this->container['range_end'] = isset($data['range_end']) ? $data['range_end'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['initial'] = isset($data['initial']) ? $data['initial'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Discriminator{propertyName&#x3D;&#x27;Type&#x27;, mapping&#x3D;null}', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
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
     * Gets range_start
     *
     * @return \Aspose\Words\Model\DocumentPosition
     */
    public function getRangeStart()
    {
        return $this->container['range_start'];
    }

    /*
     * Sets range_start
     *
     * @param \Aspose\Words\Model\DocumentPosition $range_start range_start
     *
     * @return $this
     */
    public function setRangeStart($range_start)
    {
        $this->container['range_start'] = $range_start;

        return $this;
    }

    /*
     * Gets range_end
     *
     * @return \Aspose\Words\Model\DocumentPosition
     */
    public function getRangeEnd()
    {
        return $this->container['range_end'];
    }

    /*
     * Sets range_end
     *
     * @param \Aspose\Words\Model\DocumentPosition $range_end range_end
     *
     * @return $this
     */
    public function setRangeEnd($range_end)
    {
        $this->container['range_end'] = $range_end;

        return $this;
    }

    /*
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /*
     * Sets author
     *
     * @param string $author Gets or sets returns or sets the author name for a comment.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /*
     * Gets initial
     *
     * @return string
     */
    public function getInitial()
    {
        return $this->container['initial'];
    }

    /*
     * Sets initial
     *
     * @param string $initial Gets or sets returns or sets the initials of the user associated with a specific comment.
     *
     * @return $this
     */
    public function setInitial($initial)
    {
        $this->container['initial'] = $initial;

        return $this;
    }

    /*
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /*
     * Sets date_time
     *
     * @param \DateTime $date_time Gets or sets the date and time that the comment was made.
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /*
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /*
     * Sets text
     *
     * @param string $text Gets or sets this is a convenience property that allows to easily get or set text of the comment.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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
