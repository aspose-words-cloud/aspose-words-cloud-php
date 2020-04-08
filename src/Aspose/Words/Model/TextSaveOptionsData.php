<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextSaveOptionsData.php">
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
 * TextSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * TextSaveOptionsData
 *
 * @description Container class for text save options.
 */
class TextSaveOptionsData extends SaveOptionsData 
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
        'encoding' => 'string',
        'export_headers_footers_mode' => 'string',
        'force_page_breaks' => 'bool',
        'paragraph_break' => 'string',
        'preserve_table_layout' => 'bool',
        'simplify_list_labels' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'add_bidi_marks' => null,
        'encoding' => null,
        'export_headers_footers_mode' => null,
        'force_page_breaks' => null,
        'paragraph_break' => null,
        'preserve_table_layout' => null,
        'simplify_list_labels' => null
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
        'encoding' => 'Encoding',
        'export_headers_footers_mode' => 'ExportHeadersFootersMode',
        'force_page_breaks' => 'ForcePageBreaks',
        'paragraph_break' => 'ParagraphBreak',
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
        'encoding' => 'setEncoding',
        'export_headers_footers_mode' => 'setExportHeadersFootersMode',
        'force_page_breaks' => 'setForcePageBreaks',
        'paragraph_break' => 'setParagraphBreak',
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
        'encoding' => 'getEncoding',
        'export_headers_footers_mode' => 'getExportHeadersFootersMode',
        'force_page_breaks' => 'getForcePageBreaks',
        'paragraph_break' => 'getParagraphBreak',
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

    const EXPORT_HEADERS_FOOTERS_MODE_NONE = 'None';
    const EXPORT_HEADERS_FOOTERS_MODE_PRIMARY_ONLY = 'PrimaryOnly';
    const EXPORT_HEADERS_FOOTERS_MODE_ALL_AT_END = 'AllAtEnd';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExportHeadersFootersModeAllowableValues()
    {
        return [
            self::EXPORT_HEADERS_FOOTERS_MODE_NONE,
            self::EXPORT_HEADERS_FOOTERS_MODE_PRIMARY_ONLY,
            self::EXPORT_HEADERS_FOOTERS_MODE_ALL_AT_END
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

        $this->container['add_bidi_marks'] = isset($data['add_bidi_marks']) ? $data['add_bidi_marks'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['export_headers_footers_mode'] = isset($data['export_headers_footers_mode']) ? $data['export_headers_footers_mode'] : null;
        $this->container['force_page_breaks'] = isset($data['force_page_breaks']) ? $data['force_page_breaks'] : null;
        $this->container['paragraph_break'] = isset($data['paragraph_break']) ? $data['paragraph_break'] : null;
        $this->container['preserve_table_layout'] = isset($data['preserve_table_layout']) ? $data['preserve_table_layout'] : null;
        $this->container['simplify_list_labels'] = isset($data['simplify_list_labels']) ? $data['simplify_list_labels'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getExportHeadersFootersModeAllowableValues();
        if (!in_array($this->container['export_headers_footers_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'export_headers_footers_mode', must be one of '%s'",
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

        $allowedValues = $this->getExportHeadersFootersModeAllowableValues();
        if (!in_array($this->container['export_headers_footers_mode'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param bool $add_bidi_marks Gets or sets specifies whether to add bi-directional marks before each BiDi run when exporting in plain text format. The default value is true.
     *
     * @return $this
     */
    public function setAddBidiMarks($add_bidi_marks)
    {
        $this->container['add_bidi_marks'] = $add_bidi_marks;

        return $this;
    }

    /*
     * Gets encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /*
     * Sets encoding
     *
     * @param string $encoding Gets or sets specifies the encoding to use when exporting in plain text format.
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /*
     * Gets export_headers_footers_mode
     *
     * @return string
     */
    public function getExportHeadersFootersMode()
    {
        return $this->container['export_headers_footers_mode'];
    }

    /*
     * Sets export_headers_footers_mode
     *
     * @param string $export_headers_footers_mode Gets or sets specifies whether to output headers and footers when exporting in plain text format. default value is TxtExportHeadersFootersMode.PrimaryOnly.
     *
     * @return $this
     */
    public function setExportHeadersFootersMode($export_headers_footers_mode)
    {
        $allowedValues = $this->getExportHeadersFootersModeAllowableValues();
        if ((!is_numeric($export_headers_footers_mode) && !in_array($export_headers_footers_mode, $allowedValues)) || (is_numeric($export_headers_footers_mode) && !in_array($allowedValues[$export_headers_footers_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'export_headers_footers_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['export_headers_footers_mode'] = $export_headers_footers_mode;

        return $this;
    }

    /*
     * Gets force_page_breaks
     *
     * @return bool
     */
    public function getForcePageBreaks()
    {
        return $this->container['force_page_breaks'];
    }

    /*
     * Sets force_page_breaks
     *
     * @param bool $force_page_breaks Gets or sets allows to specify whether the page breaks should be preserved during export. The default value is false.
     *
     * @return $this
     */
    public function setForcePageBreaks($force_page_breaks)
    {
        $this->container['force_page_breaks'] = $force_page_breaks;

        return $this;
    }

    /*
     * Gets paragraph_break
     *
     * @return string
     */
    public function getParagraphBreak()
    {
        return $this->container['paragraph_break'];
    }

    /*
     * Sets paragraph_break
     *
     * @param string $paragraph_break Gets or sets specifies the string to use as a paragraph break when exporting in plain text format.
     *
     * @return $this
     */
    public function setParagraphBreak($paragraph_break)
    {
        $this->container['paragraph_break'] = $paragraph_break;

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
     * @param bool $preserve_table_layout Gets or sets specifies whether the program should attempt to preserve layout of tables when saving in the plain text format.
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
     * @param bool $simplify_list_labels Gets or sets specifies whether the program should simplify list labels in case of complex label formatting not being adequately represented by plain text.
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
