<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HtmlFixedSaveOptionsData.php">
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
 * HtmlFixedSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * HtmlFixedSaveOptionsData
 *
 * @description container class for fixed html save options
 */
class HtmlFixedSaveOptionsData extends FixedPageSaveOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "HtmlFixedSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'css_class_names_prefix' => 'string',
        'export_embedded_css' => 'bool',
        'export_embedded_fonts' => 'bool',
        'export_embedded_images' => 'bool',
        'export_form_fields' => 'bool',
        'encoding' => 'string',
        'font_format' => 'string',
        'resources_folder' => 'string',
        'resources_folder_alias' => 'string',
        'show_page_border' => 'bool',
        'page_horizontal_alignment' => 'string',
        'page_margins' => 'double'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'css_class_names_prefix' => null,
        'export_embedded_css' => null,
        'export_embedded_fonts' => null,
        'export_embedded_images' => null,
        'export_form_fields' => null,
        'encoding' => null,
        'font_format' => null,
        'resources_folder' => null,
        'resources_folder_alias' => null,
        'show_page_border' => null,
        'page_horizontal_alignment' => null,
        'page_margins' => 'double'
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
        'css_class_names_prefix' => 'CssClassNamesPrefix',
        'export_embedded_css' => 'ExportEmbeddedCss',
        'export_embedded_fonts' => 'ExportEmbeddedFonts',
        'export_embedded_images' => 'ExportEmbeddedImages',
        'export_form_fields' => 'ExportFormFields',
        'encoding' => 'Encoding',
        'font_format' => 'FontFormat',
        'resources_folder' => 'ResourcesFolder',
        'resources_folder_alias' => 'ResourcesFolderAlias',
        'show_page_border' => 'ShowPageBorder',
        'page_horizontal_alignment' => 'PageHorizontalAlignment',
        'page_margins' => 'PageMargins'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'css_class_names_prefix' => 'setCssClassNamesPrefix',
        'export_embedded_css' => 'setExportEmbeddedCss',
        'export_embedded_fonts' => 'setExportEmbeddedFonts',
        'export_embedded_images' => 'setExportEmbeddedImages',
        'export_form_fields' => 'setExportFormFields',
        'encoding' => 'setEncoding',
        'font_format' => 'setFontFormat',
        'resources_folder' => 'setResourcesFolder',
        'resources_folder_alias' => 'setResourcesFolderAlias',
        'show_page_border' => 'setShowPageBorder',
        'page_horizontal_alignment' => 'setPageHorizontalAlignment',
        'page_margins' => 'setPageMargins'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'css_class_names_prefix' => 'getCssClassNamesPrefix',
        'export_embedded_css' => 'getExportEmbeddedCss',
        'export_embedded_fonts' => 'getExportEmbeddedFonts',
        'export_embedded_images' => 'getExportEmbeddedImages',
        'export_form_fields' => 'getExportFormFields',
        'encoding' => 'getEncoding',
        'font_format' => 'getFontFormat',
        'resources_folder' => 'getResourcesFolder',
        'resources_folder_alias' => 'getResourcesFolderAlias',
        'show_page_border' => 'getShowPageBorder',
        'page_horizontal_alignment' => 'getPageHorizontalAlignment',
        'page_margins' => 'getPageMargins'
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

        $this->container['css_class_names_prefix'] = isset($data['css_class_names_prefix']) ? $data['css_class_names_prefix'] : null;
        $this->container['export_embedded_css'] = isset($data['export_embedded_css']) ? $data['export_embedded_css'] : null;
        $this->container['export_embedded_fonts'] = isset($data['export_embedded_fonts']) ? $data['export_embedded_fonts'] : null;
        $this->container['export_embedded_images'] = isset($data['export_embedded_images']) ? $data['export_embedded_images'] : null;
        $this->container['export_form_fields'] = isset($data['export_form_fields']) ? $data['export_form_fields'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['font_format'] = isset($data['font_format']) ? $data['font_format'] : null;
        $this->container['resources_folder'] = isset($data['resources_folder']) ? $data['resources_folder'] : null;
        $this->container['resources_folder_alias'] = isset($data['resources_folder_alias']) ? $data['resources_folder_alias'] : null;
        $this->container['show_page_border'] = isset($data['show_page_border']) ? $data['show_page_border'] : null;
        $this->container['page_horizontal_alignment'] = isset($data['page_horizontal_alignment']) ? $data['page_horizontal_alignment'] : null;
        $this->container['page_margins'] = isset($data['page_margins']) ? $data['page_margins'] : null;
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
     * Gets css_class_names_prefix
     *
     * @return string
     */
    public function getCssClassNamesPrefix()
    {
        return $this->container['css_class_names_prefix'];
    }

    /*
     * Sets css_class_names_prefix
     *
     * @param string $css_class_names_prefix Specifies prefix which is added to all class names in style.css file. Default value is \"aw\".
     *
     * @return $this
     */
    public function setCssClassNamesPrefix($css_class_names_prefix)
    {
        $this->container['css_class_names_prefix'] = $css_class_names_prefix;

        return $this;
    }

    /*
     * Gets export_embedded_css
     *
     * @return bool
     */
    public function getExportEmbeddedCss()
    {
        return $this->container['export_embedded_css'];
    }

    /*
     * Sets export_embedded_css
     *
     * @param bool $export_embedded_css Specifies whether the CSS (Cascading Style Sheet) should be embedded into Html document.
     *
     * @return $this
     */
    public function setExportEmbeddedCss($export_embedded_css)
    {
        $this->container['export_embedded_css'] = $export_embedded_css;

        return $this;
    }

    /*
     * Gets export_embedded_fonts
     *
     * @return bool
     */
    public function getExportEmbeddedFonts()
    {
        return $this->container['export_embedded_fonts'];
    }

    /*
     * Sets export_embedded_fonts
     *
     * @param bool $export_embedded_fonts Specifies whether fonts should be embedded into Html document in Base64 format.
     *
     * @return $this
     */
    public function setExportEmbeddedFonts($export_embedded_fonts)
    {
        $this->container['export_embedded_fonts'] = $export_embedded_fonts;

        return $this;
    }

    /*
     * Gets export_embedded_images
     *
     * @return bool
     */
    public function getExportEmbeddedImages()
    {
        return $this->container['export_embedded_images'];
    }

    /*
     * Sets export_embedded_images
     *
     * @param bool $export_embedded_images Specifies whether images should be embedded into Html document in Base64 format.
     *
     * @return $this
     */
    public function setExportEmbeddedImages($export_embedded_images)
    {
        $this->container['export_embedded_images'] = $export_embedded_images;

        return $this;
    }

    /*
     * Gets export_form_fields
     *
     * @return bool
     */
    public function getExportFormFields()
    {
        return $this->container['export_form_fields'];
    }

    /*
     * Sets export_form_fields
     *
     * @param bool $export_form_fields Gets or sets indication of whether form fields are exported as interactive items (as 'input' tag) rather than converted to text or graphics.
     *
     * @return $this
     */
    public function setExportFormFields($export_form_fields)
    {
        $this->container['export_form_fields'] = $export_form_fields;

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
     * @param string $encoding Encoding.
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /*
     * Gets font_format
     *
     * @return string
     */
    public function getFontFormat()
    {
        return $this->container['font_format'];
    }

    /*
     * Sets font_format
     *
     * @param string $font_format Specifies export format of fonts
     *
     * @return $this
     */
    public function setFontFormat($font_format)
    {
        $this->container['font_format'] = $font_format;

        return $this;
    }

    /*
     * Gets resources_folder
     *
     * @return string
     */
    public function getResourcesFolder()
    {
        return $this->container['resources_folder'];
    }

    /*
     * Sets resources_folder
     *
     * @param string $resources_folder Specifies the physical folder where resources are saved when exporting a document
     *
     * @return $this
     */
    public function setResourcesFolder($resources_folder)
    {
        $this->container['resources_folder'] = $resources_folder;

        return $this;
    }

    /*
     * Gets resources_folder_alias
     *
     * @return string
     */
    public function getResourcesFolderAlias()
    {
        return $this->container['resources_folder_alias'];
    }

    /*
     * Sets resources_folder_alias
     *
     * @param string $resources_folder_alias Specifies the name of the folder used to construct resource URIs
     *
     * @return $this
     */
    public function setResourcesFolderAlias($resources_folder_alias)
    {
        $this->container['resources_folder_alias'] = $resources_folder_alias;

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
     * @param bool $show_page_border Specifies whether border around pages should be shown.
     *
     * @return $this
     */
    public function setShowPageBorder($show_page_border)
    {
        $this->container['show_page_border'] = $show_page_border;

        return $this;
    }

    /*
     * Gets page_horizontal_alignment
     *
     * @return string
     */
    public function getPageHorizontalAlignment()
    {
        return $this->container['page_horizontal_alignment'];
    }

    /*
     * Sets page_horizontal_alignment
     *
     * @param string $page_horizontal_alignment Specifies the horizontal alignment of pages in an HTML document. Default value is HtmlFixedHorizontalPageAlignment.Center.
     *
     * @return $this
     */
    public function setPageHorizontalAlignment($page_horizontal_alignment)
    {
        $this->container['page_horizontal_alignment'] = $page_horizontal_alignment;

        return $this;
    }

    /*
     * Gets page_margins
     *
     * @return double
     */
    public function getPageMargins()
    {
        return $this->container['page_margins'];
    }

    /*
     * Sets page_margins
     *
     * @param double $page_margins Specifies the margins around pages in an HTML document. The margins value is measured in points and should be equal to or greater than 0. Default value is 10 points.
     *
     * @return $this
     */
    public function setPageMargins($page_margins)
    {
        $this->container['page_margins'] = $page_margins;

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


