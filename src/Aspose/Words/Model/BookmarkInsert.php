<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BookmarkInsert.php">
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
 * BookmarkInsert
 *
 * @description Represents a bookmark to insert.
 */
class BookmarkInsert implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "BookmarkInsert";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name' => 'string',
        'text' => 'string',
        'start_range' => '\Aspose\Words\Model\Position',
        'end_range' => '\Aspose\Words\Model\Position'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'name' => 'null',
        'text' => 'null',
        'start_range' => 'null',
        'end_range' => 'null'
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
        'name' => 'Name',
        'text' => 'Text',
        'start_range' => 'StartRange',
        'end_range' => 'EndRange'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'text' => 'setText',
        'start_range' => 'setStartRange',
        'end_range' => 'setEndRange'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'text' => 'getText',
        'start_range' => 'getStartRange',
        'end_range' => 'getEndRange'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['start_range'] = isset($data['start_range']) ? $data['start_range'] : null;
        $this->container['end_range'] = isset($data['end_range']) ? $data['end_range'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (!isset($this->container['name'])) {
            throw new \InvalidArgumentException('Property Name in BookmarkInsert is required.');
        }

        if (!isset($this->container['text'])) {
            throw new \InvalidArgumentException('Property Text in BookmarkInsert is required.');
        }

        if (!isset($this->container['start_range'])) {
            throw new \InvalidArgumentException('Property StartRange in BookmarkInsert is required.');
        }

        if (isset($this->container['start_range'])) {
            $this->getStartRange()->validate();
        }

        if (!isset($this->container['end_range'])) {
            throw new \InvalidArgumentException('Property EndRange in BookmarkInsert is required.');
        }

        if (isset($this->container['end_range'])) {
            $this->getEndRange()->validate();
        }

    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name Gets or sets the name of the bookmark.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
     * @param string $text Gets or sets text, enclosed in the bookmark.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }


    /*
     * Gets start_range
     *
     * @return \Aspose\Words\Model\Position
     */
    public function getStartRange()
    {
        return $this->container['start_range'];
    }

    /*
     * Sets start_range
     *
     * @param \Aspose\Words\Model\Position $start_range Gets or sets the link to start bookmark node.
     *
     * @return $this
     */
    public function setStartRange($start_range)
    {
        $this->container['start_range'] = $start_range;
        return $this;
    }


    /*
     * Gets end_range
     *
     * @return \Aspose\Words\Model\Position
     */
    public function getEndRange()
    {
        return $this->container['end_range'];
    }

    /*
     * Sets end_range
     *
     * @param \Aspose\Words\Model\Position $end_range Gets or sets the link to end bookmark node.
     *
     * @return $this
     */
    public function setEndRange($end_range)
    {
        $this->container['end_range'] = $end_range;
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

