<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TableRowFormat.php">
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
 * TableRowFormat
 *
 * @description DTO container with formatting for a table row.
 */
class TableRowFormat extends LinkElement
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TableRowFormat";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'height' => 'double',
        'height_rule' => 'string',
        'allow_break_across_pages' => 'bool',
        'heading_format' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'height' => 'null',
        'height_rule' => 'null',
        'allow_break_across_pages' => 'null',
        'heading_format' => 'null'
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
        'height_rule' => 'HeightRule',
        'allow_break_across_pages' => 'AllowBreakAcrossPages',
        'heading_format' => 'HeadingFormat'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'height_rule' => 'setHeightRule',
        'allow_break_across_pages' => 'setAllowBreakAcrossPages',
        'heading_format' => 'setHeadingFormat'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'height_rule' => 'getHeightRule',
        'allow_break_across_pages' => 'getAllowBreakAcrossPages',
        'heading_format' => 'getHeadingFormat'
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

    const HEIGHT_RULE_AT_LEAST = 'AtLeast';
    const HEIGHT_RULE_EXACTLY = 'Exactly';
    const HEIGHT_RULE_AUTO = 'Auto';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHeightRuleAllowableValues()
    {
        return [
            self::HEIGHT_RULE_AT_LEAST,
            self::HEIGHT_RULE_EXACTLY,
            self::HEIGHT_RULE_AUTO
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
        $this->container['height_rule'] = isset($data['height_rule']) ? $data['height_rule'] : null;
        $this->container['allow_break_across_pages'] = isset($data['allow_break_across_pages']) ? $data['allow_break_across_pages'] : null;
        $this->container['heading_format'] = isset($data['heading_format']) ? $data['heading_format'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['height_rule'])) {
            $allowedValuesHeightRule = $this->getHeightRuleAllowableValues();
            if (!in_array($this->container['height_rule'], $allowedValuesHeightRule)) {
                throw new \InvalidArgumentException('Property HeightRule in TableRowFormat has invalid format.');
            }
        }

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
     * @param double $height Gets or sets the height of the table row in points.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }


    /*
     * Gets height_rule
     *
     * @return string
     */
    public function getHeightRule()
    {
        return $this->container['height_rule'];
    }

    /*
     * Sets height_rule
     *
     * @param string $height_rule Gets or sets the rule for determining the height of the table row.
     *
     * @return $this
     */
    public function setHeightRule($height_rule)
    {
        $allowedValues = $this->getHeightRuleAllowableValues();
        if ((!is_numeric($height_rule) && !in_array($height_rule, $allowedValues)) || (is_numeric($height_rule) && !in_array($allowedValues[$height_rule], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'height_rule', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['height_rule'] = $height_rule;
        return $this;
    }


    /*
     * Gets allow_break_across_pages
     *
     * @return bool
     */
    public function getAllowBreakAcrossPages()
    {
        return $this->container['allow_break_across_pages'];
    }

    /*
     * Sets allow_break_across_pages
     *
     * @param bool $allow_break_across_pages Gets or sets a value indicating whether the text in a table row is allowed to split across a page break.
     *
     * @return $this
     */
    public function setAllowBreakAcrossPages($allow_break_across_pages)
    {
        $this->container['allow_break_across_pages'] = $allow_break_across_pages;
        return $this;
    }


    /*
     * Gets heading_format
     *
     * @return bool
     */
    public function getHeadingFormat()
    {
        return $this->container['heading_format'];
    }

    /*
     * Sets heading_format
     *
     * @param bool $heading_format Gets or sets a value indicating whether the row is repeated as a table heading on every page when the table spans more than one page.
     *
     * @return $this
     */
    public function setHeadingFormat($heading_format)
    {
        $this->container['heading_format'] = $heading_format;
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

