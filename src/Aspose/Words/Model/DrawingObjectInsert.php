<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DrawingObjectInsert.php">
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
 * DrawingObjectInsert
 *
 * @description Drawing object element for insert.
 */
class DrawingObjectInsert implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DrawingObjectInsert";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'height' => 'double',
        'left' => 'double',
        'position' => '\Aspose\Words\Model\DocumentPosition',
        'relative_horizontal_position' => 'string',
        'relative_vertical_position' => 'string',
        'top' => 'double',
        'width' => 'double',
        'wrap_type' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'height' => 'null',
        'left' => 'null',
        'position' => 'null',
        'relative_horizontal_position' => 'null',
        'relative_vertical_position' => 'null',
        'top' => 'null',
        'width' => 'null',
        'wrap_type' => 'null'
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
        'height' => 'Height',
        'left' => 'Left',
        'position' => 'Position',
        'relative_horizontal_position' => 'RelativeHorizontalPosition',
        'relative_vertical_position' => 'RelativeVerticalPosition',
        'top' => 'Top',
        'width' => 'Width',
        'wrap_type' => 'WrapType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'left' => 'setLeft',
        'position' => 'setPosition',
        'relative_horizontal_position' => 'setRelativeHorizontalPosition',
        'relative_vertical_position' => 'setRelativeVerticalPosition',
        'top' => 'setTop',
        'width' => 'setWidth',
        'wrap_type' => 'setWrapType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'left' => 'getLeft',
        'position' => 'getPosition',
        'relative_horizontal_position' => 'getRelativeHorizontalPosition',
        'relative_vertical_position' => 'getRelativeVerticalPosition',
        'top' => 'getTop',
        'width' => 'getWidth',
        'wrap_type' => 'getWrapType'
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

    const RELATIVE_HORIZONTAL_POSITION_MARGIN = 'Margin';
    const RELATIVE_HORIZONTAL_POSITION_PAGE = 'Page';
    const RELATIVE_HORIZONTAL_POSITION_COLUMN = 'Column';
    const RELATIVE_HORIZONTAL_POSITION_DEFAULT = 'Default';
    const RELATIVE_HORIZONTAL_POSITION_CHARACTER = 'Character';
    const RELATIVE_HORIZONTAL_POSITION_LEFT_MARGIN = 'LeftMargin';
    const RELATIVE_HORIZONTAL_POSITION_RIGHT_MARGIN = 'RightMargin';
    const RELATIVE_HORIZONTAL_POSITION_INSIDE_MARGIN = 'InsideMargin';
    const RELATIVE_HORIZONTAL_POSITION_OUTSIDE_MARGIN = 'OutsideMargin';
    const RELATIVE_VERTICAL_POSITION_MARGIN = 'Margin';
    const RELATIVE_VERTICAL_POSITION_TABLE_DEFAULT = 'TableDefault';
    const RELATIVE_VERTICAL_POSITION_PAGE = 'Page';
    const RELATIVE_VERTICAL_POSITION_PARAGRAPH = 'Paragraph';
    const RELATIVE_VERTICAL_POSITION_TEXT_FRAME_DEFAULT = 'TextFrameDefault';
    const RELATIVE_VERTICAL_POSITION_LINE = 'Line';
    const RELATIVE_VERTICAL_POSITION_TOP_MARGIN = 'TopMargin';
    const RELATIVE_VERTICAL_POSITION_BOTTOM_MARGIN = 'BottomMargin';
    const RELATIVE_VERTICAL_POSITION_INSIDE_MARGIN = 'InsideMargin';
    const RELATIVE_VERTICAL_POSITION_OUTSIDE_MARGIN = 'OutsideMargin';
    const WRAP_TYPE_INLINE = 'Inline';
    const WRAP_TYPE_TOP_BOTTOM = 'TopBottom';
    const WRAP_TYPE_SQUARE = 'Square';
    const WRAP_TYPE_NONE = 'None';
    const WRAP_TYPE_TIGHT = 'Tight';
    const WRAP_TYPE_THROUGH = 'Through';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRelativeHorizontalPositionAllowableValues()
    {
        return [
            self::RELATIVE_HORIZONTAL_POSITION_MARGIN,
            self::RELATIVE_HORIZONTAL_POSITION_PAGE,
            self::RELATIVE_HORIZONTAL_POSITION_COLUMN,
            self::RELATIVE_HORIZONTAL_POSITION_DEFAULT,
            self::RELATIVE_HORIZONTAL_POSITION_CHARACTER,
            self::RELATIVE_HORIZONTAL_POSITION_LEFT_MARGIN,
            self::RELATIVE_HORIZONTAL_POSITION_RIGHT_MARGIN,
            self::RELATIVE_HORIZONTAL_POSITION_INSIDE_MARGIN,
            self::RELATIVE_HORIZONTAL_POSITION_OUTSIDE_MARGIN
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRelativeVerticalPositionAllowableValues()
    {
        return [
            self::RELATIVE_VERTICAL_POSITION_MARGIN,
            self::RELATIVE_VERTICAL_POSITION_TABLE_DEFAULT,
            self::RELATIVE_VERTICAL_POSITION_PAGE,
            self::RELATIVE_VERTICAL_POSITION_PARAGRAPH,
            self::RELATIVE_VERTICAL_POSITION_TEXT_FRAME_DEFAULT,
            self::RELATIVE_VERTICAL_POSITION_LINE,
            self::RELATIVE_VERTICAL_POSITION_TOP_MARGIN,
            self::RELATIVE_VERTICAL_POSITION_BOTTOM_MARGIN,
            self::RELATIVE_VERTICAL_POSITION_INSIDE_MARGIN,
            self::RELATIVE_VERTICAL_POSITION_OUTSIDE_MARGIN
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWrapTypeAllowableValues()
    {
        return [
            self::WRAP_TYPE_INLINE,
            self::WRAP_TYPE_TOP_BOTTOM,
            self::WRAP_TYPE_SQUARE,
            self::WRAP_TYPE_NONE,
            self::WRAP_TYPE_TIGHT,
            self::WRAP_TYPE_THROUGH
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
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['relative_horizontal_position'] = isset($data['relative_horizontal_position']) ? $data['relative_horizontal_position'] : null;
        $this->container['relative_vertical_position'] = isset($data['relative_vertical_position']) ? $data['relative_vertical_position'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['wrap_type'] = isset($data['wrap_type']) ? $data['wrap_type'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRelativeHorizontalPositionAllowableValues();
        if (!in_array($this->container['relative_horizontal_position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'relative_horizontal_position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRelativeVerticalPositionAllowableValues();
        if (!in_array($this->container['relative_vertical_position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'relative_vertical_position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWrapTypeAllowableValues();
        if (!in_array($this->container['wrap_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'wrap_type', must be one of '%s'",
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
        $allowedValues = $this->getRelativeHorizontalPositionAllowableValues();
        if (!in_array($this->container['relative_horizontal_position'], $allowedValues)) {
            return false;
        }

        $allowedValues = $this->getRelativeVerticalPositionAllowableValues();
        if (!in_array($this->container['relative_vertical_position'], $allowedValues)) {
            return false;
        }

        $allowedValues = $this->getWrapTypeAllowableValues();
        if (!in_array($this->container['wrap_type'], $allowedValues)) {
            return false;
        }


        return true;
    }

    /*
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /*
     * Sets height
     *
     * @param double $height Gets or sets the height of the DrawingObject in points.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /*
     * Gets left
     *
     * @return double
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /*
     * Sets left
     *
     * @param double $left Gets or sets the distance in points from the origin to the left side of the image.
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;
        return $this;
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
     * @param \Aspose\Words\Model\DocumentPosition $position Gets or sets the position, before which the DrawingObject will be inserted.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /*
     * Gets relative_horizontal_position
     *
     * @return string
     */
    public function getRelativeHorizontalPosition()
    {
        return $this->container['relative_horizontal_position'];
    }

    /*
     * Sets relative_horizontal_position
     *
     * @param string $relative_horizontal_position Gets or sets the relative horizontal position, from which the distance to the image is measured.
     *
     * @return $this
     */
    public function setRelativeHorizontalPosition($relative_horizontal_position)
    {
        $allowedValues = $this->getRelativeHorizontalPositionAllowableValues();
        if ((!is_numeric($relative_horizontal_position) && !in_array($relative_horizontal_position, $allowedValues)) || (is_numeric($relative_horizontal_position) && !in_array($allowedValues[$relative_horizontal_position], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'relative_horizontal_position', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['relative_horizontal_position'] = $relative_horizontal_position;
        return $this;
    }

    /*
     * Gets relative_vertical_position
     *
     * @return string
     */
    public function getRelativeVerticalPosition()
    {
        return $this->container['relative_vertical_position'];
    }

    /*
     * Sets relative_vertical_position
     *
     * @param string $relative_vertical_position Gets or sets the relative vertical position, from which the distance to the image is measured.
     *
     * @return $this
     */
    public function setRelativeVerticalPosition($relative_vertical_position)
    {
        $allowedValues = $this->getRelativeVerticalPositionAllowableValues();
        if ((!is_numeric($relative_vertical_position) && !in_array($relative_vertical_position, $allowedValues)) || (is_numeric($relative_vertical_position) && !in_array($allowedValues[$relative_vertical_position], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'relative_vertical_position', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['relative_vertical_position'] = $relative_vertical_position;
        return $this;
    }

    /*
     * Gets top
     *
     * @return double
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /*
     * Sets top
     *
     * @param double $top Gets or sets the distance in points from the origin to the top side of the image.
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /*
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /*
     * Sets width
     *
     * @param double $width Gets or sets the width of the DrawingObjects in points.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /*
     * Gets wrap_type
     *
     * @return string
     */
    public function getWrapType()
    {
        return $this->container['wrap_type'];
    }

    /*
     * Sets wrap_type
     *
     * @param string $wrap_type Gets or sets the option indicating how to wrap text around the image.
     *
     * @return $this
     */
    public function setWrapType($wrap_type)
    {
        $allowedValues = $this->getWrapTypeAllowableValues();
        if ((!is_numeric($wrap_type) && !in_array($wrap_type, $allowedValues)) || (is_numeric($wrap_type) && !in_array($allowedValues[$wrap_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'wrap_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['wrap_type'] = $wrap_type;
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

