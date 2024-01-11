<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextSaveOptionsData.php">
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
 * TextSaveOptionsData
 *
 * @description Container class for text save options.
 */
class TextSaveOptionsData extends TxtSaveOptionsBaseData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TextSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'add_bidi_marks' => 'bool',
        'max_characters_per_line' => 'int',
        'preserve_table_layout' => 'bool',
        'simplify_list_labels' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'add_bidi_marks' => 'null',
        'max_characters_per_line' => 'null',
        'preserve_table_layout' => 'null',
        'simplify_list_labels' => 'null'
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
        'add_bidi_marks' => 'AddBidiMarks',
        'max_characters_per_line' => 'MaxCharactersPerLine',
        'preserve_table_layout' => 'PreserveTableLayout',
        'simplify_list_labels' => 'SimplifyListLabels'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_bidi_marks' => 'setAddBidiMarks',
        'max_characters_per_line' => 'setMaxCharactersPerLine',
        'preserve_table_layout' => 'setPreserveTableLayout',
        'simplify_list_labels' => 'setSimplifyListLabels'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_bidi_marks' => 'getAddBidiMarks',
        'max_characters_per_line' => 'getMaxCharactersPerLine',
        'preserve_table_layout' => 'getPreserveTableLayout',
        'simplify_list_labels' => 'getSimplifyListLabels'
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



    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        $this->container['add_bidi_marks'] = isset($data['add_bidi_marks']) ? $data['add_bidi_marks'] : null;
        $this->container['max_characters_per_line'] = isset($data['max_characters_per_line']) ? $data['max_characters_per_line'] : null;
        $this->container['preserve_table_layout'] = isset($data['preserve_table_layout']) ? $data['preserve_table_layout'] : null;
        $this->container['simplify_list_labels'] = isset($data['simplify_list_labels']) ? $data['simplify_list_labels'] : null;
        $this->container['save_format'] = "txt";
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (!isset($this->container['max_characters_per_line'])) {
            throw new \InvalidArgumentException('Property MaxCharactersPerLine in TextSaveOptionsData is required.');
        }

    }

    /*
     * Gets add_bidi_marks
     *
     * @return bool
     */
    public function getAddBidiMarks()
    {
        return $this->container['add_bidi_marks'];
    }

    /*
     * Sets add_bidi_marks
     *
     * @param bool $add_bidi_marks Gets or sets a value indicating whether to add bi-directional marks before each BiDi run when exporting in plain text format. The default value is true.
     *
     * @return $this
     */
    public function setAddBidiMarks($add_bidi_marks)
    {
        $this->container['add_bidi_marks'] = $add_bidi_marks;
        return $this;
    }


    /*
     * Gets max_characters_per_line
     *
     * @return int
     */
    public function getMaxCharactersPerLine()
    {
        return $this->container['max_characters_per_line'];
    }

    /*
     * Sets max_characters_per_line
     *
     * @param int $max_characters_per_line Gets or sets an integer value that specifies the maximum number of characters per one line. The default value is 0, that means no limit.
     *
     * @return $this
     */
    public function setMaxCharactersPerLine($max_characters_per_line)
    {
        $this->container['max_characters_per_line'] = $max_characters_per_line;
        return $this;
    }


    /*
     * Gets preserve_table_layout
     *
     * @return bool
     */
    public function getPreserveTableLayout()
    {
        return $this->container['preserve_table_layout'];
    }

    /*
     * Sets preserve_table_layout
     *
     * @param bool $preserve_table_layout Gets or sets a value indicating whether the program should attempt to preserve layout of tables when saving in the plain text format.
     *
     * @return $this
     */
    public function setPreserveTableLayout($preserve_table_layout)
    {
        $this->container['preserve_table_layout'] = $preserve_table_layout;
        return $this;
    }


    /*
     * Gets simplify_list_labels
     *
     * @return bool
     */
    public function getSimplifyListLabels()
    {
        return $this->container['simplify_list_labels'];
    }

    /*
     * Sets simplify_list_labels
     *
     * @param bool $simplify_list_labels Gets or sets a value indicating whether the program should simplify list labels in case of complex label formatting not being adequately represented by plain text.
     *
     * @return $this
     */
    public function setSimplifyListLabels($simplify_list_labels)
    {
        $this->container['simplify_list_labels'] = $simplify_list_labels;
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

