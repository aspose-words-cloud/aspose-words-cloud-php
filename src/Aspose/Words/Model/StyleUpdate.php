<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StyleUpdate.php">
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
 * StyleUpdate
 *
 * @description Represents a single document style properties to update.
 */
class StyleUpdate implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "StyleUpdate";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'next_paragraph_style_name' => 'string',
        'base_style_name' => 'string',
        'is_quick_style' => 'bool',
        'name' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'next_paragraph_style_name' => 'null',
        'base_style_name' => 'null',
        'is_quick_style' => 'null',
        'name' => 'null'
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
        'next_paragraph_style_name' => 'NextParagraphStyleName',
        'base_style_name' => 'BaseStyleName',
        'is_quick_style' => 'IsQuickStyle',
        'name' => 'Name'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'next_paragraph_style_name' => 'setNextParagraphStyleName',
        'base_style_name' => 'setBaseStyleName',
        'is_quick_style' => 'setIsQuickStyle',
        'name' => 'setName'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'next_paragraph_style_name' => 'getNextParagraphStyleName',
        'base_style_name' => 'getBaseStyleName',
        'is_quick_style' => 'getIsQuickStyle',
        'name' => 'getName'
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
        $this->container['next_paragraph_style_name'] = isset($data['next_paragraph_style_name']) ? $data['next_paragraph_style_name'] : null;
        $this->container['base_style_name'] = isset($data['base_style_name']) ? $data['base_style_name'] : null;
        $this->container['is_quick_style'] = isset($data['is_quick_style']) ? $data['is_quick_style'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
    }

    /*
     * Gets next_paragraph_style_name
     *
     * @return string
     */
    public function getNextParagraphStyleName()
    {
        return $this->container['next_paragraph_style_name'];
    }

    /*
     * Sets next_paragraph_style_name
     *
     * @param string $next_paragraph_style_name Gets or sets the name of the style to be applied automatically to a new paragraph inserted after a paragraph formatted with the specified style. This property is not used by Aspose.Words. The next paragraph style will only be applied automatically when you edit the document in MS Word.
     *
     * @return $this
     */
    public function setNextParagraphStyleName($next_paragraph_style_name)
    {
        $this->container['next_paragraph_style_name'] = $next_paragraph_style_name;
        return $this;
    }


    /*
     * Gets base_style_name
     *
     * @return string
     */
    public function getBaseStyleName()
    {
        return $this->container['base_style_name'];
    }

    /*
     * Sets base_style_name
     *
     * @param string $base_style_name Gets or sets the name of the style this style is based on. This will be an empty string if the style is not based on any other style and it can be set to an empty string.
     *
     * @return $this
     */
    public function setBaseStyleName($base_style_name)
    {
        $this->container['base_style_name'] = $base_style_name;
        return $this;
    }


    /*
     * Gets is_quick_style
     *
     * @return bool
     */
    public function getIsQuickStyle()
    {
        return $this->container['is_quick_style'];
    }

    /*
     * Sets is_quick_style
     *
     * @param bool $is_quick_style Gets or sets a value indicating whether this style is shown in the Quick Style gallery inside MS Word UI.
     *
     * @return $this
     */
    public function setIsQuickStyle($is_quick_style)
    {
        $this->container['is_quick_style'] = $is_quick_style;
        return $this;
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
     * @param string $name Gets or sets the name of the style. Can not be empty string. If there already is a style with such name in the collection, than this style will override it. All affected nodes will reference new style.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

