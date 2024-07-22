<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Document.php">
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
 * Document
 *
 * @description Represents Words document DTO.
 */
class Document implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Document";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'links' => '\Aspose\Words\Model\Link[]',
        'document_properties' => '\Aspose\Words\Model\DocumentProperties',
        'file_name' => 'string',
        'is_encrypted' => 'bool',
        'is_signed' => 'bool',
        'source_format' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'links' => 'null',
        'document_properties' => 'null',
        'file_name' => 'null',
        'is_encrypted' => 'null',
        'is_signed' => 'null',
        'source_format' => 'null'
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
        'links' => 'Links',
        'document_properties' => 'DocumentProperties',
        'file_name' => 'FileName',
        'is_encrypted' => 'IsEncrypted',
        'is_signed' => 'IsSigned',
        'source_format' => 'SourceFormat'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'document_properties' => 'setDocumentProperties',
        'file_name' => 'setFileName',
        'is_encrypted' => 'setIsEncrypted',
        'is_signed' => 'setIsSigned',
        'source_format' => 'setSourceFormat'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'document_properties' => 'getDocumentProperties',
        'file_name' => 'getFileName',
        'is_encrypted' => 'getIsEncrypted',
        'is_signed' => 'getIsSigned',
        'source_format' => 'getSourceFormat'
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

    const SOURCE_FORMAT_UNKNOWN = 'Unknown';
    const SOURCE_FORMAT_DOC = 'Doc';
    const SOURCE_FORMAT_DOT = 'Dot';
    const SOURCE_FORMAT_DOC_PRE_WORD60 = 'DocPreWord60';
    const SOURCE_FORMAT_DOCX = 'Docx';
    const SOURCE_FORMAT_DOCM = 'Docm';
    const SOURCE_FORMAT_DOTX = 'Dotx';
    const SOURCE_FORMAT_DOTM = 'Dotm';
    const SOURCE_FORMAT_FLAT_OPC = 'FlatOpc';
    const SOURCE_FORMAT_RTF = 'Rtf';
    const SOURCE_FORMAT_WORD_ML = 'WordML';
    const SOURCE_FORMAT_HTML = 'Html';
    const SOURCE_FORMAT_MHTML = 'Mhtml';
    const SOURCE_FORMAT_EPUB = 'Epub';
    const SOURCE_FORMAT_TEXT = 'Text';
    const SOURCE_FORMAT_ODT = 'Odt';
    const SOURCE_FORMAT_OTT = 'Ott';
    const SOURCE_FORMAT_PDF = 'Pdf';
    const SOURCE_FORMAT_XPS = 'Xps';
    const SOURCE_FORMAT_TIFF = 'Tiff';
    const SOURCE_FORMAT_SVG = 'Svg';
    const SOURCE_FORMAT_AZW3 = 'Azw3';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceFormatAllowableValues()
    {
        return [
            self::SOURCE_FORMAT_UNKNOWN,
            self::SOURCE_FORMAT_DOC,
            self::SOURCE_FORMAT_DOT,
            self::SOURCE_FORMAT_DOC_PRE_WORD60,
            self::SOURCE_FORMAT_DOCX,
            self::SOURCE_FORMAT_DOCM,
            self::SOURCE_FORMAT_DOTX,
            self::SOURCE_FORMAT_DOTM,
            self::SOURCE_FORMAT_FLAT_OPC,
            self::SOURCE_FORMAT_RTF,
            self::SOURCE_FORMAT_WORD_ML,
            self::SOURCE_FORMAT_HTML,
            self::SOURCE_FORMAT_MHTML,
            self::SOURCE_FORMAT_EPUB,
            self::SOURCE_FORMAT_TEXT,
            self::SOURCE_FORMAT_ODT,
            self::SOURCE_FORMAT_OTT,
            self::SOURCE_FORMAT_PDF,
            self::SOURCE_FORMAT_XPS,
            self::SOURCE_FORMAT_TIFF,
            self::SOURCE_FORMAT_SVG,
            self::SOURCE_FORMAT_AZW3
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['document_properties'] = isset($data['document_properties']) ? $data['document_properties'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['is_encrypted'] = isset($data['is_encrypted']) ? $data['is_encrypted'] : null;
        $this->container['is_signed'] = isset($data['is_signed']) ? $data['is_signed'] : null;
        $this->container['source_format'] = isset($data['source_format']) ? $data['source_format'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {

        if (isset($this->container['links'])) {
            foreach ($this->getLinks() as &$elementLinks)
            {
                if ($elementLinks != null)
                {
                    $elementLinks->validate();
                }
            }
        }


        if (isset($this->container['document_properties'])) {
            $this->getDocumentProperties()->validate();
        }

        if (!isset($this->container['is_encrypted'])) {
            throw new \InvalidArgumentException('Property IsEncrypted in Document is required.');
        }

        if (!isset($this->container['is_signed'])) {
            throw new \InvalidArgumentException('Property IsSigned in Document is required.');
        }

        if (isset($this->container['source_format'])) {
            $allowedValuesSourceFormat = $this->getSourceFormatAllowableValues();
            if (!in_array($this->container['source_format'], $allowedValuesSourceFormat)) {
                throw new \InvalidArgumentException('Property SourceFormat in Document has invalid format.');
            }
        }
        if (!isset($this->container['source_format'])) {
            throw new \InvalidArgumentException('Property SourceFormat in Document is required.');
        }

    }

    /*
     * Gets links
     *
     * @return \Aspose\Words\Model\Link[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /*
     * Sets links
     *
     * @param \Aspose\Words\Model\Link[] $links Gets or sets the list of links that originate from this document.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }


    /*
     * Gets document_properties
     *
     * @return \Aspose\Words\Model\DocumentProperties
     */
    public function getDocumentProperties()
    {
        return $this->container['document_properties'];
    }

    /*
     * Sets document_properties
     *
     * @param \Aspose\Words\Model\DocumentProperties $document_properties Gets or sets the document properties.
     *
     * @return $this
     */
    public function setDocumentProperties($document_properties)
    {
        $this->container['document_properties'] = $document_properties;
        return $this;
    }


    /*
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /*
     * Sets file_name
     *
     * @param string $file_name Gets or sets the name of the file.
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;
        return $this;
    }


    /*
     * Gets is_encrypted
     *
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->container['is_encrypted'];
    }

    /*
     * Sets is_encrypted
     *
     * @param bool $is_encrypted Gets or sets a value indicating whether the document is encrypted and requires a password to open.
     *
     * @return $this
     */
    public function setIsEncrypted($is_encrypted)
    {
        $this->container['is_encrypted'] = $is_encrypted;
        return $this;
    }


    /*
     * Gets is_signed
     *
     * @return bool
     */
    public function getIsSigned()
    {
        return $this->container['is_signed'];
    }

    /*
     * Sets is_signed
     *
     * @param bool $is_signed Gets or sets a value indicating whether the document contains a digital signature. This property merely informs that a digital signature is present on a document, but it does not specify whether the signature is valid or not.
     *
     * @return $this
     */
    public function setIsSigned($is_signed)
    {
        $this->container['is_signed'] = $is_signed;
        return $this;
    }


    /*
     * Gets source_format
     *
     * @return string
     */
    public function getSourceFormat()
    {
        return $this->container['source_format'];
    }

    /*
     * Sets source_format
     *
     * @param string $source_format Gets or sets the original format of the document.
     *
     * @return $this
     */
    public function setSourceFormat($source_format)
    {
        $allowedValues = $this->getSourceFormatAllowableValues();
        if ((!is_numeric($source_format) && !in_array($source_format, $allowedValues)) || (is_numeric($source_format) && !in_array($allowedValues[$source_format], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'source_format', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['source_format'] = $source_format;
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

