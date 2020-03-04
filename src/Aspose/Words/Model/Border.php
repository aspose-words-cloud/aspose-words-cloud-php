<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Border.php">
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
 * Border
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * Border
 *
 * @description Represents a border of an object.
 */
class Border extends LinkElement 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Border";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'border_type' => 'string',
        'color' => '\Aspose\Words\Model\XmlColor',
        'distance_from_text' => 'double',
        'line_style' => 'string',
        'line_width' => 'double',
        'shadow' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'border_type' => null,
        'color' => null,
        'distance_from_text' => 'double',
        'line_style' => null,
        'line_width' => 'double',
        'shadow' => null
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
        'border_type' => 'BorderType',
        'color' => 'Color',
        'distance_from_text' => 'DistanceFromText',
        'line_style' => 'LineStyle',
        'line_width' => 'LineWidth',
        'shadow' => 'Shadow'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'border_type' => 'setBorderType',
        'color' => 'setColor',
        'distance_from_text' => 'setDistanceFromText',
        'line_style' => 'setLineStyle',
        'line_width' => 'setLineWidth',
        'shadow' => 'setShadow'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'border_type' => 'getBorderType',
        'color' => 'getColor',
        'distance_from_text' => 'getDistanceFromText',
        'line_style' => 'getLineStyle',
        'line_width' => 'getLineWidth',
        'shadow' => 'getShadow'
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

    const BORDER_TYPE_BOTTOM = 'Bottom';
    const BORDER_TYPE_LEFT = 'Left';
    const BORDER_TYPE_RIGHT = 'Right';
    const BORDER_TYPE_TOP = 'Top';
    const BORDER_TYPE_HORIZONTAL = 'Horizontal';
    const BORDER_TYPE_VERTICAL = 'Vertical';
    const BORDER_TYPE_DIAGONAL_DOWN = 'DiagonalDown';
    const BORDER_TYPE_DIAGONAL_UP = 'DiagonalUp';
    const BORDER_TYPE_NONE = 'None';
    const LINE_STYLE_NONE = 'None';
    const LINE_STYLE_SINGLE = 'Single';
    const LINE_STYLE_THICK = 'Thick';
    const LINE_STYLE_DOUBLE = 'Double';
    const LINE_STYLE_HAIRLINE = 'Hairline';
    const LINE_STYLE_DOT = 'Dot';
    const LINE_STYLE_DASH_LARGE_GAP = 'DashLargeGap';
    const LINE_STYLE_DOT_DASH = 'DotDash';
    const LINE_STYLE_DOT_DOT_DASH = 'DotDotDash';
    const LINE_STYLE_TRIPLE = 'Triple';
    const LINE_STYLE_THIN_THICK_SMALL_GAP = 'ThinThickSmallGap';
    const LINE_STYLE_THICK_THIN_SMALL_GAP = 'ThickThinSmallGap';
    const LINE_STYLE_THIN_THICK_THIN_SMALL_GAP = 'ThinThickThinSmallGap';
    const LINE_STYLE_THIN_THICK_MEDIUM_GAP = 'ThinThickMediumGap';
    const LINE_STYLE_THICK_THIN_MEDIUM_GAP = 'ThickThinMediumGap';
    const LINE_STYLE_THIN_THICK_THIN_MEDIUM_GAP = 'ThinThickThinMediumGap';
    const LINE_STYLE_THIN_THICK_LARGE_GAP = 'ThinThickLargeGap';
    const LINE_STYLE_THICK_THIN_LARGE_GAP = 'ThickThinLargeGap';
    const LINE_STYLE_THIN_THICK_THIN_LARGE_GAP = 'ThinThickThinLargeGap';
    const LINE_STYLE_WAVE = 'Wave';
    const LINE_STYLE_DOUBLE_WAVE = 'DoubleWave';
    const LINE_STYLE_DASH_SMALL_GAP = 'DashSmallGap';
    const LINE_STYLE_DASH_DOT_STROKER = 'DashDotStroker';
    const LINE_STYLE_EMBOSS3_D = 'Emboss3D';
    const LINE_STYLE_ENGRAVE3_D = 'Engrave3D';
    const LINE_STYLE_OUTSET = 'Outset';
    const LINE_STYLE_INSET = 'Inset';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBorderTypeAllowableValues()
    {
        return [
            self::BORDER_TYPE_BOTTOM,
            self::BORDER_TYPE_LEFT,
            self::BORDER_TYPE_RIGHT,
            self::BORDER_TYPE_TOP,
            self::BORDER_TYPE_HORIZONTAL,
            self::BORDER_TYPE_VERTICAL,
            self::BORDER_TYPE_DIAGONAL_DOWN,
            self::BORDER_TYPE_DIAGONAL_UP,
            self::BORDER_TYPE_NONE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLineStyleAllowableValues()
    {
        return [
            self::LINE_STYLE_NONE,
            self::LINE_STYLE_SINGLE,
            self::LINE_STYLE_THICK,
            self::LINE_STYLE_DOUBLE,
            self::LINE_STYLE_HAIRLINE,
            self::LINE_STYLE_DOT,
            self::LINE_STYLE_DASH_LARGE_GAP,
            self::LINE_STYLE_DOT_DASH,
            self::LINE_STYLE_DOT_DOT_DASH,
            self::LINE_STYLE_TRIPLE,
            self::LINE_STYLE_THIN_THICK_SMALL_GAP,
            self::LINE_STYLE_THICK_THIN_SMALL_GAP,
            self::LINE_STYLE_THIN_THICK_THIN_SMALL_GAP,
            self::LINE_STYLE_THIN_THICK_MEDIUM_GAP,
            self::LINE_STYLE_THICK_THIN_MEDIUM_GAP,
            self::LINE_STYLE_THIN_THICK_THIN_MEDIUM_GAP,
            self::LINE_STYLE_THIN_THICK_LARGE_GAP,
            self::LINE_STYLE_THICK_THIN_LARGE_GAP,
            self::LINE_STYLE_THIN_THICK_THIN_LARGE_GAP,
            self::LINE_STYLE_WAVE,
            self::LINE_STYLE_DOUBLE_WAVE,
            self::LINE_STYLE_DASH_SMALL_GAP,
            self::LINE_STYLE_DASH_DOT_STROKER,
            self::LINE_STYLE_EMBOSS3_D,
            self::LINE_STYLE_ENGRAVE3_D,
            self::LINE_STYLE_OUTSET,
            self::LINE_STYLE_INSET
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

        $this->container['border_type'] = isset($data['border_type']) ? $data['border_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['distance_from_text'] = isset($data['distance_from_text']) ? $data['distance_from_text'] : null;
        $this->container['line_style'] = isset($data['line_style']) ? $data['line_style'] : null;
        $this->container['line_width'] = isset($data['line_width']) ? $data['line_width'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getBorderTypeAllowableValues();
        if (!in_array($this->container['border_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'border_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLineStyleAllowableValues();
        if (!in_array($this->container['line_style'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'line_style', must be one of '%s'",
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
        if (!parent::valid()) {
            return false;
        }

        $allowedValues = $this->getBorderTypeAllowableValues();
        if (!in_array($this->container['border_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getLineStyleAllowableValues();
        if (!in_array($this->container['line_style'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets border_type
     *
     * @return string
     */
    public function getBorderType()
    {
        return $this->container['border_type'];
    }

    /*
     * Sets border_type
     *
     * @param string $border_type Gets or sets the border type.
     *
     * @return $this
     */
    public function setBorderType($border_type)
    {
        $allowedValues = $this->getBorderTypeAllowableValues();
        if ((!is_numeric($border_type) && !in_array($border_type, $allowedValues)) || (is_numeric($border_type) && !in_array($allowedValues[$border_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'border_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['border_type'] = $border_type;

        return $this;
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
     * @param \Aspose\Words\Model\XmlColor $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /*
     * Gets distance_from_text
     *
     * @return double
     */
    public function getDistanceFromText()
    {
        return $this->container['distance_from_text'];
    }

    /*
     * Sets distance_from_text
     *
     * @param double $distance_from_text Gets or sets distance of the border from text or from the page edge in points.
     *
     * @return $this
     */
    public function setDistanceFromText($distance_from_text)
    {
        $this->container['distance_from_text'] = $distance_from_text;

        return $this;
    }

    /*
     * Gets line_style
     *
     * @return string
     */
    public function getLineStyle()
    {
        return $this->container['line_style'];
    }

    /*
     * Sets line_style
     *
     * @param string $line_style Gets or sets the border style.
     *
     * @return $this
     */
    public function setLineStyle($line_style)
    {
        $allowedValues = $this->getLineStyleAllowableValues();
        if ((!is_numeric($line_style) && !in_array($line_style, $allowedValues)) || (is_numeric($line_style) && !in_array($allowedValues[$line_style], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'line_style', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['line_style'] = $line_style;

        return $this;
    }

    /*
     * Gets line_width
     *
     * @return double
     */
    public function getLineWidth()
    {
        return $this->container['line_width'];
    }

    /*
     * Sets line_width
     *
     * @param double $line_width Gets or sets the border width in points.
     *
     * @return $this
     */
    public function setLineWidth($line_width)
    {
        $this->container['line_width'] = $line_width;

        return $this;
    }

    /*
     * Gets shadow
     *
     * @return bool
     */
    public function getShadow()
    {
        return $this->container['shadow'];
    }

    /*
     * Sets shadow
     *
     * @param bool $shadow Gets or sets a value indicating whether the border has a shadow.
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;

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
