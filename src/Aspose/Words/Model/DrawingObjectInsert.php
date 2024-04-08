<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DrawingObjectInsert.php">
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
        'position' => '\Aspose\Words\Model\Position',
        'relative_horizontal_position' => 'string',
        'left' => 'double',
        'relative_vertical_position' => 'string',
        'top' => 'double',
        'width' => 'double',
        'height' => 'double',
        'wrap_type' => 'string',
        'aspect_ratio_locked' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'position' => 'null',
        'relative_horizontal_position' => 'null',
        'left' => 'null',
        'relative_vertical_position' => 'null',
        'top' => 'null',
        'width' => 'null',
        'height' => 'null',
        'wrap_type' => 'null',
        'aspect_ratio_locked' => 'null'
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
        'relative_horizontal_position' => 'RelativeHorizontalPosition',
        'left' => 'Left',
        'relative_vertical_position' => 'RelativeVerticalPosition',
        'top' => 'Top',
        'width' => 'Width',
        'height' => 'Height',
        'wrap_type' => 'WrapType',
        'aspect_ratio_locked' => 'AspectRatioLocked'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position' => 'setPosition',
        'relative_horizontal_position' => 'setRelativeHorizontalPosition',
        'left' => 'setLeft',
        'relative_vertical_position' => 'setRelativeVerticalPosition',
        'top' => 'setTop',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'wrap_type' => 'setWrapType',
        'aspect_ratio_locked' => 'setAspectRatioLocked'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position' => 'getPosition',
        'relative_horizontal_position' => 'getRelativeHorizontalPosition',
        'left' => 'getLeft',
        'relative_vertical_position' => 'getRelativeVerticalPosition',
        'top' => 'getTop',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'wrap_type' => 'getWrapType',
        'aspect_ratio_locked' => 'getAspectRatioLocked'
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['relative_horizontal_position'] = isset($data['relative_horizontal_position']) ? $data['relative_horizontal_position'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['relative_vertical_position'] = isset($data['relative_vertical_position']) ? $data['relative_vertical_position'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['wrap_type'] = isset($data['wrap_type']) ? $data['wrap_type'] : null;
        $this->container['aspect_ratio_locked'] = isset($data['aspect_ratio_locked']) ? $data['aspect_ratio_locked'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {

        if (isset($this->container['position'])) {
            $this->getPosition()->validate();
        }

        if (isset($this->container['relative_horizontal_position'])) {
            $allowedValuesRelativeHorizontalPosition = $this->getRelativeHorizontalPositionAllowableValues();
            if (!in_array($this->container['relative_horizontal_position'], $allowedValuesRelativeHorizontalPosition)) {
                throw new \InvalidArgumentException('Property RelativeHorizontalPosition in DrawingObjectInsert has invalid format.');
            }
        }
        if (!isset($this->container['relative_horizontal_position'])) {
            throw new \InvalidArgumentException('Property RelativeHorizontalPosition in DrawingObjectInsert is required.');
        }

        if (!isset($this->container['left'])) {
            throw new \InvalidArgumentException('Property Left in DrawingObjectInsert is required.');
        }

        if (isset($this->container['relative_vertical_position'])) {
            $allowedValuesRelativeVerticalPosition = $this->getRelativeVerticalPositionAllowableValues();
            if (!in_array($this->container['relative_vertical_position'], $allowedValuesRelativeVerticalPosition)) {
                throw new \InvalidArgumentException('Property RelativeVerticalPosition in DrawingObjectInsert has invalid format.');
            }
        }
        if (!isset($this->container['relative_vertical_position'])) {
            throw new \InvalidArgumentException('Property RelativeVerticalPosition in DrawingObjectInsert is required.');
        }

        if (!isset($this->container['top'])) {
            throw new \InvalidArgumentException('Property Top in DrawingObjectInsert is required.');
        }

        if (!isset($this->container['width'])) {
            throw new \InvalidArgumentException('Property Width in DrawingObjectInsert is required.');
        }

        if (!isset($this->container['height'])) {
            throw new \InvalidArgumentException('Property Height in DrawingObjectInsert is required.');
        }

        if (isset($this->container['wrap_type'])) {
            $allowedValuesWrapType = $this->getWrapTypeAllowableValues();
            if (!in_array($this->container['wrap_type'], $allowedValuesWrapType)) {
                throw new \InvalidArgumentException('Property WrapType in DrawingObjectInsert has invalid format.');
            }
        }
        if (!isset($this->container['wrap_type'])) {
            throw new \InvalidArgumentException('Property WrapType in DrawingObjectInsert is required.');
        }

    }

    /*
     * Gets position
     *
     * @return \Aspose\Words\Model\Position
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /*
     * Sets position
     *
     * @param \Aspose\Words\Model\Position $position Gets or sets the position, where the DrawingObject will be inserted.
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
     * Gets aspect_ratio_locked
     *
     * @return bool
     */
    public function getAspectRatioLocked()
    {
        return $this->container['aspect_ratio_locked'];
    }

    /*
     * Sets aspect_ratio_locked
     *
     * @param bool $aspect_ratio_locked Gets or sets a value indicating whether AspectRatioLocked option on or off.
     *
     * @return $this
     */
    public function setAspectRatioLocked($aspect_ratio_locked)
    {
        $this->container['aspect_ratio_locked'] = $aspect_ratio_locked;
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

