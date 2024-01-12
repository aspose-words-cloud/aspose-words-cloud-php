<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OutlineOptionsData.php">
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
 * OutlineOptionsData
 *
 * @description Container class for outline options.
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
        'create_missing_outline_levels' => 'bool',
        'create_outlines_for_headings_in_tables' => 'bool',
        'default_bookmarks_outline_level' => 'int',
        'expanded_outline_levels' => 'int',
        'headings_outline_levels' => 'int',
        'bookmarks_outline_levels' => '\Aspose\Words\Model\BookmarksOutlineLevelData[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'create_missing_outline_levels' => 'null',
        'create_outlines_for_headings_in_tables' => 'null',
        'default_bookmarks_outline_level' => 'null',
        'expanded_outline_levels' => 'null',
        'headings_outline_levels' => 'null',
        'bookmarks_outline_levels' => 'null'
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
        'create_missing_outline_levels' => 'CreateMissingOutlineLevels',
        'create_outlines_for_headings_in_tables' => 'CreateOutlinesForHeadingsInTables',
        'default_bookmarks_outline_level' => 'DefaultBookmarksOutlineLevel',
        'expanded_outline_levels' => 'ExpandedOutlineLevels',
        'headings_outline_levels' => 'HeadingsOutlineLevels',
        'bookmarks_outline_levels' => 'BookmarksOutlineLevels'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_missing_outline_levels' => 'setCreateMissingOutlineLevels',
        'create_outlines_for_headings_in_tables' => 'setCreateOutlinesForHeadingsInTables',
        'default_bookmarks_outline_level' => 'setDefaultBookmarksOutlineLevel',
        'expanded_outline_levels' => 'setExpandedOutlineLevels',
        'headings_outline_levels' => 'setHeadingsOutlineLevels',
        'bookmarks_outline_levels' => 'setBookmarksOutlineLevels'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_missing_outline_levels' => 'getCreateMissingOutlineLevels',
        'create_outlines_for_headings_in_tables' => 'getCreateOutlinesForHeadingsInTables',
        'default_bookmarks_outline_level' => 'getDefaultBookmarksOutlineLevel',
        'expanded_outline_levels' => 'getExpandedOutlineLevels',
        'headings_outline_levels' => 'getHeadingsOutlineLevels',
        'bookmarks_outline_levels' => 'getBookmarksOutlineLevels'
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
        $this->container['create_missing_outline_levels'] = isset($data['create_missing_outline_levels']) ? $data['create_missing_outline_levels'] : null;
        $this->container['create_outlines_for_headings_in_tables'] = isset($data['create_outlines_for_headings_in_tables']) ? $data['create_outlines_for_headings_in_tables'] : null;
        $this->container['default_bookmarks_outline_level'] = isset($data['default_bookmarks_outline_level']) ? $data['default_bookmarks_outline_level'] : null;
        $this->container['expanded_outline_levels'] = isset($data['expanded_outline_levels']) ? $data['expanded_outline_levels'] : null;
        $this->container['headings_outline_levels'] = isset($data['headings_outline_levels']) ? $data['headings_outline_levels'] : null;
        $this->container['bookmarks_outline_levels'] = isset($data['bookmarks_outline_levels']) ? $data['bookmarks_outline_levels'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {

        if (isset($this->container['bookmarks_outline_levels'])) {
            foreach ($this->getBookmarksOutlineLevels() as &$elementBookmarksOutlineLevels)
            {
                if ($elementBookmarksOutlineLevels != null)
                {
                    $elementBookmarksOutlineLevels->validate();
                }
            }
        }

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
     * @param bool $create_missing_outline_levels Gets or sets a value indicating whether to create missing outline levels when the document is exported. The default value is false.
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
     * @param bool $create_outlines_for_headings_in_tables Gets or sets a value indicating whether to create outlines for headings (paragraphs formatted with the Heading styles) inside tables. The default value is false.
     *
     * @return $this
     */
    public function setCreateOutlinesForHeadingsInTables($create_outlines_for_headings_in_tables)
    {
        $this->container['create_outlines_for_headings_in_tables'] = $create_outlines_for_headings_in_tables;
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
     * @param int $default_bookmarks_outline_level Gets or sets the default level in the document outline at which to display Word bookmarks.
     *
     * @return $this
     */
    public function setDefaultBookmarksOutlineLevel($default_bookmarks_outline_level)
    {
        $this->container['default_bookmarks_outline_level'] = $default_bookmarks_outline_level;
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
     * @param int $expanded_outline_levels Gets or sets the number of levels in the document outline to show expanded when the file is viewed.
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
     * @param int $headings_outline_levels Gets or sets the number of levels of headings (paragraphs formatted with the Heading styles) to include in the document outline.
     *
     * @return $this
     */
    public function setHeadingsOutlineLevels($headings_outline_levels)
    {
        $this->container['headings_outline_levels'] = $headings_outline_levels;
        return $this;
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
     * @param \Aspose\Words\Model\BookmarksOutlineLevelData[] $bookmarks_outline_levels Gets or sets the individual bookmarks outline level.
     *
     * @return $this
     */
    public function setBookmarksOutlineLevels($bookmarks_outline_levels)
    {
        $this->container['bookmarks_outline_levels'] = $bookmarks_outline_levels;
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

