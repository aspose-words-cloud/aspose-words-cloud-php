<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListInsert.php">
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
 * ListInsert
 *
 * @description Insert document to document list.
 */
class ListInsert implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ListInsert";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'template' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'template' => 'null'
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
        'template' => 'Template'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template' => 'setTemplate'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template' => 'getTemplate'
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

    const TEMPLATE_BULLET_DEFAULT = 'BulletDefault';
    const TEMPLATE_BULLET_DISK = 'BulletDisk';
    const TEMPLATE_BULLET_CIRCLE = 'BulletCircle';
    const TEMPLATE_BULLET_SQUARE = 'BulletSquare';
    const TEMPLATE_BULLET_DIAMONDS = 'BulletDiamonds';
    const TEMPLATE_BULLET_ARROW_HEAD = 'BulletArrowHead';
    const TEMPLATE_BULLET_TICK = 'BulletTick';
    const TEMPLATE_NUMBER_DEFAULT = 'NumberDefault';
    const TEMPLATE_NUMBER_ARABIC_DOT = 'NumberArabicDot';
    const TEMPLATE_NUMBER_ARABIC_PARENTHESIS = 'NumberArabicParenthesis';
    const TEMPLATE_NUMBER_UPPERCASE_ROMAN_DOT = 'NumberUppercaseRomanDot';
    const TEMPLATE_NUMBER_UPPERCASE_LETTER_DOT = 'NumberUppercaseLetterDot';
    const TEMPLATE_NUMBER_LOWERCASE_LETTER_PARENTHESIS = 'NumberLowercaseLetterParenthesis';
    const TEMPLATE_NUMBER_LOWERCASE_LETTER_DOT = 'NumberLowercaseLetterDot';
    const TEMPLATE_NUMBER_LOWERCASE_ROMAN_DOT = 'NumberLowercaseRomanDot';
    const TEMPLATE_OUTLINE_NUMBERS = 'OutlineNumbers';
    const TEMPLATE_OUTLINE_LEGAL = 'OutlineLegal';
    const TEMPLATE_OUTLINE_BULLETS = 'OutlineBullets';
    const TEMPLATE_OUTLINE_HEADINGS_ARTICLE_SECTION = 'OutlineHeadingsArticleSection';
    const TEMPLATE_OUTLINE_HEADINGS_LEGAL = 'OutlineHeadingsLegal';
    const TEMPLATE_OUTLINE_HEADINGS_NUMBERS = 'OutlineHeadingsNumbers';
    const TEMPLATE_OUTLINE_HEADINGS_CHAPTER = 'OutlineHeadingsChapter';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTemplateAllowableValues()
    {
        return [
            self::TEMPLATE_BULLET_DEFAULT,
            self::TEMPLATE_BULLET_DISK,
            self::TEMPLATE_BULLET_CIRCLE,
            self::TEMPLATE_BULLET_SQUARE,
            self::TEMPLATE_BULLET_DIAMONDS,
            self::TEMPLATE_BULLET_ARROW_HEAD,
            self::TEMPLATE_BULLET_TICK,
            self::TEMPLATE_NUMBER_DEFAULT,
            self::TEMPLATE_NUMBER_ARABIC_DOT,
            self::TEMPLATE_NUMBER_ARABIC_PARENTHESIS,
            self::TEMPLATE_NUMBER_UPPERCASE_ROMAN_DOT,
            self::TEMPLATE_NUMBER_UPPERCASE_LETTER_DOT,
            self::TEMPLATE_NUMBER_LOWERCASE_LETTER_PARENTHESIS,
            self::TEMPLATE_NUMBER_LOWERCASE_LETTER_DOT,
            self::TEMPLATE_NUMBER_LOWERCASE_ROMAN_DOT,
            self::TEMPLATE_OUTLINE_NUMBERS,
            self::TEMPLATE_OUTLINE_LEGAL,
            self::TEMPLATE_OUTLINE_BULLETS,
            self::TEMPLATE_OUTLINE_HEADINGS_ARTICLE_SECTION,
            self::TEMPLATE_OUTLINE_HEADINGS_LEGAL,
            self::TEMPLATE_OUTLINE_HEADINGS_NUMBERS,
            self::TEMPLATE_OUTLINE_HEADINGS_CHAPTER
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
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (isset($this->container['template'])) {
            $allowedValuesTemplate = $this->getTemplateAllowableValues();
            if (!in_array($this->container['template'], $allowedValuesTemplate)) {
                throw new \InvalidArgumentException('Property Template in ListInsert has invalid format.');
            }
        }
        if (!isset($this->container['template'])) {
            throw new \InvalidArgumentException('Property Template in ListInsert is required.');
        }

    }

    /*
     * Gets template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /*
     * Sets template
     *
     * @param string $template Gets or sets the option that controls how list should be restarted at each section. This option is supported only in RTF, DOC and DOCX document formats. This option will be written to DOCX only if Aspose.Words.Saving.OoxmlCompliance is higher then Aspose.Words.Saving.OoxmlCompliance.Ecma376_2006.
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $allowedValues = $this->getTemplateAllowableValues();
        if ((!is_numeric($template) && !in_array($template, $allowedValues)) || (is_numeric($template) && !in_array($allowedValues[$template], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'template', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['template'] = $template;
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

