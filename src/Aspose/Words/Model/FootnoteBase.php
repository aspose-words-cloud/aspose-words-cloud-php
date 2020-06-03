<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FootnoteBase.php">
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
 * FootnoteBase
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * FootnoteBase
 *
 * @description Footnote base class.
 */
class FootnoteBase implements ArrayAccess
{
    const DISCRIMINATOR = 'Discriminator{propertyName&#x3D;&#x27;Type&#x27;, mapping&#x3D;null}';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "FootnoteBase";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'position' => '\Aspose\Words\Model\DocumentPosition',
        'footnote_type' => 'string',
        'reference_mark' => 'string',
        'text' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'position' => null,
        'footnote_type' => null,
        'reference_mark' => null,
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
        'position' => 'Position',
        'footnote_type' => 'FootnoteType',
        'reference_mark' => 'ReferenceMark',
        'text' => 'Text'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position' => 'setPosition',
        'footnote_type' => 'setFootnoteType',
        'reference_mark' => 'setReferenceMark',
        'text' => 'setText'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position' => 'getPosition',
        'footnote_type' => 'getFootnoteType',
        'reference_mark' => 'getReferenceMark',
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

    const FOOTNOTE_TYPE_FOOTNOTE = 'Footnote';
    const FOOTNOTE_TYPE_ENDNOTE = 'Endnote';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFootnoteTypeAllowableValues()
    {
        return [
            self::FOOTNOTE_TYPE_FOOTNOTE,
            self::FOOTNOTE_TYPE_ENDNOTE
        ];
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['footnote_type'] = isset($data['footnote_type']) ? $data['footnote_type'] : null;
        $this->container['reference_mark'] = isset($data['reference_mark']) ? $data['reference_mark'] : null;
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

        $allowedValues = $this->getFootnoteTypeAllowableValues();
        if (!in_array($this->container['footnote_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'footnote_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getFootnoteTypeAllowableValues();
        if (!in_array($this->container['footnote_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets position
     *
     * @return \Aspose\Words\Model\DocumentPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /*
     * Sets position
     *
     * @param \Aspose\Words\Model\DocumentPosition $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /*
     * Gets footnote_type
     *
     * @return string
     */
    public function getFootnoteType()
    {
        return $this->container['footnote_type'];
    }

    /*
     * Sets footnote_type
     *
     * @param string $footnote_type Gets or sets returns a value that specifies whether this is a footnote or endnote.
     *
     * @return $this
     */
    public function setFootnoteType($footnote_type)
    {
        $allowedValues = $this->getFootnoteTypeAllowableValues();
        if ((!is_numeric($footnote_type) && !in_array($footnote_type, $allowedValues)) || (is_numeric($footnote_type) && !in_array($allowedValues[$footnote_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'footnote_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['footnote_type'] = $footnote_type;

        return $this;
    }

    /*
     * Gets reference_mark
     *
     * @return string
     */
    public function getReferenceMark()
    {
        return $this->container['reference_mark'];
    }

    /*
     * Sets reference_mark
     *
     * @param string $reference_mark Gets or sets /sets custom reference mark to be used for this footnote. Default value is Empty, meaning auto-numbered footnotes are used.
     *
     * @return $this
     */
    public function setReferenceMark($reference_mark)
    {
        $this->container['reference_mark'] = $reference_mark;

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
     * @param string $text Gets or sets this is a convenience property that allows to easily get or set text of the footnote.
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
