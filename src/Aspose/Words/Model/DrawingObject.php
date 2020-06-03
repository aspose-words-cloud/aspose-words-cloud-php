<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DrawingObject.php">
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
 * DrawingObject
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * DrawingObject
 *
 * @description Represents Drawing Object DTO.
 */
class DrawingObject extends DrawingObjectLink 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DrawingObject";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'height' => 'double',
        'image_data_link' => '\Aspose\Words\Model\WordsApiLink',
        'left' => 'double',
        'ole_data_link' => '\Aspose\Words\Model\WordsApiLink',
        'relative_horizontal_position' => 'string',
        'relative_vertical_position' => 'string',
        'render_links' => '\Aspose\Words\Model\WordsApiLink[]',
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
        'height' => 'double',
        'image_data_link' => null,
        'left' => 'double',
        'ole_data_link' => null,
        'relative_horizontal_position' => null,
        'relative_vertical_position' => null,
        'render_links' => null,
        'top' => 'double',
        'width' => 'double',
        'wrap_type' => null
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
        'height' => 'Height',
        'image_data_link' => 'ImageDataLink',
        'left' => 'Left',
        'ole_data_link' => 'OleDataLink',
        'relative_horizontal_position' => 'RelativeHorizontalPosition',
        'relative_vertical_position' => 'RelativeVerticalPosition',
        'render_links' => 'RenderLinks',
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
        'image_data_link' => 'setImageDataLink',
        'left' => 'setLeft',
        'ole_data_link' => 'setOleDataLink',
        'relative_horizontal_position' => 'setRelativeHorizontalPosition',
        'relative_vertical_position' => 'setRelativeVerticalPosition',
        'render_links' => 'setRenderLinks',
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
        'image_data_link' => 'getImageDataLink',
        'left' => 'getLeft',
        'ole_data_link' => 'getOleDataLink',
        'relative_horizontal_position' => 'getRelativeHorizontalPosition',
        'relative_vertical_position' => 'getRelativeVerticalPosition',
        'render_links' => 'getRenderLinks',
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

    const RELATIVE_HORIZONTAL_POSITION_MARGIN = 'Margin';
    const RELATIVE_HORIZONTAL_POSITION_PAGE = 'Page';
    const RELATIVE_HORIZONTAL_POSITION_COLUMN = 'Column';
    const RELATIVE_HORIZONTAL_POSITION__DEFAULT = 'Default';
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
            self::RELATIVE_HORIZONTAL_POSITION__DEFAULT,
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['image_data_link'] = isset($data['image_data_link']) ? $data['image_data_link'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['ole_data_link'] = isset($data['ole_data_link']) ? $data['ole_data_link'] : null;
        $this->container['relative_horizontal_position'] = isset($data['relative_horizontal_position']) ? $data['relative_horizontal_position'] : null;
        $this->container['relative_vertical_position'] = isset($data['relative_vertical_position']) ? $data['relative_vertical_position'] : null;
        $this->container['render_links'] = isset($data['render_links']) ? $data['render_links'] : null;
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
        $invalidProperties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

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
     * @param double $height Gets or sets height of the drawing object in points.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets image_data_link
     *
     * @return \Aspose\Words\Model\WordsApiLink
     */
    public function getImageDataLink()
    {
        return $this->container['image_data_link'];
    }

    /*
     * Sets image_data_link
     *
     * @param \Aspose\Words\Model\WordsApiLink $image_data_link image_data_link
     *
     * @return $this
     */
    public function setImageDataLink($image_data_link)
    {
        $this->container['image_data_link'] = $image_data_link;

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
     * @param double $left Gets or sets distance in points from the origin to the left side of the image.
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /*
     * Gets ole_data_link
     *
     * @return \Aspose\Words\Model\WordsApiLink
     */
    public function getOleDataLink()
    {
        return $this->container['ole_data_link'];
    }

    /*
     * Sets ole_data_link
     *
     * @param \Aspose\Words\Model\WordsApiLink $ole_data_link ole_data_link
     *
     * @return $this
     */
    public function setOleDataLink($ole_data_link)
    {
        $this->container['ole_data_link'] = $ole_data_link;

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
     * @param string $relative_horizontal_position Gets or sets specifies where the distance to the image is measured from.
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
     * @param string $relative_vertical_position Gets or sets specifies where the distance to the image measured from.
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
     * Gets render_links
     *
     * @return \Aspose\Words\Model\WordsApiLink[]
     */
    public function getRenderLinks()
    {
        return $this->container['render_links'];
    }

    /*
     * Sets render_links
     *
     * @param \Aspose\Words\Model\WordsApiLink[] $render_links Gets or sets a list of links that originate from this DrawingObjectDto.
     *
     * @return $this
     */
    public function setRenderLinks($render_links)
    {
        $this->container['render_links'] = $render_links;

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
     * @param double $top Gets or sets distance in points from the origin to the top side of the image.
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
     * @param double $width Gets or sets width of the drawing objects in points.
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
     * @param string $wrap_type Gets or sets specifies how to wrap text around the image.
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
