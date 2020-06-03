<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StringFormatData.php">
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
 * StringFormatData
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * StringFormatData
 *
 * @description Allows to specify System.Drawing.StringFormat options.
 */
class StringFormatData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "StringFormatData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'alignment' => 'string',
        'format_flags' => 'string',
        'hotkey_prefix' => 'string',
        'line_alignment' => 'string',
        'trimming' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'alignment' => null,
        'format_flags' => null,
        'hotkey_prefix' => null,
        'line_alignment' => null,
        'trimming' => null
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
        'alignment' => 'Alignment',
        'format_flags' => 'FormatFlags',
        'hotkey_prefix' => 'HotkeyPrefix',
        'line_alignment' => 'LineAlignment',
        'trimming' => 'Trimming'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alignment' => 'setAlignment',
        'format_flags' => 'setFormatFlags',
        'hotkey_prefix' => 'setHotkeyPrefix',
        'line_alignment' => 'setLineAlignment',
        'trimming' => 'setTrimming'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alignment' => 'getAlignment',
        'format_flags' => 'getFormatFlags',
        'hotkey_prefix' => 'getHotkeyPrefix',
        'line_alignment' => 'getLineAlignment',
        'trimming' => 'getTrimming'
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

    const ALIGNMENT_NEAR = 'Near';
    const ALIGNMENT_CENTER = 'Center';
    const ALIGNMENT_FAR = 'Far';
    const FORMAT_FLAGS_DIRECTION_RIGHT_TO_LEFT = 'DirectionRightToLeft';
    const FORMAT_FLAGS_DIRECTION_VERTICAL = 'DirectionVertical';
    const FORMAT_FLAGS_FIT_BLACK_BOX = 'FitBlackBox';
    const FORMAT_FLAGS_DISPLAY_FORMAT_CONTROL = 'DisplayFormatControl';
    const FORMAT_FLAGS_NO_FONT_FALLBACK = 'NoFontFallback';
    const FORMAT_FLAGS_MEASURE_TRAILING_SPACES = 'MeasureTrailingSpaces';
    const FORMAT_FLAGS_NO_WRAP = 'NoWrap';
    const FORMAT_FLAGS_LINE_LIMIT = 'LineLimit';
    const FORMAT_FLAGS_NO_CLIP = 'NoClip';
    const HOTKEY_PREFIX_NONE = 'None';
    const HOTKEY_PREFIX_SHOW = 'Show';
    const HOTKEY_PREFIX_HIDE = 'Hide';
    const LINE_ALIGNMENT_NEAR = 'Near';
    const LINE_ALIGNMENT_CENTER = 'Center';
    const LINE_ALIGNMENT_FAR = 'Far';
    const TRIMMING_NONE = 'None';
    const TRIMMING_CHARACTER = 'Character';
    const TRIMMING_WORD = 'Word';
    const TRIMMING_ELLIPSIS_CHARACTER = 'EllipsisCharacter';
    const TRIMMING_ELLIPSIS_WORD = 'EllipsisWord';
    const TRIMMING_ELLIPSIS_PATH = 'EllipsisPath';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlignmentAllowableValues()
    {
        return [
            self::ALIGNMENT_NEAR,
            self::ALIGNMENT_CENTER,
            self::ALIGNMENT_FAR
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatFlagsAllowableValues()
    {
        return [
            self::FORMAT_FLAGS_DIRECTION_RIGHT_TO_LEFT,
            self::FORMAT_FLAGS_DIRECTION_VERTICAL,
            self::FORMAT_FLAGS_FIT_BLACK_BOX,
            self::FORMAT_FLAGS_DISPLAY_FORMAT_CONTROL,
            self::FORMAT_FLAGS_NO_FONT_FALLBACK,
            self::FORMAT_FLAGS_MEASURE_TRAILING_SPACES,
            self::FORMAT_FLAGS_NO_WRAP,
            self::FORMAT_FLAGS_LINE_LIMIT,
            self::FORMAT_FLAGS_NO_CLIP
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHotkeyPrefixAllowableValues()
    {
        return [
            self::HOTKEY_PREFIX_NONE,
            self::HOTKEY_PREFIX_SHOW,
            self::HOTKEY_PREFIX_HIDE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLineAlignmentAllowableValues()
    {
        return [
            self::LINE_ALIGNMENT_NEAR,
            self::LINE_ALIGNMENT_CENTER,
            self::LINE_ALIGNMENT_FAR
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrimmingAllowableValues()
    {
        return [
            self::TRIMMING_NONE,
            self::TRIMMING_CHARACTER,
            self::TRIMMING_WORD,
            self::TRIMMING_ELLIPSIS_CHARACTER,
            self::TRIMMING_ELLIPSIS_WORD,
            self::TRIMMING_ELLIPSIS_PATH
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
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['format_flags'] = isset($data['format_flags']) ? $data['format_flags'] : null;
        $this->container['hotkey_prefix'] = isset($data['hotkey_prefix']) ? $data['hotkey_prefix'] : null;
        $this->container['line_alignment'] = isset($data['line_alignment']) ? $data['line_alignment'] : null;
        $this->container['trimming'] = isset($data['trimming']) ? $data['trimming'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormatFlagsAllowableValues();
        if (!in_array($this->container['format_flags'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'format_flags', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHotkeyPrefixAllowableValues();
        if (!in_array($this->container['hotkey_prefix'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hotkey_prefix', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLineAlignmentAllowableValues();
        if (!in_array($this->container['line_alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'line_alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrimmingAllowableValues();
        if (!in_array($this->container['trimming'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'trimming', must be one of '%s'",
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

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFormatFlagsAllowableValues();
        if (!in_array($this->container['format_flags'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getHotkeyPrefixAllowableValues();
        if (!in_array($this->container['hotkey_prefix'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getLineAlignmentAllowableValues();
        if (!in_array($this->container['line_alignment'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTrimmingAllowableValues();
        if (!in_array($this->container['trimming'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets alignment
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /*
     * Sets alignment
     *
     * @param string $alignment Gets or sets horizontal alignment of the string.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $allowedValues = $this->getAlignmentAllowableValues();
        if ((!is_numeric($alignment) && !in_array($alignment, $allowedValues)) || (is_numeric($alignment) && !in_array($allowedValues[$alignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'alignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /*
     * Gets format_flags
     *
     * @return string
     */
    public function getFormatFlags()
    {
        return $this->container['format_flags'];
    }

    /*
     * Sets format_flags
     *
     * @param string $format_flags Gets or sets a System.Drawing.StringFormatFlags enumeration that contains formatting information.
     *
     * @return $this
     */
    public function setFormatFlags($format_flags)
    {
        $allowedValues = $this->getFormatFlagsAllowableValues();
        if ((!is_numeric($format_flags) && !in_array($format_flags, $allowedValues)) || (is_numeric($format_flags) && !in_array($allowedValues[$format_flags], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'format_flags', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['format_flags'] = $format_flags;

        return $this;
    }

    /*
     * Gets hotkey_prefix
     *
     * @return string
     */
    public function getHotkeyPrefix()
    {
        return $this->container['hotkey_prefix'];
    }

    /*
     * Sets hotkey_prefix
     *
     * @param string $hotkey_prefix Gets or sets the System.Drawing.Text.HotkeyPrefix object for this System.Drawing.StringFormat object.
     *
     * @return $this
     */
    public function setHotkeyPrefix($hotkey_prefix)
    {
        $allowedValues = $this->getHotkeyPrefixAllowableValues();
        if ((!is_numeric($hotkey_prefix) && !in_array($hotkey_prefix, $allowedValues)) || (is_numeric($hotkey_prefix) && !in_array($allowedValues[$hotkey_prefix], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'hotkey_prefix', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['hotkey_prefix'] = $hotkey_prefix;

        return $this;
    }

    /*
     * Gets line_alignment
     *
     * @return string
     */
    public function getLineAlignment()
    {
        return $this->container['line_alignment'];
    }

    /*
     * Sets line_alignment
     *
     * @param string $line_alignment Gets or sets the vertical alignment of the string.
     *
     * @return $this
     */
    public function setLineAlignment($line_alignment)
    {
        $allowedValues = $this->getLineAlignmentAllowableValues();
        if ((!is_numeric($line_alignment) && !in_array($line_alignment, $allowedValues)) || (is_numeric($line_alignment) && !in_array($allowedValues[$line_alignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'line_alignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['line_alignment'] = $line_alignment;

        return $this;
    }

    /*
     * Gets trimming
     *
     * @return string
     */
    public function getTrimming()
    {
        return $this->container['trimming'];
    }

    /*
     * Sets trimming
     *
     * @param string $trimming Gets or sets the System.Drawing.StringTrimming enumeration for this System.Drawing.StringFormat object.
     *
     * @return $this
     */
    public function setTrimming($trimming)
    {
        $allowedValues = $this->getTrimmingAllowableValues();
        if ((!is_numeric($trimming) && !in_array($trimming, $allowedValues)) || (is_numeric($trimming) && !in_array($allowedValues[$trimming], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'trimming', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['trimming'] = $trimming;

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
