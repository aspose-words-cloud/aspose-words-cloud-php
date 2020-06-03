<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Font.php">
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
 * Font
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * Font
 *
 * @description Font element.
 */
class Font extends LinkElement 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Font";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'all_caps' => 'bool',
        'bidi' => 'bool',
        'bold' => 'bool',
        'bold_bi' => 'bool',
        'border' => '\Aspose\Words\Model\Border',
        'color' => '\Aspose\Words\Model\XmlColor',
        'complex_script' => 'bool',
        'double_strike_through' => 'bool',
        'emboss' => 'bool',
        'engrave' => 'bool',
        'hidden' => 'bool',
        'highlight_color' => '\Aspose\Words\Model\XmlColor',
        'italic' => 'bool',
        'italic_bi' => 'bool',
        'kerning' => 'double',
        'locale_id' => 'int',
        'locale_id_bi' => 'int',
        'locale_id_far_east' => 'int',
        'name' => 'string',
        'name_ascii' => 'string',
        'name_bi' => 'string',
        'name_far_east' => 'string',
        'name_other' => 'string',
        'no_proofing' => 'bool',
        'outline' => 'bool',
        'position' => 'double',
        'scaling' => 'int',
        'shadow' => 'bool',
        'size' => 'double',
        'size_bi' => 'double',
        'small_caps' => 'bool',
        'spacing' => 'double',
        'strike_through' => 'bool',
        'style_identifier' => 'string',
        'style_name' => 'string',
        'subscript' => 'bool',
        'superscript' => 'bool',
        'text_effect' => 'string',
        'underline' => 'string',
        'underline_color' => '\Aspose\Words\Model\XmlColor'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'all_caps' => null,
        'bidi' => null,
        'bold' => null,
        'bold_bi' => null,
        'border' => null,
        'color' => null,
        'complex_script' => null,
        'double_strike_through' => null,
        'emboss' => null,
        'engrave' => null,
        'hidden' => null,
        'highlight_color' => null,
        'italic' => null,
        'italic_bi' => null,
        'kerning' => 'double',
        'locale_id' => 'int32',
        'locale_id_bi' => 'int32',
        'locale_id_far_east' => 'int32',
        'name' => null,
        'name_ascii' => null,
        'name_bi' => null,
        'name_far_east' => null,
        'name_other' => null,
        'no_proofing' => null,
        'outline' => null,
        'position' => 'double',
        'scaling' => 'int32',
        'shadow' => null,
        'size' => 'double',
        'size_bi' => 'double',
        'small_caps' => null,
        'spacing' => 'double',
        'strike_through' => null,
        'style_identifier' => null,
        'style_name' => null,
        'subscript' => null,
        'superscript' => null,
        'text_effect' => null,
        'underline' => null,
        'underline_color' => null
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
        'all_caps' => 'AllCaps',
        'bidi' => 'Bidi',
        'bold' => 'Bold',
        'bold_bi' => 'BoldBi',
        'border' => 'Border',
        'color' => 'Color',
        'complex_script' => 'ComplexScript',
        'double_strike_through' => 'DoubleStrikeThrough',
        'emboss' => 'Emboss',
        'engrave' => 'Engrave',
        'hidden' => 'Hidden',
        'highlight_color' => 'HighlightColor',
        'italic' => 'Italic',
        'italic_bi' => 'ItalicBi',
        'kerning' => 'Kerning',
        'locale_id' => 'LocaleId',
        'locale_id_bi' => 'LocaleIdBi',
        'locale_id_far_east' => 'LocaleIdFarEast',
        'name' => 'Name',
        'name_ascii' => 'NameAscii',
        'name_bi' => 'NameBi',
        'name_far_east' => 'NameFarEast',
        'name_other' => 'NameOther',
        'no_proofing' => 'NoProofing',
        'outline' => 'Outline',
        'position' => 'Position',
        'scaling' => 'Scaling',
        'shadow' => 'Shadow',
        'size' => 'Size',
        'size_bi' => 'SizeBi',
        'small_caps' => 'SmallCaps',
        'spacing' => 'Spacing',
        'strike_through' => 'StrikeThrough',
        'style_identifier' => 'StyleIdentifier',
        'style_name' => 'StyleName',
        'subscript' => 'Subscript',
        'superscript' => 'Superscript',
        'text_effect' => 'TextEffect',
        'underline' => 'Underline',
        'underline_color' => 'UnderlineColor'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'all_caps' => 'setAllCaps',
        'bidi' => 'setBidi',
        'bold' => 'setBold',
        'bold_bi' => 'setBoldBi',
        'border' => 'setBorder',
        'color' => 'setColor',
        'complex_script' => 'setComplexScript',
        'double_strike_through' => 'setDoubleStrikeThrough',
        'emboss' => 'setEmboss',
        'engrave' => 'setEngrave',
        'hidden' => 'setHidden',
        'highlight_color' => 'setHighlightColor',
        'italic' => 'setItalic',
        'italic_bi' => 'setItalicBi',
        'kerning' => 'setKerning',
        'locale_id' => 'setLocaleId',
        'locale_id_bi' => 'setLocaleIdBi',
        'locale_id_far_east' => 'setLocaleIdFarEast',
        'name' => 'setName',
        'name_ascii' => 'setNameAscii',
        'name_bi' => 'setNameBi',
        'name_far_east' => 'setNameFarEast',
        'name_other' => 'setNameOther',
        'no_proofing' => 'setNoProofing',
        'outline' => 'setOutline',
        'position' => 'setPosition',
        'scaling' => 'setScaling',
        'shadow' => 'setShadow',
        'size' => 'setSize',
        'size_bi' => 'setSizeBi',
        'small_caps' => 'setSmallCaps',
        'spacing' => 'setSpacing',
        'strike_through' => 'setStrikeThrough',
        'style_identifier' => 'setStyleIdentifier',
        'style_name' => 'setStyleName',
        'subscript' => 'setSubscript',
        'superscript' => 'setSuperscript',
        'text_effect' => 'setTextEffect',
        'underline' => 'setUnderline',
        'underline_color' => 'setUnderlineColor'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'all_caps' => 'getAllCaps',
        'bidi' => 'getBidi',
        'bold' => 'getBold',
        'bold_bi' => 'getBoldBi',
        'border' => 'getBorder',
        'color' => 'getColor',
        'complex_script' => 'getComplexScript',
        'double_strike_through' => 'getDoubleStrikeThrough',
        'emboss' => 'getEmboss',
        'engrave' => 'getEngrave',
        'hidden' => 'getHidden',
        'highlight_color' => 'getHighlightColor',
        'italic' => 'getItalic',
        'italic_bi' => 'getItalicBi',
        'kerning' => 'getKerning',
        'locale_id' => 'getLocaleId',
        'locale_id_bi' => 'getLocaleIdBi',
        'locale_id_far_east' => 'getLocaleIdFarEast',
        'name' => 'getName',
        'name_ascii' => 'getNameAscii',
        'name_bi' => 'getNameBi',
        'name_far_east' => 'getNameFarEast',
        'name_other' => 'getNameOther',
        'no_proofing' => 'getNoProofing',
        'outline' => 'getOutline',
        'position' => 'getPosition',
        'scaling' => 'getScaling',
        'shadow' => 'getShadow',
        'size' => 'getSize',
        'size_bi' => 'getSizeBi',
        'small_caps' => 'getSmallCaps',
        'spacing' => 'getSpacing',
        'strike_through' => 'getStrikeThrough',
        'style_identifier' => 'getStyleIdentifier',
        'style_name' => 'getStyleName',
        'subscript' => 'getSubscript',
        'superscript' => 'getSuperscript',
        'text_effect' => 'getTextEffect',
        'underline' => 'getUnderline',
        'underline_color' => 'getUnderlineColor'
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

    const STYLE_IDENTIFIER_NORMAL = 'Normal';
    const STYLE_IDENTIFIER_HEADING1 = 'Heading1';
    const STYLE_IDENTIFIER_HEADING2 = 'Heading2';
    const STYLE_IDENTIFIER_HEADING3 = 'Heading3';
    const STYLE_IDENTIFIER_HEADING4 = 'Heading4';
    const STYLE_IDENTIFIER_HEADING5 = 'Heading5';
    const STYLE_IDENTIFIER_HEADING6 = 'Heading6';
    const STYLE_IDENTIFIER_HEADING7 = 'Heading7';
    const STYLE_IDENTIFIER_HEADING8 = 'Heading8';
    const STYLE_IDENTIFIER_HEADING9 = 'Heading9';
    const STYLE_IDENTIFIER_INDEX1 = 'Index1';
    const STYLE_IDENTIFIER_INDEX2 = 'Index2';
    const STYLE_IDENTIFIER_INDEX3 = 'Index3';
    const STYLE_IDENTIFIER_INDEX4 = 'Index4';
    const STYLE_IDENTIFIER_INDEX5 = 'Index5';
    const STYLE_IDENTIFIER_INDEX6 = 'Index6';
    const STYLE_IDENTIFIER_INDEX7 = 'Index7';
    const STYLE_IDENTIFIER_INDEX8 = 'Index8';
    const STYLE_IDENTIFIER_INDEX9 = 'Index9';
    const STYLE_IDENTIFIER_TOC1 = 'Toc1';
    const STYLE_IDENTIFIER_TOC2 = 'Toc2';
    const STYLE_IDENTIFIER_TOC3 = 'Toc3';
    const STYLE_IDENTIFIER_TOC4 = 'Toc4';
    const STYLE_IDENTIFIER_TOC5 = 'Toc5';
    const STYLE_IDENTIFIER_TOC6 = 'Toc6';
    const STYLE_IDENTIFIER_TOC7 = 'Toc7';
    const STYLE_IDENTIFIER_TOC8 = 'Toc8';
    const STYLE_IDENTIFIER_TOC9 = 'Toc9';
    const STYLE_IDENTIFIER_NORMAL_INDENT = 'NormalIndent';
    const STYLE_IDENTIFIER_FOOTNOTE_TEXT = 'FootnoteText';
    const STYLE_IDENTIFIER_COMMENT_TEXT = 'CommentText';
    const STYLE_IDENTIFIER_HEADER = 'Header';
    const STYLE_IDENTIFIER_FOOTER = 'Footer';
    const STYLE_IDENTIFIER_INDEX_HEADING = 'IndexHeading';
    const STYLE_IDENTIFIER_CAPTION = 'Caption';
    const STYLE_IDENTIFIER_TABLE_OF_FIGURES = 'TableOfFigures';
    const STYLE_IDENTIFIER_ENVELOPE_ADDRESS = 'EnvelopeAddress';
    const STYLE_IDENTIFIER_ENVELOPE_RETURN = 'EnvelopeReturn';
    const STYLE_IDENTIFIER_FOOTNOTE_REFERENCE = 'FootnoteReference';
    const STYLE_IDENTIFIER_COMMENT_REFERENCE = 'CommentReference';
    const STYLE_IDENTIFIER_LINE_NUMBER = 'LineNumber';
    const STYLE_IDENTIFIER_PAGE_NUMBER = 'PageNumber';
    const STYLE_IDENTIFIER_ENDNOTE_REFERENCE = 'EndnoteReference';
    const STYLE_IDENTIFIER_ENDNOTE_TEXT = 'EndnoteText';
    const STYLE_IDENTIFIER_TABLE_OF_AUTHORITIES = 'TableOfAuthorities';
    const STYLE_IDENTIFIER_MACRO = 'Macro';
    const STYLE_IDENTIFIER_TOA_HEADING = 'ToaHeading';
    const STYLE_IDENTIFIER__LIST = 'List';
    const STYLE_IDENTIFIER_LIST_BULLET = 'ListBullet';
    const STYLE_IDENTIFIER_LIST_NUMBER = 'ListNumber';
    const STYLE_IDENTIFIER_LIST2 = 'List2';
    const STYLE_IDENTIFIER_LIST3 = 'List3';
    const STYLE_IDENTIFIER_LIST4 = 'List4';
    const STYLE_IDENTIFIER_LIST5 = 'List5';
    const STYLE_IDENTIFIER_LIST_BULLET2 = 'ListBullet2';
    const STYLE_IDENTIFIER_LIST_BULLET3 = 'ListBullet3';
    const STYLE_IDENTIFIER_LIST_BULLET4 = 'ListBullet4';
    const STYLE_IDENTIFIER_LIST_BULLET5 = 'ListBullet5';
    const STYLE_IDENTIFIER_LIST_NUMBER2 = 'ListNumber2';
    const STYLE_IDENTIFIER_LIST_NUMBER3 = 'ListNumber3';
    const STYLE_IDENTIFIER_LIST_NUMBER4 = 'ListNumber4';
    const STYLE_IDENTIFIER_LIST_NUMBER5 = 'ListNumber5';
    const STYLE_IDENTIFIER_TITLE = 'Title';
    const STYLE_IDENTIFIER_CLOSING = 'Closing';
    const STYLE_IDENTIFIER_SIGNATURE = 'Signature';
    const STYLE_IDENTIFIER_DEFAULT_PARAGRAPH_FONT = 'DefaultParagraphFont';
    const STYLE_IDENTIFIER_BODY_TEXT = 'BodyText';
    const STYLE_IDENTIFIER_BODY_TEXT_IND = 'BodyTextInd';
    const STYLE_IDENTIFIER_LIST_CONTINUE = 'ListContinue';
    const STYLE_IDENTIFIER_LIST_CONTINUE2 = 'ListContinue2';
    const STYLE_IDENTIFIER_LIST_CONTINUE3 = 'ListContinue3';
    const STYLE_IDENTIFIER_LIST_CONTINUE4 = 'ListContinue4';
    const STYLE_IDENTIFIER_LIST_CONTINUE5 = 'ListContinue5';
    const STYLE_IDENTIFIER_MESSAGE_HEADER = 'MessageHeader';
    const STYLE_IDENTIFIER_SUBTITLE = 'Subtitle';
    const STYLE_IDENTIFIER_SALUTATION = 'Salutation';
    const STYLE_IDENTIFIER_DATE = 'Date';
    const STYLE_IDENTIFIER_BODY_TEXT1_I = 'BodyText1I';
    const STYLE_IDENTIFIER_BODY_TEXT1_I2 = 'BodyText1I2';
    const STYLE_IDENTIFIER_NOTE_HEADING = 'NoteHeading';
    const STYLE_IDENTIFIER_BODY_TEXT2 = 'BodyText2';
    const STYLE_IDENTIFIER_BODY_TEXT3 = 'BodyText3';
    const STYLE_IDENTIFIER_BODY_TEXT_IND2 = 'BodyTextInd2';
    const STYLE_IDENTIFIER_BODY_TEXT_IND3 = 'BodyTextInd3';
    const STYLE_IDENTIFIER_BLOCK_TEXT = 'BlockText';
    const STYLE_IDENTIFIER_HYPERLINK = 'Hyperlink';
    const STYLE_IDENTIFIER_FOLLOWED_HYPERLINK = 'FollowedHyperlink';
    const STYLE_IDENTIFIER_STRONG = 'Strong';
    const STYLE_IDENTIFIER_EMPHASIS = 'Emphasis';
    const STYLE_IDENTIFIER_DOCUMENT_MAP = 'DocumentMap';
    const STYLE_IDENTIFIER_PLAIN_TEXT = 'PlainText';
    const STYLE_IDENTIFIER_EMAIL_SIGNATURE = 'EmailSignature';
    const STYLE_IDENTIFIER_HTML_TOP_OF_FORM = 'HtmlTopOfForm';
    const STYLE_IDENTIFIER_HTML_BOTTOM_OF_FORM = 'HtmlBottomOfForm';
    const STYLE_IDENTIFIER_NORMAL_WEB = 'NormalWeb';
    const STYLE_IDENTIFIER_HTML_ACRONYM = 'HtmlAcronym';
    const STYLE_IDENTIFIER_HTML_ADDRESS = 'HtmlAddress';
    const STYLE_IDENTIFIER_HTML_CITE = 'HtmlCite';
    const STYLE_IDENTIFIER_HTML_CODE = 'HtmlCode';
    const STYLE_IDENTIFIER_HTML_DEFINITION = 'HtmlDefinition';
    const STYLE_IDENTIFIER_HTML_KEYBOARD = 'HtmlKeyboard';
    const STYLE_IDENTIFIER_HTML_PREFORMATTED = 'HtmlPreformatted';
    const STYLE_IDENTIFIER_HTML_SAMPLE = 'HtmlSample';
    const STYLE_IDENTIFIER_HTML_TYPEWRITER = 'HtmlTypewriter';
    const STYLE_IDENTIFIER_HTML_VARIABLE = 'HtmlVariable';
    const STYLE_IDENTIFIER_TABLE_NORMAL = 'TableNormal';
    const STYLE_IDENTIFIER_COMMENT_SUBJECT = 'CommentSubject';
    const STYLE_IDENTIFIER_NO_LIST = 'NoList';
    const STYLE_IDENTIFIER_OUTLINE_LIST1 = 'OutlineList1';
    const STYLE_IDENTIFIER_OUTLINE_LIST2 = 'OutlineList2';
    const STYLE_IDENTIFIER_OUTLINE_LIST3 = 'OutlineList3';
    const STYLE_IDENTIFIER_TABLE_SIMPLE1 = 'TableSimple1';
    const STYLE_IDENTIFIER_TABLE_SIMPLE2 = 'TableSimple2';
    const STYLE_IDENTIFIER_TABLE_SIMPLE3 = 'TableSimple3';
    const STYLE_IDENTIFIER_TABLE_CLASSIC1 = 'TableClassic1';
    const STYLE_IDENTIFIER_TABLE_CLASSIC2 = 'TableClassic2';
    const STYLE_IDENTIFIER_TABLE_CLASSIC3 = 'TableClassic3';
    const STYLE_IDENTIFIER_TABLE_CLASSIC4 = 'TableClassic4';
    const STYLE_IDENTIFIER_TABLE_COLORFUL1 = 'TableColorful1';
    const STYLE_IDENTIFIER_TABLE_COLORFUL2 = 'TableColorful2';
    const STYLE_IDENTIFIER_TABLE_COLORFUL3 = 'TableColorful3';
    const STYLE_IDENTIFIER_TABLE_COLUMNS1 = 'TableColumns1';
    const STYLE_IDENTIFIER_TABLE_COLUMNS2 = 'TableColumns2';
    const STYLE_IDENTIFIER_TABLE_COLUMNS3 = 'TableColumns3';
    const STYLE_IDENTIFIER_TABLE_COLUMNS4 = 'TableColumns4';
    const STYLE_IDENTIFIER_TABLE_COLUMNS5 = 'TableColumns5';
    const STYLE_IDENTIFIER_TABLE_GRID1 = 'TableGrid1';
    const STYLE_IDENTIFIER_TABLE_GRID2 = 'TableGrid2';
    const STYLE_IDENTIFIER_TABLE_GRID3 = 'TableGrid3';
    const STYLE_IDENTIFIER_TABLE_GRID4 = 'TableGrid4';
    const STYLE_IDENTIFIER_TABLE_GRID5 = 'TableGrid5';
    const STYLE_IDENTIFIER_TABLE_GRID6 = 'TableGrid6';
    const STYLE_IDENTIFIER_TABLE_GRID7 = 'TableGrid7';
    const STYLE_IDENTIFIER_TABLE_GRID8 = 'TableGrid8';
    const STYLE_IDENTIFIER_TABLE_LIST1 = 'TableList1';
    const STYLE_IDENTIFIER_TABLE_LIST2 = 'TableList2';
    const STYLE_IDENTIFIER_TABLE_LIST3 = 'TableList3';
    const STYLE_IDENTIFIER_TABLE_LIST4 = 'TableList4';
    const STYLE_IDENTIFIER_TABLE_LIST5 = 'TableList5';
    const STYLE_IDENTIFIER_TABLE_LIST6 = 'TableList6';
    const STYLE_IDENTIFIER_TABLE_LIST7 = 'TableList7';
    const STYLE_IDENTIFIER_TABLE_LIST8 = 'TableList8';
    const STYLE_IDENTIFIER_TABLE3_D_EFFECTS1 = 'Table3DEffects1';
    const STYLE_IDENTIFIER_TABLE3_D_EFFECTS2 = 'Table3DEffects2';
    const STYLE_IDENTIFIER_TABLE3_D_EFFECTS3 = 'Table3DEffects3';
    const STYLE_IDENTIFIER_TABLE_CONTEMPORARY = 'TableContemporary';
    const STYLE_IDENTIFIER_TABLE_ELEGANT = 'TableElegant';
    const STYLE_IDENTIFIER_TABLE_PROFESSIONAL = 'TableProfessional';
    const STYLE_IDENTIFIER_TABLE_SUBTLE1 = 'TableSubtle1';
    const STYLE_IDENTIFIER_TABLE_SUBTLE2 = 'TableSubtle2';
    const STYLE_IDENTIFIER_TABLE_WEB1 = 'TableWeb1';
    const STYLE_IDENTIFIER_TABLE_WEB2 = 'TableWeb2';
    const STYLE_IDENTIFIER_TABLE_WEB3 = 'TableWeb3';
    const STYLE_IDENTIFIER_BALLOON_TEXT = 'BalloonText';
    const STYLE_IDENTIFIER_TABLE_GRID = 'TableGrid';
    const STYLE_IDENTIFIER_TABLE_THEME = 'TableTheme';
    const STYLE_IDENTIFIER_PLACEHOLDER_TEXT = 'PlaceholderText';
    const STYLE_IDENTIFIER_NO_SPACING = 'NoSpacing';
    const STYLE_IDENTIFIER_LIGHT_SHADING = 'LightShading';
    const STYLE_IDENTIFIER_LIGHT_LIST = 'LightList';
    const STYLE_IDENTIFIER_LIGHT_GRID = 'LightGrid';
    const STYLE_IDENTIFIER_MEDIUM_SHADING1 = 'MediumShading1';
    const STYLE_IDENTIFIER_MEDIUM_SHADING2 = 'MediumShading2';
    const STYLE_IDENTIFIER_MEDIUM_LIST1 = 'MediumList1';
    const STYLE_IDENTIFIER_MEDIUM_LIST2 = 'MediumList2';
    const STYLE_IDENTIFIER_MEDIUM_GRID1 = 'MediumGrid1';
    const STYLE_IDENTIFIER_MEDIUM_GRID2 = 'MediumGrid2';
    const STYLE_IDENTIFIER_MEDIUM_GRID3 = 'MediumGrid3';
    const STYLE_IDENTIFIER_DARK_LIST = 'DarkList';
    const STYLE_IDENTIFIER_COLORFUL_SHADING = 'ColorfulShading';
    const STYLE_IDENTIFIER_COLORFUL_LIST = 'ColorfulList';
    const STYLE_IDENTIFIER_COLORFUL_GRID = 'ColorfulGrid';
    const STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT1 = 'LightShadingAccent1';
    const STYLE_IDENTIFIER_LIGHT_LIST_ACCENT1 = 'LightListAccent1';
    const STYLE_IDENTIFIER_LIGHT_GRID_ACCENT1 = 'LightGridAccent1';
    const STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT1 = 'MediumShading1Accent1';
    const STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT1 = 'MediumShading2Accent1';
    const STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT1 = 'MediumList1Accent1';
    const STYLE_IDENTIFIER_REVISION = 'Revision';
    const STYLE_IDENTIFIER_LIST_PARAGRAPH = 'ListParagraph';
    const STYLE_IDENTIFIER_QUOTE = 'Quote';
    const STYLE_IDENTIFIER_INTENSE_QUOTE = 'IntenseQuote';
    const STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT1 = 'MediumList2Accent1';
    const STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT1 = 'MediumGrid1Accent1';
    const STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT1 = 'MediumGrid2Accent1';
    const STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT1 = 'MediumGrid3Accent1';
    const STYLE_IDENTIFIER_DARK_LIST_ACCENT1 = 'DarkListAccent1';
    const STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT1 = 'ColorfulShadingAccent1';
    const STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT1 = 'ColorfulListAccent1';
    const STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT1 = 'ColorfulGridAccent1';
    const STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT2 = 'LightShadingAccent2';
    const STYLE_IDENTIFIER_LIGHT_LIST_ACCENT2 = 'LightListAccent2';
    const STYLE_IDENTIFIER_LIGHT_GRID_ACCENT2 = 'LightGridAccent2';
    const STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT2 = 'MediumShading1Accent2';
    const STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT2 = 'MediumShading2Accent2';
    const STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT2 = 'MediumList1Accent2';
    const STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT2 = 'MediumList2Accent2';
    const STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT2 = 'MediumGrid1Accent2';
    const STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT2 = 'MediumGrid2Accent2';
    const STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT2 = 'MediumGrid3Accent2';
    const STYLE_IDENTIFIER_DARK_LIST_ACCENT2 = 'DarkListAccent2';
    const STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT2 = 'ColorfulShadingAccent2';
    const STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT2 = 'ColorfulListAccent2';
    const STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT2 = 'ColorfulGridAccent2';
    const STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT3 = 'LightShadingAccent3';
    const STYLE_IDENTIFIER_LIGHT_LIST_ACCENT3 = 'LightListAccent3';
    const STYLE_IDENTIFIER_LIGHT_GRID_ACCENT3 = 'LightGridAccent3';
    const STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT3 = 'MediumShading1Accent3';
    const STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT3 = 'MediumShading2Accent3';
    const STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT3 = 'MediumList1Accent3';
    const STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT3 = 'MediumList2Accent3';
    const STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT3 = 'MediumGrid1Accent3';
    const STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT3 = 'MediumGrid2Accent3';
    const STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT3 = 'MediumGrid3Accent3';
    const STYLE_IDENTIFIER_DARK_LIST_ACCENT3 = 'DarkListAccent3';
    const STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT3 = 'ColorfulShadingAccent3';
    const STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT3 = 'ColorfulListAccent3';
    const STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT3 = 'ColorfulGridAccent3';
    const STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT4 = 'LightShadingAccent4';
    const STYLE_IDENTIFIER_LIGHT_LIST_ACCENT4 = 'LightListAccent4';
    const STYLE_IDENTIFIER_LIGHT_GRID_ACCENT4 = 'LightGridAccent4';
    const STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT4 = 'MediumShading1Accent4';
    const STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT4 = 'MediumShading2Accent4';
    const STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT4 = 'MediumList1Accent4';
    const STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT4 = 'MediumList2Accent4';
    const STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT4 = 'MediumGrid1Accent4';
    const STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT4 = 'MediumGrid2Accent4';
    const STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT4 = 'MediumGrid3Accent4';
    const STYLE_IDENTIFIER_DARK_LIST_ACCENT4 = 'DarkListAccent4';
    const STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT4 = 'ColorfulShadingAccent4';
    const STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT4 = 'ColorfulListAccent4';
    const STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT4 = 'ColorfulGridAccent4';
    const STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT5 = 'LightShadingAccent5';
    const STYLE_IDENTIFIER_LIGHT_LIST_ACCENT5 = 'LightListAccent5';
    const STYLE_IDENTIFIER_LIGHT_GRID_ACCENT5 = 'LightGridAccent5';
    const STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT5 = 'MediumShading1Accent5';
    const STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT5 = 'MediumShading2Accent5';
    const STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT5 = 'MediumList1Accent5';
    const STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT5 = 'MediumList2Accent5';
    const STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT5 = 'MediumGrid1Accent5';
    const STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT5 = 'MediumGrid2Accent5';
    const STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT5 = 'MediumGrid3Accent5';
    const STYLE_IDENTIFIER_DARK_LIST_ACCENT5 = 'DarkListAccent5';
    const STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT5 = 'ColorfulShadingAccent5';
    const STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT5 = 'ColorfulListAccent5';
    const STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT5 = 'ColorfulGridAccent5';
    const STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT6 = 'LightShadingAccent6';
    const STYLE_IDENTIFIER_LIGHT_LIST_ACCENT6 = 'LightListAccent6';
    const STYLE_IDENTIFIER_LIGHT_GRID_ACCENT6 = 'LightGridAccent6';
    const STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT6 = 'MediumShading1Accent6';
    const STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT6 = 'MediumShading2Accent6';
    const STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT6 = 'MediumList1Accent6';
    const STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT6 = 'MediumList2Accent6';
    const STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT6 = 'MediumGrid1Accent6';
    const STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT6 = 'MediumGrid2Accent6';
    const STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT6 = 'MediumGrid3Accent6';
    const STYLE_IDENTIFIER_DARK_LIST_ACCENT6 = 'DarkListAccent6';
    const STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT6 = 'ColorfulShadingAccent6';
    const STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT6 = 'ColorfulListAccent6';
    const STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT6 = 'ColorfulGridAccent6';
    const STYLE_IDENTIFIER_SUBTLE_EMPHASIS = 'SubtleEmphasis';
    const STYLE_IDENTIFIER_INTENSE_EMPHASIS = 'IntenseEmphasis';
    const STYLE_IDENTIFIER_SUBTLE_REFERENCE = 'SubtleReference';
    const STYLE_IDENTIFIER_INTENSE_REFERENCE = 'IntenseReference';
    const STYLE_IDENTIFIER_BOOK_TITLE = 'BookTitle';
    const STYLE_IDENTIFIER_BIBLIOGRAPHY = 'Bibliography';
    const STYLE_IDENTIFIER_TOC_HEADING = 'TocHeading';
    const STYLE_IDENTIFIER_PLAIN_TABLE1 = 'PlainTable1';
    const STYLE_IDENTIFIER_PLAIN_TABLE2 = 'PlainTable2';
    const STYLE_IDENTIFIER_PLAIN_TABLE3 = 'PlainTable3';
    const STYLE_IDENTIFIER_PLAIN_TABLE4 = 'PlainTable4';
    const STYLE_IDENTIFIER_PLAIN_TABLE5 = 'PlainTable5';
    const STYLE_IDENTIFIER_TABLE_GRID_LIGHT = 'TableGridLight';
    const STYLE_IDENTIFIER_GRID_TABLE1_LIGHT = 'GridTable1Light';
    const STYLE_IDENTIFIER_GRID_TABLE2 = 'GridTable2';
    const STYLE_IDENTIFIER_GRID_TABLE3 = 'GridTable3';
    const STYLE_IDENTIFIER_GRID_TABLE4 = 'GridTable4';
    const STYLE_IDENTIFIER_GRID_TABLE5_DARK = 'GridTable5Dark';
    const STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL = 'GridTable6Colorful';
    const STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL = 'GridTable7Colorful';
    const STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT1 = 'GridTable1LightAccent1';
    const STYLE_IDENTIFIER_GRID_TABLE2_ACCENT1 = 'GridTable2Accent1';
    const STYLE_IDENTIFIER_GRID_TABLE3_ACCENT1 = 'GridTable3Accent1';
    const STYLE_IDENTIFIER_GRID_TABLE4_ACCENT1 = 'GridTable4Accent1';
    const STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT1 = 'GridTable5DarkAccent1';
    const STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT1 = 'GridTable6ColorfulAccent1';
    const STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT1 = 'GridTable7ColorfulAccent1';
    const STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT2 = 'GridTable1LightAccent2';
    const STYLE_IDENTIFIER_GRID_TABLE2_ACCENT2 = 'GridTable2Accent2';
    const STYLE_IDENTIFIER_GRID_TABLE3_ACCENT2 = 'GridTable3Accent2';
    const STYLE_IDENTIFIER_GRID_TABLE4_ACCENT2 = 'GridTable4Accent2';
    const STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT2 = 'GridTable5DarkAccent2';
    const STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT2 = 'GridTable6ColorfulAccent2';
    const STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT2 = 'GridTable7ColorfulAccent2';
    const STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT3 = 'GridTable1LightAccent3';
    const STYLE_IDENTIFIER_GRID_TABLE2_ACCENT3 = 'GridTable2Accent3';
    const STYLE_IDENTIFIER_GRID_TABLE3_ACCENT3 = 'GridTable3Accent3';
    const STYLE_IDENTIFIER_GRID_TABLE4_ACCENT3 = 'GridTable4Accent3';
    const STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT3 = 'GridTable5DarkAccent3';
    const STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT3 = 'GridTable6ColorfulAccent3';
    const STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT3 = 'GridTable7ColorfulAccent3';
    const STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT4 = 'GridTable1LightAccent4';
    const STYLE_IDENTIFIER_GRID_TABLE2_ACCENT4 = 'GridTable2Accent4';
    const STYLE_IDENTIFIER_GRID_TABLE3_ACCENT4 = 'GridTable3Accent4';
    const STYLE_IDENTIFIER_GRID_TABLE4_ACCENT4 = 'GridTable4Accent4';
    const STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT4 = 'GridTable5DarkAccent4';
    const STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT4 = 'GridTable6ColorfulAccent4';
    const STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT4 = 'GridTable7ColorfulAccent4';
    const STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT5 = 'GridTable1LightAccent5';
    const STYLE_IDENTIFIER_GRID_TABLE2_ACCENT5 = 'GridTable2Accent5';
    const STYLE_IDENTIFIER_GRID_TABLE3_ACCENT5 = 'GridTable3Accent5';
    const STYLE_IDENTIFIER_GRID_TABLE4_ACCENT5 = 'GridTable4Accent5';
    const STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT5 = 'GridTable5DarkAccent5';
    const STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT5 = 'GridTable6ColorfulAccent5';
    const STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT5 = 'GridTable7ColorfulAccent5';
    const STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT6 = 'GridTable1LightAccent6';
    const STYLE_IDENTIFIER_GRID_TABLE2_ACCENT6 = 'GridTable2Accent6';
    const STYLE_IDENTIFIER_GRID_TABLE3_ACCENT6 = 'GridTable3Accent6';
    const STYLE_IDENTIFIER_GRID_TABLE4_ACCENT6 = 'GridTable4Accent6';
    const STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT6 = 'GridTable5DarkAccent6';
    const STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT6 = 'GridTable6ColorfulAccent6';
    const STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT6 = 'GridTable7ColorfulAccent6';
    const STYLE_IDENTIFIER_LIST_TABLE1_LIGHT = 'ListTable1Light';
    const STYLE_IDENTIFIER_LIST_TABLE2 = 'ListTable2';
    const STYLE_IDENTIFIER_LIST_TABLE3 = 'ListTable3';
    const STYLE_IDENTIFIER_LIST_TABLE4 = 'ListTable4';
    const STYLE_IDENTIFIER_LIST_TABLE5_DARK = 'ListTable5Dark';
    const STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL = 'ListTable6Colorful';
    const STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL = 'ListTable7Colorful';
    const STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT1 = 'ListTable1LightAccent1';
    const STYLE_IDENTIFIER_LIST_TABLE2_ACCENT1 = 'ListTable2Accent1';
    const STYLE_IDENTIFIER_LIST_TABLE3_ACCENT1 = 'ListTable3Accent1';
    const STYLE_IDENTIFIER_LIST_TABLE4_ACCENT1 = 'ListTable4Accent1';
    const STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT1 = 'ListTable5DarkAccent1';
    const STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT1 = 'ListTable6ColorfulAccent1';
    const STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT1 = 'ListTable7ColorfulAccent1';
    const STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT2 = 'ListTable1LightAccent2';
    const STYLE_IDENTIFIER_LIST_TABLE2_ACCENT2 = 'ListTable2Accent2';
    const STYLE_IDENTIFIER_LIST_TABLE3_ACCENT2 = 'ListTable3Accent2';
    const STYLE_IDENTIFIER_LIST_TABLE4_ACCENT2 = 'ListTable4Accent2';
    const STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT2 = 'ListTable5DarkAccent2';
    const STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT2 = 'ListTable6ColorfulAccent2';
    const STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT2 = 'ListTable7ColorfulAccent2';
    const STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT3 = 'ListTable1LightAccent3';
    const STYLE_IDENTIFIER_LIST_TABLE2_ACCENT3 = 'ListTable2Accent3';
    const STYLE_IDENTIFIER_LIST_TABLE3_ACCENT3 = 'ListTable3Accent3';
    const STYLE_IDENTIFIER_LIST_TABLE4_ACCENT3 = 'ListTable4Accent3';
    const STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT3 = 'ListTable5DarkAccent3';
    const STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT3 = 'ListTable6ColorfulAccent3';
    const STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT3 = 'ListTable7ColorfulAccent3';
    const STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT4 = 'ListTable1LightAccent4';
    const STYLE_IDENTIFIER_LIST_TABLE2_ACCENT4 = 'ListTable2Accent4';
    const STYLE_IDENTIFIER_LIST_TABLE3_ACCENT4 = 'ListTable3Accent4';
    const STYLE_IDENTIFIER_LIST_TABLE4_ACCENT4 = 'ListTable4Accent4';
    const STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT4 = 'ListTable5DarkAccent4';
    const STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT4 = 'ListTable6ColorfulAccent4';
    const STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT4 = 'ListTable7ColorfulAccent4';
    const STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT5 = 'ListTable1LightAccent5';
    const STYLE_IDENTIFIER_LIST_TABLE2_ACCENT5 = 'ListTable2Accent5';
    const STYLE_IDENTIFIER_LIST_TABLE3_ACCENT5 = 'ListTable3Accent5';
    const STYLE_IDENTIFIER_LIST_TABLE4_ACCENT5 = 'ListTable4Accent5';
    const STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT5 = 'ListTable5DarkAccent5';
    const STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT5 = 'ListTable6ColorfulAccent5';
    const STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT5 = 'ListTable7ColorfulAccent5';
    const STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT6 = 'ListTable1LightAccent6';
    const STYLE_IDENTIFIER_LIST_TABLE2_ACCENT6 = 'ListTable2Accent6';
    const STYLE_IDENTIFIER_LIST_TABLE3_ACCENT6 = 'ListTable3Accent6';
    const STYLE_IDENTIFIER_LIST_TABLE4_ACCENT6 = 'ListTable4Accent6';
    const STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT6 = 'ListTable5DarkAccent6';
    const STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT6 = 'ListTable6ColorfulAccent6';
    const STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT6 = 'ListTable7ColorfulAccent6';
    const STYLE_IDENTIFIER_USER = 'User';
    const STYLE_IDENTIFIER_NIL = 'Nil';
    const TEXT_EFFECT_NONE = 'None';
    const TEXT_EFFECT_LAS_VEGAS_LIGHTS = 'LasVegasLights';
    const TEXT_EFFECT_BLINKING_BACKGROUND = 'BlinkingBackground';
    const TEXT_EFFECT_SPARKLE_TEXT = 'SparkleText';
    const TEXT_EFFECT_MARCHING_BLACK_ANTS = 'MarchingBlackAnts';
    const TEXT_EFFECT_MARCHING_RED_ANTS = 'MarchingRedAnts';
    const TEXT_EFFECT_SHIMMER = 'Shimmer';
    const UNDERLINE_NONE = 'None';
    const UNDERLINE_SINGLE = 'Single';
    const UNDERLINE_WORDS = 'Words';
    const UNDERLINE_DOUBLE = 'Double';
    const UNDERLINE_DOTTED = 'Dotted';
    const UNDERLINE_THICK = 'Thick';
    const UNDERLINE_DASH = 'Dash';
    const UNDERLINE_DOT_DASH = 'DotDash';
    const UNDERLINE_DOT_DOT_DASH = 'DotDotDash';
    const UNDERLINE_WAVY = 'Wavy';
    const UNDERLINE_DOTTED_HEAVY = 'DottedHeavy';
    const UNDERLINE_DASH_HEAVY = 'DashHeavy';
    const UNDERLINE_DOT_DASH_HEAVY = 'DotDashHeavy';
    const UNDERLINE_DOT_DOT_DASH_HEAVY = 'DotDotDashHeavy';
    const UNDERLINE_WAVY_HEAVY = 'WavyHeavy';
    const UNDERLINE_DASH_LONG = 'DashLong';
    const UNDERLINE_WAVY_DOUBLE = 'WavyDouble';
    const UNDERLINE_DASH_LONG_HEAVY = 'DashLongHeavy';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleIdentifierAllowableValues()
    {
        return [
            self::STYLE_IDENTIFIER_NORMAL,
            self::STYLE_IDENTIFIER_HEADING1,
            self::STYLE_IDENTIFIER_HEADING2,
            self::STYLE_IDENTIFIER_HEADING3,
            self::STYLE_IDENTIFIER_HEADING4,
            self::STYLE_IDENTIFIER_HEADING5,
            self::STYLE_IDENTIFIER_HEADING6,
            self::STYLE_IDENTIFIER_HEADING7,
            self::STYLE_IDENTIFIER_HEADING8,
            self::STYLE_IDENTIFIER_HEADING9,
            self::STYLE_IDENTIFIER_INDEX1,
            self::STYLE_IDENTIFIER_INDEX2,
            self::STYLE_IDENTIFIER_INDEX3,
            self::STYLE_IDENTIFIER_INDEX4,
            self::STYLE_IDENTIFIER_INDEX5,
            self::STYLE_IDENTIFIER_INDEX6,
            self::STYLE_IDENTIFIER_INDEX7,
            self::STYLE_IDENTIFIER_INDEX8,
            self::STYLE_IDENTIFIER_INDEX9,
            self::STYLE_IDENTIFIER_TOC1,
            self::STYLE_IDENTIFIER_TOC2,
            self::STYLE_IDENTIFIER_TOC3,
            self::STYLE_IDENTIFIER_TOC4,
            self::STYLE_IDENTIFIER_TOC5,
            self::STYLE_IDENTIFIER_TOC6,
            self::STYLE_IDENTIFIER_TOC7,
            self::STYLE_IDENTIFIER_TOC8,
            self::STYLE_IDENTIFIER_TOC9,
            self::STYLE_IDENTIFIER_NORMAL_INDENT,
            self::STYLE_IDENTIFIER_FOOTNOTE_TEXT,
            self::STYLE_IDENTIFIER_COMMENT_TEXT,
            self::STYLE_IDENTIFIER_HEADER,
            self::STYLE_IDENTIFIER_FOOTER,
            self::STYLE_IDENTIFIER_INDEX_HEADING,
            self::STYLE_IDENTIFIER_CAPTION,
            self::STYLE_IDENTIFIER_TABLE_OF_FIGURES,
            self::STYLE_IDENTIFIER_ENVELOPE_ADDRESS,
            self::STYLE_IDENTIFIER_ENVELOPE_RETURN,
            self::STYLE_IDENTIFIER_FOOTNOTE_REFERENCE,
            self::STYLE_IDENTIFIER_COMMENT_REFERENCE,
            self::STYLE_IDENTIFIER_LINE_NUMBER,
            self::STYLE_IDENTIFIER_PAGE_NUMBER,
            self::STYLE_IDENTIFIER_ENDNOTE_REFERENCE,
            self::STYLE_IDENTIFIER_ENDNOTE_TEXT,
            self::STYLE_IDENTIFIER_TABLE_OF_AUTHORITIES,
            self::STYLE_IDENTIFIER_MACRO,
            self::STYLE_IDENTIFIER_TOA_HEADING,
            self::STYLE_IDENTIFIER__LIST,
            self::STYLE_IDENTIFIER_LIST_BULLET,
            self::STYLE_IDENTIFIER_LIST_NUMBER,
            self::STYLE_IDENTIFIER_LIST2,
            self::STYLE_IDENTIFIER_LIST3,
            self::STYLE_IDENTIFIER_LIST4,
            self::STYLE_IDENTIFIER_LIST5,
            self::STYLE_IDENTIFIER_LIST_BULLET2,
            self::STYLE_IDENTIFIER_LIST_BULLET3,
            self::STYLE_IDENTIFIER_LIST_BULLET4,
            self::STYLE_IDENTIFIER_LIST_BULLET5,
            self::STYLE_IDENTIFIER_LIST_NUMBER2,
            self::STYLE_IDENTIFIER_LIST_NUMBER3,
            self::STYLE_IDENTIFIER_LIST_NUMBER4,
            self::STYLE_IDENTIFIER_LIST_NUMBER5,
            self::STYLE_IDENTIFIER_TITLE,
            self::STYLE_IDENTIFIER_CLOSING,
            self::STYLE_IDENTIFIER_SIGNATURE,
            self::STYLE_IDENTIFIER_DEFAULT_PARAGRAPH_FONT,
            self::STYLE_IDENTIFIER_BODY_TEXT,
            self::STYLE_IDENTIFIER_BODY_TEXT_IND,
            self::STYLE_IDENTIFIER_LIST_CONTINUE,
            self::STYLE_IDENTIFIER_LIST_CONTINUE2,
            self::STYLE_IDENTIFIER_LIST_CONTINUE3,
            self::STYLE_IDENTIFIER_LIST_CONTINUE4,
            self::STYLE_IDENTIFIER_LIST_CONTINUE5,
            self::STYLE_IDENTIFIER_MESSAGE_HEADER,
            self::STYLE_IDENTIFIER_SUBTITLE,
            self::STYLE_IDENTIFIER_SALUTATION,
            self::STYLE_IDENTIFIER_DATE,
            self::STYLE_IDENTIFIER_BODY_TEXT1_I,
            self::STYLE_IDENTIFIER_BODY_TEXT1_I2,
            self::STYLE_IDENTIFIER_NOTE_HEADING,
            self::STYLE_IDENTIFIER_BODY_TEXT2,
            self::STYLE_IDENTIFIER_BODY_TEXT3,
            self::STYLE_IDENTIFIER_BODY_TEXT_IND2,
            self::STYLE_IDENTIFIER_BODY_TEXT_IND3,
            self::STYLE_IDENTIFIER_BLOCK_TEXT,
            self::STYLE_IDENTIFIER_HYPERLINK,
            self::STYLE_IDENTIFIER_FOLLOWED_HYPERLINK,
            self::STYLE_IDENTIFIER_STRONG,
            self::STYLE_IDENTIFIER_EMPHASIS,
            self::STYLE_IDENTIFIER_DOCUMENT_MAP,
            self::STYLE_IDENTIFIER_PLAIN_TEXT,
            self::STYLE_IDENTIFIER_EMAIL_SIGNATURE,
            self::STYLE_IDENTIFIER_HTML_TOP_OF_FORM,
            self::STYLE_IDENTIFIER_HTML_BOTTOM_OF_FORM,
            self::STYLE_IDENTIFIER_NORMAL_WEB,
            self::STYLE_IDENTIFIER_HTML_ACRONYM,
            self::STYLE_IDENTIFIER_HTML_ADDRESS,
            self::STYLE_IDENTIFIER_HTML_CITE,
            self::STYLE_IDENTIFIER_HTML_CODE,
            self::STYLE_IDENTIFIER_HTML_DEFINITION,
            self::STYLE_IDENTIFIER_HTML_KEYBOARD,
            self::STYLE_IDENTIFIER_HTML_PREFORMATTED,
            self::STYLE_IDENTIFIER_HTML_SAMPLE,
            self::STYLE_IDENTIFIER_HTML_TYPEWRITER,
            self::STYLE_IDENTIFIER_HTML_VARIABLE,
            self::STYLE_IDENTIFIER_TABLE_NORMAL,
            self::STYLE_IDENTIFIER_COMMENT_SUBJECT,
            self::STYLE_IDENTIFIER_NO_LIST,
            self::STYLE_IDENTIFIER_OUTLINE_LIST1,
            self::STYLE_IDENTIFIER_OUTLINE_LIST2,
            self::STYLE_IDENTIFIER_OUTLINE_LIST3,
            self::STYLE_IDENTIFIER_TABLE_SIMPLE1,
            self::STYLE_IDENTIFIER_TABLE_SIMPLE2,
            self::STYLE_IDENTIFIER_TABLE_SIMPLE3,
            self::STYLE_IDENTIFIER_TABLE_CLASSIC1,
            self::STYLE_IDENTIFIER_TABLE_CLASSIC2,
            self::STYLE_IDENTIFIER_TABLE_CLASSIC3,
            self::STYLE_IDENTIFIER_TABLE_CLASSIC4,
            self::STYLE_IDENTIFIER_TABLE_COLORFUL1,
            self::STYLE_IDENTIFIER_TABLE_COLORFUL2,
            self::STYLE_IDENTIFIER_TABLE_COLORFUL3,
            self::STYLE_IDENTIFIER_TABLE_COLUMNS1,
            self::STYLE_IDENTIFIER_TABLE_COLUMNS2,
            self::STYLE_IDENTIFIER_TABLE_COLUMNS3,
            self::STYLE_IDENTIFIER_TABLE_COLUMNS4,
            self::STYLE_IDENTIFIER_TABLE_COLUMNS5,
            self::STYLE_IDENTIFIER_TABLE_GRID1,
            self::STYLE_IDENTIFIER_TABLE_GRID2,
            self::STYLE_IDENTIFIER_TABLE_GRID3,
            self::STYLE_IDENTIFIER_TABLE_GRID4,
            self::STYLE_IDENTIFIER_TABLE_GRID5,
            self::STYLE_IDENTIFIER_TABLE_GRID6,
            self::STYLE_IDENTIFIER_TABLE_GRID7,
            self::STYLE_IDENTIFIER_TABLE_GRID8,
            self::STYLE_IDENTIFIER_TABLE_LIST1,
            self::STYLE_IDENTIFIER_TABLE_LIST2,
            self::STYLE_IDENTIFIER_TABLE_LIST3,
            self::STYLE_IDENTIFIER_TABLE_LIST4,
            self::STYLE_IDENTIFIER_TABLE_LIST5,
            self::STYLE_IDENTIFIER_TABLE_LIST6,
            self::STYLE_IDENTIFIER_TABLE_LIST7,
            self::STYLE_IDENTIFIER_TABLE_LIST8,
            self::STYLE_IDENTIFIER_TABLE3_D_EFFECTS1,
            self::STYLE_IDENTIFIER_TABLE3_D_EFFECTS2,
            self::STYLE_IDENTIFIER_TABLE3_D_EFFECTS3,
            self::STYLE_IDENTIFIER_TABLE_CONTEMPORARY,
            self::STYLE_IDENTIFIER_TABLE_ELEGANT,
            self::STYLE_IDENTIFIER_TABLE_PROFESSIONAL,
            self::STYLE_IDENTIFIER_TABLE_SUBTLE1,
            self::STYLE_IDENTIFIER_TABLE_SUBTLE2,
            self::STYLE_IDENTIFIER_TABLE_WEB1,
            self::STYLE_IDENTIFIER_TABLE_WEB2,
            self::STYLE_IDENTIFIER_TABLE_WEB3,
            self::STYLE_IDENTIFIER_BALLOON_TEXT,
            self::STYLE_IDENTIFIER_TABLE_GRID,
            self::STYLE_IDENTIFIER_TABLE_THEME,
            self::STYLE_IDENTIFIER_PLACEHOLDER_TEXT,
            self::STYLE_IDENTIFIER_NO_SPACING,
            self::STYLE_IDENTIFIER_LIGHT_SHADING,
            self::STYLE_IDENTIFIER_LIGHT_LIST,
            self::STYLE_IDENTIFIER_LIGHT_GRID,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING1,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING2,
            self::STYLE_IDENTIFIER_MEDIUM_LIST1,
            self::STYLE_IDENTIFIER_MEDIUM_LIST2,
            self::STYLE_IDENTIFIER_MEDIUM_GRID1,
            self::STYLE_IDENTIFIER_MEDIUM_GRID2,
            self::STYLE_IDENTIFIER_MEDIUM_GRID3,
            self::STYLE_IDENTIFIER_DARK_LIST,
            self::STYLE_IDENTIFIER_COLORFUL_SHADING,
            self::STYLE_IDENTIFIER_COLORFUL_LIST,
            self::STYLE_IDENTIFIER_COLORFUL_GRID,
            self::STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT1,
            self::STYLE_IDENTIFIER_LIGHT_LIST_ACCENT1,
            self::STYLE_IDENTIFIER_LIGHT_GRID_ACCENT1,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT1,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT1,
            self::STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT1,
            self::STYLE_IDENTIFIER_REVISION,
            self::STYLE_IDENTIFIER_LIST_PARAGRAPH,
            self::STYLE_IDENTIFIER_QUOTE,
            self::STYLE_IDENTIFIER_INTENSE_QUOTE,
            self::STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT1,
            self::STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT1,
            self::STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT1,
            self::STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT1,
            self::STYLE_IDENTIFIER_DARK_LIST_ACCENT1,
            self::STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT1,
            self::STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT1,
            self::STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT1,
            self::STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT2,
            self::STYLE_IDENTIFIER_LIGHT_LIST_ACCENT2,
            self::STYLE_IDENTIFIER_LIGHT_GRID_ACCENT2,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT2,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT2,
            self::STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT2,
            self::STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT2,
            self::STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT2,
            self::STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT2,
            self::STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT2,
            self::STYLE_IDENTIFIER_DARK_LIST_ACCENT2,
            self::STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT2,
            self::STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT2,
            self::STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT2,
            self::STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT3,
            self::STYLE_IDENTIFIER_LIGHT_LIST_ACCENT3,
            self::STYLE_IDENTIFIER_LIGHT_GRID_ACCENT3,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT3,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT3,
            self::STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT3,
            self::STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT3,
            self::STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT3,
            self::STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT3,
            self::STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT3,
            self::STYLE_IDENTIFIER_DARK_LIST_ACCENT3,
            self::STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT3,
            self::STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT3,
            self::STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT3,
            self::STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT4,
            self::STYLE_IDENTIFIER_LIGHT_LIST_ACCENT4,
            self::STYLE_IDENTIFIER_LIGHT_GRID_ACCENT4,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT4,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT4,
            self::STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT4,
            self::STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT4,
            self::STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT4,
            self::STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT4,
            self::STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT4,
            self::STYLE_IDENTIFIER_DARK_LIST_ACCENT4,
            self::STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT4,
            self::STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT4,
            self::STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT4,
            self::STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT5,
            self::STYLE_IDENTIFIER_LIGHT_LIST_ACCENT5,
            self::STYLE_IDENTIFIER_LIGHT_GRID_ACCENT5,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT5,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT5,
            self::STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT5,
            self::STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT5,
            self::STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT5,
            self::STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT5,
            self::STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT5,
            self::STYLE_IDENTIFIER_DARK_LIST_ACCENT5,
            self::STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT5,
            self::STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT5,
            self::STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT5,
            self::STYLE_IDENTIFIER_LIGHT_SHADING_ACCENT6,
            self::STYLE_IDENTIFIER_LIGHT_LIST_ACCENT6,
            self::STYLE_IDENTIFIER_LIGHT_GRID_ACCENT6,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING1_ACCENT6,
            self::STYLE_IDENTIFIER_MEDIUM_SHADING2_ACCENT6,
            self::STYLE_IDENTIFIER_MEDIUM_LIST1_ACCENT6,
            self::STYLE_IDENTIFIER_MEDIUM_LIST2_ACCENT6,
            self::STYLE_IDENTIFIER_MEDIUM_GRID1_ACCENT6,
            self::STYLE_IDENTIFIER_MEDIUM_GRID2_ACCENT6,
            self::STYLE_IDENTIFIER_MEDIUM_GRID3_ACCENT6,
            self::STYLE_IDENTIFIER_DARK_LIST_ACCENT6,
            self::STYLE_IDENTIFIER_COLORFUL_SHADING_ACCENT6,
            self::STYLE_IDENTIFIER_COLORFUL_LIST_ACCENT6,
            self::STYLE_IDENTIFIER_COLORFUL_GRID_ACCENT6,
            self::STYLE_IDENTIFIER_SUBTLE_EMPHASIS,
            self::STYLE_IDENTIFIER_INTENSE_EMPHASIS,
            self::STYLE_IDENTIFIER_SUBTLE_REFERENCE,
            self::STYLE_IDENTIFIER_INTENSE_REFERENCE,
            self::STYLE_IDENTIFIER_BOOK_TITLE,
            self::STYLE_IDENTIFIER_BIBLIOGRAPHY,
            self::STYLE_IDENTIFIER_TOC_HEADING,
            self::STYLE_IDENTIFIER_PLAIN_TABLE1,
            self::STYLE_IDENTIFIER_PLAIN_TABLE2,
            self::STYLE_IDENTIFIER_PLAIN_TABLE3,
            self::STYLE_IDENTIFIER_PLAIN_TABLE4,
            self::STYLE_IDENTIFIER_PLAIN_TABLE5,
            self::STYLE_IDENTIFIER_TABLE_GRID_LIGHT,
            self::STYLE_IDENTIFIER_GRID_TABLE1_LIGHT,
            self::STYLE_IDENTIFIER_GRID_TABLE2,
            self::STYLE_IDENTIFIER_GRID_TABLE3,
            self::STYLE_IDENTIFIER_GRID_TABLE4,
            self::STYLE_IDENTIFIER_GRID_TABLE5_DARK,
            self::STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL,
            self::STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL,
            self::STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT1,
            self::STYLE_IDENTIFIER_GRID_TABLE2_ACCENT1,
            self::STYLE_IDENTIFIER_GRID_TABLE3_ACCENT1,
            self::STYLE_IDENTIFIER_GRID_TABLE4_ACCENT1,
            self::STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT1,
            self::STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT1,
            self::STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT1,
            self::STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT2,
            self::STYLE_IDENTIFIER_GRID_TABLE2_ACCENT2,
            self::STYLE_IDENTIFIER_GRID_TABLE3_ACCENT2,
            self::STYLE_IDENTIFIER_GRID_TABLE4_ACCENT2,
            self::STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT2,
            self::STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT2,
            self::STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT2,
            self::STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT3,
            self::STYLE_IDENTIFIER_GRID_TABLE2_ACCENT3,
            self::STYLE_IDENTIFIER_GRID_TABLE3_ACCENT3,
            self::STYLE_IDENTIFIER_GRID_TABLE4_ACCENT3,
            self::STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT3,
            self::STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT3,
            self::STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT3,
            self::STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT4,
            self::STYLE_IDENTIFIER_GRID_TABLE2_ACCENT4,
            self::STYLE_IDENTIFIER_GRID_TABLE3_ACCENT4,
            self::STYLE_IDENTIFIER_GRID_TABLE4_ACCENT4,
            self::STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT4,
            self::STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT4,
            self::STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT4,
            self::STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT5,
            self::STYLE_IDENTIFIER_GRID_TABLE2_ACCENT5,
            self::STYLE_IDENTIFIER_GRID_TABLE3_ACCENT5,
            self::STYLE_IDENTIFIER_GRID_TABLE4_ACCENT5,
            self::STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT5,
            self::STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT5,
            self::STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT5,
            self::STYLE_IDENTIFIER_GRID_TABLE1_LIGHT_ACCENT6,
            self::STYLE_IDENTIFIER_GRID_TABLE2_ACCENT6,
            self::STYLE_IDENTIFIER_GRID_TABLE3_ACCENT6,
            self::STYLE_IDENTIFIER_GRID_TABLE4_ACCENT6,
            self::STYLE_IDENTIFIER_GRID_TABLE5_DARK_ACCENT6,
            self::STYLE_IDENTIFIER_GRID_TABLE6_COLORFUL_ACCENT6,
            self::STYLE_IDENTIFIER_GRID_TABLE7_COLORFUL_ACCENT6,
            self::STYLE_IDENTIFIER_LIST_TABLE1_LIGHT,
            self::STYLE_IDENTIFIER_LIST_TABLE2,
            self::STYLE_IDENTIFIER_LIST_TABLE3,
            self::STYLE_IDENTIFIER_LIST_TABLE4,
            self::STYLE_IDENTIFIER_LIST_TABLE5_DARK,
            self::STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL,
            self::STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL,
            self::STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT1,
            self::STYLE_IDENTIFIER_LIST_TABLE2_ACCENT1,
            self::STYLE_IDENTIFIER_LIST_TABLE3_ACCENT1,
            self::STYLE_IDENTIFIER_LIST_TABLE4_ACCENT1,
            self::STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT1,
            self::STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT1,
            self::STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT1,
            self::STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT2,
            self::STYLE_IDENTIFIER_LIST_TABLE2_ACCENT2,
            self::STYLE_IDENTIFIER_LIST_TABLE3_ACCENT2,
            self::STYLE_IDENTIFIER_LIST_TABLE4_ACCENT2,
            self::STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT2,
            self::STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT2,
            self::STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT2,
            self::STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT3,
            self::STYLE_IDENTIFIER_LIST_TABLE2_ACCENT3,
            self::STYLE_IDENTIFIER_LIST_TABLE3_ACCENT3,
            self::STYLE_IDENTIFIER_LIST_TABLE4_ACCENT3,
            self::STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT3,
            self::STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT3,
            self::STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT3,
            self::STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT4,
            self::STYLE_IDENTIFIER_LIST_TABLE2_ACCENT4,
            self::STYLE_IDENTIFIER_LIST_TABLE3_ACCENT4,
            self::STYLE_IDENTIFIER_LIST_TABLE4_ACCENT4,
            self::STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT4,
            self::STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT4,
            self::STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT4,
            self::STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT5,
            self::STYLE_IDENTIFIER_LIST_TABLE2_ACCENT5,
            self::STYLE_IDENTIFIER_LIST_TABLE3_ACCENT5,
            self::STYLE_IDENTIFIER_LIST_TABLE4_ACCENT5,
            self::STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT5,
            self::STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT5,
            self::STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT5,
            self::STYLE_IDENTIFIER_LIST_TABLE1_LIGHT_ACCENT6,
            self::STYLE_IDENTIFIER_LIST_TABLE2_ACCENT6,
            self::STYLE_IDENTIFIER_LIST_TABLE3_ACCENT6,
            self::STYLE_IDENTIFIER_LIST_TABLE4_ACCENT6,
            self::STYLE_IDENTIFIER_LIST_TABLE5_DARK_ACCENT6,
            self::STYLE_IDENTIFIER_LIST_TABLE6_COLORFUL_ACCENT6,
            self::STYLE_IDENTIFIER_LIST_TABLE7_COLORFUL_ACCENT6,
            self::STYLE_IDENTIFIER_USER,
            self::STYLE_IDENTIFIER_NIL
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextEffectAllowableValues()
    {
        return [
            self::TEXT_EFFECT_NONE,
            self::TEXT_EFFECT_LAS_VEGAS_LIGHTS,
            self::TEXT_EFFECT_BLINKING_BACKGROUND,
            self::TEXT_EFFECT_SPARKLE_TEXT,
            self::TEXT_EFFECT_MARCHING_BLACK_ANTS,
            self::TEXT_EFFECT_MARCHING_RED_ANTS,
            self::TEXT_EFFECT_SHIMMER
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnderlineAllowableValues()
    {
        return [
            self::UNDERLINE_NONE,
            self::UNDERLINE_SINGLE,
            self::UNDERLINE_WORDS,
            self::UNDERLINE_DOUBLE,
            self::UNDERLINE_DOTTED,
            self::UNDERLINE_THICK,
            self::UNDERLINE_DASH,
            self::UNDERLINE_DOT_DASH,
            self::UNDERLINE_DOT_DOT_DASH,
            self::UNDERLINE_WAVY,
            self::UNDERLINE_DOTTED_HEAVY,
            self::UNDERLINE_DASH_HEAVY,
            self::UNDERLINE_DOT_DASH_HEAVY,
            self::UNDERLINE_DOT_DOT_DASH_HEAVY,
            self::UNDERLINE_WAVY_HEAVY,
            self::UNDERLINE_DASH_LONG,
            self::UNDERLINE_WAVY_DOUBLE,
            self::UNDERLINE_DASH_LONG_HEAVY
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

        $this->container['all_caps'] = isset($data['all_caps']) ? $data['all_caps'] : null;
        $this->container['bidi'] = isset($data['bidi']) ? $data['bidi'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['bold_bi'] = isset($data['bold_bi']) ? $data['bold_bi'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['complex_script'] = isset($data['complex_script']) ? $data['complex_script'] : null;
        $this->container['double_strike_through'] = isset($data['double_strike_through']) ? $data['double_strike_through'] : null;
        $this->container['emboss'] = isset($data['emboss']) ? $data['emboss'] : null;
        $this->container['engrave'] = isset($data['engrave']) ? $data['engrave'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['highlight_color'] = isset($data['highlight_color']) ? $data['highlight_color'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['italic_bi'] = isset($data['italic_bi']) ? $data['italic_bi'] : null;
        $this->container['kerning'] = isset($data['kerning']) ? $data['kerning'] : null;
        $this->container['locale_id'] = isset($data['locale_id']) ? $data['locale_id'] : null;
        $this->container['locale_id_bi'] = isset($data['locale_id_bi']) ? $data['locale_id_bi'] : null;
        $this->container['locale_id_far_east'] = isset($data['locale_id_far_east']) ? $data['locale_id_far_east'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_ascii'] = isset($data['name_ascii']) ? $data['name_ascii'] : null;
        $this->container['name_bi'] = isset($data['name_bi']) ? $data['name_bi'] : null;
        $this->container['name_far_east'] = isset($data['name_far_east']) ? $data['name_far_east'] : null;
        $this->container['name_other'] = isset($data['name_other']) ? $data['name_other'] : null;
        $this->container['no_proofing'] = isset($data['no_proofing']) ? $data['no_proofing'] : null;
        $this->container['outline'] = isset($data['outline']) ? $data['outline'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['scaling'] = isset($data['scaling']) ? $data['scaling'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['size_bi'] = isset($data['size_bi']) ? $data['size_bi'] : null;
        $this->container['small_caps'] = isset($data['small_caps']) ? $data['small_caps'] : null;
        $this->container['spacing'] = isset($data['spacing']) ? $data['spacing'] : null;
        $this->container['strike_through'] = isset($data['strike_through']) ? $data['strike_through'] : null;
        $this->container['style_identifier'] = isset($data['style_identifier']) ? $data['style_identifier'] : null;
        $this->container['style_name'] = isset($data['style_name']) ? $data['style_name'] : null;
        $this->container['subscript'] = isset($data['subscript']) ? $data['subscript'] : null;
        $this->container['superscript'] = isset($data['superscript']) ? $data['superscript'] : null;
        $this->container['text_effect'] = isset($data['text_effect']) ? $data['text_effect'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
        $this->container['underline_color'] = isset($data['underline_color']) ? $data['underline_color'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getStyleIdentifierAllowableValues();
        if (!in_array($this->container['style_identifier'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'style_identifier', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTextEffectAllowableValues();
        if (!in_array($this->container['text_effect'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text_effect', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUnderlineAllowableValues();
        if (!in_array($this->container['underline'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'underline', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getStyleIdentifierAllowableValues();
        if (!in_array($this->container['style_identifier'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTextEffectAllowableValues();
        if (!in_array($this->container['text_effect'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getUnderlineAllowableValues();
        if (!in_array($this->container['underline'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets all_caps
     *
     * @return bool
     */
    public function getAllCaps()
    {
        return $this->container['all_caps'];
    }

    /*
     * Sets all_caps
     *
     * @param bool $all_caps Gets or sets true if the font is formatted as all capital letters.
     *
     * @return $this
     */
    public function setAllCaps($all_caps)
    {
        $this->container['all_caps'] = $all_caps;

        return $this;
    }

    /*
     * Gets bidi
     *
     * @return bool
     */
    public function getBidi()
    {
        return $this->container['bidi'];
    }

    /*
     * Sets bidi
     *
     * @param bool $bidi Gets or sets specifies whether the contents of this run shall have right-to-left characteristics.
     *
     * @return $this
     */
    public function setBidi($bidi)
    {
        $this->container['bidi'] = $bidi;

        return $this;
    }

    /*
     * Gets bold
     *
     * @return bool
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /*
     * Sets bold
     *
     * @param bool $bold Gets or sets true if the font is formatted as bold.
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /*
     * Gets bold_bi
     *
     * @return bool
     */
    public function getBoldBi()
    {
        return $this->container['bold_bi'];
    }

    /*
     * Sets bold_bi
     *
     * @param bool $bold_bi Gets or sets true if the right-to-left text is formatted as bold.
     *
     * @return $this
     */
    public function setBoldBi($bold_bi)
    {
        $this->container['bold_bi'] = $bold_bi;

        return $this;
    }

    /*
     * Gets border
     *
     * @return \Aspose\Words\Model\Border
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /*
     * Sets border
     *
     * @param \Aspose\Words\Model\Border $border border
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

        return $this;
    }

    /*
     * Gets color
     *
     * @return \Aspose\Words\Model\XmlColor
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /*
     * Sets color
     *
     * @param \Aspose\Words\Model\XmlColor $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /*
     * Gets complex_script
     *
     * @return bool
     */
    public function getComplexScript()
    {
        return $this->container['complex_script'];
    }

    /*
     * Sets complex_script
     *
     * @param bool $complex_script Gets or sets specifies whether the contents of this run shall be treated as complex script text regardless of their Unicode character values when determining the formatting for this run.
     *
     * @return $this
     */
    public function setComplexScript($complex_script)
    {
        $this->container['complex_script'] = $complex_script;

        return $this;
    }

    /*
     * Gets double_strike_through
     *
     * @return bool
     */
    public function getDoubleStrikeThrough()
    {
        return $this->container['double_strike_through'];
    }

    /*
     * Sets double_strike_through
     *
     * @param bool $double_strike_through Gets or sets true if the font is formatted as double strikethrough text.
     *
     * @return $this
     */
    public function setDoubleStrikeThrough($double_strike_through)
    {
        $this->container['double_strike_through'] = $double_strike_through;

        return $this;
    }

    /*
     * Gets emboss
     *
     * @return bool
     */
    public function getEmboss()
    {
        return $this->container['emboss'];
    }

    /*
     * Sets emboss
     *
     * @param bool $emboss Gets or sets true if the font is formatted as embossed.
     *
     * @return $this
     */
    public function setEmboss($emboss)
    {
        $this->container['emboss'] = $emboss;

        return $this;
    }

    /*
     * Gets engrave
     *
     * @return bool
     */
    public function getEngrave()
    {
        return $this->container['engrave'];
    }

    /*
     * Sets engrave
     *
     * @param bool $engrave Gets or sets true if the font is formatted as engraved.
     *
     * @return $this
     */
    public function setEngrave($engrave)
    {
        $this->container['engrave'] = $engrave;

        return $this;
    }

    /*
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /*
     * Sets hidden
     *
     * @param bool $hidden Gets or sets true if the font is formatted as hidden text.
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /*
     * Gets highlight_color
     *
     * @return \Aspose\Words\Model\XmlColor
     */
    public function getHighlightColor()
    {
        return $this->container['highlight_color'];
    }

    /*
     * Sets highlight_color
     *
     * @param \Aspose\Words\Model\XmlColor $highlight_color highlight_color
     *
     * @return $this
     */
    public function setHighlightColor($highlight_color)
    {
        $this->container['highlight_color'] = $highlight_color;

        return $this;
    }

    /*
     * Gets italic
     *
     * @return bool
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /*
     * Sets italic
     *
     * @param bool $italic Gets or sets true if the font is formatted as italic.
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /*
     * Gets italic_bi
     *
     * @return bool
     */
    public function getItalicBi()
    {
        return $this->container['italic_bi'];
    }

    /*
     * Sets italic_bi
     *
     * @param bool $italic_bi Gets or sets true if the right-to-left text is formatted as italic.
     *
     * @return $this
     */
    public function setItalicBi($italic_bi)
    {
        $this->container['italic_bi'] = $italic_bi;

        return $this;
    }

    /*
     * Gets kerning
     *
     * @return double
     */
    public function getKerning()
    {
        return $this->container['kerning'];
    }

    /*
     * Sets kerning
     *
     * @param double $kerning Gets or sets the font size at which kerning starts.
     *
     * @return $this
     */
    public function setKerning($kerning)
    {
        $this->container['kerning'] = $kerning;

        return $this;
    }

    /*
     * Gets locale_id
     *
     * @return int
     */
    public function getLocaleId()
    {
        return $this->container['locale_id'];
    }

    /*
     * Sets locale_id
     *
     * @param int $locale_id Gets or sets the locale identifier (language) of the formatted characters.
     *
     * @return $this
     */
    public function setLocaleId($locale_id)
    {
        $this->container['locale_id'] = $locale_id;

        return $this;
    }

    /*
     * Gets locale_id_bi
     *
     * @return int
     */
    public function getLocaleIdBi()
    {
        return $this->container['locale_id_bi'];
    }

    /*
     * Sets locale_id_bi
     *
     * @param int $locale_id_bi Gets or sets the locale identifier (language) of the formatted right-to-left characters.
     *
     * @return $this
     */
    public function setLocaleIdBi($locale_id_bi)
    {
        $this->container['locale_id_bi'] = $locale_id_bi;

        return $this;
    }

    /*
     * Gets locale_id_far_east
     *
     * @return int
     */
    public function getLocaleIdFarEast()
    {
        return $this->container['locale_id_far_east'];
    }

    /*
     * Sets locale_id_far_east
     *
     * @param int $locale_id_far_east Gets or sets the locale identifier (language) of the formatted Asian characters.
     *
     * @return $this
     */
    public function setLocaleIdFarEast($locale_id_far_east)
    {
        $this->container['locale_id_far_east'] = $locale_id_far_east;

        return $this;
    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name Gets or sets the name of the font.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets name_ascii
     *
     * @return string
     */
    public function getNameAscii()
    {
        return $this->container['name_ascii'];
    }

    /*
     * Sets name_ascii
     *
     * @param string $name_ascii Gets or sets returns or sets the font used for Latin text (characters with character codes from 0 (zero) through 127).
     *
     * @return $this
     */
    public function setNameAscii($name_ascii)
    {
        $this->container['name_ascii'] = $name_ascii;

        return $this;
    }

    /*
     * Gets name_bi
     *
     * @return string
     */
    public function getNameBi()
    {
        return $this->container['name_bi'];
    }

    /*
     * Sets name_bi
     *
     * @param string $name_bi Gets or sets returns or sets the name of the font in a right-to-left language document.
     *
     * @return $this
     */
    public function setNameBi($name_bi)
    {
        $this->container['name_bi'] = $name_bi;

        return $this;
    }

    /*
     * Gets name_far_east
     *
     * @return string
     */
    public function getNameFarEast()
    {
        return $this->container['name_far_east'];
    }

    /*
     * Sets name_far_east
     *
     * @param string $name_far_east Gets or sets returns or sets an East Asian font name.
     *
     * @return $this
     */
    public function setNameFarEast($name_far_east)
    {
        $this->container['name_far_east'] = $name_far_east;

        return $this;
    }

    /*
     * Gets name_other
     *
     * @return string
     */
    public function getNameOther()
    {
        return $this->container['name_other'];
    }

    /*
     * Sets name_other
     *
     * @param string $name_other Gets or sets returns or sets the font used for characters with character codes from 128 through 255.
     *
     * @return $this
     */
    public function setNameOther($name_other)
    {
        $this->container['name_other'] = $name_other;

        return $this;
    }

    /*
     * Gets no_proofing
     *
     * @return bool
     */
    public function getNoProofing()
    {
        return $this->container['no_proofing'];
    }

    /*
     * Sets no_proofing
     *
     * @param bool $no_proofing Gets or sets true when the formatted characters are not to be spell checked.
     *
     * @return $this
     */
    public function setNoProofing($no_proofing)
    {
        $this->container['no_proofing'] = $no_proofing;

        return $this;
    }

    /*
     * Gets outline
     *
     * @return bool
     */
    public function getOutline()
    {
        return $this->container['outline'];
    }

    /*
     * Sets outline
     *
     * @param bool $outline Gets or sets true if the font is formatted as outline.
     *
     * @return $this
     */
    public function setOutline($outline)
    {
        $this->container['outline'] = $outline;

        return $this;
    }

    /*
     * Gets position
     *
     * @return double
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /*
     * Sets position
     *
     * @param double $position Gets or sets the position of text (in points) relative to the base line. A positive number raises the text, and a negative number lowers it.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /*
     * Gets scaling
     *
     * @return int
     */
    public function getScaling()
    {
        return $this->container['scaling'];
    }

    /*
     * Sets scaling
     *
     * @param int $scaling Gets or sets character width scaling in percent.
     *
     * @return $this
     */
    public function setScaling($scaling)
    {
        $this->container['scaling'] = $scaling;

        return $this;
    }

    /*
     * Gets shadow
     *
     * @return bool
     */
    public function getShadow()
    {
        return $this->container['shadow'];
    }

    /*
     * Sets shadow
     *
     * @param bool $shadow Gets or sets true if the font is formatted as shadowed.
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;

        return $this;
    }

    /*
     * Gets size
     *
     * @return double
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /*
     * Sets size
     *
     * @param double $size Gets or sets the font size in points.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /*
     * Gets size_bi
     *
     * @return double
     */
    public function getSizeBi()
    {
        return $this->container['size_bi'];
    }

    /*
     * Sets size_bi
     *
     * @param double $size_bi Gets or sets the font size in points used in a right-to-left document.
     *
     * @return $this
     */
    public function setSizeBi($size_bi)
    {
        $this->container['size_bi'] = $size_bi;

        return $this;
    }

    /*
     * Gets small_caps
     *
     * @return bool
     */
    public function getSmallCaps()
    {
        return $this->container['small_caps'];
    }

    /*
     * Sets small_caps
     *
     * @param bool $small_caps Gets or sets true if the font is formatted as small capital letters.
     *
     * @return $this
     */
    public function setSmallCaps($small_caps)
    {
        $this->container['small_caps'] = $small_caps;

        return $this;
    }

    /*
     * Gets spacing
     *
     * @return double
     */
    public function getSpacing()
    {
        return $this->container['spacing'];
    }

    /*
     * Sets spacing
     *
     * @param double $spacing Gets or sets returns or sets the spacing (in points) between characters.
     *
     * @return $this
     */
    public function setSpacing($spacing)
    {
        $this->container['spacing'] = $spacing;

        return $this;
    }

    /*
     * Gets strike_through
     *
     * @return bool
     */
    public function getStrikeThrough()
    {
        return $this->container['strike_through'];
    }

    /*
     * Sets strike_through
     *
     * @param bool $strike_through Gets or sets true if the font is formatted as strikethrough text.
     *
     * @return $this
     */
    public function setStrikeThrough($strike_through)
    {
        $this->container['strike_through'] = $strike_through;

        return $this;
    }

    /*
     * Gets style_identifier
     *
     * @return string
     */
    public function getStyleIdentifier()
    {
        return $this->container['style_identifier'];
    }

    /*
     * Sets style_identifier
     *
     * @param string $style_identifier Gets or sets the locale independent style identifier of the character style applied to this formatting.
     *
     * @return $this
     */
    public function setStyleIdentifier($style_identifier)
    {
        $allowedValues = $this->getStyleIdentifierAllowableValues();
        if ((!is_numeric($style_identifier) && !in_array($style_identifier, $allowedValues)) || (is_numeric($style_identifier) && !in_array($allowedValues[$style_identifier], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'style_identifier', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['style_identifier'] = $style_identifier;

        return $this;
    }

    /*
     * Gets style_name
     *
     * @return string
     */
    public function getStyleName()
    {
        return $this->container['style_name'];
    }

    /*
     * Sets style_name
     *
     * @param string $style_name Gets or sets the name of the character style applied to this formatting.
     *
     * @return $this
     */
    public function setStyleName($style_name)
    {
        $this->container['style_name'] = $style_name;

        return $this;
    }

    /*
     * Gets subscript
     *
     * @return bool
     */
    public function getSubscript()
    {
        return $this->container['subscript'];
    }

    /*
     * Sets subscript
     *
     * @param bool $subscript Gets or sets true if the font is formatted as subscript.
     *
     * @return $this
     */
    public function setSubscript($subscript)
    {
        $this->container['subscript'] = $subscript;

        return $this;
    }

    /*
     * Gets superscript
     *
     * @return bool
     */
    public function getSuperscript()
    {
        return $this->container['superscript'];
    }

    /*
     * Sets superscript
     *
     * @param bool $superscript Gets or sets true if the font is formatted as superscript.
     *
     * @return $this
     */
    public function setSuperscript($superscript)
    {
        $this->container['superscript'] = $superscript;

        return $this;
    }

    /*
     * Gets text_effect
     *
     * @return string
     */
    public function getTextEffect()
    {
        return $this->container['text_effect'];
    }

    /*
     * Sets text_effect
     *
     * @param string $text_effect Gets or sets the font animation effect.
     *
     * @return $this
     */
    public function setTextEffect($text_effect)
    {
        $allowedValues = $this->getTextEffectAllowableValues();
        if ((!is_numeric($text_effect) && !in_array($text_effect, $allowedValues)) || (is_numeric($text_effect) && !in_array($allowedValues[$text_effect], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'text_effect', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['text_effect'] = $text_effect;

        return $this;
    }

    /*
     * Gets underline
     *
     * @return string
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /*
     * Sets underline
     *
     * @param string $underline Gets or sets the type of underline applied to the font.
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $allowedValues = $this->getUnderlineAllowableValues();
        if ((!is_numeric($underline) && !in_array($underline, $allowedValues)) || (is_numeric($underline) && !in_array($allowedValues[$underline], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'underline', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['underline'] = $underline;

        return $this;
    }

    /*
     * Gets underline_color
     *
     * @return \Aspose\Words\Model\XmlColor
     */
    public function getUnderlineColor()
    {
        return $this->container['underline_color'];
    }

    /*
     * Sets underline_color
     *
     * @param \Aspose\Words\Model\XmlColor $underline_color underline_color
     *
     * @return $this
     */
    public function setUnderlineColor($underline_color)
    {
        $this->container['underline_color'] = $underline_color;

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
