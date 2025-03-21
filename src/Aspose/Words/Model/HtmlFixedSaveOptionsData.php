<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HtmlFixedSaveOptionsData.php">
 *   Copyright (c) 2025 Aspose.Words for Cloud
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
 * HtmlFixedSaveOptionsData
 *
 * @description Container class for fixed html save options.
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
        'encoding' => 'string',
        'export_embedded_css' => 'bool',
        'export_embedded_fonts' => 'bool',
        'export_embedded_images' => 'bool',
        'export_form_fields' => 'bool',
        'font_format' => 'string',
        'id_prefix' => 'string',
        'page_horizontal_alignment' => 'string',
        'page_margins' => 'double',
        'resources_folder' => 'string',
        'resources_folder_alias' => 'string',
        'save_font_face_css_separately' => 'bool',
        'show_page_border' => 'bool',
        'use_target_machine_fonts' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'css_class_names_prefix' => 'null',
        'encoding' => 'null',
        'export_embedded_css' => 'null',
        'export_embedded_fonts' => 'null',
        'export_embedded_images' => 'null',
        'export_form_fields' => 'null',
        'font_format' => 'null',
        'id_prefix' => 'null',
        'page_horizontal_alignment' => 'null',
        'page_margins' => 'null',
        'resources_folder' => 'null',
        'resources_folder_alias' => 'null',
        'save_font_face_css_separately' => 'null',
        'show_page_border' => 'null',
        'use_target_machine_fonts' => 'null'
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
        'encoding' => 'Encoding',
        'export_embedded_css' => 'ExportEmbeddedCss',
        'export_embedded_fonts' => 'ExportEmbeddedFonts',
        'export_embedded_images' => 'ExportEmbeddedImages',
        'export_form_fields' => 'ExportFormFields',
        'font_format' => 'FontFormat',
        'id_prefix' => 'IdPrefix',
        'page_horizontal_alignment' => 'PageHorizontalAlignment',
        'page_margins' => 'PageMargins',
        'resources_folder' => 'ResourcesFolder',
        'resources_folder_alias' => 'ResourcesFolderAlias',
        'save_font_face_css_separately' => 'SaveFontFaceCssSeparately',
        'show_page_border' => 'ShowPageBorder',
        'use_target_machine_fonts' => 'UseTargetMachineFonts'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'css_class_names_prefix' => 'setCssClassNamesPrefix',
        'encoding' => 'setEncoding',
        'export_embedded_css' => 'setExportEmbeddedCss',
        'export_embedded_fonts' => 'setExportEmbeddedFonts',
        'export_embedded_images' => 'setExportEmbeddedImages',
        'export_form_fields' => 'setExportFormFields',
        'font_format' => 'setFontFormat',
        'id_prefix' => 'setIdPrefix',
        'page_horizontal_alignment' => 'setPageHorizontalAlignment',
        'page_margins' => 'setPageMargins',
        'resources_folder' => 'setResourcesFolder',
        'resources_folder_alias' => 'setResourcesFolderAlias',
        'save_font_face_css_separately' => 'setSaveFontFaceCssSeparately',
        'show_page_border' => 'setShowPageBorder',
        'use_target_machine_fonts' => 'setUseTargetMachineFonts'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'css_class_names_prefix' => 'getCssClassNamesPrefix',
        'encoding' => 'getEncoding',
        'export_embedded_css' => 'getExportEmbeddedCss',
        'export_embedded_fonts' => 'getExportEmbeddedFonts',
        'export_embedded_images' => 'getExportEmbeddedImages',
        'export_form_fields' => 'getExportFormFields',
        'font_format' => 'getFontFormat',
        'id_prefix' => 'getIdPrefix',
        'page_horizontal_alignment' => 'getPageHorizontalAlignment',
        'page_margins' => 'getPageMargins',
        'resources_folder' => 'getResourcesFolder',
        'resources_folder_alias' => 'getResourcesFolderAlias',
        'save_font_face_css_separately' => 'getSaveFontFaceCssSeparately',
        'show_page_border' => 'getShowPageBorder',
        'use_target_machine_fonts' => 'getUseTargetMachineFonts'
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

    const FONT_FORMAT_WOFF = 'Woff';
    const FONT_FORMAT_TTF = 'Ttf';
    const PAGE_HORIZONTAL_ALIGNMENT_LEFT = 'Left';
    const PAGE_HORIZONTAL_ALIGNMENT_CENTER = 'Center';
    const PAGE_HORIZONTAL_ALIGNMENT_RIGHT = 'Right';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontFormatAllowableValues()
    {
        return [
            self::FONT_FORMAT_WOFF,
            self::FONT_FORMAT_TTF
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageHorizontalAlignmentAllowableValues()
    {
        return [
            self::PAGE_HORIZONTAL_ALIGNMENT_LEFT,
            self::PAGE_HORIZONTAL_ALIGNMENT_CENTER,
            self::PAGE_HORIZONTAL_ALIGNMENT_RIGHT
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
        $this->container['css_class_names_prefix'] = isset($data['css_class_names_prefix']) ? $data['css_class_names_prefix'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['export_embedded_css'] = isset($data['export_embedded_css']) ? $data['export_embedded_css'] : null;
        $this->container['export_embedded_fonts'] = isset($data['export_embedded_fonts']) ? $data['export_embedded_fonts'] : null;
        $this->container['export_embedded_images'] = isset($data['export_embedded_images']) ? $data['export_embedded_images'] : null;
        $this->container['export_form_fields'] = isset($data['export_form_fields']) ? $data['export_form_fields'] : null;
        $this->container['font_format'] = isset($data['font_format']) ? $data['font_format'] : null;
        $this->container['id_prefix'] = isset($data['id_prefix']) ? $data['id_prefix'] : null;
        $this->container['page_horizontal_alignment'] = isset($data['page_horizontal_alignment']) ? $data['page_horizontal_alignment'] : null;
        $this->container['page_margins'] = isset($data['page_margins']) ? $data['page_margins'] : null;
        $this->container['resources_folder'] = isset($data['resources_folder']) ? $data['resources_folder'] : null;
        $this->container['resources_folder_alias'] = isset($data['resources_folder_alias']) ? $data['resources_folder_alias'] : null;
        $this->container['save_font_face_css_separately'] = isset($data['save_font_face_css_separately']) ? $data['save_font_face_css_separately'] : null;
        $this->container['show_page_border'] = isset($data['show_page_border']) ? $data['show_page_border'] : null;
        $this->container['use_target_machine_fonts'] = isset($data['use_target_machine_fonts']) ? $data['use_target_machine_fonts'] : null;
        $this->container['save_format'] = "htmlfixed";
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['font_format'])) {
            $allowedValuesFontFormat = $this->getFontFormatAllowableValues();
            if (!in_array($this->container['font_format'], $allowedValuesFontFormat)) {
                throw new \InvalidArgumentException('Property FontFormat in HtmlFixedSaveOptionsData has invalid format.');
            }
        }

        if (isset($this->container['page_horizontal_alignment'])) {
            $allowedValuesPageHorizontalAlignment = $this->getPageHorizontalAlignmentAllowableValues();
            if (!in_array($this->container['page_horizontal_alignment'], $allowedValuesPageHorizontalAlignment)) {
                throw new \InvalidArgumentException('Property PageHorizontalAlignment in HtmlFixedSaveOptionsData has invalid format.');
            }
        }

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
     * @param string $css_class_names_prefix Gets or sets the prefix which is added to all class names in style.css file. Default value is "aw".
     *
     * @return $this
     */
    public function setCssClassNamesPrefix($css_class_names_prefix)
    {
        $this->container['css_class_names_prefix'] = $css_class_names_prefix;
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
     * @param string $encoding Gets or sets the character encoding.
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
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
     * @param bool $export_embedded_css Gets or sets a value indicating whether the CSS (Cascading Style Sheet) should be embedded into the Html document.
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
     * @param bool $export_embedded_fonts Gets or sets a value indicating whether fonts should be embedded into the Html document in Base64 format.
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
     * @param bool $export_embedded_images Gets or sets a value indicating whether images should be embedded into the Html document in Base64 format.
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
     * @param bool $export_form_fields Gets or sets a value indicating whether form fields are exported as interactive items (as 'input' tag) rather than converted to text or graphics.
     *
     * @return $this
     */
    public function setExportFormFields($export_form_fields)
    {
        $this->container['export_form_fields'] = $export_form_fields;
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
     * @param string $font_format Gets or sets the export format of fonts.
     *
     * @return $this
     */
    public function setFontFormat($font_format)
    {
        $allowedValues = $this->getFontFormatAllowableValues();
        if ((!is_numeric($font_format) && !in_array($font_format, $allowedValues)) || (is_numeric($font_format) && !in_array($allowedValues[$font_format], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'font_format', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['font_format'] = $font_format;
        return $this;
    }


    /*
     * Gets id_prefix
     *
     * @return string
     */
    public function getIdPrefix()
    {
        return $this->container['id_prefix'];
    }

    /*
     * Sets id_prefix
     *
     * @param string $id_prefix Gets or sets a prefix that is prepended to all generated element IDs in the output document. Default value is null and no prefix is prepended. If the prefix is specified, it can contain only letters, digits, underscores, and hyphens, and must start with a letter.
     *
     * @return $this
     */
    public function setIdPrefix($id_prefix)
    {
        $this->container['id_prefix'] = $id_prefix;
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
     * @param string $page_horizontal_alignment Gets or sets the horizontal alignment of pages in the HTML document. The default value is HtmlFixedHorizontalPageAlignment.Center.
     *
     * @return $this
     */
    public function setPageHorizontalAlignment($page_horizontal_alignment)
    {
        $allowedValues = $this->getPageHorizontalAlignmentAllowableValues();
        if ((!is_numeric($page_horizontal_alignment) && !in_array($page_horizontal_alignment, $allowedValues)) || (is_numeric($page_horizontal_alignment) && !in_array($allowedValues[$page_horizontal_alignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'page_horizontal_alignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
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
     * @param double $page_margins Gets or sets the margin around pages in HTML document. The margins value is measured in points and should be equal to or greater than 0. Default value is 10 points. Depends on the value of PageHorizontalAlignment property: Defines top, bottom and left page margins if the value is Left. Defines top, bottom and right page margins if the value is Right. Defines top and bottom page margins if the value is Center.
     *
     * @return $this
     */
    public function setPageMargins($page_margins)
    {
        $this->container['page_margins'] = $page_margins;
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
     * @param string $resources_folder Gets or sets the physical folder where resources are saved when exporting the document.
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
     * @param string $resources_folder_alias Gets or sets the name of the folder used to construct resource URIs.
     *
     * @return $this
     */
    public function setResourcesFolderAlias($resources_folder_alias)
    {
        $this->container['resources_folder_alias'] = $resources_folder_alias;
        return $this;
    }


    /*
     * Gets save_font_face_css_separately
     *
     * @return bool
     */
    public function getSaveFontFaceCssSeparately()
    {
        return $this->container['save_font_face_css_separately'];
    }

    /*
     * Sets save_font_face_css_separately
     *
     * @param bool $save_font_face_css_separately Gets or sets a value indicating whether "@font-face" CSS rules should be placed into a separate file "fontFaces.css" when a document is being saved with external stylesheet (that is, when Aspose.Words.Saving.HtmlFixedSaveOptions.ExportEmbeddedCss is false). The default value is false, all CSS rules are written into single file "styles.css". Setting this property to true restores the old behavior (separate files) for compatibility with legacy code.
     *
     * @return $this
     */
    public function setSaveFontFaceCssSeparately($save_font_face_css_separately)
    {
        $this->container['save_font_face_css_separately'] = $save_font_face_css_separately;
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
     * @param bool $show_page_border Gets or sets a value indicating whether to show border around pages.
     *
     * @return $this
     */
    public function setShowPageBorder($show_page_border)
    {
        $this->container['show_page_border'] = $show_page_border;
        return $this;
    }


    /*
     * Gets use_target_machine_fonts
     *
     * @return bool
     */
    public function getUseTargetMachineFonts()
    {
        return $this->container['use_target_machine_fonts'];
    }

    /*
     * Sets use_target_machine_fonts
     *
     * @param bool $use_target_machine_fonts Gets or sets a value indicating whether fonts from target machine must be used to display the document. If this flag is set to true, Aspose.Words.Saving.HtmlFixedSaveOptions.FontFormat and Aspose.Words.Saving.HtmlFixedSaveOptions.ExportEmbeddedFonts properties do not have effect, also Aspose.Words.Saving.HtmlFixedSaveOptions.ResourceSavingCallback is not fired for fonts. The default value is false.
     *
     * @return $this
     */
    public function setUseTargetMachineFonts($use_target_machine_fonts)
    {
        $this->container['use_target_machine_fonts'] = $use_target_machine_fonts;
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

