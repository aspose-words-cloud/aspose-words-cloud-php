<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TableCellFormat.php">
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
 * TableCellFormat
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * TableCellFormat
 *
 * @description Represents all formatting for a table row.
 */
class TableCellFormat extends LinkElement 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TableCellFormat";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bottom_padding' => 'double',
        'fit_text' => 'bool',
        'horizontal_merge' => 'string',
        'left_padding' => 'double',
        'orientation' => 'string',
        'preferred_width' => '\Aspose\Words\Model\PreferredWidth',
        'right_padding' => 'double',
        'top_padding' => 'double',
        'vertical_alignment' => 'string',
        'vertical_merge' => 'string',
        'width' => 'double',
        'wrap_text' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bottom_padding' => 'double',
        'fit_text' => null,
        'horizontal_merge' => null,
        'left_padding' => 'double',
        'orientation' => null,
        'preferred_width' => null,
        'right_padding' => 'double',
        'top_padding' => 'double',
        'vertical_alignment' => null,
        'vertical_merge' => null,
        'width' => 'double',
        'wrap_text' => null
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
        'bottom_padding' => 'BottomPadding',
        'fit_text' => 'FitText',
        'horizontal_merge' => 'HorizontalMerge',
        'left_padding' => 'LeftPadding',
        'orientation' => 'Orientation',
        'preferred_width' => 'PreferredWidth',
        'right_padding' => 'RightPadding',
        'top_padding' => 'TopPadding',
        'vertical_alignment' => 'VerticalAlignment',
        'vertical_merge' => 'VerticalMerge',
        'width' => 'Width',
        'wrap_text' => 'WrapText'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bottom_padding' => 'setBottomPadding',
        'fit_text' => 'setFitText',
        'horizontal_merge' => 'setHorizontalMerge',
        'left_padding' => 'setLeftPadding',
        'orientation' => 'setOrientation',
        'preferred_width' => 'setPreferredWidth',
        'right_padding' => 'setRightPadding',
        'top_padding' => 'setTopPadding',
        'vertical_alignment' => 'setVerticalAlignment',
        'vertical_merge' => 'setVerticalMerge',
        'width' => 'setWidth',
        'wrap_text' => 'setWrapText'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bottom_padding' => 'getBottomPadding',
        'fit_text' => 'getFitText',
        'horizontal_merge' => 'getHorizontalMerge',
        'left_padding' => 'getLeftPadding',
        'orientation' => 'getOrientation',
        'preferred_width' => 'getPreferredWidth',
        'right_padding' => 'getRightPadding',
        'top_padding' => 'getTopPadding',
        'vertical_alignment' => 'getVerticalAlignment',
        'vertical_merge' => 'getVerticalMerge',
        'width' => 'getWidth',
        'wrap_text' => 'getWrapText'
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

    const HORIZONTAL_MERGE_NONE = 'None';
    const HORIZONTAL_MERGE_FIRST = 'First';
    const HORIZONTAL_MERGE_PREVIOUS = 'Previous';
    const ORIENTATION_HORIZONTAL = 'Horizontal';
    const ORIENTATION_DOWNWARD = 'Downward';
    const ORIENTATION_UPWARD = 'Upward';
    const ORIENTATION_HORIZONTAL_ROTATED_FAR_EAST = 'HorizontalRotatedFarEast';
    const ORIENTATION_VERTICAL_FAR_EAST = 'VerticalFarEast';
    const ORIENTATION_VERTICAL_ROTATED_FAR_EAST = 'VerticalRotatedFarEast';
    const VERTICAL_ALIGNMENT_TOP = 'Top';
    const VERTICAL_ALIGNMENT_CENTER = 'Center';
    const VERTICAL_ALIGNMENT_BOTTOM = 'Bottom';
    const VERTICAL_MERGE_NONE = 'None';
    const VERTICAL_MERGE_FIRST = 'First';
    const VERTICAL_MERGE_PREVIOUS = 'Previous';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHorizontalMergeAllowableValues()
    {
        return [
            self::HORIZONTAL_MERGE_NONE,
            self::HORIZONTAL_MERGE_FIRST,
            self::HORIZONTAL_MERGE_PREVIOUS
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrientationAllowableValues()
    {
        return [
            self::ORIENTATION_HORIZONTAL,
            self::ORIENTATION_DOWNWARD,
            self::ORIENTATION_UPWARD,
            self::ORIENTATION_HORIZONTAL_ROTATED_FAR_EAST,
            self::ORIENTATION_VERTICAL_FAR_EAST,
            self::ORIENTATION_VERTICAL_ROTATED_FAR_EAST
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalAlignmentAllowableValues()
    {
        return [
            self::VERTICAL_ALIGNMENT_TOP,
            self::VERTICAL_ALIGNMENT_CENTER,
            self::VERTICAL_ALIGNMENT_BOTTOM
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalMergeAllowableValues()
    {
        return [
            self::VERTICAL_MERGE_NONE,
            self::VERTICAL_MERGE_FIRST,
            self::VERTICAL_MERGE_PREVIOUS
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

        $this->container['bottom_padding'] = isset($data['bottom_padding']) ? $data['bottom_padding'] : null;
        $this->container['fit_text'] = isset($data['fit_text']) ? $data['fit_text'] : null;
        $this->container['horizontal_merge'] = isset($data['horizontal_merge']) ? $data['horizontal_merge'] : null;
        $this->container['left_padding'] = isset($data['left_padding']) ? $data['left_padding'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['preferred_width'] = isset($data['preferred_width']) ? $data['preferred_width'] : null;
        $this->container['right_padding'] = isset($data['right_padding']) ? $data['right_padding'] : null;
        $this->container['top_padding'] = isset($data['top_padding']) ? $data['top_padding'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['vertical_merge'] = isset($data['vertical_merge']) ? $data['vertical_merge'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['wrap_text'] = isset($data['wrap_text']) ? $data['wrap_text'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getHorizontalMergeAllowableValues();
        if (!in_array($this->container['horizontal_merge'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'horizontal_merge', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($this->container['orientation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orientation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if (!in_array($this->container['vertical_alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vertical_alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVerticalMergeAllowableValues();
        if (!in_array($this->container['vertical_merge'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vertical_merge', must be one of '%s'",
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

        $allowedValues = $this->getHorizontalMergeAllowableValues();
        if (!in_array($this->container['horizontal_merge'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($this->container['orientation'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if (!in_array($this->container['vertical_alignment'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getVerticalMergeAllowableValues();
        if (!in_array($this->container['vertical_merge'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets bottom_padding
     *
     * @return double
     */
    public function getBottomPadding()
    {
        return $this->container['bottom_padding'];
    }

    /*
     * Sets bottom_padding
     *
     * @param double $bottom_padding Gets or sets returns or sets the amount of space (in points) to add below the contents of cell.
     *
     * @return $this
     */
    public function setBottomPadding($bottom_padding)
    {
        $this->container['bottom_padding'] = $bottom_padding;

        return $this;
    }

    /*
     * Gets fit_text
     *
     * @return bool
     */
    public function getFitText()
    {
        return $this->container['fit_text'];
    }

    /*
     * Sets fit_text
     *
     * @param bool $fit_text Gets or sets if true, fits text in the cell, compressing each paragraph to the width of the cell.
     *
     * @return $this
     */
    public function setFitText($fit_text)
    {
        $this->container['fit_text'] = $fit_text;

        return $this;
    }

    /*
     * Gets horizontal_merge
     *
     * @return string
     */
    public function getHorizontalMerge()
    {
        return $this->container['horizontal_merge'];
    }

    /*
     * Sets horizontal_merge
     *
     * @param string $horizontal_merge Gets or sets specifies how the cell is merged horizontally with other cells in the row.
     *
     * @return $this
     */
    public function setHorizontalMerge($horizontal_merge)
    {
        $allowedValues = $this->getHorizontalMergeAllowableValues();
        if ((!is_numeric($horizontal_merge) && !in_array($horizontal_merge, $allowedValues)) || (is_numeric($horizontal_merge) && !in_array($allowedValues[$horizontal_merge], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'horizontal_merge', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['horizontal_merge'] = $horizontal_merge;

        return $this;
    }

    /*
     * Gets left_padding
     *
     * @return double
     */
    public function getLeftPadding()
    {
        return $this->container['left_padding'];
    }

    /*
     * Sets left_padding
     *
     * @param double $left_padding Gets or sets returns or sets the amount of space (in points) to add to the left of the contents of cell.
     *
     * @return $this
     */
    public function setLeftPadding($left_padding)
    {
        $this->container['left_padding'] = $left_padding;

        return $this;
    }

    /*
     * Gets orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /*
     * Sets orientation
     *
     * @param string $orientation Gets or sets returns or sets the orientation of text in a table cell.
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $allowedValues = $this->getOrientationAllowableValues();
        if ((!is_numeric($orientation) && !in_array($orientation, $allowedValues)) || (is_numeric($orientation) && !in_array($allowedValues[$orientation], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'orientation', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /*
     * Gets preferred_width
     *
     * @return \Aspose\Words\Model\PreferredWidth
     */
    public function getPreferredWidth()
    {
        return $this->container['preferred_width'];
    }

    /*
     * Sets preferred_width
     *
     * @param \Aspose\Words\Model\PreferredWidth $preferred_width preferred_width
     *
     * @return $this
     */
    public function setPreferredWidth($preferred_width)
    {
        $this->container['preferred_width'] = $preferred_width;

        return $this;
    }

    /*
     * Gets right_padding
     *
     * @return double
     */
    public function getRightPadding()
    {
        return $this->container['right_padding'];
    }

    /*
     * Sets right_padding
     *
     * @param double $right_padding Gets or sets returns or sets the amount of space (in points) to add to the right of the contents of cell.
     *
     * @return $this
     */
    public function setRightPadding($right_padding)
    {
        $this->container['right_padding'] = $right_padding;

        return $this;
    }

    /*
     * Gets top_padding
     *
     * @return double
     */
    public function getTopPadding()
    {
        return $this->container['top_padding'];
    }

    /*
     * Sets top_padding
     *
     * @param double $top_padding Gets or sets returns or sets the amount of space (in points) to add above the contents of cell.
     *
     * @return $this
     */
    public function setTopPadding($top_padding)
    {
        $this->container['top_padding'] = $top_padding;

        return $this;
    }

    /*
     * Gets vertical_alignment
     *
     * @return string
     */
    public function getVerticalAlignment()
    {
        return $this->container['vertical_alignment'];
    }

    /*
     * Sets vertical_alignment
     *
     * @param string $vertical_alignment Gets or sets returns or sets the vertical alignment of text in the cell.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if ((!is_numeric($vertical_alignment) && !in_array($vertical_alignment, $allowedValues)) || (is_numeric($vertical_alignment) && !in_array($allowedValues[$vertical_alignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'vertical_alignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['vertical_alignment'] = $vertical_alignment;

        return $this;
    }

    /*
     * Gets vertical_merge
     *
     * @return string
     */
    public function getVerticalMerge()
    {
        return $this->container['vertical_merge'];
    }

    /*
     * Sets vertical_merge
     *
     * @param string $vertical_merge Gets or sets specifies how the cell is merged with other cells vertically.
     *
     * @return $this
     */
    public function setVerticalMerge($vertical_merge)
    {
        $allowedValues = $this->getVerticalMergeAllowableValues();
        if ((!is_numeric($vertical_merge) && !in_array($vertical_merge, $allowedValues)) || (is_numeric($vertical_merge) && !in_array($allowedValues[$vertical_merge], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'vertical_merge', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['vertical_merge'] = $vertical_merge;

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
     * @param double $width Gets or sets the width of the cell in points.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /*
     * Gets wrap_text
     *
     * @return bool
     */
    public function getWrapText()
    {
        return $this->container['wrap_text'];
    }

    /*
     * Sets wrap_text
     *
     * @param bool $wrap_text Gets or sets if true, wrap text for the cell.
     *
     * @return $this
     */
    public function setWrapText($wrap_text)
    {
        $this->container['wrap_text'] = $wrap_text;

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
