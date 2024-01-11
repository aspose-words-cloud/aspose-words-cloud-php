<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Style.php">
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
 * Style
 *
 * @description DTO container with a single document style.
 */
class Style extends LinkElement
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Style";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'font' => '\Aspose\Words\Model\Font',
        'built_in' => 'bool',
        'next_paragraph_style_name' => 'string',
        'base_style_name' => 'string',
        'is_quick_style' => 'bool',
        'linked_style_name' => 'string',
        'type' => 'string',
        'is_heading' => 'bool',
        'aliases' => 'string[]',
        'style_identifier' => 'string',
        'name' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'font' => 'null',
        'built_in' => 'null',
        'next_paragraph_style_name' => 'null',
        'base_style_name' => 'null',
        'is_quick_style' => 'null',
        'linked_style_name' => 'null',
        'type' => 'null',
        'is_heading' => 'null',
        'aliases' => 'null',
        'style_identifier' => 'null',
        'name' => 'null'
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
        'font' => 'Font',
        'built_in' => 'BuiltIn',
        'next_paragraph_style_name' => 'NextParagraphStyleName',
        'base_style_name' => 'BaseStyleName',
        'is_quick_style' => 'IsQuickStyle',
        'linked_style_name' => 'LinkedStyleName',
        'type' => 'Type',
        'is_heading' => 'IsHeading',
        'aliases' => 'Aliases',
        'style_identifier' => 'StyleIdentifier',
        'name' => 'Name'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'font' => 'setFont',
        'built_in' => 'setBuiltIn',
        'next_paragraph_style_name' => 'setNextParagraphStyleName',
        'base_style_name' => 'setBaseStyleName',
        'is_quick_style' => 'setIsQuickStyle',
        'linked_style_name' => 'setLinkedStyleName',
        'type' => 'setType',
        'is_heading' => 'setIsHeading',
        'aliases' => 'setAliases',
        'style_identifier' => 'setStyleIdentifier',
        'name' => 'setName'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'font' => 'getFont',
        'built_in' => 'getBuiltIn',
        'next_paragraph_style_name' => 'getNextParagraphStyleName',
        'base_style_name' => 'getBaseStyleName',
        'is_quick_style' => 'getIsQuickStyle',
        'linked_style_name' => 'getLinkedStyleName',
        'type' => 'getType',
        'is_heading' => 'getIsHeading',
        'aliases' => 'getAliases',
        'style_identifier' => 'getStyleIdentifier',
        'name' => 'getName'
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

    const TYPE_PARAGRAPH = 'Paragraph';
    const TYPE_CHARACTER = 'Character';
    const TYPE_TABLE = 'Table';
    const TYPE_LIST = 'List';
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
    const STYLE_IDENTIFIER_LIST = 'List';
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
    const STYLE_IDENTIFIER_SMART_LINK = 'SmartLink';
    const STYLE_IDENTIFIER_MENTION = 'Mention';
    const STYLE_IDENTIFIER_SMART_HYPERLINK = 'SmartHyperlink';
    const STYLE_IDENTIFIER_HASHTAG = 'Hashtag';
    const STYLE_IDENTIFIER_UNRESOLVED_MENTION = 'UnresolvedMention';
    const STYLE_IDENTIFIER_USER = 'User';
    const STYLE_IDENTIFIER_NIL = 'Nil';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PARAGRAPH,
            self::TYPE_CHARACTER,
            self::TYPE_TABLE,
            self::TYPE_LIST
        ];
    }
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
            self::STYLE_IDENTIFIER_LIST,
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
            self::STYLE_IDENTIFIER_SMART_LINK,
            self::STYLE_IDENTIFIER_MENTION,
            self::STYLE_IDENTIFIER_SMART_HYPERLINK,
            self::STYLE_IDENTIFIER_HASHTAG,
            self::STYLE_IDENTIFIER_UNRESOLVED_MENTION,
            self::STYLE_IDENTIFIER_USER,
            self::STYLE_IDENTIFIER_NIL
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
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['built_in'] = isset($data['built_in']) ? $data['built_in'] : null;
        $this->container['next_paragraph_style_name'] = isset($data['next_paragraph_style_name']) ? $data['next_paragraph_style_name'] : null;
        $this->container['base_style_name'] = isset($data['base_style_name']) ? $data['base_style_name'] : null;
        $this->container['is_quick_style'] = isset($data['is_quick_style']) ? $data['is_quick_style'] : null;
        $this->container['linked_style_name'] = isset($data['linked_style_name']) ? $data['linked_style_name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_heading'] = isset($data['is_heading']) ? $data['is_heading'] : null;
        $this->container['aliases'] = isset($data['aliases']) ? $data['aliases'] : null;
        $this->container['style_identifier'] = isset($data['style_identifier']) ? $data['style_identifier'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();


        if (isset($this->container['font'])) {
            $this->getFont()->validate();
        }

        if (!isset($this->container['built_in'])) {
            throw new \InvalidArgumentException('Property BuiltIn in Style is required.');
        }

        if (!isset($this->container['is_quick_style'])) {
            throw new \InvalidArgumentException('Property IsQuickStyle in Style is required.');
        }

        if (isset($this->container['type'])) {
            $allowedValuesType = $this->getTypeAllowableValues();
            if (!in_array($this->container['type'], $allowedValuesType)) {
                throw new \InvalidArgumentException('Property Type in Style has invalid format.');
            }
        }
        if (!isset($this->container['type'])) {
            throw new \InvalidArgumentException('Property Type in Style is required.');
        }

        if (!isset($this->container['is_heading'])) {
            throw new \InvalidArgumentException('Property IsHeading in Style is required.');
        }

        if (isset($this->container['style_identifier'])) {
            $allowedValuesStyleIdentifier = $this->getStyleIdentifierAllowableValues();
            if (!in_array($this->container['style_identifier'], $allowedValuesStyleIdentifier)) {
                throw new \InvalidArgumentException('Property StyleIdentifier in Style has invalid format.');
            }
        }
        if (!isset($this->container['style_identifier'])) {
            throw new \InvalidArgumentException('Property StyleIdentifier in Style is required.');
        }

    }

    /*
     * Gets font
     *
     * @return \Aspose\Words\Model\Font
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /*
     * Sets font
     *
     * @param \Aspose\Words\Model\Font $font Gets or sets the character formatting of the style. For list styles this property returns null.
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;
        return $this;
    }


    /*
     * Gets built_in
     *
     * @return bool
     */
    public function getBuiltIn()
    {
        return $this->container['built_in'];
    }

    /*
     * Sets built_in
     *
     * @param bool $built_in Gets or sets a value indicating whether this style is one of the built-in styles in MS Word.
     *
     * @return $this
     */
    public function setBuiltIn($built_in)
    {
        $this->container['built_in'] = $built_in;
        return $this;
    }


    /*
     * Gets next_paragraph_style_name
     *
     * @return string
     */
    public function getNextParagraphStyleName()
    {
        return $this->container['next_paragraph_style_name'];
    }

    /*
     * Sets next_paragraph_style_name
     *
     * @param string $next_paragraph_style_name Gets or sets the name of the style to be applied automatically to a new paragraph inserted after a paragraph formatted with the specified style. This property is not used by Aspose.Words. The next paragraph style will only be applied automatically when you edit the document in MS Word.
     *
     * @return $this
     */
    public function setNextParagraphStyleName($next_paragraph_style_name)
    {
        $this->container['next_paragraph_style_name'] = $next_paragraph_style_name;
        return $this;
    }


    /*
     * Gets base_style_name
     *
     * @return string
     */
    public function getBaseStyleName()
    {
        return $this->container['base_style_name'];
    }

    /*
     * Sets base_style_name
     *
     * @param string $base_style_name Gets or sets the name of the style this style is based on. This will be an empty string if the style is not based on any other style and it can be set to an empty string.
     *
     * @return $this
     */
    public function setBaseStyleName($base_style_name)
    {
        $this->container['base_style_name'] = $base_style_name;
        return $this;
    }


    /*
     * Gets is_quick_style
     *
     * @return bool
     */
    public function getIsQuickStyle()
    {
        return $this->container['is_quick_style'];
    }

    /*
     * Sets is_quick_style
     *
     * @param bool $is_quick_style Gets or sets a value indicating whether this style is shown in the Quick Style gallery inside MS Word UI.
     *
     * @return $this
     */
    public function setIsQuickStyle($is_quick_style)
    {
        $this->container['is_quick_style'] = $is_quick_style;
        return $this;
    }


    /*
     * Gets linked_style_name
     *
     * @return string
     */
    public function getLinkedStyleName()
    {
        return $this->container['linked_style_name'];
    }

    /*
     * Sets linked_style_name
     *
     * @param string $linked_style_name Gets or sets the name of the Style linked to this one. Returns Empty string if no styles are linked.
     *
     * @return $this
     */
    public function setLinkedStyleName($linked_style_name)
    {
        $this->container['linked_style_name'] = $linked_style_name;
        return $this;
    }


    /*
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param string $type Gets or sets the style type (paragraph or character).
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if ((!is_numeric($type) && !in_array($type, $allowedValues)) || (is_numeric($type) && !in_array($allowedValues[$type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['type'] = $type;
        return $this;
    }


    /*
     * Gets is_heading
     *
     * @return bool
     */
    public function getIsHeading()
    {
        return $this->container['is_heading'];
    }

    /*
     * Sets is_heading
     *
     * @param bool $is_heading Gets or sets a value indicating whether the style is one of the built-in Heading styles.
     *
     * @return $this
     */
    public function setIsHeading($is_heading)
    {
        $this->container['is_heading'] = $is_heading;
        return $this;
    }


    /*
     * Gets aliases
     *
     * @return string[]
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /*
     * Sets aliases
     *
     * @param string[] $aliases Gets or sets all aliases of this style. If style has no aliases then empty array of string is returned.
     *
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->container['aliases'] = $aliases;
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
     * @param string $style_identifier Gets or sets the locale independent style identifier for a built-in style. For user defined (custom) styles, this property returns Aspose.Words.StyleIdentifier.User. Aspose.Words.Style.Name.
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
     * @param string $name Gets or sets the name of the style. Can not be empty string. If there already is a style with such name in the collection, then this style will override it. All affected nodes will reference new style.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

