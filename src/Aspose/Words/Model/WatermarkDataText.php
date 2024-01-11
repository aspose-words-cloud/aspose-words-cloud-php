<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WatermarkDataText.php">
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
use \Aspose\Words\ObjectSerializer;

/*
 * WatermarkDataText
 *
 * @description Class for insert watermark text request building.
 */
class WatermarkDataText extends WatermarkDataBase
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WatermarkDataText";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'color' => '\Aspose\Words\Model\XmlColor',
        'font_family' => 'string',
        'font_size' => 'double',
        'is_semitrasparent' => 'bool',
        'layout' => 'string',
        'text' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'color' => 'null',
        'font_family' => 'null',
        'font_size' => 'null',
        'is_semitrasparent' => 'null',
        'layout' => 'null',
        'text' => 'null'
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'color' => 'Color',
        'font_family' => 'FontFamily',
        'font_size' => 'FontSize',
        'is_semitrasparent' => 'IsSemitrasparent',
        'layout' => 'Layout',
        'text' => 'Text'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color' => 'setColor',
        'font_family' => 'setFontFamily',
        'font_size' => 'setFontSize',
        'is_semitrasparent' => 'setIsSemitrasparent',
        'layout' => 'setLayout',
        'text' => 'setText'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color' => 'getColor',
        'font_family' => 'getFontFamily',
        'font_size' => 'getFontSize',
        'is_semitrasparent' => 'getIsSemitrasparent',
        'layout' => 'getLayout',
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
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const LAYOUT_HORIZONTAL = 'Horizontal';
    const LAYOUT_DIAGONAL = 'Diagonal';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLayoutAllowableValues()
    {
        return [
            self::LAYOUT_HORIZONTAL,
            self::LAYOUT_DIAGONAL
        ];
    }

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['font_family'] = isset($data['font_family']) ? $data['font_family'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['is_semitrasparent'] = isset($data['is_semitrasparent']) ? $data['is_semitrasparent'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();


        if (isset($this->container['color'])) {
            $this->getColor()->validate();
        }

        if (isset($this->container['layout'])) {
            $allowedValuesLayout = $this->getLayoutAllowableValues();
            if (!in_array($this->container['layout'], $allowedValuesLayout)) {
                throw new \InvalidArgumentException('Property Layout in WatermarkDataText has invalid format.');
            }
        }

        if (!isset($this->container['text'])) {
            throw new \InvalidArgumentException('Property Text in WatermarkDataText is required.');
        }

    }

    /*
     * Gets color
     *
     * @return \Aspose\Words\Model\XmlColor
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /*
     * Sets color
     *
     * @param \Aspose\Words\Model\XmlColor $color Gets or sets font color. The default value is System.Drawing.Color.Silver.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }


    /*
     * Gets font_family
     *
     * @return string
     */
    public function getFontFamily()
    {
        return $this->container['font_family'];
    }

    /*
     * Sets font_family
     *
     * @param string $font_family Gets or sets font family name. The default value is "Calibri".
     *
     * @return $this
     */
    public function setFontFamily($font_family)
    {
        $this->container['font_family'] = $font_family;
        return $this;
    }


    /*
     * Gets font_size
     *
     * @return double
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /*
     * Sets font_size
     *
     * @param double $font_size Gets or sets a font size. The default value is 0 - auto. Valid values range from 0 to 65.5 inclusive. Auto font size means that the watermark will be scaled to its max width and max height relative to the page margins.
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;
        return $this;
    }


    /*
     * Gets is_semitrasparent
     *
     * @return bool
     */
    public function getIsSemitrasparent()
    {
        return $this->container['is_semitrasparent'];
    }

    /*
     * Sets is_semitrasparent
     *
     * @param bool $is_semitrasparent Gets or sets a boolean value which is responsible for opacity of the watermark. The default value is true.
     *
     * @return $this
     */
    public function setIsSemitrasparent($is_semitrasparent)
    {
        $this->container['is_semitrasparent'] = $is_semitrasparent;
        return $this;
    }


    /*
     * Gets layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /*
     * Sets layout
     *
     * @param string $layout Gets or sets layout of the watermark. The default value is Aspose.Words.WatermarkLayout.Diagonal.
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $allowedValues = $this->getLayoutAllowableValues();
        if ((!is_numeric($layout) && !in_array($layout, $allowedValues)) || (is_numeric($layout) && !in_array($allowedValues[$layout], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'layout', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['layout'] = $layout;
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
     * @param string $text Gets or sets the watermark text.
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

