<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CompareOptions.php">
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
 * CompareOptions
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * CompareOptions
 *
 * @description Container class for compare documents options.
 */
class CompareOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CompareOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'ignore_case_changes' => 'bool',
        'ignore_tables' => 'bool',
        'ignore_fields' => 'bool',
        'ignore_footnotes' => 'bool',
        'ignore_comments' => 'bool',
        'ignore_textboxes' => 'bool',
        'ignore_formatting' => 'bool',
        'ignore_headers_and_footers' => 'bool',
        'target' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'ignore_case_changes' => null,
        'ignore_tables' => null,
        'ignore_fields' => null,
        'ignore_footnotes' => null,
        'ignore_comments' => null,
        'ignore_textboxes' => null,
        'ignore_formatting' => null,
        'ignore_headers_and_footers' => null,
        'target' => null
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
        'ignore_case_changes' => 'IgnoreCaseChanges',
        'ignore_tables' => 'IgnoreTables',
        'ignore_fields' => 'IgnoreFields',
        'ignore_footnotes' => 'IgnoreFootnotes',
        'ignore_comments' => 'IgnoreComments',
        'ignore_textboxes' => 'IgnoreTextboxes',
        'ignore_formatting' => 'IgnoreFormatting',
        'ignore_headers_and_footers' => 'IgnoreHeadersAndFooters',
        'target' => 'Target'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ignore_case_changes' => 'setIgnoreCaseChanges',
        'ignore_tables' => 'setIgnoreTables',
        'ignore_fields' => 'setIgnoreFields',
        'ignore_footnotes' => 'setIgnoreFootnotes',
        'ignore_comments' => 'setIgnoreComments',
        'ignore_textboxes' => 'setIgnoreTextboxes',
        'ignore_formatting' => 'setIgnoreFormatting',
        'ignore_headers_and_footers' => 'setIgnoreHeadersAndFooters',
        'target' => 'setTarget'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ignore_case_changes' => 'getIgnoreCaseChanges',
        'ignore_tables' => 'getIgnoreTables',
        'ignore_fields' => 'getIgnoreFields',
        'ignore_footnotes' => 'getIgnoreFootnotes',
        'ignore_comments' => 'getIgnoreComments',
        'ignore_textboxes' => 'getIgnoreTextboxes',
        'ignore_formatting' => 'getIgnoreFormatting',
        'ignore_headers_and_footers' => 'getIgnoreHeadersAndFooters',
        'target' => 'getTarget'
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

    const TARGET_CURRENT = 'Current';
    const TARGET__NEW = 'New';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetAllowableValues()
    {
        return [
            self::TARGET_CURRENT,
            self::TARGET__NEW
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
        $this->container['ignore_case_changes'] = isset($data['ignore_case_changes']) ? $data['ignore_case_changes'] : null;
        $this->container['ignore_tables'] = isset($data['ignore_tables']) ? $data['ignore_tables'] : null;
        $this->container['ignore_fields'] = isset($data['ignore_fields']) ? $data['ignore_fields'] : null;
        $this->container['ignore_footnotes'] = isset($data['ignore_footnotes']) ? $data['ignore_footnotes'] : null;
        $this->container['ignore_comments'] = isset($data['ignore_comments']) ? $data['ignore_comments'] : null;
        $this->container['ignore_textboxes'] = isset($data['ignore_textboxes']) ? $data['ignore_textboxes'] : null;
        $this->container['ignore_formatting'] = isset($data['ignore_formatting']) ? $data['ignore_formatting'] : null;
        $this->container['ignore_headers_and_footers'] = isset($data['ignore_headers_and_footers']) ? $data['ignore_headers_and_footers'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTargetAllowableValues();
        if (!in_array($this->container['target'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'target', must be one of '%s'",
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

        $allowedValues = $this->getTargetAllowableValues();
        if (!in_array($this->container['target'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets ignore_case_changes
     *
     * @return bool
     */
    public function getIgnoreCaseChanges()
    {
        return $this->container['ignore_case_changes'];
    }

    /*
     * Sets ignore_case_changes
     *
     * @param bool $ignore_case_changes Gets or sets a value indicating whether true indicates that documents comparison is case insensitive. By default comparison is case sensitive.
     *
     * @return $this
     */
    public function setIgnoreCaseChanges($ignore_case_changes)
    {
        $this->container['ignore_case_changes'] = $ignore_case_changes;

        return $this;
    }

    /*
     * Gets ignore_tables
     *
     * @return bool
     */
    public function getIgnoreTables()
    {
        return $this->container['ignore_tables'];
    }

    /*
     * Sets ignore_tables
     *
     * @param bool $ignore_tables Gets or sets a value indicating whether specifies whether to compare the differences in data contained in tables. By default tables are not ignored.
     *
     * @return $this
     */
    public function setIgnoreTables($ignore_tables)
    {
        $this->container['ignore_tables'] = $ignore_tables;

        return $this;
    }

    /*
     * Gets ignore_fields
     *
     * @return bool
     */
    public function getIgnoreFields()
    {
        return $this->container['ignore_fields'];
    }

    /*
     * Sets ignore_fields
     *
     * @param bool $ignore_fields Gets or sets a value indicating whether specifies whether to compare differences in fields. By default fields are not ignored.
     *
     * @return $this
     */
    public function setIgnoreFields($ignore_fields)
    {
        $this->container['ignore_fields'] = $ignore_fields;

        return $this;
    }

    /*
     * Gets ignore_footnotes
     *
     * @return bool
     */
    public function getIgnoreFootnotes()
    {
        return $this->container['ignore_footnotes'];
    }

    /*
     * Sets ignore_footnotes
     *
     * @param bool $ignore_footnotes Gets or sets a value indicating whether specifies whether to compare differences in footnotes and endnotes. By default footnotes are not ignored.
     *
     * @return $this
     */
    public function setIgnoreFootnotes($ignore_footnotes)
    {
        $this->container['ignore_footnotes'] = $ignore_footnotes;

        return $this;
    }

    /*
     * Gets ignore_comments
     *
     * @return bool
     */
    public function getIgnoreComments()
    {
        return $this->container['ignore_comments'];
    }

    /*
     * Sets ignore_comments
     *
     * @param bool $ignore_comments Gets or sets a value indicating whether specifies whether to compare differences in comments. By default comments are not ignored.
     *
     * @return $this
     */
    public function setIgnoreComments($ignore_comments)
    {
        $this->container['ignore_comments'] = $ignore_comments;

        return $this;
    }

    /*
     * Gets ignore_textboxes
     *
     * @return bool
     */
    public function getIgnoreTextboxes()
    {
        return $this->container['ignore_textboxes'];
    }

    /*
     * Sets ignore_textboxes
     *
     * @param bool $ignore_textboxes Gets or sets a value indicating whether specifies whether to compare differences in the data contained within text boxes. By default textboxes are not ignored.
     *
     * @return $this
     */
    public function setIgnoreTextboxes($ignore_textboxes)
    {
        $this->container['ignore_textboxes'] = $ignore_textboxes;

        return $this;
    }

    /*
     * Gets ignore_formatting
     *
     * @return bool
     */
    public function getIgnoreFormatting()
    {
        return $this->container['ignore_formatting'];
    }

    /*
     * Sets ignore_formatting
     *
     * @param bool $ignore_formatting Gets or sets a value indicating whether true indicates that formatting is ignored. By default document formatting is not ignored.
     *
     * @return $this
     */
    public function setIgnoreFormatting($ignore_formatting)
    {
        $this->container['ignore_formatting'] = $ignore_formatting;

        return $this;
    }

    /*
     * Gets ignore_headers_and_footers
     *
     * @return bool
     */
    public function getIgnoreHeadersAndFooters()
    {
        return $this->container['ignore_headers_and_footers'];
    }

    /*
     * Sets ignore_headers_and_footers
     *
     * @param bool $ignore_headers_and_footers Gets or sets a value indicating whether true indicates that headers and footers content is ignored. By default headers and footers are not ignored.
     *
     * @return $this
     */
    public function setIgnoreHeadersAndFooters($ignore_headers_and_footers)
    {
        $this->container['ignore_headers_and_footers'] = $ignore_headers_and_footers;

        return $this;
    }

    /*
     * Gets target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /*
     * Sets target
     *
     * @param string $target Gets or sets specifies which document shall be used as a target during comparison.
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $allowedValues = $this->getTargetAllowableValues();
        if ((!is_numeric($target) && !in_array($target, $allowedValues)) || (is_numeric($target) && !in_array($allowedValues[$target], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'target', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['target'] = $target;

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
