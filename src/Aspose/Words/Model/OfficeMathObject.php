<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OfficeMathObject.php">
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
 * OfficeMathObject
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * OfficeMathObject
 *
 * @description OfficeMath object.
 */
class OfficeMathObject extends OfficeMathLink 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OfficeMathObject";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'content' => '\Aspose\Words\Model\StoryChildNodes',
        'display_type' => 'string',
        'justification' => 'string',
        'math_object_type' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'content' => null,
        'display_type' => null,
        'justification' => null,
        'math_object_type' => null
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
        'content' => 'Content',
        'display_type' => 'DisplayType',
        'justification' => 'Justification',
        'math_object_type' => 'MathObjectType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'display_type' => 'setDisplayType',
        'justification' => 'setJustification',
        'math_object_type' => 'setMathObjectType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'display_type' => 'getDisplayType',
        'justification' => 'getJustification',
        'math_object_type' => 'getMathObjectType'
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

    const DISPLAY_TYPE_DISPLAY = 'Display';
    const DISPLAY_TYPE_INLINE = 'Inline';
    const JUSTIFICATION_CENTER_GROUP = 'CenterGroup';
    const JUSTIFICATION__DEFAULT = 'Default';
    const JUSTIFICATION_CENTER = 'Center';
    const JUSTIFICATION_LEFT = 'Left';
    const JUSTIFICATION_RIGHT = 'Right';
    const JUSTIFICATION_INLINE = 'Inline';
    const MATH_OBJECT_TYPE_O_MATH = 'OMath';
    const MATH_OBJECT_TYPE_O_MATH_PARA = 'OMathPara';
    const MATH_OBJECT_TYPE_ACCENT = 'Accent';
    const MATH_OBJECT_TYPE_BAR = 'Bar';
    const MATH_OBJECT_TYPE_BORDER_BOX = 'BorderBox';
    const MATH_OBJECT_TYPE_BOX = 'Box';
    const MATH_OBJECT_TYPE_DELIMITER = 'Delimiter';
    const MATH_OBJECT_TYPE_DEGREE = 'Degree';
    const MATH_OBJECT_TYPE_ARGUMENT = 'Argument';
    const MATH_OBJECT_TYPE__ARRAY = 'Array';
    const MATH_OBJECT_TYPE_FRACTION = 'Fraction';
    const MATH_OBJECT_TYPE_DENOMINATOR = 'Denominator';
    const MATH_OBJECT_TYPE_NUMERATOR = 'Numerator';
    const MATH_OBJECT_TYPE__FUNCTION = 'Function';
    const MATH_OBJECT_TYPE_FUNCTION_NAME = 'FunctionName';
    const MATH_OBJECT_TYPE_GROUP_CHARACTER = 'GroupCharacter';
    const MATH_OBJECT_TYPE_LIMIT = 'Limit';
    const MATH_OBJECT_TYPE_LOWER_LIMIT = 'LowerLimit';
    const MATH_OBJECT_TYPE_UPPER_LIMIT = 'UpperLimit';
    const MATH_OBJECT_TYPE_MATRIX = 'Matrix';
    const MATH_OBJECT_TYPE_MATRIX_ROW = 'MatrixRow';
    const MATH_OBJECT_TYPE_N_ARY = 'NAry';
    const MATH_OBJECT_TYPE_PHANTOM = 'Phantom';
    const MATH_OBJECT_TYPE_RADICAL = 'Radical';
    const MATH_OBJECT_TYPE_SUBSCRIPT_PART = 'SubscriptPart';
    const MATH_OBJECT_TYPE_SUPERSCRIPT_PART = 'SuperscriptPart';
    const MATH_OBJECT_TYPE_PRE_SUB_SUPERSCRIPT = 'PreSubSuperscript';
    const MATH_OBJECT_TYPE_SUBSCRIPT = 'Subscript';
    const MATH_OBJECT_TYPE_SUB_SUPERSCRIPT = 'SubSuperscript';
    const MATH_OBJECT_TYPE_SUPERCRIPT = 'Supercript';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisplayTypeAllowableValues()
    {
        return [
            self::DISPLAY_TYPE_DISPLAY,
            self::DISPLAY_TYPE_INLINE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJustificationAllowableValues()
    {
        return [
            self::JUSTIFICATION_CENTER_GROUP,
            self::JUSTIFICATION__DEFAULT,
            self::JUSTIFICATION_CENTER,
            self::JUSTIFICATION_LEFT,
            self::JUSTIFICATION_RIGHT,
            self::JUSTIFICATION_INLINE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMathObjectTypeAllowableValues()
    {
        return [
            self::MATH_OBJECT_TYPE_O_MATH,
            self::MATH_OBJECT_TYPE_O_MATH_PARA,
            self::MATH_OBJECT_TYPE_ACCENT,
            self::MATH_OBJECT_TYPE_BAR,
            self::MATH_OBJECT_TYPE_BORDER_BOX,
            self::MATH_OBJECT_TYPE_BOX,
            self::MATH_OBJECT_TYPE_DELIMITER,
            self::MATH_OBJECT_TYPE_DEGREE,
            self::MATH_OBJECT_TYPE_ARGUMENT,
            self::MATH_OBJECT_TYPE__ARRAY,
            self::MATH_OBJECT_TYPE_FRACTION,
            self::MATH_OBJECT_TYPE_DENOMINATOR,
            self::MATH_OBJECT_TYPE_NUMERATOR,
            self::MATH_OBJECT_TYPE__FUNCTION,
            self::MATH_OBJECT_TYPE_FUNCTION_NAME,
            self::MATH_OBJECT_TYPE_GROUP_CHARACTER,
            self::MATH_OBJECT_TYPE_LIMIT,
            self::MATH_OBJECT_TYPE_LOWER_LIMIT,
            self::MATH_OBJECT_TYPE_UPPER_LIMIT,
            self::MATH_OBJECT_TYPE_MATRIX,
            self::MATH_OBJECT_TYPE_MATRIX_ROW,
            self::MATH_OBJECT_TYPE_N_ARY,
            self::MATH_OBJECT_TYPE_PHANTOM,
            self::MATH_OBJECT_TYPE_RADICAL,
            self::MATH_OBJECT_TYPE_SUBSCRIPT_PART,
            self::MATH_OBJECT_TYPE_SUPERSCRIPT_PART,
            self::MATH_OBJECT_TYPE_PRE_SUB_SUPERSCRIPT,
            self::MATH_OBJECT_TYPE_SUBSCRIPT,
            self::MATH_OBJECT_TYPE_SUB_SUPERSCRIPT,
            self::MATH_OBJECT_TYPE_SUPERCRIPT
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

        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['display_type'] = isset($data['display_type']) ? $data['display_type'] : null;
        $this->container['justification'] = isset($data['justification']) ? $data['justification'] : null;
        $this->container['math_object_type'] = isset($data['math_object_type']) ? $data['math_object_type'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getDisplayTypeAllowableValues();
        if (!in_array($this->container['display_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'display_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJustificationAllowableValues();
        if (!in_array($this->container['justification'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'justification', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMathObjectTypeAllowableValues();
        if (!in_array($this->container['math_object_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'math_object_type', must be one of '%s'",
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

        $allowedValues = $this->getDisplayTypeAllowableValues();
        if (!in_array($this->container['display_type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getJustificationAllowableValues();
        if (!in_array($this->container['justification'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getMathObjectTypeAllowableValues();
        if (!in_array($this->container['math_object_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets content
     *
     * @return \Aspose\Words\Model\StoryChildNodes
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /*
     * Sets content
     *
     * @param \Aspose\Words\Model\StoryChildNodes $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /*
     * Gets display_type
     *
     * @return string
     */
    public function getDisplayType()
    {
        return $this->container['display_type'];
    }

    /*
     * Sets display_type
     *
     * @param string $display_type Gets or sets /sets Office Math display format type which represents whether an equation is displayed inline with the text or displayed on its own line.
     *
     * @return $this
     */
    public function setDisplayType($display_type)
    {
        $allowedValues = $this->getDisplayTypeAllowableValues();
        if ((!is_numeric($display_type) && !in_array($display_type, $allowedValues)) || (is_numeric($display_type) && !in_array($allowedValues[$display_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'display_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['display_type'] = $display_type;

        return $this;
    }

    /*
     * Gets justification
     *
     * @return string
     */
    public function getJustification()
    {
        return $this->container['justification'];
    }

    /*
     * Sets justification
     *
     * @param string $justification Gets or sets /sets Office Math justification.
     *
     * @return $this
     */
    public function setJustification($justification)
    {
        $allowedValues = $this->getJustificationAllowableValues();
        if ((!is_numeric($justification) && !in_array($justification, $allowedValues)) || (is_numeric($justification) && !in_array($allowedValues[$justification], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'justification', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['justification'] = $justification;

        return $this;
    }

    /*
     * Gets math_object_type
     *
     * @return string
     */
    public function getMathObjectType()
    {
        return $this->container['math_object_type'];
    }

    /*
     * Sets math_object_type
     *
     * @param string $math_object_type Gets or sets type Aspose.Words.Math.OfficeMath.MathObjectType of this Office Math object.
     *
     * @return $this
     */
    public function setMathObjectType($math_object_type)
    {
        $allowedValues = $this->getMathObjectTypeAllowableValues();
        if ((!is_numeric($math_object_type) && !in_array($math_object_type, $allowedValues)) || (is_numeric($math_object_type) && !in_array($allowedValues[$math_object_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'math_object_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['math_object_type'] = $math_object_type;

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
