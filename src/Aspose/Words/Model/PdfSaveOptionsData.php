<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PdfSaveOptionsData.php">
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
 * PdfSaveOptionsData
 *
 * @description Container class for pdf save options.
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
        'cache_background_graphics' => 'bool',
        'compliance' => 'string',
        'create_note_hyperlinks' => 'bool',
        'custom_properties_export' => 'string',
        'digital_signature_details' => '\Aspose\Words\Model\PdfDigitalSignatureDetailsData',
        'display_doc_title' => 'bool',
        'downsample_options' => '\Aspose\Words\Model\DownsampleOptionsData',
        'embed_attachments' => 'bool',
        'embed_full_fonts' => 'bool',
        'encryption_details' => '\Aspose\Words\Model\PdfEncryptionDetailsData',
        'export_document_structure' => 'bool',
        'export_language_to_span_tag' => 'bool',
        'font_embedding_mode' => 'string',
        'header_footer_bookmarks_export_mode' => 'string',
        'image_color_space_export_mode' => 'string',
        'image_compression' => 'string',
        'interpolate_images' => 'bool',
        'open_hyperlinks_in_new_window' => 'bool',
        'outline_options' => '\Aspose\Words\Model\OutlineOptionsData',
        'page_mode' => 'string',
        'preblend_images' => 'bool',
        'preserve_form_fields' => 'bool',
        'render_choice_form_field_border' => 'bool',
        'text_compression' => 'string',
        'use_book_fold_printing_settings' => 'bool',
        'use_core_fonts' => 'bool',
        'use_sdt_tag_as_form_field_name' => 'bool',
        'zoom_behavior' => 'string',
        'zoom_factor' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'cache_background_graphics' => 'null',
        'compliance' => 'null',
        'create_note_hyperlinks' => 'null',
        'custom_properties_export' => 'null',
        'digital_signature_details' => 'null',
        'display_doc_title' => 'null',
        'downsample_options' => 'null',
        'embed_attachments' => 'null',
        'embed_full_fonts' => 'null',
        'encryption_details' => 'null',
        'export_document_structure' => 'null',
        'export_language_to_span_tag' => 'null',
        'font_embedding_mode' => 'null',
        'header_footer_bookmarks_export_mode' => 'null',
        'image_color_space_export_mode' => 'null',
        'image_compression' => 'null',
        'interpolate_images' => 'null',
        'open_hyperlinks_in_new_window' => 'null',
        'outline_options' => 'null',
        'page_mode' => 'null',
        'preblend_images' => 'null',
        'preserve_form_fields' => 'null',
        'render_choice_form_field_border' => 'null',
        'text_compression' => 'null',
        'use_book_fold_printing_settings' => 'null',
        'use_core_fonts' => 'null',
        'use_sdt_tag_as_form_field_name' => 'null',
        'zoom_behavior' => 'null',
        'zoom_factor' => 'null'
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
        'cache_background_graphics' => 'CacheBackgroundGraphics',
        'compliance' => 'Compliance',
        'create_note_hyperlinks' => 'CreateNoteHyperlinks',
        'custom_properties_export' => 'CustomPropertiesExport',
        'digital_signature_details' => 'DigitalSignatureDetails',
        'display_doc_title' => 'DisplayDocTitle',
        'downsample_options' => 'DownsampleOptions',
        'embed_attachments' => 'EmbedAttachments',
        'embed_full_fonts' => 'EmbedFullFonts',
        'encryption_details' => 'EncryptionDetails',
        'export_document_structure' => 'ExportDocumentStructure',
        'export_language_to_span_tag' => 'ExportLanguageToSpanTag',
        'font_embedding_mode' => 'FontEmbeddingMode',
        'header_footer_bookmarks_export_mode' => 'HeaderFooterBookmarksExportMode',
        'image_color_space_export_mode' => 'ImageColorSpaceExportMode',
        'image_compression' => 'ImageCompression',
        'interpolate_images' => 'InterpolateImages',
        'open_hyperlinks_in_new_window' => 'OpenHyperlinksInNewWindow',
        'outline_options' => 'OutlineOptions',
        'page_mode' => 'PageMode',
        'preblend_images' => 'PreblendImages',
        'preserve_form_fields' => 'PreserveFormFields',
        'render_choice_form_field_border' => 'RenderChoiceFormFieldBorder',
        'text_compression' => 'TextCompression',
        'use_book_fold_printing_settings' => 'UseBookFoldPrintingSettings',
        'use_core_fonts' => 'UseCoreFonts',
        'use_sdt_tag_as_form_field_name' => 'UseSdtTagAsFormFieldName',
        'zoom_behavior' => 'ZoomBehavior',
        'zoom_factor' => 'ZoomFactor'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cache_background_graphics' => 'setCacheBackgroundGraphics',
        'compliance' => 'setCompliance',
        'create_note_hyperlinks' => 'setCreateNoteHyperlinks',
        'custom_properties_export' => 'setCustomPropertiesExport',
        'digital_signature_details' => 'setDigitalSignatureDetails',
        'display_doc_title' => 'setDisplayDocTitle',
        'downsample_options' => 'setDownsampleOptions',
        'embed_attachments' => 'setEmbedAttachments',
        'embed_full_fonts' => 'setEmbedFullFonts',
        'encryption_details' => 'setEncryptionDetails',
        'export_document_structure' => 'setExportDocumentStructure',
        'export_language_to_span_tag' => 'setExportLanguageToSpanTag',
        'font_embedding_mode' => 'setFontEmbeddingMode',
        'header_footer_bookmarks_export_mode' => 'setHeaderFooterBookmarksExportMode',
        'image_color_space_export_mode' => 'setImageColorSpaceExportMode',
        'image_compression' => 'setImageCompression',
        'interpolate_images' => 'setInterpolateImages',
        'open_hyperlinks_in_new_window' => 'setOpenHyperlinksInNewWindow',
        'outline_options' => 'setOutlineOptions',
        'page_mode' => 'setPageMode',
        'preblend_images' => 'setPreblendImages',
        'preserve_form_fields' => 'setPreserveFormFields',
        'render_choice_form_field_border' => 'setRenderChoiceFormFieldBorder',
        'text_compression' => 'setTextCompression',
        'use_book_fold_printing_settings' => 'setUseBookFoldPrintingSettings',
        'use_core_fonts' => 'setUseCoreFonts',
        'use_sdt_tag_as_form_field_name' => 'setUseSdtTagAsFormFieldName',
        'zoom_behavior' => 'setZoomBehavior',
        'zoom_factor' => 'setZoomFactor'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cache_background_graphics' => 'getCacheBackgroundGraphics',
        'compliance' => 'getCompliance',
        'create_note_hyperlinks' => 'getCreateNoteHyperlinks',
        'custom_properties_export' => 'getCustomPropertiesExport',
        'digital_signature_details' => 'getDigitalSignatureDetails',
        'display_doc_title' => 'getDisplayDocTitle',
        'downsample_options' => 'getDownsampleOptions',
        'embed_attachments' => 'getEmbedAttachments',
        'embed_full_fonts' => 'getEmbedFullFonts',
        'encryption_details' => 'getEncryptionDetails',
        'export_document_structure' => 'getExportDocumentStructure',
        'export_language_to_span_tag' => 'getExportLanguageToSpanTag',
        'font_embedding_mode' => 'getFontEmbeddingMode',
        'header_footer_bookmarks_export_mode' => 'getHeaderFooterBookmarksExportMode',
        'image_color_space_export_mode' => 'getImageColorSpaceExportMode',
        'image_compression' => 'getImageCompression',
        'interpolate_images' => 'getInterpolateImages',
        'open_hyperlinks_in_new_window' => 'getOpenHyperlinksInNewWindow',
        'outline_options' => 'getOutlineOptions',
        'page_mode' => 'getPageMode',
        'preblend_images' => 'getPreblendImages',
        'preserve_form_fields' => 'getPreserveFormFields',
        'render_choice_form_field_border' => 'getRenderChoiceFormFieldBorder',
        'text_compression' => 'getTextCompression',
        'use_book_fold_printing_settings' => 'getUseBookFoldPrintingSettings',
        'use_core_fonts' => 'getUseCoreFonts',
        'use_sdt_tag_as_form_field_name' => 'getUseSdtTagAsFormFieldName',
        'zoom_behavior' => 'getZoomBehavior',
        'zoom_factor' => 'getZoomFactor'
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

    const COMPLIANCE_PDF17 = 'Pdf17';
    const COMPLIANCE_PDF20 = 'Pdf20';
    const COMPLIANCE_PDF_A1A = 'PdfA1a';
    const COMPLIANCE_PDF_A1B = 'PdfA1b';
    const COMPLIANCE_PDF_A2A = 'PdfA2a';
    const COMPLIANCE_PDF_A2U = 'PdfA2u';
    const COMPLIANCE_PDF_A4 = 'PdfA4';
    const COMPLIANCE_PDF_A4_UA2 = 'PdfA4Ua2';
    const COMPLIANCE_PDF_UA1 = 'PdfUa1';
    const COMPLIANCE_PDF_UA2 = 'PdfUa2';
    const CUSTOM_PROPERTIES_EXPORT_NONE = 'None';
    const CUSTOM_PROPERTIES_EXPORT_STANDARD = 'Standard';
    const CUSTOM_PROPERTIES_EXPORT_METADATA = 'Metadata';
    const FONT_EMBEDDING_MODE_EMBED_ALL = 'EmbedAll';
    const FONT_EMBEDDING_MODE_EMBED_NONSTANDARD = 'EmbedNonstandard';
    const FONT_EMBEDDING_MODE_EMBED_NONE = 'EmbedNone';
    const HEADER_FOOTER_BOOKMARKS_EXPORT_MODE_NONE = 'None';
    const HEADER_FOOTER_BOOKMARKS_EXPORT_MODE_FIRST = 'First';
    const HEADER_FOOTER_BOOKMARKS_EXPORT_MODE_ALL = 'All';
    const IMAGE_COLOR_SPACE_EXPORT_MODE_AUTO = 'Auto';
    const IMAGE_COLOR_SPACE_EXPORT_MODE_SIMPLE_CMYK = 'SimpleCmyk';
    const PAGE_MODE_USE_NONE = 'UseNone';
    const PAGE_MODE_USE_OUTLINES = 'UseOutlines';
    const PAGE_MODE_USE_THUMBS = 'UseThumbs';
    const PAGE_MODE_FULL_SCREEN = 'FullScreen';
    const PAGE_MODE_USE_OC = 'UseOC';
    const PAGE_MODE_USE_ATTACHMENTS = 'UseAttachments';
    const TEXT_COMPRESSION_NONE = 'None';
    const TEXT_COMPRESSION_FLATE = 'Flate';
    const ZOOM_BEHAVIOR_NONE = 'None';
    const ZOOM_BEHAVIOR_ZOOM_FACTOR = 'ZoomFactor';
    const ZOOM_BEHAVIOR_FIT_PAGE = 'FitPage';
    const ZOOM_BEHAVIOR_FIT_WIDTH = 'FitWidth';
    const ZOOM_BEHAVIOR_FIT_HEIGHT = 'FitHeight';
    const ZOOM_BEHAVIOR_FIT_BOX = 'FitBox';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getComplianceAllowableValues()
    {
        return [
            self::COMPLIANCE_PDF17,
            self::COMPLIANCE_PDF20,
            self::COMPLIANCE_PDF_A1A,
            self::COMPLIANCE_PDF_A1B,
            self::COMPLIANCE_PDF_A2A,
            self::COMPLIANCE_PDF_A2U,
            self::COMPLIANCE_PDF_A4,
            self::COMPLIANCE_PDF_A4_UA2,
            self::COMPLIANCE_PDF_UA1,
            self::COMPLIANCE_PDF_UA2
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomPropertiesExportAllowableValues()
    {
        return [
            self::CUSTOM_PROPERTIES_EXPORT_NONE,
            self::CUSTOM_PROPERTIES_EXPORT_STANDARD,
            self::CUSTOM_PROPERTIES_EXPORT_METADATA
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontEmbeddingModeAllowableValues()
    {
        return [
            self::FONT_EMBEDDING_MODE_EMBED_ALL,
            self::FONT_EMBEDDING_MODE_EMBED_NONSTANDARD,
            self::FONT_EMBEDDING_MODE_EMBED_NONE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHeaderFooterBookmarksExportModeAllowableValues()
    {
        return [
            self::HEADER_FOOTER_BOOKMARKS_EXPORT_MODE_NONE,
            self::HEADER_FOOTER_BOOKMARKS_EXPORT_MODE_FIRST,
            self::HEADER_FOOTER_BOOKMARKS_EXPORT_MODE_ALL
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageColorSpaceExportModeAllowableValues()
    {
        return [
            self::IMAGE_COLOR_SPACE_EXPORT_MODE_AUTO,
            self::IMAGE_COLOR_SPACE_EXPORT_MODE_SIMPLE_CMYK
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageModeAllowableValues()
    {
        return [
            self::PAGE_MODE_USE_NONE,
            self::PAGE_MODE_USE_OUTLINES,
            self::PAGE_MODE_USE_THUMBS,
            self::PAGE_MODE_FULL_SCREEN,
            self::PAGE_MODE_USE_OC,
            self::PAGE_MODE_USE_ATTACHMENTS
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextCompressionAllowableValues()
    {
        return [
            self::TEXT_COMPRESSION_NONE,
            self::TEXT_COMPRESSION_FLATE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getZoomBehaviorAllowableValues()
    {
        return [
            self::ZOOM_BEHAVIOR_NONE,
            self::ZOOM_BEHAVIOR_ZOOM_FACTOR,
            self::ZOOM_BEHAVIOR_FIT_PAGE,
            self::ZOOM_BEHAVIOR_FIT_WIDTH,
            self::ZOOM_BEHAVIOR_FIT_HEIGHT,
            self::ZOOM_BEHAVIOR_FIT_BOX
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
        $this->container['cache_background_graphics'] = isset($data['cache_background_graphics']) ? $data['cache_background_graphics'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['create_note_hyperlinks'] = isset($data['create_note_hyperlinks']) ? $data['create_note_hyperlinks'] : null;
        $this->container['custom_properties_export'] = isset($data['custom_properties_export']) ? $data['custom_properties_export'] : null;
        $this->container['digital_signature_details'] = isset($data['digital_signature_details']) ? $data['digital_signature_details'] : null;
        $this->container['display_doc_title'] = isset($data['display_doc_title']) ? $data['display_doc_title'] : null;
        $this->container['downsample_options'] = isset($data['downsample_options']) ? $data['downsample_options'] : null;
        $this->container['embed_attachments'] = isset($data['embed_attachments']) ? $data['embed_attachments'] : null;
        $this->container['embed_full_fonts'] = isset($data['embed_full_fonts']) ? $data['embed_full_fonts'] : null;
        $this->container['encryption_details'] = isset($data['encryption_details']) ? $data['encryption_details'] : null;
        $this->container['export_document_structure'] = isset($data['export_document_structure']) ? $data['export_document_structure'] : null;
        $this->container['export_language_to_span_tag'] = isset($data['export_language_to_span_tag']) ? $data['export_language_to_span_tag'] : null;
        $this->container['font_embedding_mode'] = isset($data['font_embedding_mode']) ? $data['font_embedding_mode'] : null;
        $this->container['header_footer_bookmarks_export_mode'] = isset($data['header_footer_bookmarks_export_mode']) ? $data['header_footer_bookmarks_export_mode'] : null;
        $this->container['image_color_space_export_mode'] = isset($data['image_color_space_export_mode']) ? $data['image_color_space_export_mode'] : null;
        $this->container['image_compression'] = isset($data['image_compression']) ? $data['image_compression'] : null;
        $this->container['interpolate_images'] = isset($data['interpolate_images']) ? $data['interpolate_images'] : null;
        $this->container['open_hyperlinks_in_new_window'] = isset($data['open_hyperlinks_in_new_window']) ? $data['open_hyperlinks_in_new_window'] : null;
        $this->container['outline_options'] = isset($data['outline_options']) ? $data['outline_options'] : null;
        $this->container['page_mode'] = isset($data['page_mode']) ? $data['page_mode'] : null;
        $this->container['preblend_images'] = isset($data['preblend_images']) ? $data['preblend_images'] : null;
        $this->container['preserve_form_fields'] = isset($data['preserve_form_fields']) ? $data['preserve_form_fields'] : null;
        $this->container['render_choice_form_field_border'] = isset($data['render_choice_form_field_border']) ? $data['render_choice_form_field_border'] : null;
        $this->container['text_compression'] = isset($data['text_compression']) ? $data['text_compression'] : null;
        $this->container['use_book_fold_printing_settings'] = isset($data['use_book_fold_printing_settings']) ? $data['use_book_fold_printing_settings'] : null;
        $this->container['use_core_fonts'] = isset($data['use_core_fonts']) ? $data['use_core_fonts'] : null;
        $this->container['use_sdt_tag_as_form_field_name'] = isset($data['use_sdt_tag_as_form_field_name']) ? $data['use_sdt_tag_as_form_field_name'] : null;
        $this->container['zoom_behavior'] = isset($data['zoom_behavior']) ? $data['zoom_behavior'] : null;
        $this->container['zoom_factor'] = isset($data['zoom_factor']) ? $data['zoom_factor'] : null;
        $this->container['save_format'] = "pdf";
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['compliance'])) {
            $allowedValuesCompliance = $this->getComplianceAllowableValues();
            if (!in_array($this->container['compliance'], $allowedValuesCompliance)) {
                throw new \InvalidArgumentException('Property Compliance in PdfSaveOptionsData has invalid format.');
            }
        }

        if (isset($this->container['custom_properties_export'])) {
            $allowedValuesCustomPropertiesExport = $this->getCustomPropertiesExportAllowableValues();
            if (!in_array($this->container['custom_properties_export'], $allowedValuesCustomPropertiesExport)) {
                throw new \InvalidArgumentException('Property CustomPropertiesExport in PdfSaveOptionsData has invalid format.');
            }
        }


        if (isset($this->container['digital_signature_details'])) {
            $this->getDigitalSignatureDetails()->validate();
        }


        if (isset($this->container['downsample_options'])) {
            $this->getDownsampleOptions()->validate();
        }


        if (isset($this->container['encryption_details'])) {
            $this->getEncryptionDetails()->validate();
        }

        if (isset($this->container['font_embedding_mode'])) {
            $allowedValuesFontEmbeddingMode = $this->getFontEmbeddingModeAllowableValues();
            if (!in_array($this->container['font_embedding_mode'], $allowedValuesFontEmbeddingMode)) {
                throw new \InvalidArgumentException('Property FontEmbeddingMode in PdfSaveOptionsData has invalid format.');
            }
        }

        if (isset($this->container['header_footer_bookmarks_export_mode'])) {
            $allowedValuesHeaderFooterBookmarksExportMode = $this->getHeaderFooterBookmarksExportModeAllowableValues();
            if (!in_array($this->container['header_footer_bookmarks_export_mode'], $allowedValuesHeaderFooterBookmarksExportMode)) {
                throw new \InvalidArgumentException('Property HeaderFooterBookmarksExportMode in PdfSaveOptionsData has invalid format.');
            }
        }

        if (isset($this->container['image_color_space_export_mode'])) {
            $allowedValuesImageColorSpaceExportMode = $this->getImageColorSpaceExportModeAllowableValues();
            if (!in_array($this->container['image_color_space_export_mode'], $allowedValuesImageColorSpaceExportMode)) {
                throw new \InvalidArgumentException('Property ImageColorSpaceExportMode in PdfSaveOptionsData has invalid format.');
            }
        }


        if (isset($this->container['outline_options'])) {
            $this->getOutlineOptions()->validate();
        }

        if (isset($this->container['page_mode'])) {
            $allowedValuesPageMode = $this->getPageModeAllowableValues();
            if (!in_array($this->container['page_mode'], $allowedValuesPageMode)) {
                throw new \InvalidArgumentException('Property PageMode in PdfSaveOptionsData has invalid format.');
            }
        }

        if (isset($this->container['text_compression'])) {
            $allowedValuesTextCompression = $this->getTextCompressionAllowableValues();
            if (!in_array($this->container['text_compression'], $allowedValuesTextCompression)) {
                throw new \InvalidArgumentException('Property TextCompression in PdfSaveOptionsData has invalid format.');
            }
        }

        if (isset($this->container['zoom_behavior'])) {
            $allowedValuesZoomBehavior = $this->getZoomBehaviorAllowableValues();
            if (!in_array($this->container['zoom_behavior'], $allowedValuesZoomBehavior)) {
                throw new \InvalidArgumentException('Property ZoomBehavior in PdfSaveOptionsData has invalid format.');
            }
        }

    }

    /*
     * Gets cache_background_graphics
     *
     * @return bool
     */
    public function getCacheBackgroundGraphics()
    {
        return $this->container['cache_background_graphics'];
    }

    /*
     * Sets cache_background_graphics
     *
     * @param bool $cache_background_graphics Gets or sets a value determining whether or not to cache graphics placed in document's background. Default value is true and background graphics are written to the PDF document as an xObject. When the value is false background graphics are not cached. Some shapes are not supported for caching(shapes with fields, bookmarks, HRefs). Document background graphic is various shapes, charts, images placed in the footer or header, well as background and border of a page.
     *
     * @return $this
     */
    public function setCacheBackgroundGraphics($cache_background_graphics)
    {
        $this->container['cache_background_graphics'] = $cache_background_graphics;
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
     * @param string $compliance Gets or sets the PDF standards compliance level for output documents.
     *
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $allowedValues = $this->getComplianceAllowableValues();
        if ((!is_numeric($compliance) && !in_array($compliance, $allowedValues)) || (is_numeric($compliance) && !in_array($allowedValues[$compliance], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compliance', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['compliance'] = $compliance;
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
     * @param bool $create_note_hyperlinks Gets or sets a value indicating whether to convert footnote/endnote references in main text story into active hyperlinks. When clicked the hyperlink will lead to the corresponding footnote/endnote. The default value is false.
     *
     * @return $this
     */
    public function setCreateNoteHyperlinks($create_note_hyperlinks)
    {
        $this->container['create_note_hyperlinks'] = $create_note_hyperlinks;
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
     * @param string $custom_properties_export Gets or sets the option that controls the way CustomDocumentProperties are exported to PDF file. The default value is None.
     *
     * @return $this
     */
    public function setCustomPropertiesExport($custom_properties_export)
    {
        $allowedValues = $this->getCustomPropertiesExportAllowableValues();
        if ((!is_numeric($custom_properties_export) && !in_array($custom_properties_export, $allowedValues)) || (is_numeric($custom_properties_export) && !in_array($allowedValues[$custom_properties_export], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'custom_properties_export', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['custom_properties_export'] = $custom_properties_export;
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
     * @param \Aspose\Words\Model\PdfDigitalSignatureDetailsData $digital_signature_details Gets or sets the details for signing the output PDF document.
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
     * @param bool $display_doc_title Gets or sets a value indicating whether the window’s title bar should display the document title taken from the Title entry of the document information dictionary. If false, the title bar should instead display the name of the PDF file containing the document. The default value is false.
     *
     * @return $this
     */
    public function setDisplayDocTitle($display_doc_title)
    {
        $this->container['display_doc_title'] = $display_doc_title;
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
     * @param \Aspose\Words\Model\DownsampleOptionsData $downsample_options Gets or sets the downsample options.
     *
     * @return $this
     */
    public function setDownsampleOptions($downsample_options)
    {
        $this->container['downsample_options'] = $downsample_options;
        return $this;
    }


    /*
     * Gets embed_attachments
     *
     * @return bool
     */
    public function getEmbedAttachments()
    {
        return $this->container['embed_attachments'];
    }

    /*
     * Sets embed_attachments
     *
     * @param bool $embed_attachments Gets or sets a value determining whether or not to embed attachments to the PDF document. Default value is false and attachments are not embedded. When the value is true attachments are embedded to the PDF document. Embedding attachments is not supported when saving to PDF/A and PDF/UA compliance. false value will be used automatically. Embedding attachments is not supported when encryption is enabled. false value will be used automatically.
     *
     * @return $this
     */
    public function setEmbedAttachments($embed_attachments)
    {
        $this->container['embed_attachments'] = $embed_attachments;
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
     * @param bool $embed_full_fonts Gets or sets a value indicating whether fonts are embedded into the resulting PDF documents.
     *
     * @return $this
     */
    public function setEmbedFullFonts($embed_full_fonts)
    {
        $this->container['embed_full_fonts'] = $embed_full_fonts;
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
     * @param \Aspose\Words\Model\PdfEncryptionDetailsData $encryption_details Gets or sets the details for encrypting the output PDF document.
     *
     * @return $this
     */
    public function setEncryptionDetails($encryption_details)
    {
        $this->container['encryption_details'] = $encryption_details;
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
     * @param bool $export_document_structure Gets or sets a value indicating whether to export document structure.
     *
     * @return $this
     */
    public function setExportDocumentStructure($export_document_structure)
    {
        $this->container['export_document_structure'] = $export_document_structure;
        return $this;
    }


    /*
     * Gets export_language_to_span_tag
     *
     * @return bool
     */
    public function getExportLanguageToSpanTag()
    {
        return $this->container['export_language_to_span_tag'];
    }

    /*
     * Sets export_language_to_span_tag
     *
     * @param bool $export_language_to_span_tag Gets or sets a value determining whether or not to create a "Span" tag in the document structure to export the text language. Default value is false and "Lang" attribute is attached to a marked-content sequence in a page content stream. When the value is true "Span" tag is created for the text with non-default language and "Lang" attribute is attached to this tag. This value is ignored when Aspose.Words.Saving.PdfSaveOptions.ExportDocumentStructure is false.
     *
     * @return $this
     */
    public function setExportLanguageToSpanTag($export_language_to_span_tag)
    {
        $this->container['export_language_to_span_tag'] = $export_language_to_span_tag;
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
     * @param string $font_embedding_mode Gets or sets the font embedding mode.
     *
     * @return $this
     */
    public function setFontEmbeddingMode($font_embedding_mode)
    {
        $allowedValues = $this->getFontEmbeddingModeAllowableValues();
        if ((!is_numeric($font_embedding_mode) && !in_array($font_embedding_mode, $allowedValues)) || (is_numeric($font_embedding_mode) && !in_array($allowedValues[$font_embedding_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'font_embedding_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['font_embedding_mode'] = $font_embedding_mode;
        return $this;
    }


    /*
     * Gets header_footer_bookmarks_export_mode
     *
     * @return string
     */
    public function getHeaderFooterBookmarksExportMode()
    {
        return $this->container['header_footer_bookmarks_export_mode'];
    }

    /*
     * Sets header_footer_bookmarks_export_mode
     *
     * @param string $header_footer_bookmarks_export_mode Gets or sets the option that controls how bookmarks in headers/footers are exported. The default value is Aspose.Words.Saving.HeaderFooterBookmarksExportMode.All.
     *
     * @return $this
     */
    public function setHeaderFooterBookmarksExportMode($header_footer_bookmarks_export_mode)
    {
        $allowedValues = $this->getHeaderFooterBookmarksExportModeAllowableValues();
        if ((!is_numeric($header_footer_bookmarks_export_mode) && !in_array($header_footer_bookmarks_export_mode, $allowedValues)) || (is_numeric($header_footer_bookmarks_export_mode) && !in_array($allowedValues[$header_footer_bookmarks_export_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'header_footer_bookmarks_export_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['header_footer_bookmarks_export_mode'] = $header_footer_bookmarks_export_mode;
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
     * @param string $image_color_space_export_mode Gets or sets the option that controls how the color space will be selected for the images in PDF document. The default value is "Auto". If "SimpleCmyk" value is specified, ImageCompression option is ignored and Flate compression is used for all images in the document.
     *
     * @return $this
     */
    public function setImageColorSpaceExportMode($image_color_space_export_mode)
    {
        $allowedValues = $this->getImageColorSpaceExportModeAllowableValues();
        if ((!is_numeric($image_color_space_export_mode) && !in_array($image_color_space_export_mode, $allowedValues)) || (is_numeric($image_color_space_export_mode) && !in_array($allowedValues[$image_color_space_export_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'image_color_space_export_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['image_color_space_export_mode'] = $image_color_space_export_mode;
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
     * @param string $image_compression Gets or sets the compression type to be used for all images in the document.
     *
     * @return $this
     */
    public function setImageCompression($image_compression)
    {
        $this->container['image_compression'] = $image_compression;
        return $this;
    }


    /*
     * Gets interpolate_images
     *
     * @return bool
     */
    public function getInterpolateImages()
    {
        return $this->container['interpolate_images'];
    }

    /*
     * Sets interpolate_images
     *
     * @param bool $interpolate_images Gets or sets a value indicating whether image interpolation shall be performed by a conforming reader. When false is specified, the flag is not written to the output document and the default behavior of reader is used instead. When the resolution of a source image is significantly lower than that of the output device, each source sample covers many device pixels. As a result, images can appear jaggy or blocky. These visual artifacts can be reduced by applying an image interpolation algorithm during rendering. Instead of painting all pixels covered by a source sample with the same color, image interpolation attempts to produce a smooth transition between adjacent sample values. A conforming Reader may choose to not implement this feature of PDF, or may use any specific implementation of interpolation that it wishes. The default value is false.
     *
     * @return $this
     */
    public function setInterpolateImages($interpolate_images)
    {
        $this->container['interpolate_images'] = $interpolate_images;
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
     * @param bool $open_hyperlinks_in_new_window Gets or sets a value indicating whether hyperlinks in the output Pdf document are forced to be opened in a new window (or tab) of a browser.
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
     * @param \Aspose\Words\Model\OutlineOptionsData $outline_options Gets or sets the outline options.
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
     * @param string $page_mode Gets or sets the option that controls how the PDF document should be displayed when opened in the PDF reader.
     *
     * @return $this
     */
    public function setPageMode($page_mode)
    {
        $allowedValues = $this->getPageModeAllowableValues();
        if ((!is_numeric($page_mode) && !in_array($page_mode, $allowedValues)) || (is_numeric($page_mode) && !in_array($allowedValues[$page_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'page_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['page_mode'] = $page_mode;
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
     * @param bool $preblend_images Gets or sets a value indicating whether to preblend transparent images with black background color. Preblending images may improve PDF document visual appearance in Adobe Reader and remove anti-aliasing artifacts.In order to properly display preblended images, PDF viewer application must support /Matte entry in soft-mask image dictionary. Also preblending images may decrease PDF rendering performance.The default value is false.
     *
     * @return $this
     */
    public function setPreblendImages($preblend_images)
    {
        $this->container['preblend_images'] = $preblend_images;
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
     * @param bool $preserve_form_fields Gets or sets a value indicating whether to preserve Microsoft Word form fields as form fields in PDF or convert them to text.
     *
     * @return $this
     */
    public function setPreserveFormFields($preserve_form_fields)
    {
        $this->container['preserve_form_fields'] = $preserve_form_fields;
        return $this;
    }


    /*
     * Gets render_choice_form_field_border
     *
     * @return bool
     */
    public function getRenderChoiceFormFieldBorder()
    {
        return $this->container['render_choice_form_field_border'];
    }

    /*
     * Sets render_choice_form_field_border
     *
     * @param bool $render_choice_form_field_border Gets or sets a value indicating whether to render PDF choice form field border. PDF choice form fields are used for export of SDT Combo Box Content Control, SDT Drop-Down List Content Control and legacy Drop-Down Form Field when PreserveFormFields option is enabled.The default value is true.
     *
     * @return $this
     */
    public function setRenderChoiceFormFieldBorder($render_choice_form_field_border)
    {
        $this->container['render_choice_form_field_border'] = $render_choice_form_field_border;
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
     * @param string $text_compression Gets or sets the compression type to be used for all textual content in the document.
     *
     * @return $this
     */
    public function setTextCompression($text_compression)
    {
        $allowedValues = $this->getTextCompressionAllowableValues();
        if ((!is_numeric($text_compression) && !in_array($text_compression, $allowedValues)) || (is_numeric($text_compression) && !in_array($allowedValues[$text_compression], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'text_compression', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['text_compression'] = $text_compression;
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
     * @param bool $use_book_fold_printing_settings Gets or sets a value indicating whether the document should be saved using a booklet printing layout.
     *
     * @return $this
     */
    public function setUseBookFoldPrintingSettings($use_book_fold_printing_settings)
    {
        $this->container['use_book_fold_printing_settings'] = $use_book_fold_printing_settings;
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
     * @param bool $use_core_fonts Gets or sets a value indicating whether to substitute TrueType fonts Arial, Times New Roman, Courier New and Symbol with core PDF Type 1 fonts.
     *
     * @return $this
     */
    public function setUseCoreFonts($use_core_fonts)
    {
        $this->container['use_core_fonts'] = $use_core_fonts;
        return $this;
    }


    /*
     * Gets use_sdt_tag_as_form_field_name
     *
     * @return bool
     */
    public function getUseSdtTagAsFormFieldName()
    {
        return $this->container['use_sdt_tag_as_form_field_name'];
    }

    /*
     * Sets use_sdt_tag_as_form_field_name
     *
     * @param bool $use_sdt_tag_as_form_field_name Gets or sets a value indicating whether to use SDT control Tag or Id property as a name of form field in PDF. The default value is false.When set to false, SDT control Id property is used as a name of form field in PDF.When set to true, SDT control Tag property is used as a name of form field in PDF.If set to true and Tag is empty, Id property will be used as a form field name.If set to true and Tag values are not unique, duplicate Tag values will be altered to build unique PDF form field names.
     *
     * @return $this
     */
    public function setUseSdtTagAsFormFieldName($use_sdt_tag_as_form_field_name)
    {
        $this->container['use_sdt_tag_as_form_field_name'] = $use_sdt_tag_as_form_field_name;
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
     * @param string $zoom_behavior Gets or sets the option that controls what type of zoom should be applied when a document is opened with a PDF viewer.
     *
     * @return $this
     */
    public function setZoomBehavior($zoom_behavior)
    {
        $allowedValues = $this->getZoomBehaviorAllowableValues();
        if ((!is_numeric($zoom_behavior) && !in_array($zoom_behavior, $allowedValues)) || (is_numeric($zoom_behavior) && !in_array($allowedValues[$zoom_behavior], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'zoom_behavior', must be one of '%s'", implode("', '", $allowedValues)));
        }
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
     * @param int $zoom_factor Gets or sets the zoom factor (in percentages) for a document.
     *
     * @return $this
     */
    public function setZoomFactor($zoom_factor)
    {
        $this->container['zoom_factor'] = $zoom_factor;
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

