<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CompareData.php">
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
 * CompareData
 *
 * @description Container class for compare documents.
 */
class CompareData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CompareData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'author' => 'string',
        'compare_options' => '\Aspose\Words\Model\CompareOptions',
        'comparing_with_document' => 'string',
        'date_time' => '\DateTime',
        'file_reference' => '\Aspose\Words\Model\FileReference',
        'result_document_format' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'author' => 'null',
        'compare_options' => 'null',
        'comparing_with_document' => 'null',
        'date_time' => 'null',
        'file_reference' => 'null',
        'result_document_format' => 'null'
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
        'author' => 'Author',
        'compare_options' => 'CompareOptions',
        'comparing_with_document' => 'ComparingWithDocument',
        'date_time' => 'DateTime',
        'file_reference' => 'FileReference',
        'result_document_format' => 'ResultDocumentFormat'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author' => 'setAuthor',
        'compare_options' => 'setCompareOptions',
        'comparing_with_document' => 'setComparingWithDocument',
        'date_time' => 'setDateTime',
        'file_reference' => 'setFileReference',
        'result_document_format' => 'setResultDocumentFormat'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author' => 'getAuthor',
        'compare_options' => 'getCompareOptions',
        'comparing_with_document' => 'getComparingWithDocument',
        'date_time' => 'getDateTime',
        'file_reference' => 'getFileReference',
        'result_document_format' => 'getResultDocumentFormat'
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['compare_options'] = isset($data['compare_options']) ? $data['compare_options'] : null;
        $this->container['comparing_with_document'] = isset($data['comparing_with_document']) ? $data['comparing_with_document'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['file_reference'] = isset($data['file_reference']) ? $data['file_reference'] : null;
        $this->container['result_document_format'] = isset($data['result_document_format']) ? $data['result_document_format'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (!isset($this->container['author'])) {
            throw new \InvalidArgumentException('Property Author in CompareData is required.');
        }


        if (isset($this->container['compare_options'])) {
            $this->getCompareOptions()->validate();
        }

        if (!isset($this->container['file_reference'])) {
            throw new \InvalidArgumentException('Property FileReference in CompareData is required.');
        }

        if (isset($this->container['file_reference'])) {
            $this->getFileReference()->validate();
        }

    }

    /*
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /*
     * Sets author
     *
     * @param string $author Gets or sets the initials of the author to use for revisions.
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }


    /*
     * Gets compare_options
     *
     * @return \Aspose\Words\Model\CompareOptions
     */
    public function getCompareOptions()
    {
        return $this->container['compare_options'];
    }

    /*
     * Sets compare_options
     *
     * @param \Aspose\Words\Model\CompareOptions $compare_options Gets or sets the compare options.
     *
     * @return $this
     */
    public function setCompareOptions($compare_options)
    {
        $this->container['compare_options'] = $compare_options;
        return $this;
    }


    /*
     * Gets comparing_with_document
     *
     * @return string
     */
    public function getComparingWithDocument()
    {
        return $this->container['comparing_with_document'];
    }

    /*
     * Sets comparing_with_document
     *
     * @param string $comparing_with_document Gets or sets the path to document to compare at the server.
     *
     * @return $this
     */
    public function setComparingWithDocument($comparing_with_document)
    {
        $this->container['comparing_with_document'] = $comparing_with_document;
        return $this;
    }


    /*
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /*
     * Sets date_time
     *
     * @param \DateTime $date_time Gets or sets the date and time to use for revisions.
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;
        return $this;
    }


    /*
     * Gets file_reference
     *
     * @return \Aspose\Words\Model\FileReference
     */
    public function getFileReference()
    {
        return $this->container['file_reference'];
    }

    /*
     * Sets file_reference
     *
     * @param \Aspose\Words\Model\FileReference $file_reference Gets or sets the file reference.
     *
     * @return $this
     */
    public function setFileReference($file_reference)
    {
        $this->container['file_reference'] = $file_reference;
        return $this;
    }


    /*
     * Gets result_document_format
     *
     * @return string
     */
    public function getResultDocumentFormat()
    {
        return $this->container['result_document_format'];
    }

    /*
     * Sets result_document_format
     *
     * @param string $result_document_format Gets or sets the result document format.
     *
     * @return $this
     */
    public function setResultDocumentFormat($result_document_format)
    {
        $this->container['result_document_format'] = $result_document_format;
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
        if ($this->getFileReference() != null)
        {
            $resultFilesContent = $this->getFileReference()->collectFilesContent($resultFilesContent);
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

