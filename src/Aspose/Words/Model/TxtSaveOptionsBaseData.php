<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TxtSaveOptionsBaseData.php">
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
 * TxtSaveOptionsBaseData
 *
 * @description Base class for save options of text formats.
 */
abstract class TxtSaveOptionsBaseData extends SaveOptionsData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TxtSaveOptionsBaseData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'encoding' => 'string',
        'export_headers_footers_mode' => 'string',
        'force_page_breaks' => 'bool',
        'paragraph_break' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'encoding' => 'null',
        'export_headers_footers_mode' => 'null',
        'force_page_breaks' => 'null',
        'paragraph_break' => 'null'
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
        'encoding' => 'Encoding',
        'export_headers_footers_mode' => 'ExportHeadersFootersMode',
        'force_page_breaks' => 'ForcePageBreaks',
        'paragraph_break' => 'ParagraphBreak'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encoding' => 'setEncoding',
        'export_headers_footers_mode' => 'setExportHeadersFootersMode',
        'force_page_breaks' => 'setForcePageBreaks',
        'paragraph_break' => 'setParagraphBreak'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encoding' => 'getEncoding',
        'export_headers_footers_mode' => 'getExportHeadersFootersMode',
        'force_page_breaks' => 'getForcePageBreaks',
        'paragraph_break' => 'getParagraphBreak'
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
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['export_headers_footers_mode'] = isset($data['export_headers_footers_mode']) ? $data['export_headers_footers_mode'] : null;
        $this->container['force_page_breaks'] = isset($data['force_page_breaks']) ? $data['force_page_breaks'] : null;
        $this->container['paragraph_break'] = isset($data['paragraph_break']) ? $data['paragraph_break'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['export_headers_footers_mode'])) {
            $allowedValuesExportHeadersFootersMode = $this->getExportHeadersFootersModeAllowableValues();
            if (!in_array($this->container['export_headers_footers_mode'], $allowedValuesExportHeadersFootersMode)) {
                throw new \InvalidArgumentException('Property ExportHeadersFootersMode in TxtSaveOptionsBaseData has invalid format.');
            }
        }

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
     * @param string $encoding Gets or sets the character encoding to use when exporting in plain text format.
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
     * @param string $export_headers_footers_mode Gets or sets the option that controls whether to output headers and footers when exporting in plain text format. default value is TxtExportHeadersFootersMode.PrimaryOnly.
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
     * @param bool $force_page_breaks Gets or sets a value indicating whether the page breaks should be preserved during export. The default value is false.
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
     * @param string $paragraph_break Gets or sets the string to use as a paragraph break when exporting in plain text format.
     *
     * @return $this
     */
    public function setParagraphBreak($paragraph_break)
    {
        $this->container['paragraph_break'] = $paragraph_break;
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

