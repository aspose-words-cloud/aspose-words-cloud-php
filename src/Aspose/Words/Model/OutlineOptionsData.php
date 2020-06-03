<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OutlineOptionsData.php">
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
 * OutlineOptionsData
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * OutlineOptionsData
 *
 * @description container class for outline options.
 */
class OutlineOptionsData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OutlineOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bookmarks_outline_levels' => '\Aspose\Words\Model\BookmarksOutlineLevelData[]',
        'default_bookmarks_outline_level' => 'int',
        'create_missing_outline_levels' => 'bool',
        'create_outlines_for_headings_in_tables' => 'bool',
        'expanded_outline_levels' => 'int',
        'headings_outline_levels' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bookmarks_outline_levels' => null,
        'default_bookmarks_outline_level' => 'int32',
        'create_missing_outline_levels' => null,
        'create_outlines_for_headings_in_tables' => null,
        'expanded_outline_levels' => 'int32',
        'headings_outline_levels' => 'int32'
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
        'bookmarks_outline_levels' => 'BookmarksOutlineLevels',
        'default_bookmarks_outline_level' => 'DefaultBookmarksOutlineLevel',
        'create_missing_outline_levels' => 'CreateMissingOutlineLevels',
        'create_outlines_for_headings_in_tables' => 'CreateOutlinesForHeadingsInTables',
        'expanded_outline_levels' => 'ExpandedOutlineLevels',
        'headings_outline_levels' => 'HeadingsOutlineLevels'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bookmarks_outline_levels' => 'setBookmarksOutlineLevels',
        'default_bookmarks_outline_level' => 'setDefaultBookmarksOutlineLevel',
        'create_missing_outline_levels' => 'setCreateMissingOutlineLevels',
        'create_outlines_for_headings_in_tables' => 'setCreateOutlinesForHeadingsInTables',
        'expanded_outline_levels' => 'setExpandedOutlineLevels',
        'headings_outline_levels' => 'setHeadingsOutlineLevels'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bookmarks_outline_levels' => 'getBookmarksOutlineLevels',
        'default_bookmarks_outline_level' => 'getDefaultBookmarksOutlineLevel',
        'create_missing_outline_levels' => 'getCreateMissingOutlineLevels',
        'create_outlines_for_headings_in_tables' => 'getCreateOutlinesForHeadingsInTables',
        'expanded_outline_levels' => 'getExpandedOutlineLevels',
        'headings_outline_levels' => 'getHeadingsOutlineLevels'
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
        $this->container['bookmarks_outline_levels'] = isset($data['bookmarks_outline_levels']) ? $data['bookmarks_outline_levels'] : null;
        $this->container['default_bookmarks_outline_level'] = isset($data['default_bookmarks_outline_level']) ? $data['default_bookmarks_outline_level'] : null;
        $this->container['create_missing_outline_levels'] = isset($data['create_missing_outline_levels']) ? $data['create_missing_outline_levels'] : null;
        $this->container['create_outlines_for_headings_in_tables'] = isset($data['create_outlines_for_headings_in_tables']) ? $data['create_outlines_for_headings_in_tables'] : null;
        $this->container['expanded_outline_levels'] = isset($data['expanded_outline_levels']) ? $data['expanded_outline_levels'] : null;
        $this->container['headings_outline_levels'] = isset($data['headings_outline_levels']) ? $data['headings_outline_levels'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /*
     * Gets bookmarks_outline_levels
     *
     * @return \Aspose\Words\Model\BookmarksOutlineLevelData[]
     */
    public function getBookmarksOutlineLevels()
    {
        return $this->container['bookmarks_outline_levels'];
    }

    /*
     * Sets bookmarks_outline_levels
     *
     * @param \Aspose\Words\Model\BookmarksOutlineLevelData[] $bookmarks_outline_levels Gets or sets allows to specify individual bookmarks outline level.
     *
     * @return $this
     */
    public function setBookmarksOutlineLevels($bookmarks_outline_levels)
    {
        $this->container['bookmarks_outline_levels'] = $bookmarks_outline_levels;

        return $this;
    }

    /*
     * Gets default_bookmarks_outline_level
     *
     * @return int
     */
    public function getDefaultBookmarksOutlineLevel()
    {
        return $this->container['default_bookmarks_outline_level'];
    }

    /*
     * Sets default_bookmarks_outline_level
     *
     * @param int $default_bookmarks_outline_level Gets or sets specifies the default level in the document outline at which to display Word bookmarks.
     *
     * @return $this
     */
    public function setDefaultBookmarksOutlineLevel($default_bookmarks_outline_level)
    {
        $this->container['default_bookmarks_outline_level'] = $default_bookmarks_outline_level;

        return $this;
    }

    /*
     * Gets create_missing_outline_levels
     *
     * @return bool
     */
    public function getCreateMissingOutlineLevels()
    {
        return $this->container['create_missing_outline_levels'];
    }

    /*
     * Sets create_missing_outline_levels
     *
     * @param bool $create_missing_outline_levels Gets or sets a value determining whether or not to create missing outline levels     when the document is exported.     Default value for this property is false.
     *
     * @return $this
     */
    public function setCreateMissingOutlineLevels($create_missing_outline_levels)
    {
        $this->container['create_missing_outline_levels'] = $create_missing_outline_levels;

        return $this;
    }

    /*
     * Gets create_outlines_for_headings_in_tables
     *
     * @return bool
     */
    public function getCreateOutlinesForHeadingsInTables()
    {
        return $this->container['create_outlines_for_headings_in_tables'];
    }

    /*
     * Sets create_outlines_for_headings_in_tables
     *
     * @param bool $create_outlines_for_headings_in_tables Gets or sets specifies whether or not to create outlines for headings (paragraphs formatted     with the Heading styles) inside tables.
     *
     * @return $this
     */
    public function setCreateOutlinesForHeadingsInTables($create_outlines_for_headings_in_tables)
    {
        $this->container['create_outlines_for_headings_in_tables'] = $create_outlines_for_headings_in_tables;

        return $this;
    }

    /*
     * Gets expanded_outline_levels
     *
     * @return int
     */
    public function getExpandedOutlineLevels()
    {
        return $this->container['expanded_outline_levels'];
    }

    /*
     * Sets expanded_outline_levels
     *
     * @param int $expanded_outline_levels Gets or sets specifies how many levels in the document outline to show expanded when the file is viewed.
     *
     * @return $this
     */
    public function setExpandedOutlineLevels($expanded_outline_levels)
    {
        $this->container['expanded_outline_levels'] = $expanded_outline_levels;

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
     * @param int $headings_outline_levels Gets or sets specifies how many levels of headings (paragraphs formatted with the Heading styles) to include in the document outline.
     *
     * @return $this
     */
    public function setHeadingsOutlineLevels($headings_outline_levels)
    {
        $this->container['headings_outline_levels'] = $headings_outline_levels;

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
