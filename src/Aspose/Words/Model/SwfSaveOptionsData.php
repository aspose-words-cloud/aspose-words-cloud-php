<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SwfSaveOptionsData.php">
 *   Copyright (c) 2017 Aspose.Words for Cloud
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
 * SwfSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * SwfSaveOptionsData
 *
 * @description container class for swf save options
 */
class SwfSaveOptionsData extends FixedPageSaveOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SwfSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'allow_read_mode' => 'bool',
        'bookmarks_outline_level' => 'int',
        'compressed' => 'bool',
        'enable_context_menu' => 'bool',
        'expanded_outline_levels' => 'int',
        'headings_outline_levels' => 'int',
        'left_pane_control_flags' => 'string',
        'logo_image_bytes' => 'string',
        'logo_link' => 'string',
        'outline_options' => '\Aspose\Words\Model\OutlineOptionsData',
        'show_bottom_pane' => 'bool',
        'show_full_screen' => 'bool',
        'show_left_pane' => 'bool',
        'show_page_border' => 'bool',
        'show_page_stepper' => 'bool',
        'show_search' => 'bool',
        'show_top_pane' => 'bool',
        'start_open_left_pane' => 'bool',
        'tool_tips_font_name' => 'string',
        'top_pane_control_flags' => 'string',
        'viewer_included' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'allow_read_mode' => null,
        'bookmarks_outline_level' => 'int32',
        'compressed' => null,
        'enable_context_menu' => null,
        'expanded_outline_levels' => 'int32',
        'headings_outline_levels' => 'int32',
        'left_pane_control_flags' => null,
        'logo_image_bytes' => null,
        'logo_link' => null,
        'outline_options' => null,
        'show_bottom_pane' => null,
        'show_full_screen' => null,
        'show_left_pane' => null,
        'show_page_border' => null,
        'show_page_stepper' => null,
        'show_search' => null,
        'show_top_pane' => null,
        'start_open_left_pane' => null,
        'tool_tips_font_name' => null,
        'top_pane_control_flags' => null,
        'viewer_included' => null
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
        'allow_read_mode' => 'AllowReadMode',
        'bookmarks_outline_level' => 'BookmarksOutlineLevel',
        'compressed' => 'Compressed',
        'enable_context_menu' => 'EnableContextMenu',
        'expanded_outline_levels' => 'ExpandedOutlineLevels',
        'headings_outline_levels' => 'HeadingsOutlineLevels',
        'left_pane_control_flags' => 'LeftPaneControlFlags',
        'logo_image_bytes' => 'LogoImageBytes',
        'logo_link' => 'LogoLink',
        'outline_options' => 'OutlineOptions',
        'show_bottom_pane' => 'ShowBottomPane',
        'show_full_screen' => 'ShowFullScreen',
        'show_left_pane' => 'ShowLeftPane',
        'show_page_border' => 'ShowPageBorder',
        'show_page_stepper' => 'ShowPageStepper',
        'show_search' => 'ShowSearch',
        'show_top_pane' => 'ShowTopPane',
        'start_open_left_pane' => 'StartOpenLeftPane',
        'tool_tips_font_name' => 'ToolTipsFontName',
        'top_pane_control_flags' => 'TopPaneControlFlags',
        'viewer_included' => 'ViewerIncluded'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_read_mode' => 'setAllowReadMode',
        'bookmarks_outline_level' => 'setBookmarksOutlineLevel',
        'compressed' => 'setCompressed',
        'enable_context_menu' => 'setEnableContextMenu',
        'expanded_outline_levels' => 'setExpandedOutlineLevels',
        'headings_outline_levels' => 'setHeadingsOutlineLevels',
        'left_pane_control_flags' => 'setLeftPaneControlFlags',
        'logo_image_bytes' => 'setLogoImageBytes',
        'logo_link' => 'setLogoLink',
        'outline_options' => 'setOutlineOptions',
        'show_bottom_pane' => 'setShowBottomPane',
        'show_full_screen' => 'setShowFullScreen',
        'show_left_pane' => 'setShowLeftPane',
        'show_page_border' => 'setShowPageBorder',
        'show_page_stepper' => 'setShowPageStepper',
        'show_search' => 'setShowSearch',
        'show_top_pane' => 'setShowTopPane',
        'start_open_left_pane' => 'setStartOpenLeftPane',
        'tool_tips_font_name' => 'setToolTipsFontName',
        'top_pane_control_flags' => 'setTopPaneControlFlags',
        'viewer_included' => 'setViewerIncluded'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_read_mode' => 'getAllowReadMode',
        'bookmarks_outline_level' => 'getBookmarksOutlineLevel',
        'compressed' => 'getCompressed',
        'enable_context_menu' => 'getEnableContextMenu',
        'expanded_outline_levels' => 'getExpandedOutlineLevels',
        'headings_outline_levels' => 'getHeadingsOutlineLevels',
        'left_pane_control_flags' => 'getLeftPaneControlFlags',
        'logo_image_bytes' => 'getLogoImageBytes',
        'logo_link' => 'getLogoLink',
        'outline_options' => 'getOutlineOptions',
        'show_bottom_pane' => 'getShowBottomPane',
        'show_full_screen' => 'getShowFullScreen',
        'show_left_pane' => 'getShowLeftPane',
        'show_page_border' => 'getShowPageBorder',
        'show_page_stepper' => 'getShowPageStepper',
        'show_search' => 'getShowSearch',
        'show_top_pane' => 'getShowTopPane',
        'start_open_left_pane' => 'getStartOpenLeftPane',
        'tool_tips_font_name' => 'getToolTipsFontName',
        'top_pane_control_flags' => 'getTopPaneControlFlags',
        'viewer_included' => 'getViewerIncluded'
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

        $this->container['allow_read_mode'] = isset($data['allow_read_mode']) ? $data['allow_read_mode'] : null;
        $this->container['bookmarks_outline_level'] = isset($data['bookmarks_outline_level']) ? $data['bookmarks_outline_level'] : null;
        $this->container['compressed'] = isset($data['compressed']) ? $data['compressed'] : null;
        $this->container['enable_context_menu'] = isset($data['enable_context_menu']) ? $data['enable_context_menu'] : null;
        $this->container['expanded_outline_levels'] = isset($data['expanded_outline_levels']) ? $data['expanded_outline_levels'] : null;
        $this->container['headings_outline_levels'] = isset($data['headings_outline_levels']) ? $data['headings_outline_levels'] : null;
        $this->container['left_pane_control_flags'] = isset($data['left_pane_control_flags']) ? $data['left_pane_control_flags'] : null;
        $this->container['logo_image_bytes'] = isset($data['logo_image_bytes']) ? $data['logo_image_bytes'] : null;
        $this->container['logo_link'] = isset($data['logo_link']) ? $data['logo_link'] : null;
        $this->container['outline_options'] = isset($data['outline_options']) ? $data['outline_options'] : null;
        $this->container['show_bottom_pane'] = isset($data['show_bottom_pane']) ? $data['show_bottom_pane'] : null;
        $this->container['show_full_screen'] = isset($data['show_full_screen']) ? $data['show_full_screen'] : null;
        $this->container['show_left_pane'] = isset($data['show_left_pane']) ? $data['show_left_pane'] : null;
        $this->container['show_page_border'] = isset($data['show_page_border']) ? $data['show_page_border'] : null;
        $this->container['show_page_stepper'] = isset($data['show_page_stepper']) ? $data['show_page_stepper'] : null;
        $this->container['show_search'] = isset($data['show_search']) ? $data['show_search'] : null;
        $this->container['show_top_pane'] = isset($data['show_top_pane']) ? $data['show_top_pane'] : null;
        $this->container['start_open_left_pane'] = isset($data['start_open_left_pane']) ? $data['start_open_left_pane'] : null;
        $this->container['tool_tips_font_name'] = isset($data['tool_tips_font_name']) ? $data['tool_tips_font_name'] : null;
        $this->container['top_pane_control_flags'] = isset($data['top_pane_control_flags']) ? $data['top_pane_control_flags'] : null;
        $this->container['viewer_included'] = isset($data['viewer_included']) ? $data['viewer_included'] : null;
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
     * Gets allow_read_mode
     *
     * @return bool
     */
    public function getAllowReadMode()
    {
        return $this->container['allow_read_mode'];
    }

    /*
     * Sets allow_read_mode
     *
     * @param bool $allow_read_mode Allows to enable read mode
     *
     * @return $this
     */
    public function setAllowReadMode($allow_read_mode)
    {
        $this->container['allow_read_mode'] = $allow_read_mode;

        return $this;
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
     * @param int $bookmarks_outline_level Specifies the level in the SWF document outline at which to display Word bookmarks
     *
     * @return $this
     */
    public function setBookmarksOutlineLevel($bookmarks_outline_level)
    {
        $this->container['bookmarks_outline_level'] = $bookmarks_outline_level;

        return $this;
    }

    /*
     * Gets compressed
     *
     * @return bool
     */
    public function getCompressed()
    {
        return $this->container['compressed'];
    }

    /*
     * Sets compressed
     *
     * @param bool $compressed Specifies whether the generated SWF document should be compressed or not
     *
     * @return $this
     */
    public function setCompressed($compressed)
    {
        $this->container['compressed'] = $compressed;

        return $this;
    }

    /*
     * Gets enable_context_menu
     *
     * @return bool
     */
    public function getEnableContextMenu()
    {
        return $this->container['enable_context_menu'];
    }

    /*
     * Sets enable_context_menu
     *
     * @param bool $enable_context_menu Enable/disable context menu
     *
     * @return $this
     */
    public function setEnableContextMenu($enable_context_menu)
    {
        $this->container['enable_context_menu'] = $enable_context_menu;

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
     * @param int $expanded_outline_levels Specifies how many levels in the SWF document outline to show expanded when the SWF file is viewed
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
     * @param int $headings_outline_levels Specifies how many levels of headings (paragraphs formatted with the Heading styles) to include in the SWF document outline
     *
     * @return $this
     */
    public function setHeadingsOutlineLevels($headings_outline_levels)
    {
        $this->container['headings_outline_levels'] = $headings_outline_levels;

        return $this;
    }

    /*
     * Gets left_pane_control_flags
     *
     * @return string
     */
    public function getLeftPaneControlFlags()
    {
        return $this->container['left_pane_control_flags'];
    }

    /*
     * Sets left_pane_control_flags
     *
     * @param string $left_pane_control_flags Control flags used to configure appearance of left panel of SWF viewer
     *
     * @return $this
     */
    public function setLeftPaneControlFlags($left_pane_control_flags)
    {
        $this->container['left_pane_control_flags'] = $left_pane_control_flags;

        return $this;
    }

    /*
     * Gets logo_image_bytes
     *
     * @return string
     */
    public function getLogoImageBytes()
    {
        return $this->container['logo_image_bytes'];
    }

    /*
     * Sets logo_image_bytes
     *
     * @param string $logo_image_bytes Image that will be displayed as logo in the top right corner of the viewer as string in base64 format
     *
     * @return $this
     */
    public function setLogoImageBytes($logo_image_bytes)
    {
        $this->container['logo_image_bytes'] = $logo_image_bytes;

        return $this;
    }

    /*
     * Gets logo_link
     *
     * @return string
     */
    public function getLogoLink()
    {
        return $this->container['logo_link'];
    }

    /*
     * Sets logo_link
     *
     * @param string $logo_link Specifies the full hyperlink address for a logo
     *
     * @return $this
     */
    public function setLogoLink($logo_link)
    {
        $this->container['logo_link'] = $logo_link;

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
     * @param \Aspose\Words\Model\OutlineOptionsData $outline_options Allows to specify outline options
     *
     * @return $this
     */
    public function setOutlineOptions($outline_options)
    {
        $this->container['outline_options'] = $outline_options;

        return $this;
    }

    /*
     * Gets show_bottom_pane
     *
     * @return bool
     */
    public function getShowBottomPane()
    {
        return $this->container['show_bottom_pane'];
    }

    /*
     * Sets show_bottom_pane
     *
     * @param bool $show_bottom_pane Show/hide bottom pane
     *
     * @return $this
     */
    public function setShowBottomPane($show_bottom_pane)
    {
        $this->container['show_bottom_pane'] = $show_bottom_pane;

        return $this;
    }

    /*
     * Gets show_full_screen
     *
     * @return bool
     */
    public function getShowFullScreen()
    {
        return $this->container['show_full_screen'];
    }

    /*
     * Sets show_full_screen
     *
     * @param bool $show_full_screen Show/hide fullscreen button
     *
     * @return $this
     */
    public function setShowFullScreen($show_full_screen)
    {
        $this->container['show_full_screen'] = $show_full_screen;

        return $this;
    }

    /*
     * Gets show_left_pane
     *
     * @return bool
     */
    public function getShowLeftPane()
    {
        return $this->container['show_left_pane'];
    }

    /*
     * Sets show_left_pane
     *
     * @param bool $show_left_pane Show/hide left pane
     *
     * @return $this
     */
    public function setShowLeftPane($show_left_pane)
    {
        $this->container['show_left_pane'] = $show_left_pane;

        return $this;
    }

    /*
     * Gets show_page_border
     *
     * @return bool
     */
    public function getShowPageBorder()
    {
        return $this->container['show_page_border'];
    }

    /*
     * Sets show_page_border
     *
     * @param bool $show_page_border Specifies whether border around pages should be shown
     *
     * @return $this
     */
    public function setShowPageBorder($show_page_border)
    {
        $this->container['show_page_border'] = $show_page_border;

        return $this;
    }

    /*
     * Gets show_page_stepper
     *
     * @return bool
     */
    public function getShowPageStepper()
    {
        return $this->container['show_page_stepper'];
    }

    /*
     * Sets show_page_stepper
     *
     * @param bool $show_page_stepper Show/hide page stepper
     *
     * @return $this
     */
    public function setShowPageStepper($show_page_stepper)
    {
        $this->container['show_page_stepper'] = $show_page_stepper;

        return $this;
    }

    /*
     * Gets show_search
     *
     * @return bool
     */
    public function getShowSearch()
    {
        return $this->container['show_search'];
    }

    /*
     * Sets show_search
     *
     * @param bool $show_search Show/hide search section
     *
     * @return $this
     */
    public function setShowSearch($show_search)
    {
        $this->container['show_search'] = $show_search;

        return $this;
    }

    /*
     * Gets show_top_pane
     *
     * @return bool
     */
    public function getShowTopPane()
    {
        return $this->container['show_top_pane'];
    }

    /*
     * Sets show_top_pane
     *
     * @param bool $show_top_pane Show/hide whole top pane
     *
     * @return $this
     */
    public function setShowTopPane($show_top_pane)
    {
        $this->container['show_top_pane'] = $show_top_pane;

        return $this;
    }

    /*
     * Gets start_open_left_pane
     *
     * @return bool
     */
    public function getStartOpenLeftPane()
    {
        return $this->container['start_open_left_pane'];
    }

    /*
     * Sets start_open_left_pane
     *
     * @param bool $start_open_left_pane Start with opened left pane
     *
     * @return $this
     */
    public function setStartOpenLeftPane($start_open_left_pane)
    {
        $this->container['start_open_left_pane'] = $start_open_left_pane;

        return $this;
    }

    /*
     * Gets tool_tips_font_name
     *
     * @return string
     */
    public function getToolTipsFontName()
    {
        return $this->container['tool_tips_font_name'];
    }

    /*
     * Sets tool_tips_font_name
     *
     * @param string $tool_tips_font_name Specifies a font used for tooltips in SWF viewer
     *
     * @return $this
     */
    public function setToolTipsFontName($tool_tips_font_name)
    {
        $this->container['tool_tips_font_name'] = $tool_tips_font_name;

        return $this;
    }

    /*
     * Gets top_pane_control_flags
     *
     * @return string
     */
    public function getTopPaneControlFlags()
    {
        return $this->container['top_pane_control_flags'];
    }

    /*
     * Sets top_pane_control_flags
     *
     * @param string $top_pane_control_flags Control flags used to configure appearance of top panel of SWF viewer
     *
     * @return $this
     */
    public function setTopPaneControlFlags($top_pane_control_flags)
    {
        $this->container['top_pane_control_flags'] = $top_pane_control_flags;

        return $this;
    }

    /*
     * Gets viewer_included
     *
     * @return bool
     */
    public function getViewerIncluded()
    {
        return $this->container['viewer_included'];
    }

    /*
     * Sets viewer_included
     *
     * @param bool $viewer_included Specifies whether the generated SWF document should include the integrated document viewer or not
     *
     * @return $this
     */
    public function setViewerIncluded($viewer_included)
    {
        $this->container['viewer_included'] = $viewer_included;

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


