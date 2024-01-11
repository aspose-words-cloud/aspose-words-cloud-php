<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListLevelUpdate.php">
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
 * ListLevelUpdate
 *
 * @description Represents a document list levels.
 */
class ListLevelUpdate implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ListLevelUpdate";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'start_at' => 'int',
        'number_style' => 'string',
        'number_format' => 'string',
        'alignment' => 'string',
        'is_legal' => 'bool',
        'restart_after_level' => 'int',
        'trailing_character' => 'string',
        'tab_position' => 'double',
        'number_position' => 'double',
        'text_position' => 'double'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'start_at' => 'null',
        'number_style' => 'null',
        'number_format' => 'null',
        'alignment' => 'null',
        'is_legal' => 'null',
        'restart_after_level' => 'null',
        'trailing_character' => 'null',
        'tab_position' => 'null',
        'number_position' => 'null',
        'text_position' => 'null'
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
        'start_at' => 'StartAt',
        'number_style' => 'NumberStyle',
        'number_format' => 'NumberFormat',
        'alignment' => 'Alignment',
        'is_legal' => 'IsLegal',
        'restart_after_level' => 'RestartAfterLevel',
        'trailing_character' => 'TrailingCharacter',
        'tab_position' => 'TabPosition',
        'number_position' => 'NumberPosition',
        'text_position' => 'TextPosition'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_at' => 'setStartAt',
        'number_style' => 'setNumberStyle',
        'number_format' => 'setNumberFormat',
        'alignment' => 'setAlignment',
        'is_legal' => 'setIsLegal',
        'restart_after_level' => 'setRestartAfterLevel',
        'trailing_character' => 'setTrailingCharacter',
        'tab_position' => 'setTabPosition',
        'number_position' => 'setNumberPosition',
        'text_position' => 'setTextPosition'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_at' => 'getStartAt',
        'number_style' => 'getNumberStyle',
        'number_format' => 'getNumberFormat',
        'alignment' => 'getAlignment',
        'is_legal' => 'getIsLegal',
        'restart_after_level' => 'getRestartAfterLevel',
        'trailing_character' => 'getTrailingCharacter',
        'tab_position' => 'getTabPosition',
        'number_position' => 'getNumberPosition',
        'text_position' => 'getTextPosition'
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

    const NUMBER_STYLE_ARABIC = 'Arabic';
    const NUMBER_STYLE_UPPERCASE_ROMAN = 'UppercaseRoman';
    const NUMBER_STYLE_LOWERCASE_ROMAN = 'LowercaseRoman';
    const NUMBER_STYLE_UPPERCASE_LETTER = 'UppercaseLetter';
    const NUMBER_STYLE_LOWERCASE_LETTER = 'LowercaseLetter';
    const NUMBER_STYLE_ORDINAL = 'Ordinal';
    const NUMBER_STYLE_NUMBER = 'Number';
    const NUMBER_STYLE_ORDINAL_TEXT = 'OrdinalText';
    const NUMBER_STYLE_HEX = 'Hex';
    const NUMBER_STYLE_CHICAGO_MANUAL = 'ChicagoManual';
    const NUMBER_STYLE_KANJI = 'Kanji';
    const NUMBER_STYLE_KANJI_DIGIT = 'KanjiDigit';
    const NUMBER_STYLE_AIUEO_HALF_WIDTH = 'AiueoHalfWidth';
    const NUMBER_STYLE_IROHA_HALF_WIDTH = 'IrohaHalfWidth';
    const NUMBER_STYLE_ARABIC_FULL_WIDTH = 'ArabicFullWidth';
    const NUMBER_STYLE_ARABIC_HALF_WIDTH = 'ArabicHalfWidth';
    const NUMBER_STYLE_KANJI_TRADITIONAL = 'KanjiTraditional';
    const NUMBER_STYLE_KANJI_TRADITIONAL2 = 'KanjiTraditional2';
    const NUMBER_STYLE_NUMBER_IN_CIRCLE = 'NumberInCircle';
    const NUMBER_STYLE_DECIMAL_FULL_WIDTH = 'DecimalFullWidth';
    const NUMBER_STYLE_AIUEO = 'Aiueo';
    const NUMBER_STYLE_IROHA = 'Iroha';
    const NUMBER_STYLE_LEADING_ZERO = 'LeadingZero';
    const NUMBER_STYLE_BULLET = 'Bullet';
    const NUMBER_STYLE_GANADA = 'Ganada';
    const NUMBER_STYLE_CHOSUNG = 'Chosung';
    const NUMBER_STYLE_G_B1 = 'GB1';
    const NUMBER_STYLE_G_B2 = 'GB2';
    const NUMBER_STYLE_G_B3 = 'GB3';
    const NUMBER_STYLE_G_B4 = 'GB4';
    const NUMBER_STYLE_ZODIAC1 = 'Zodiac1';
    const NUMBER_STYLE_ZODIAC2 = 'Zodiac2';
    const NUMBER_STYLE_ZODIAC3 = 'Zodiac3';
    const NUMBER_STYLE_TRAD_CHIN_NUM1 = 'TradChinNum1';
    const NUMBER_STYLE_TRAD_CHIN_NUM2 = 'TradChinNum2';
    const NUMBER_STYLE_TRAD_CHIN_NUM3 = 'TradChinNum3';
    const NUMBER_STYLE_TRAD_CHIN_NUM4 = 'TradChinNum4';
    const NUMBER_STYLE_SIMP_CHIN_NUM1 = 'SimpChinNum1';
    const NUMBER_STYLE_SIMP_CHIN_NUM2 = 'SimpChinNum2';
    const NUMBER_STYLE_SIMP_CHIN_NUM3 = 'SimpChinNum3';
    const NUMBER_STYLE_SIMP_CHIN_NUM4 = 'SimpChinNum4';
    const NUMBER_STYLE_HANJA_READ = 'HanjaRead';
    const NUMBER_STYLE_HANJA_READ_DIGIT = 'HanjaReadDigit';
    const NUMBER_STYLE_HANGUL = 'Hangul';
    const NUMBER_STYLE_HANJA = 'Hanja';
    const NUMBER_STYLE_HEBREW1 = 'Hebrew1';
    const NUMBER_STYLE_ARABIC1 = 'Arabic1';
    const NUMBER_STYLE_HEBREW2 = 'Hebrew2';
    const NUMBER_STYLE_ARABIC2 = 'Arabic2';
    const NUMBER_STYLE_HINDI_LETTER1 = 'HindiLetter1';
    const NUMBER_STYLE_HINDI_LETTER2 = 'HindiLetter2';
    const NUMBER_STYLE_HINDI_ARABIC = 'HindiArabic';
    const NUMBER_STYLE_HINDI_CARDINAL_TEXT = 'HindiCardinalText';
    const NUMBER_STYLE_THAI_LETTER = 'ThaiLetter';
    const NUMBER_STYLE_THAI_ARABIC = 'ThaiArabic';
    const NUMBER_STYLE_THAI_CARDINAL_TEXT = 'ThaiCardinalText';
    const NUMBER_STYLE_VIET_CARDINAL_TEXT = 'VietCardinalText';
    const NUMBER_STYLE_NUMBER_IN_DASH = 'NumberInDash';
    const NUMBER_STYLE_LOWERCASE_RUSSIAN = 'LowercaseRussian';
    const NUMBER_STYLE_UPPERCASE_RUSSIAN = 'UppercaseRussian';
    const NUMBER_STYLE_NONE = 'None';
    const NUMBER_STYLE_CUSTOM = 'Custom';
    const ALIGNMENT_LEFT = 'Left';
    const ALIGNMENT_CENTER = 'Center';
    const ALIGNMENT_RIGHT = 'Right';
    const TRAILING_CHARACTER_TAB = 'Tab';
    const TRAILING_CHARACTER_SPACE = 'Space';
    const TRAILING_CHARACTER_NOTHING = 'Nothing';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNumberStyleAllowableValues()
    {
        return [
            self::NUMBER_STYLE_ARABIC,
            self::NUMBER_STYLE_UPPERCASE_ROMAN,
            self::NUMBER_STYLE_LOWERCASE_ROMAN,
            self::NUMBER_STYLE_UPPERCASE_LETTER,
            self::NUMBER_STYLE_LOWERCASE_LETTER,
            self::NUMBER_STYLE_ORDINAL,
            self::NUMBER_STYLE_NUMBER,
            self::NUMBER_STYLE_ORDINAL_TEXT,
            self::NUMBER_STYLE_HEX,
            self::NUMBER_STYLE_CHICAGO_MANUAL,
            self::NUMBER_STYLE_KANJI,
            self::NUMBER_STYLE_KANJI_DIGIT,
            self::NUMBER_STYLE_AIUEO_HALF_WIDTH,
            self::NUMBER_STYLE_IROHA_HALF_WIDTH,
            self::NUMBER_STYLE_ARABIC_FULL_WIDTH,
            self::NUMBER_STYLE_ARABIC_HALF_WIDTH,
            self::NUMBER_STYLE_KANJI_TRADITIONAL,
            self::NUMBER_STYLE_KANJI_TRADITIONAL2,
            self::NUMBER_STYLE_NUMBER_IN_CIRCLE,
            self::NUMBER_STYLE_DECIMAL_FULL_WIDTH,
            self::NUMBER_STYLE_AIUEO,
            self::NUMBER_STYLE_IROHA,
            self::NUMBER_STYLE_LEADING_ZERO,
            self::NUMBER_STYLE_BULLET,
            self::NUMBER_STYLE_GANADA,
            self::NUMBER_STYLE_CHOSUNG,
            self::NUMBER_STYLE_G_B1,
            self::NUMBER_STYLE_G_B2,
            self::NUMBER_STYLE_G_B3,
            self::NUMBER_STYLE_G_B4,
            self::NUMBER_STYLE_ZODIAC1,
            self::NUMBER_STYLE_ZODIAC2,
            self::NUMBER_STYLE_ZODIAC3,
            self::NUMBER_STYLE_TRAD_CHIN_NUM1,
            self::NUMBER_STYLE_TRAD_CHIN_NUM2,
            self::NUMBER_STYLE_TRAD_CHIN_NUM3,
            self::NUMBER_STYLE_TRAD_CHIN_NUM4,
            self::NUMBER_STYLE_SIMP_CHIN_NUM1,
            self::NUMBER_STYLE_SIMP_CHIN_NUM2,
            self::NUMBER_STYLE_SIMP_CHIN_NUM3,
            self::NUMBER_STYLE_SIMP_CHIN_NUM4,
            self::NUMBER_STYLE_HANJA_READ,
            self::NUMBER_STYLE_HANJA_READ_DIGIT,
            self::NUMBER_STYLE_HANGUL,
            self::NUMBER_STYLE_HANJA,
            self::NUMBER_STYLE_HEBREW1,
            self::NUMBER_STYLE_ARABIC1,
            self::NUMBER_STYLE_HEBREW2,
            self::NUMBER_STYLE_ARABIC2,
            self::NUMBER_STYLE_HINDI_LETTER1,
            self::NUMBER_STYLE_HINDI_LETTER2,
            self::NUMBER_STYLE_HINDI_ARABIC,
            self::NUMBER_STYLE_HINDI_CARDINAL_TEXT,
            self::NUMBER_STYLE_THAI_LETTER,
            self::NUMBER_STYLE_THAI_ARABIC,
            self::NUMBER_STYLE_THAI_CARDINAL_TEXT,
            self::NUMBER_STYLE_VIET_CARDINAL_TEXT,
            self::NUMBER_STYLE_NUMBER_IN_DASH,
            self::NUMBER_STYLE_LOWERCASE_RUSSIAN,
            self::NUMBER_STYLE_UPPERCASE_RUSSIAN,
            self::NUMBER_STYLE_NONE,
            self::NUMBER_STYLE_CUSTOM
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlignmentAllowableValues()
    {
        return [
            self::ALIGNMENT_LEFT,
            self::ALIGNMENT_CENTER,
            self::ALIGNMENT_RIGHT
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrailingCharacterAllowableValues()
    {
        return [
            self::TRAILING_CHARACTER_TAB,
            self::TRAILING_CHARACTER_SPACE,
            self::TRAILING_CHARACTER_NOTHING
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
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['number_style'] = isset($data['number_style']) ? $data['number_style'] : null;
        $this->container['number_format'] = isset($data['number_format']) ? $data['number_format'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['is_legal'] = isset($data['is_legal']) ? $data['is_legal'] : null;
        $this->container['restart_after_level'] = isset($data['restart_after_level']) ? $data['restart_after_level'] : null;
        $this->container['trailing_character'] = isset($data['trailing_character']) ? $data['trailing_character'] : null;
        $this->container['tab_position'] = isset($data['tab_position']) ? $data['tab_position'] : null;
        $this->container['number_position'] = isset($data['number_position']) ? $data['number_position'] : null;
        $this->container['text_position'] = isset($data['text_position']) ? $data['text_position'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (isset($this->container['number_style'])) {
            $allowedValuesNumberStyle = $this->getNumberStyleAllowableValues();
            if (!in_array($this->container['number_style'], $allowedValuesNumberStyle)) {
                throw new \InvalidArgumentException('Property NumberStyle in ListLevelUpdate has invalid format.');
            }
        }

        if (isset($this->container['alignment'])) {
            $allowedValuesAlignment = $this->getAlignmentAllowableValues();
            if (!in_array($this->container['alignment'], $allowedValuesAlignment)) {
                throw new \InvalidArgumentException('Property Alignment in ListLevelUpdate has invalid format.');
            }
        }

        if (isset($this->container['trailing_character'])) {
            $allowedValuesTrailingCharacter = $this->getTrailingCharacterAllowableValues();
            if (!in_array($this->container['trailing_character'], $allowedValuesTrailingCharacter)) {
                throw new \InvalidArgumentException('Property TrailingCharacter in ListLevelUpdate has invalid format.');
            }
        }

    }

    /*
     * Gets start_at
     *
     * @return int
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /*
     * Sets start_at
     *
     * @param int $start_at Gets or sets the starting number for this list level. Default value is 1.
     *
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;
        return $this;
    }


    /*
     * Gets number_style
     *
     * @return string
     */
    public function getNumberStyle()
    {
        return $this->container['number_style'];
    }

    /*
     * Sets number_style
     *
     * @param string $number_style Gets or sets the number style for this list level.
     *
     * @return $this
     */
    public function setNumberStyle($number_style)
    {
        $allowedValues = $this->getNumberStyleAllowableValues();
        if ((!is_numeric($number_style) && !in_array($number_style, $allowedValues)) || (is_numeric($number_style) && !in_array($allowedValues[$number_style], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'number_style', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['number_style'] = $number_style;
        return $this;
    }


    /*
     * Gets number_format
     *
     * @return string
     */
    public function getNumberFormat()
    {
        return $this->container['number_format'];
    }

    /*
     * Sets number_format
     *
     * @param string $number_format Gets or sets the number format for the list level. Among normal text characters, the string can contain placeholder characters \\x0000 to \\x0008 representing the numbers from the corresponding list levels. For example, the string "\\x0000.\\x0001)" will generate a list label that looks something like "1.5)". The number "1" is the current number from the 1st list level, the number "5" is the current number from the 2nd list level. Null is not allowed, but an empty string meaning no number is valid.
     *
     * @return $this
     */
    public function setNumberFormat($number_format)
    {
        $this->container['number_format'] = $number_format;
        return $this;
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
     * @param string $alignment Gets or sets the justification of the actual number of the list item. The list label is justified relative to the Aspose.Words.Lists.ListLevel.NumberPosition property.
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
     * Gets is_legal
     *
     * @return bool
     */
    public function getIsLegal()
    {
        return $this->container['is_legal'];
    }

    /*
     * Sets is_legal
     *
     * @param bool $is_legal Gets or sets a value indicating whether the level turns all inherited numbers to Arabic, false if it preserves their number style.
     *
     * @return $this
     */
    public function setIsLegal($is_legal)
    {
        $this->container['is_legal'] = $is_legal;
        return $this;
    }


    /*
     * Gets restart_after_level
     *
     * @return int
     */
    public function getRestartAfterLevel()
    {
        return $this->container['restart_after_level'];
    }

    /*
     * Sets restart_after_level
     *
     * @param int $restart_after_level Gets or sets the list level that must appear before the specified list level restarts numbering. The value of -1 means the numbering will continue.
     *
     * @return $this
     */
    public function setRestartAfterLevel($restart_after_level)
    {
        $this->container['restart_after_level'] = $restart_after_level;
        return $this;
    }


    /*
     * Gets trailing_character
     *
     * @return string
     */
    public function getTrailingCharacter()
    {
        return $this->container['trailing_character'];
    }

    /*
     * Sets trailing_character
     *
     * @param string $trailing_character Gets or sets the character to be inserted after the number for the list level.
     *
     * @return $this
     */
    public function setTrailingCharacter($trailing_character)
    {
        $allowedValues = $this->getTrailingCharacterAllowableValues();
        if ((!is_numeric($trailing_character) && !in_array($trailing_character, $allowedValues)) || (is_numeric($trailing_character) && !in_array($allowedValues[$trailing_character], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'trailing_character', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['trailing_character'] = $trailing_character;
        return $this;
    }


    /*
     * Gets tab_position
     *
     * @return double
     */
    public function getTabPosition()
    {
        return $this->container['tab_position'];
    }

    /*
     * Sets tab_position
     *
     * @param double $tab_position Gets or sets the tab position (in points) for the list level. Has effect only when Aspose.Words.Lists.ListLevel.TrailingCharacter is a tab. Aspose.Words.Lists.ListLevel.NumberPosition Aspose.Words.Lists.ListLevel.TextPosition.
     *
     * @return $this
     */
    public function setTabPosition($tab_position)
    {
        $this->container['tab_position'] = $tab_position;
        return $this;
    }


    /*
     * Gets number_position
     *
     * @return double
     */
    public function getNumberPosition()
    {
        return $this->container['number_position'];
    }

    /*
     * Sets number_position
     *
     * @param double $number_position Gets or sets the position (in points) of the number or bullet for the list level. Aspose.Words.Lists.ListLevel.NumberPosition corresponds to LeftIndent plus FirstLineIndent of the paragraph. Aspose.Words.Lists.ListLevel.TextPosition Aspose.Words.Lists.ListLevel.TabPosition.
     *
     * @return $this
     */
    public function setNumberPosition($number_position)
    {
        $this->container['number_position'] = $number_position;
        return $this;
    }


    /*
     * Gets text_position
     *
     * @return double
     */
    public function getTextPosition()
    {
        return $this->container['text_position'];
    }

    /*
     * Sets text_position
     *
     * @param double $text_position Gets or sets the position (in points) for the second line of wrapping text for the list level. Aspose.Words.Lists.ListLevel.TextPosition corresponds to LeftIndent of the paragraph. Aspose.Words.Lists.ListLevel.NumberPosition Aspose.Words.Lists.ListLevel.TabPosition.
     *
     * @return $this
     */
    public function setTextPosition($text_position)
    {
        $this->container['text_position'] = $text_position;
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

