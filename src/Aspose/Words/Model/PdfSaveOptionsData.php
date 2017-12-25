<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PdfSaveOptionsData.php">
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
 * PdfSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * PdfSaveOptionsData
 *
 * @description container class for pdf save options
 */
class PdfSaveOptionsData extends FixedPageSaveOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bookmarks_outline_level' => 'int',
        'create_note_hyperlinks' => 'bool',
        'compliance' => 'string',
        'digital_signature_details' => '\Aspose\Words\Model\PdfDigitalSignatureDetailsData',
        'display_doc_title' => 'bool',
        'downsample_images' => 'bool',
        'downsample_resolution' => 'int',
        'downsample_options' => '\Aspose\Words\Model\DownsampleOptionsData',
        'embed_full_fonts' => 'bool',
        'embed_standard_windows_fonts' => 'bool',
        'encryption_details' => '\Aspose\Words\Model\PdfEncryptionDetailsData',
        'expanded_outline_levels' => 'int',
        'export_custom_properties_as_metadata' => 'bool',
        'export_document_structure' => 'bool',
        'font_embedding_mode' => 'string',
        'headings_outline_levels' => 'int',
        'image_compression' => 'string',
        'open_hyperlinks_in_new_window' => 'bool',
        'outline_options' => '\Aspose\Words\Model\OutlineOptionsData',
        'page_mode' => 'string',
        'image_color_space_export_mode' => 'string',
        'preserve_form_fields' => 'bool',
        'text_compression' => 'string',
        'use_core_fonts' => 'bool',
        'use_book_fold_printing_settings' => 'bool',
        'zoom_behavior' => 'string',
        'zoom_factor' => 'int',
        'custom_properties_export' => 'string',
        'preblend_images' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bookmarks_outline_level' => 'int32',
        'create_note_hyperlinks' => null,
        'compliance' => null,
        'digital_signature_details' => null,
        'display_doc_title' => null,
        'downsample_images' => null,
        'downsample_resolution' => 'int32',
        'downsample_options' => null,
        'embed_full_fonts' => null,
        'embed_standard_windows_fonts' => null,
        'encryption_details' => null,
        'expanded_outline_levels' => 'int32',
        'export_custom_properties_as_metadata' => null,
        'export_document_structure' => null,
        'font_embedding_mode' => null,
        'headings_outline_levels' => 'int32',
        'image_compression' => null,
        'open_hyperlinks_in_new_window' => null,
        'outline_options' => null,
        'page_mode' => null,
        'image_color_space_export_mode' => null,
        'preserve_form_fields' => null,
        'text_compression' => null,
        'use_core_fonts' => null,
        'use_book_fold_printing_settings' => null,
        'zoom_behavior' => null,
        'zoom_factor' => 'int32',
        'custom_properties_export' => null,
        'preblend_images' => null
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
        'create_note_hyperlinks' => 'CreateNoteHyperlinks',
        'compliance' => 'Compliance',
        'digital_signature_details' => 'DigitalSignatureDetails',
        'display_doc_title' => 'DisplayDocTitle',
        'downsample_images' => 'DownsampleImages',
        'downsample_resolution' => 'DownsampleResolution',
        'downsample_options' => 'DownsampleOptions',
        'embed_full_fonts' => 'EmbedFullFonts',
        'embed_standard_windows_fonts' => 'EmbedStandardWindowsFonts',
        'encryption_details' => 'EncryptionDetails',
        'expanded_outline_levels' => 'ExpandedOutlineLevels',
        'export_custom_properties_as_metadata' => 'ExportCustomPropertiesAsMetadata',
        'export_document_structure' => 'ExportDocumentStructure',
        'font_embedding_mode' => 'FontEmbeddingMode',
        'headings_outline_levels' => 'HeadingsOutlineLevels',
        'image_compression' => 'ImageCompression',
        'open_hyperlinks_in_new_window' => 'OpenHyperlinksInNewWindow',
        'outline_options' => 'OutlineOptions',
        'page_mode' => 'PageMode',
        'image_color_space_export_mode' => 'ImageColorSpaceExportMode',
        'preserve_form_fields' => 'PreserveFormFields',
        'text_compression' => 'TextCompression',
        'use_core_fonts' => 'UseCoreFonts',
        'use_book_fold_printing_settings' => 'UseBookFoldPrintingSettings',
        'zoom_behavior' => 'ZoomBehavior',
        'zoom_factor' => 'ZoomFactor',
        'custom_properties_export' => 'CustomPropertiesExport',
        'preblend_images' => 'PreblendImages'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bookmarks_outline_level' => 'setBookmarksOutlineLevel',
        'create_note_hyperlinks' => 'setCreateNoteHyperlinks',
        'compliance' => 'setCompliance',
        'digital_signature_details' => 'setDigitalSignatureDetails',
        'display_doc_title' => 'setDisplayDocTitle',
        'downsample_images' => 'setDownsampleImages',
        'downsample_resolution' => 'setDownsampleResolution',
        'downsample_options' => 'setDownsampleOptions',
        'embed_full_fonts' => 'setEmbedFullFonts',
        'embed_standard_windows_fonts' => 'setEmbedStandardWindowsFonts',
        'encryption_details' => 'setEncryptionDetails',
        'expanded_outline_levels' => 'setExpandedOutlineLevels',
        'export_custom_properties_as_metadata' => 'setExportCustomPropertiesAsMetadata',
        'export_document_structure' => 'setExportDocumentStructure',
        'font_embedding_mode' => 'setFontEmbeddingMode',
        'headings_outline_levels' => 'setHeadingsOutlineLevels',
        'image_compression' => 'setImageCompression',
        'open_hyperlinks_in_new_window' => 'setOpenHyperlinksInNewWindow',
        'outline_options' => 'setOutlineOptions',
        'page_mode' => 'setPageMode',
        'image_color_space_export_mode' => 'setImageColorSpaceExportMode',
        'preserve_form_fields' => 'setPreserveFormFields',
        'text_compression' => 'setTextCompression',
        'use_core_fonts' => 'setUseCoreFonts',
        'use_book_fold_printing_settings' => 'setUseBookFoldPrintingSettings',
        'zoom_behavior' => 'setZoomBehavior',
        'zoom_factor' => 'setZoomFactor',
        'custom_properties_export' => 'setCustomPropertiesExport',
        'preblend_images' => 'setPreblendImages'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bookmarks_outline_level' => 'getBookmarksOutlineLevel',
        'create_note_hyperlinks' => 'getCreateNoteHyperlinks',
        'compliance' => 'getCompliance',
        'digital_signature_details' => 'getDigitalSignatureDetails',
        'display_doc_title' => 'getDisplayDocTitle',
        'downsample_images' => 'getDownsampleImages',
        'downsample_resolution' => 'getDownsampleResolution',
        'downsample_options' => 'getDownsampleOptions',
        'embed_full_fonts' => 'getEmbedFullFonts',
        'embed_standard_windows_fonts' => 'getEmbedStandardWindowsFonts',
        'encryption_details' => 'getEncryptionDetails',
        'expanded_outline_levels' => 'getExpandedOutlineLevels',
        'export_custom_properties_as_metadata' => 'getExportCustomPropertiesAsMetadata',
        'export_document_structure' => 'getExportDocumentStructure',
        'font_embedding_mode' => 'getFontEmbeddingMode',
        'headings_outline_levels' => 'getHeadingsOutlineLevels',
        'image_compression' => 'getImageCompression',
        'open_hyperlinks_in_new_window' => 'getOpenHyperlinksInNewWindow',
        'outline_options' => 'getOutlineOptions',
        'page_mode' => 'getPageMode',
        'image_color_space_export_mode' => 'getImageColorSpaceExportMode',
        'preserve_form_fields' => 'getPreserveFormFields',
        'text_compression' => 'getTextCompression',
        'use_core_fonts' => 'getUseCoreFonts',
        'use_book_fold_printing_settings' => 'getUseBookFoldPrintingSettings',
        'zoom_behavior' => 'getZoomBehavior',
        'zoom_factor' => 'getZoomFactor',
        'custom_properties_export' => 'getCustomPropertiesExport',
        'preblend_images' => 'getPreblendImages'
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
        $this->container['create_note_hyperlinks'] = isset($data['create_note_hyperlinks']) ? $data['create_note_hyperlinks'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['digital_signature_details'] = isset($data['digital_signature_details']) ? $data['digital_signature_details'] : null;
        $this->container['display_doc_title'] = isset($data['display_doc_title']) ? $data['display_doc_title'] : null;
        $this->container['downsample_images'] = isset($data['downsample_images']) ? $data['downsample_images'] : null;
        $this->container['downsample_resolution'] = isset($data['downsample_resolution']) ? $data['downsample_resolution'] : null;
        $this->container['downsample_options'] = isset($data['downsample_options']) ? $data['downsample_options'] : null;
        $this->container['embed_full_fonts'] = isset($data['embed_full_fonts']) ? $data['embed_full_fonts'] : null;
        $this->container['embed_standard_windows_fonts'] = isset($data['embed_standard_windows_fonts']) ? $data['embed_standard_windows_fonts'] : null;
        $this->container['encryption_details'] = isset($data['encryption_details']) ? $data['encryption_details'] : null;
        $this->container['expanded_outline_levels'] = isset($data['expanded_outline_levels']) ? $data['expanded_outline_levels'] : null;
        $this->container['export_custom_properties_as_metadata'] = isset($data['export_custom_properties_as_metadata']) ? $data['export_custom_properties_as_metadata'] : null;
        $this->container['export_document_structure'] = isset($data['export_document_structure']) ? $data['export_document_structure'] : null;
        $this->container['font_embedding_mode'] = isset($data['font_embedding_mode']) ? $data['font_embedding_mode'] : null;
        $this->container['headings_outline_levels'] = isset($data['headings_outline_levels']) ? $data['headings_outline_levels'] : null;
        $this->container['image_compression'] = isset($data['image_compression']) ? $data['image_compression'] : null;
        $this->container['open_hyperlinks_in_new_window'] = isset($data['open_hyperlinks_in_new_window']) ? $data['open_hyperlinks_in_new_window'] : null;
        $this->container['outline_options'] = isset($data['outline_options']) ? $data['outline_options'] : null;
        $this->container['page_mode'] = isset($data['page_mode']) ? $data['page_mode'] : null;
        $this->container['image_color_space_export_mode'] = isset($data['image_color_space_export_mode']) ? $data['image_color_space_export_mode'] : null;
        $this->container['preserve_form_fields'] = isset($data['preserve_form_fields']) ? $data['preserve_form_fields'] : null;
        $this->container['text_compression'] = isset($data['text_compression']) ? $data['text_compression'] : null;
        $this->container['use_core_fonts'] = isset($data['use_core_fonts']) ? $data['use_core_fonts'] : null;
        $this->container['use_book_fold_printing_settings'] = isset($data['use_book_fold_printing_settings']) ? $data['use_book_fold_printing_settings'] : null;
        $this->container['zoom_behavior'] = isset($data['zoom_behavior']) ? $data['zoom_behavior'] : null;
        $this->container['zoom_factor'] = isset($data['zoom_factor']) ? $data['zoom_factor'] : null;
        $this->container['custom_properties_export'] = isset($data['custom_properties_export']) ? $data['custom_properties_export'] : null;
        $this->container['preblend_images'] = isset($data['preblend_images']) ? $data['preblend_images'] : null;
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
     * @param int $bookmarks_outline_level Specifies the level in the PDF document outline at which to display Word bookmarks
     *
     * @return $this
     */
    public function setBookmarksOutlineLevel($bookmarks_outline_level)
    {
        $this->container['bookmarks_outline_level'] = $bookmarks_outline_level;

        return $this;
    }

    /*
     * Gets create_note_hyperlinks
     *
     * @return bool
     */
    public function getCreateNoteHyperlinks()
    {
        return $this->container['create_note_hyperlinks'];
    }

    /*
     * Sets create_note_hyperlinks
     *
     * @param bool $create_note_hyperlinks Specifies whether to convert footnote/endnote references in main text story into active hyperlinks. When clicked the hyperlink will lead to the corresponding footnote/endnote. Default is false.
     *
     * @return $this
     */
    public function setCreateNoteHyperlinks($create_note_hyperlinks)
    {
        $this->container['create_note_hyperlinks'] = $create_note_hyperlinks;

        return $this;
    }

    /*
     * Gets compliance
     *
     * @return string
     */
    public function getCompliance()
    {
        return $this->container['compliance'];
    }

    /*
     * Sets compliance
     *
     * @param string $compliance Specifies the PDF standards compliance level for output documents
     *
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $this->container['compliance'] = $compliance;

        return $this;
    }

    /*
     * Gets digital_signature_details
     *
     * @return \Aspose\Words\Model\PdfDigitalSignatureDetailsData
     */
    public function getDigitalSignatureDetails()
    {
        return $this->container['digital_signature_details'];
    }

    /*
     * Sets digital_signature_details
     *
     * @param \Aspose\Words\Model\PdfDigitalSignatureDetailsData $digital_signature_details Specifies the details for signing the output PDF document
     *
     * @return $this
     */
    public function setDigitalSignatureDetails($digital_signature_details)
    {
        $this->container['digital_signature_details'] = $digital_signature_details;

        return $this;
    }

    /*
     * Gets display_doc_title
     *
     * @return bool
     */
    public function getDisplayDocTitle()
    {
        return $this->container['display_doc_title'];
    }

    /*
     * Sets display_doc_title
     *
     * @param bool $display_doc_title A flag specifying whether the window’s title bar should display the document title taken from the Title entry of the document information dictionary.
     *
     * @return $this
     */
    public function setDisplayDocTitle($display_doc_title)
    {
        $this->container['display_doc_title'] = $display_doc_title;

        return $this;
    }

    /*
     * Gets downsample_images
     *
     * @return bool
     */
    public function getDownsampleImages()
    {
        return $this->container['downsample_images'];
    }

    /*
     * Sets downsample_images
     *
     * @param bool $downsample_images Specifies whether or not the images should be downsampled
     *
     * @return $this
     */
    public function setDownsampleImages($downsample_images)
    {
        $this->container['downsample_images'] = $downsample_images;

        return $this;
    }

    /*
     * Gets downsample_resolution
     *
     * @return int
     */
    public function getDownsampleResolution()
    {
        return $this->container['downsample_resolution'];
    }

    /*
     * Sets downsample_resolution
     *
     * @param int $downsample_resolution Specifies the resolution in pixels per inch to which the images should be downsampled
     *
     * @return $this
     */
    public function setDownsampleResolution($downsample_resolution)
    {
        $this->container['downsample_resolution'] = $downsample_resolution;

        return $this;
    }

    /*
     * Gets downsample_options
     *
     * @return \Aspose\Words\Model\DownsampleOptionsData
     */
    public function getDownsampleOptions()
    {
        return $this->container['downsample_options'];
    }

    /*
     * Sets downsample_options
     *
     * @param \Aspose\Words\Model\DownsampleOptionsData $downsample_options Allows to specify downsample options.
     *
     * @return $this
     */
    public function setDownsampleOptions($downsample_options)
    {
        $this->container['downsample_options'] = $downsample_options;

        return $this;
    }

    /*
     * Gets embed_full_fonts
     *
     * @return bool
     */
    public function getEmbedFullFonts()
    {
        return $this->container['embed_full_fonts'];
    }

    /*
     * Sets embed_full_fonts
     *
     * @param bool $embed_full_fonts Controls how fonts are embedded into the resulting PDF documents
     *
     * @return $this
     */
    public function setEmbedFullFonts($embed_full_fonts)
    {
        $this->container['embed_full_fonts'] = $embed_full_fonts;

        return $this;
    }

    /*
     * Gets embed_standard_windows_fonts
     *
     * @return bool
     */
    public function getEmbedStandardWindowsFonts()
    {
        return $this->container['embed_standard_windows_fonts'];
    }

    /*
     * Sets embed_standard_windows_fonts
     *
     * @param bool $embed_standard_windows_fonts Determines whether or not to embed standard windows fonts Arial and Times New Roman
     *
     * @return $this
     */
    public function setEmbedStandardWindowsFonts($embed_standard_windows_fonts)
    {
        $this->container['embed_standard_windows_fonts'] = $embed_standard_windows_fonts;

        return $this;
    }

    /*
     * Gets encryption_details
     *
     * @return \Aspose\Words\Model\PdfEncryptionDetailsData
     */
    public function getEncryptionDetails()
    {
        return $this->container['encryption_details'];
    }

    /*
     * Sets encryption_details
     *
     * @param \Aspose\Words\Model\PdfEncryptionDetailsData $encryption_details Specifies the details for encrypting the output PDF document
     *
     * @return $this
     */
    public function setEncryptionDetails($encryption_details)
    {
        $this->container['encryption_details'] = $encryption_details;

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
     * @param int $expanded_outline_levels Specifies how many levels in the PDF document outline to show expanded when the PDF file is viewed
     *
     * @return $this
     */
    public function setExpandedOutlineLevels($expanded_outline_levels)
    {
        $this->container['expanded_outline_levels'] = $expanded_outline_levels;

        return $this;
    }

    /*
     * Gets export_custom_properties_as_metadata
     *
     * @return bool
     */
    public function getExportCustomPropertiesAsMetadata()
    {
        return $this->container['export_custom_properties_as_metadata'];
    }

    /*
     * Sets export_custom_properties_as_metadata
     *
     * @param bool $export_custom_properties_as_metadata Determines whether or not to export custom properties of document as Metadata
     *
     * @return $this
     */
    public function setExportCustomPropertiesAsMetadata($export_custom_properties_as_metadata)
    {
        $this->container['export_custom_properties_as_metadata'] = $export_custom_properties_as_metadata;

        return $this;
    }

    /*
     * Gets export_document_structure
     *
     * @return bool
     */
    public function getExportDocumentStructure()
    {
        return $this->container['export_document_structure'];
    }

    /*
     * Sets export_document_structure
     *
     * @param bool $export_document_structure Determines whether or not to export document structure
     *
     * @return $this
     */
    public function setExportDocumentStructure($export_document_structure)
    {
        $this->container['export_document_structure'] = $export_document_structure;

        return $this;
    }

    /*
     * Gets font_embedding_mode
     *
     * @return string
     */
    public function getFontEmbeddingMode()
    {
        return $this->container['font_embedding_mode'];
    }

    /*
     * Sets font_embedding_mode
     *
     * @param string $font_embedding_mode Specifies the font embedding mode
     *
     * @return $this
     */
    public function setFontEmbeddingMode($font_embedding_mode)
    {
        $this->container['font_embedding_mode'] = $font_embedding_mode;

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
     * @param int $headings_outline_levels Specifies how many levels of headings (paragraphs formatted with the Heading styles) to include in the PDF document outline
     *
     * @return $this
     */
    public function setHeadingsOutlineLevels($headings_outline_levels)
    {
        $this->container['headings_outline_levels'] = $headings_outline_levels;

        return $this;
    }

    /*
     * Gets image_compression
     *
     * @return string
     */
    public function getImageCompression()
    {
        return $this->container['image_compression'];
    }

    /*
     * Sets image_compression
     *
     * @param string $image_compression Specifies compression type to be used for all images in the document
     *
     * @return $this
     */
    public function setImageCompression($image_compression)
    {
        $this->container['image_compression'] = $image_compression;

        return $this;
    }

    /*
     * Gets open_hyperlinks_in_new_window
     *
     * @return bool
     */
    public function getOpenHyperlinksInNewWindow()
    {
        return $this->container['open_hyperlinks_in_new_window'];
    }

    /*
     * Sets open_hyperlinks_in_new_window
     *
     * @param bool $open_hyperlinks_in_new_window Determines whether hyperlinks in the output Pdf document are forced to be opened in a new window (or tab) of a browser
     *
     * @return $this
     */
    public function setOpenHyperlinksInNewWindow($open_hyperlinks_in_new_window)
    {
        $this->container['open_hyperlinks_in_new_window'] = $open_hyperlinks_in_new_window;

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
     * Gets page_mode
     *
     * @return string
     */
    public function getPageMode()
    {
        return $this->container['page_mode'];
    }

    /*
     * Sets page_mode
     *
     * @param string $page_mode Specifies how the PDF document should be displayed when opened in the PDF reader
     *
     * @return $this
     */
    public function setPageMode($page_mode)
    {
        $this->container['page_mode'] = $page_mode;

        return $this;
    }

    /*
     * Gets image_color_space_export_mode
     *
     * @return string
     */
    public function getImageColorSpaceExportMode()
    {
        return $this->container['image_color_space_export_mode'];
    }

    /*
     * Sets image_color_space_export_mode
     *
     * @param string $image_color_space_export_mode Specifies how the color space will be selected for the images in PDF document.
     *
     * @return $this
     */
    public function setImageColorSpaceExportMode($image_color_space_export_mode)
    {
        $this->container['image_color_space_export_mode'] = $image_color_space_export_mode;

        return $this;
    }

    /*
     * Gets preserve_form_fields
     *
     * @return bool
     */
    public function getPreserveFormFields()
    {
        return $this->container['preserve_form_fields'];
    }

    /*
     * Sets preserve_form_fields
     *
     * @param bool $preserve_form_fields Specifies whether to preserve Microsoft Word form fields as form fields in PDF or convert them to text
     *
     * @return $this
     */
    public function setPreserveFormFields($preserve_form_fields)
    {
        $this->container['preserve_form_fields'] = $preserve_form_fields;

        return $this;
    }

    /*
     * Gets text_compression
     *
     * @return string
     */
    public function getTextCompression()
    {
        return $this->container['text_compression'];
    }

    /*
     * Sets text_compression
     *
     * @param string $text_compression Specifies compression type to be used for all textual content in the document
     *
     * @return $this
     */
    public function setTextCompression($text_compression)
    {
        $this->container['text_compression'] = $text_compression;

        return $this;
    }

    /*
     * Gets use_core_fonts
     *
     * @return bool
     */
    public function getUseCoreFonts()
    {
        return $this->container['use_core_fonts'];
    }

    /*
     * Sets use_core_fonts
     *
     * @param bool $use_core_fonts Determines whether or not to substitute TrueType fonts Arial, Times New Roman, Courier New and Symbol with core PDF Type 1 fonts
     *
     * @return $this
     */
    public function setUseCoreFonts($use_core_fonts)
    {
        $this->container['use_core_fonts'] = $use_core_fonts;

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
     * @param bool $use_book_fold_printing_settings Determines whether the document should be saved using a booklet printing layout
     *
     * @return $this
     */
    public function setUseBookFoldPrintingSettings($use_book_fold_printing_settings)
    {
        $this->container['use_book_fold_printing_settings'] = $use_book_fold_printing_settings;

        return $this;
    }

    /*
     * Gets zoom_behavior
     *
     * @return string
     */
    public function getZoomBehavior()
    {
        return $this->container['zoom_behavior'];
    }

    /*
     * Sets zoom_behavior
     *
     * @param string $zoom_behavior Determines what type of zoom should be applied when a document is opened with a PDF viewer
     *
     * @return $this
     */
    public function setZoomBehavior($zoom_behavior)
    {
        $this->container['zoom_behavior'] = $zoom_behavior;

        return $this;
    }

    /*
     * Gets zoom_factor
     *
     * @return int
     */
    public function getZoomFactor()
    {
        return $this->container['zoom_factor'];
    }

    /*
     * Sets zoom_factor
     *
     * @param int $zoom_factor Determines zoom factor (in percentages) for a document
     *
     * @return $this
     */
    public function setZoomFactor($zoom_factor)
    {
        $this->container['zoom_factor'] = $zoom_factor;

        return $this;
    }

    /*
     * Gets custom_properties_export
     *
     * @return string
     */
    public function getCustomPropertiesExport()
    {
        return $this->container['custom_properties_export'];
    }

    /*
     * Sets custom_properties_export
     *
     * @param string $custom_properties_export Gets or sets a value determining the way  are exported to PDF file. Default value is .
     *
     * @return $this
     */
    public function setCustomPropertiesExport($custom_properties_export)
    {
        $this->container['custom_properties_export'] = $custom_properties_export;

        return $this;
    }

    /*
     * Gets preblend_images
     *
     * @return bool
     */
    public function getPreblendImages()
    {
        return $this->container['preblend_images'];
    }

    /*
     * Sets preblend_images
     *
     * @param bool $preblend_images Gets or sets a value determining whether or not to preblend transparent images with black background color.
     *
     * @return $this
     */
    public function setPreblendImages($preblend_images)
    {
        $this->container['preblend_images'] = $preblend_images;

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


