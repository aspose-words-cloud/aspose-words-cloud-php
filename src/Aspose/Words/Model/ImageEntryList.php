<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImageEntryList.php">
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
 * ImageEntryList
 *
 * @description Represents a list of images which will be appended to the original resource document or image.
 */
class ImageEntryList extends BaseEntryList
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ImageEntryList";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'append_each_image_on_new_page' => 'bool',
        'image_entries' => '\Aspose\Words\Model\ImageEntry[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'append_each_image_on_new_page' => 'null',
        'image_entries' => 'null'
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
        'append_each_image_on_new_page' => 'AppendEachImageOnNewPage',
        'image_entries' => 'ImageEntries'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'append_each_image_on_new_page' => 'setAppendEachImageOnNewPage',
        'image_entries' => 'setImageEntries'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'append_each_image_on_new_page' => 'getAppendEachImageOnNewPage',
        'image_entries' => 'getImageEntries'
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
        $this->container['append_each_image_on_new_page'] = isset($data['append_each_image_on_new_page']) ? $data['append_each_image_on_new_page'] : null;
        $this->container['image_entries'] = isset($data['image_entries']) ? $data['image_entries'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (!isset($this->container['image_entries'])) {
            throw new \InvalidArgumentException('Property ImageEntries in ImageEntryList is required.');
        }

        if (isset($this->container['image_entries'])) {
            foreach ($this->getImageEntries() as &$elementImageEntries)
            {
                if ($elementImageEntries != null)
                {
                    $elementImageEntries->validate();
                }
            }
        }

    }

    /*
     * Gets append_each_image_on_new_page
     *
     * @return bool
     */
    public function getAppendEachImageOnNewPage()
    {
        return $this->container['append_each_image_on_new_page'];
    }

    /*
     * Sets append_each_image_on_new_page
     *
     * @param bool $append_each_image_on_new_page Gets or sets a value indicating whether each image should be added to a new page in the document. This value only has an effect when adding images to a document that supports pagination.
     *
     * @return $this
     */
    public function setAppendEachImageOnNewPage($append_each_image_on_new_page)
    {
        $this->container['append_each_image_on_new_page'] = $append_each_image_on_new_page;
        return $this;
    }


    /*
     * Gets image_entries
     *
     * @return \Aspose\Words\Model\ImageEntry[]
     */
    public function getImageEntries()
    {
        return $this->container['image_entries'];
    }

    /*
     * Sets image_entries
     *
     * @param \Aspose\Words\Model\ImageEntry[] $image_entries Gets or sets the list of images.
     *
     * @return $this
     */
    public function setImageEntries($image_entries)
    {
        $this->container['image_entries'] = $image_entries;
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
        if ($this->getImageEntries() != null)
        {
            foreach ($this->getImageEntries() as &$element)
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

