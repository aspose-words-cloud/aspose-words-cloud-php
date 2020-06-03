<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="XpsSaveOptionsData.php">
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
 * XpsSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * XpsSaveOptionsData
 *
 * @description Container class for xps save options.
 */
class XpsSaveOptionsData extends FixedPageSaveOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "XpsSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bookmarks_outline_level' => 'int',
        'headings_outline_levels' => 'int',
        'outline_options' => '\Aspose\Words\Model\OutlineOptionsData',
        'use_book_fold_printing_settings' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bookmarks_outline_level' => 'int32',
        'headings_outline_levels' => 'int32',
        'outline_options' => null,
        'use_book_fold_printing_settings' => null
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
        'bookmarks_outline_level' => 'BookmarksOutlineLevel',
        'headings_outline_levels' => 'HeadingsOutlineLevels',
        'outline_options' => 'OutlineOptions',
        'use_book_fold_printing_settings' => 'UseBookFoldPrintingSettings'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bookmarks_outline_level' => 'setBookmarksOutlineLevel',
        'headings_outline_levels' => 'setHeadingsOutlineLevels',
        'outline_options' => 'setOutlineOptions',
        'use_book_fold_printing_settings' => 'setUseBookFoldPrintingSettings'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bookmarks_outline_level' => 'getBookmarksOutlineLevel',
        'headings_outline_levels' => 'getHeadingsOutlineLevels',
        'outline_options' => 'getOutlineOptions',
        'use_book_fold_printing_settings' => 'getUseBookFoldPrintingSettings'
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

        $this->container['bookmarks_outline_level'] = isset($data['bookmarks_outline_level']) ? $data['bookmarks_outline_level'] : null;
        $this->container['headings_outline_levels'] = isset($data['headings_outline_levels']) ? $data['headings_outline_levels'] : null;
        $this->container['outline_options'] = isset($data['outline_options']) ? $data['outline_options'] : null;
        $this->container['use_book_fold_printing_settings'] = isset($data['use_book_fold_printing_settings']) ? $data['use_book_fold_printing_settings'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /*
     * Gets bookmarks_outline_level
     *
     * @return int
     */
    public function getBookmarksOutlineLevel()
    {
        return $this->container['bookmarks_outline_level'];
    }

    /*
     * Sets bookmarks_outline_level
     *
     * @param int $bookmarks_outline_level Gets or sets specifies the level in the XPS document outline at which to display Word bookmarks.
     *
     * @return $this
     */
    public function setBookmarksOutlineLevel($bookmarks_outline_level)
    {
        $this->container['bookmarks_outline_level'] = $bookmarks_outline_level;

        return $this;
    }

    /*
     * Gets headings_outline_levels
     *
     * @return int
     */
    public function getHeadingsOutlineLevels()
    {
        return $this->container['headings_outline_levels'];
    }

    /*
     * Sets headings_outline_levels
     *
     * @param int $headings_outline_levels Gets or sets specifies how many levels of headings (paragraphs formatted with the Heading styles) to include in the XPS document outline.
     *
     * @return $this
     */
    public function setHeadingsOutlineLevels($headings_outline_levels)
    {
        $this->container['headings_outline_levels'] = $headings_outline_levels;

        return $this;
    }

    /*
     * Gets outline_options
     *
     * @return \Aspose\Words\Model\OutlineOptionsData
     */
    public function getOutlineOptions()
    {
        return $this->container['outline_options'];
    }

    /*
     * Sets outline_options
     *
     * @param \Aspose\Words\Model\OutlineOptionsData $outline_options outline_options
     *
     * @return $this
     */
    public function setOutlineOptions($outline_options)
    {
        $this->container['outline_options'] = $outline_options;

        return $this;
    }

    /*
     * Gets use_book_fold_printing_settings
     *
     * @return bool
     */
    public function getUseBookFoldPrintingSettings()
    {
        return $this->container['use_book_fold_printing_settings'];
    }

    /*
     * Sets use_book_fold_printing_settings
     *
     * @param bool $use_book_fold_printing_settings Gets or sets determines whether the document should be saved using a booklet printing layout.
     *
     * @return $this
     */
    public function setUseBookFoldPrintingSettings($use_book_fold_printing_settings)
    {
        $this->container['use_book_fold_printing_settings'] = $use_book_fold_printing_settings;

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
