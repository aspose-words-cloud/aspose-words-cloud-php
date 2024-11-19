<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DocumentEntryList.php">
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
 * DocumentEntryList
 *
 * @description Represents a list of documents which will be appended to the original resource document.
 */
class DocumentEntryList extends BaseEntryList
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DocumentEntryList";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'append_all_entries_to_one_section' => 'bool',
        'apply_base_document_headers_and_footers_to_appending_documents' => 'bool',
        'document_entries' => '\Aspose\Words\Model\DocumentEntry[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'append_all_entries_to_one_section' => 'null',
        'apply_base_document_headers_and_footers_to_appending_documents' => 'null',
        'document_entries' => 'null'
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
        'append_all_entries_to_one_section' => 'AppendAllEntriesToOneSection',
        'apply_base_document_headers_and_footers_to_appending_documents' => 'ApplyBaseDocumentHeadersAndFootersToAppendingDocuments',
        'document_entries' => 'DocumentEntries'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'append_all_entries_to_one_section' => 'setAppendAllEntriesToOneSection',
        'apply_base_document_headers_and_footers_to_appending_documents' => 'setApplyBaseDocumentHeadersAndFootersToAppendingDocuments',
        'document_entries' => 'setDocumentEntries'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'append_all_entries_to_one_section' => 'getAppendAllEntriesToOneSection',
        'apply_base_document_headers_and_footers_to_appending_documents' => 'getApplyBaseDocumentHeadersAndFootersToAppendingDocuments',
        'document_entries' => 'getDocumentEntries'
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
        $this->container['append_all_entries_to_one_section'] = isset($data['append_all_entries_to_one_section']) ? $data['append_all_entries_to_one_section'] : null;
        $this->container['apply_base_document_headers_and_footers_to_appending_documents'] = isset($data['apply_base_document_headers_and_footers_to_appending_documents']) ? $data['apply_base_document_headers_and_footers_to_appending_documents'] : null;
        $this->container['document_entries'] = isset($data['document_entries']) ? $data['document_entries'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (!isset($this->container['document_entries'])) {
            throw new \InvalidArgumentException('Property DocumentEntries in DocumentEntryList is required.');
        }

        if (isset($this->container['document_entries'])) {
            foreach ($this->getDocumentEntries() as &$elementDocumentEntries)
            {
                if ($elementDocumentEntries != null)
                {
                    $elementDocumentEntries->validate();
                }
            }
        }

    }

    /*
     * Gets append_all_entries_to_one_section
     *
     * @return bool
     */
    public function getAppendAllEntriesToOneSection()
    {
        return $this->container['append_all_entries_to_one_section'];
    }

    /*
     * Sets append_all_entries_to_one_section
     *
     * @param bool $append_all_entries_to_one_section Gets or sets a value indicating whether to append all documents to the same section.
     *
     * @return $this
     */
    public function setAppendAllEntriesToOneSection($append_all_entries_to_one_section)
    {
        $this->container['append_all_entries_to_one_section'] = $append_all_entries_to_one_section;
        return $this;
    }


    /*
     * Gets apply_base_document_headers_and_footers_to_appending_documents
     *
     * @return bool
     */
    public function getApplyBaseDocumentHeadersAndFootersToAppendingDocuments()
    {
        return $this->container['apply_base_document_headers_and_footers_to_appending_documents'];
    }

    /*
     * Sets apply_base_document_headers_and_footers_to_appending_documents
     *
     * @param bool $apply_base_document_headers_and_footers_to_appending_documents Gets or sets a value indicating whether to apply headers and footers from base document to appending documents. The default value is true.
     *
     * @return $this
     */
    public function setApplyBaseDocumentHeadersAndFootersToAppendingDocuments($apply_base_document_headers_and_footers_to_appending_documents)
    {
        $this->container['apply_base_document_headers_and_footers_to_appending_documents'] = $apply_base_document_headers_and_footers_to_appending_documents;
        return $this;
    }


    /*
     * Gets document_entries
     *
     * @return \Aspose\Words\Model\DocumentEntry[]
     */
    public function getDocumentEntries()
    {
        return $this->container['document_entries'];
    }

    /*
     * Sets document_entries
     *
     * @param \Aspose\Words\Model\DocumentEntry[] $document_entries Gets or sets the list of documents.
     *
     * @return $this
     */
    public function setDocumentEntries($document_entries)
    {
        $this->container['document_entries'] = $document_entries;
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
        $resultFilesContent = parent::collectFilesContent($resultFilesContent);
        if ($this->getDocumentEntries() != null)
        {
            foreach ($this->getDocumentEntries() as &$element)
            {
                $resultFilesContent = $element->collectFilesContent($resultFilesContent);
            }
        }

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

