<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ParagraphFormatBase.php">
 *   Copyright (c) 2022 Aspose.Words for Cloud
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
 * ParagraphFormatBase
 *
 * @description Paragraph format element base class.
 */
class ParagraphFormatBase extends LinkElement
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ParagraphFormatBase";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'add_space_between_far_east_and_alpha' => 'bool',
        'add_space_between_far_east_and_digit' => 'bool',
        'alignment' => 'string',
        'bidi' => 'bool',
        'drop_cap_position' => 'string',
        'first_line_indent' => 'double',
        'keep_together' => 'bool',
        'keep_with_next' => 'bool',
        'left_indent' => 'double',
        'line_spacing' => 'double',
        'line_spacing_rule' => 'string',
        'lines_to_drop' => 'int',
        'no_space_between_paragraphs_of_same_style' => 'bool',
        'outline_level' => 'string',
        'page_break_before' => 'bool',
        'right_indent' => 'double',
        'shading' => '\Aspose\Words\Model\Shading',
        'space_after' => 'double',
        'space_after_auto' => 'bool',
        'space_before' => 'double',
        'space_before_auto' => 'bool',
        'style_identifier' => 'string',
        'style_name' => 'string',
        'suppress_auto_hyphens' => 'bool',
        'suppress_line_numbers' => 'bool',
        'widow_control' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'add_space_between_far_east_and_alpha' => 'null',
        'add_space_between_far_east_and_digit' => 'null',
        'alignment' => 'null',
        'bidi' => 'null',
        'drop_cap_position' => 'null',
        'first_line_indent' => 'null',
        'keep_together' => 'null',
        'keep_with_next' => 'null',
        'left_indent' => 'null',
        'line_spacing' => 'null',
        'line_spacing_rule' => 'null',
        'lines_to_drop' => 'null',
        'no_space_between_paragraphs_of_same_style' => 'null',
        'outline_level' => 'null',
        'page_break_before' => 'null',
        'right_indent' => 'null',
        'shading' => 'null',
        'space_after' => 'null',
        'space_after_auto' => 'null',
        'space_before' => 'null',
        'space_before_auto' => 'null',
        'style_identifier' => 'null',
        'style_name' => 'null',
        'suppress_auto_hyphens' => 'null',
        'suppress_line_numbers' => 'null',
        'widow_control' => 'null'
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
        'add_space_between_far_east_and_alpha' => 'AddSpaceBetweenFarEastAndAlpha',
        'add_space_between_far_east_and_digit' => 'AddSpaceBetweenFarEastAndDigit',
        'alignment' => 'Alignment',
        'bidi' => 'Bidi',
        'drop_cap_position' => 'DropCapPosition',
        'first_line_indent' => 'FirstLineIndent',
        'keep_together' => 'KeepTogether',
        'keep_with_next' => 'KeepWithNext',
        'left_indent' => 'LeftIndent',
        'line_spacing' => 'LineSpacing',
        'line_spacing_rule' => 'LineSpacingRule',
        'lines_to_drop' => 'LinesToDrop',
        'no_space_between_paragraphs_of_same_style' => 'NoSpaceBetweenParagraphsOfSameStyle',
        'outline_level' => 'OutlineLevel',
        'page_break_before' => 'PageBreakBefore',
        'right_indent' => 'RightIndent',
        'shading' => 'Shading',
        'space_after' => 'SpaceAfter',
        'space_after_auto' => 'SpaceAfterAuto',
        'space_before' => 'SpaceBefore',
        'space_before_auto' => 'SpaceBeforeAuto',
        'style_identifier' => 'StyleIdentifier',
        'style_name' => 'StyleName',
        'suppress_auto_hyphens' => 'SuppressAutoHyphens',
        'suppress_line_numbers' => 'SuppressLineNumbers',
        'widow_control' => 'WidowControl'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_space_between_far_east_and_alpha' => 'setAddSpaceBetweenFarEastAndAlpha',
        'add_space_between_far_east_and_digit' => 'setAddSpaceBetweenFarEastAndDigit',
        'alignment' => 'setAlignment',
        'bidi' => 'setBidi',
        'drop_cap_position' => 'setDropCapPosition',
        'first_line_indent' => 'setFirstLineIndent',
        'keep_together' => 'setKeepTogether',
        'keep_with_next' => 'setKeepWithNext',
        'left_indent' => 'setLeftIndent',
        'line_spacing' => 'setLineSpacing',
        'line_spacing_rule' => 'setLineSpacingRule',
        'lines_to_drop' => 'setLinesToDrop',
        'no_space_between_paragraphs_of_same_style' => 'setNoSpaceBetweenParagraphsOfSameStyle',
        'outline_level' => 'setOutlineLevel',
        'page_break_before' => 'setPageBreakBefore',
        'right_indent' => 'setRightIndent',
        'shading' => 'setShading',
        'space_after' => 'setSpaceAfter',
        'space_after_auto' => 'setSpaceAfterAuto',
        'space_before' => 'setSpaceBefore',
        'space_before_auto' => 'setSpaceBeforeAuto',
        'style_identifier' => 'setStyleIdentifier',
        'style_name' => 'setStyleName',
        'suppress_auto_hyphens' => 'setSuppressAutoHyphens',
        'suppress_line_numbers' => 'setSuppressLineNumbers',
        'widow_control' => 'setWidowControl'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_space_between_far_east_and_alpha' => 'getAddSpaceBetweenFarEastAndAlpha',
        'add_space_between_far_east_and_digit' => 'getAddSpaceBetweenFarEastAndDigit',
        'alignment' => 'getAlignment',
        'bidi' => 'getBidi',
        'drop_cap_position' => 'getDropCapPosition',
        'first_line_indent' => 'getFirstLineIndent',
        'keep_together' => 'getKeepTogether',
        'keep_with_next' => 'getKeepWithNext',
        'left_indent' => 'getLeftIndent',
        'line_spacing' => 'getLineSpacing',
        'line_spacing_rule' => 'getLineSpacingRule',
        'lines_to_drop' => 'getLinesToDrop',
        'no_space_between_paragraphs_of_same_style' => 'getNoSpaceBetweenParagraphsOfSameStyle',
        'outline_level' => 'getOutlineLevel',
        'page_break_before' => 'getPageBreakBefore',
        'right_indent' => 'getRightIndent',
        'shading' => 'getShading',
        'space_after' => 'getSpaceAfter',
        'space_after_auto' => 'getSpaceAfterAuto',
        'space_before' => 'getSpaceBefore',
        'space_before_auto' => 'getSpaceBeforeAuto',
        'style_identifier' => 'getStyleIdentifier',
        'style_name' => 'getStyleName',
        'suppress_auto_hyphens' => 'getSuppressAutoHyphens',
        'suppress_line_numbers' => 'getSuppressLineNumbers',
        'widow_control' => 'getWidowControl'
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

    const ALIGNMENT_LEFT = 'Left';
    const ALIGNMENT_CENTER = 'Center';
    const ALIGNMENT_RIGHT = 'Right';
    const ALIGNMENT_JUSTIFY = 'Justify';
    const ALIGNMENT_DISTRIBUTED = 'Distributed';
    const ALIGNMENT_ARABIC_MEDIUM_KASHIDA = 'ArabicMediumKashida';
    const ALIGNMENT_ARABIC_HIGH_KASHIDA = 'ArabicHighKashida';
    const ALIGNMENT_ARABIC_LOW_KASHIDA = 'ArabicLowKashida';
    const ALIGNMENT_THAI_DISTRIBUTED = 'ThaiDistributed';
    const DROP_CAP_POSITION_NONE = 'None';
    const DROP_CAP_POSITION_NORMAL = 'Normal';
    const DROP_CAP_POSITION_MARGIN = 'Margin';
    const LINE_SPACING_RULE_AT_LEAST = 'AtLeast';
    const LINE_SPACING_RULE_EXACTLY = 'Exactly';
    const LINE_SPACING_RULE_MULTIPLE = 'Multiple';
    const OUTLINE_LEVEL_LEVEL1 = 'Level1';
    const OUTLINE_LEVEL_LEVEL2 = 'Level2';
    const OUTLINE_LEVEL_LEVEL3 = 'Level3';
    const OUTLINE_LEVEL_LEVEL4 = 'Level4';
    const OUTLINE_LEVEL_LEVEL5 = 'Level5';
    const OUTLINE_LEVEL_LEVEL6 = 'Level6';
    const OUTLINE_LEVEL_LEVEL7 = 'Level7';
    const OUTLINE_LEVEL_LEVEL8 = 'Level8';
    const OUTLINE_LEVEL_LEVEL9 = 'Level9';
    const OUTLINE_LEVEL_BODY_TEXT = 'BodyText';
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
    public function getAlignmentAllowableValues()
    {
        return [
            self::ALIGNMENT_LEFT,
            self::ALIGNMENT_CENTER,
            self::ALIGNMENT_RIGHT,
            self::ALIGNMENT_JUSTIFY,
            self::ALIGNMENT_DISTRIBUTED,
            self::ALIGNMENT_ARABIC_MEDIUM_KASHIDA,
            self::ALIGNMENT_ARABIC_HIGH_KASHIDA,
            self::ALIGNMENT_ARABIC_LOW_KASHIDA,
            self::ALIGNMENT_THAI_DISTRIBUTED
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDropCapPositionAllowableValues()
    {
        return [
            self::DROP_CAP_POSITION_NONE,
            self::DROP_CAP_POSITION_NORMAL,
            self::DROP_CAP_POSITION_MARGIN
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLineSpacingRuleAllowableValues()
    {
        return [
            self::LINE_SPACING_RULE_AT_LEAST,
            self::LINE_SPACING_RULE_EXACTLY,
            self::LINE_SPACING_RULE_MULTIPLE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutlineLevelAllowableValues()
    {
        return [
            self::OUTLINE_LEVEL_LEVEL1,
            self::OUTLINE_LEVEL_LEVEL2,
            self::OUTLINE_LEVEL_LEVEL3,
            self::OUTLINE_LEVEL_LEVEL4,
            self::OUTLINE_LEVEL_LEVEL5,
            self::OUTLINE_LEVEL_LEVEL6,
            self::OUTLINE_LEVEL_LEVEL7,
            self::OUTLINE_LEVEL_LEVEL8,
            self::OUTLINE_LEVEL_LEVEL9,
            self::OUTLINE_LEVEL_BODY_TEXT
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
        $this->container['add_space_between_far_east_and_alpha'] = isset($data['add_space_between_far_east_and_alpha']) ? $data['add_space_between_far_east_and_alpha'] : null;
        $this->container['add_space_between_far_east_and_digit'] = isset($data['add_space_between_far_east_and_digit']) ? $data['add_space_between_far_east_and_digit'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['bidi'] = isset($data['bidi']) ? $data['bidi'] : null;
        $this->container['drop_cap_position'] = isset($data['drop_cap_position']) ? $data['drop_cap_position'] : null;
        $this->container['first_line_indent'] = isset($data['first_line_indent']) ? $data['first_line_indent'] : null;
        $this->container['keep_together'] = isset($data['keep_together']) ? $data['keep_together'] : null;
        $this->container['keep_with_next'] = isset($data['keep_with_next']) ? $data['keep_with_next'] : null;
        $this->container['left_indent'] = isset($data['left_indent']) ? $data['left_indent'] : null;
        $this->container['line_spacing'] = isset($data['line_spacing']) ? $data['line_spacing'] : null;
        $this->container['line_spacing_rule'] = isset($data['line_spacing_rule']) ? $data['line_spacing_rule'] : null;
        $this->container['lines_to_drop'] = isset($data['lines_to_drop']) ? $data['lines_to_drop'] : null;
        $this->container['no_space_between_paragraphs_of_same_style'] = isset($data['no_space_between_paragraphs_of_same_style']) ? $data['no_space_between_paragraphs_of_same_style'] : null;
        $this->container['outline_level'] = isset($data['outline_level']) ? $data['outline_level'] : null;
        $this->container['page_break_before'] = isset($data['page_break_before']) ? $data['page_break_before'] : null;
        $this->container['right_indent'] = isset($data['right_indent']) ? $data['right_indent'] : null;
        $this->container['shading'] = isset($data['shading']) ? $data['shading'] : null;
        $this->container['space_after'] = isset($data['space_after']) ? $data['space_after'] : null;
        $this->container['space_after_auto'] = isset($data['space_after_auto']) ? $data['space_after_auto'] : null;
        $this->container['space_before'] = isset($data['space_before']) ? $data['space_before'] : null;
        $this->container['space_before_auto'] = isset($data['space_before_auto']) ? $data['space_before_auto'] : null;
        $this->container['style_identifier'] = isset($data['style_identifier']) ? $data['style_identifier'] : null;
        $this->container['style_name'] = isset($data['style_name']) ? $data['style_name'] : null;
        $this->container['suppress_auto_hyphens'] = isset($data['suppress_auto_hyphens']) ? $data['suppress_auto_hyphens'] : null;
        $this->container['suppress_line_numbers'] = isset($data['suppress_line_numbers']) ? $data['suppress_line_numbers'] : null;
        $this->container['widow_control'] = isset($data['widow_control']) ? $data['widow_control'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();
        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDropCapPositionAllowableValues();
        if (!in_array($this->container['drop_cap_position'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'drop_cap_position', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLineSpacingRuleAllowableValues();
        if (!in_array($this->container['line_spacing_rule'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'line_spacing_rule', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOutlineLevelAllowableValues();
        if (!in_array($this->container['outline_level'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'outline_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStyleIdentifierAllowableValues();
        if (!in_array($this->container['style_identifier'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'style_identifier', must be one of '%s'",
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

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            return false;
        }

        $allowedValues = $this->getDropCapPositionAllowableValues();
        if (!in_array($this->container['drop_cap_position'], $allowedValues)) {
            return false;
        }

        $allowedValues = $this->getLineSpacingRuleAllowableValues();
        if (!in_array($this->container['line_spacing_rule'], $allowedValues)) {
            return false;
        }

        $allowedValues = $this->getOutlineLevelAllowableValues();
        if (!in_array($this->container['outline_level'], $allowedValues)) {
            return false;
        }

        $allowedValues = $this->getStyleIdentifierAllowableValues();
        if (!in_array($this->container['style_identifier'], $allowedValues)) {
            return false;
        }


        return true;
    }

    /*
     * Gets add_space_between_far_east_and_alpha
     *
     * @return bool
     */
    public function getAddSpaceBetweenFarEastAndAlpha()
    {
        return $this->container['add_space_between_far_east_and_alpha'];
    }

    /*
     * Sets add_space_between_far_east_and_alpha
     *
     * @param bool $add_space_between_far_east_and_alpha Gets or sets a value indicating whether inter-character spacing is automatically adjusted between regions of Latin text and regions of East Asian text in the current paragraph.
     *
     * @return $this
     */
    public function setAddSpaceBetweenFarEastAndAlpha($add_space_between_far_east_and_alpha)
    {
        $this->container['add_space_between_far_east_and_alpha'] = $add_space_between_far_east_and_alpha;
        return $this;
    }

    /*
     * Gets add_space_between_far_east_and_digit
     *
     * @return bool
     */
    public function getAddSpaceBetweenFarEastAndDigit()
    {
        return $this->container['add_space_between_far_east_and_digit'];
    }

    /*
     * Sets add_space_between_far_east_and_digit
     *
     * @param bool $add_space_between_far_east_and_digit Gets or sets a value indicating whether inter-character spacing is automatically adjusted between regions of numbers and regions of East Asian text in the current paragraph.
     *
     * @return $this
     */
    public function setAddSpaceBetweenFarEastAndDigit($add_space_between_far_east_and_digit)
    {
        $this->container['add_space_between_far_east_and_digit'] = $add_space_between_far_east_and_digit;
        return $this;
    }

    /*
     * Gets alignment
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /*
     * Sets alignment
     *
     * @param string $alignment Gets or sets text alignment for the paragraph.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $allowedValues = $this->getAlignmentAllowableValues();
        if ((!is_numeric($alignment) && !in_array($alignment, $allowedValues)) || (is_numeric($alignment) && !in_array($allowedValues[$alignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'alignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['alignment'] = $alignment;
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
     * @param bool $bidi Gets or sets a value indicating whether this is a right-to-left paragraph.
     *
     * @return $this
     */
    public function setBidi($bidi)
    {
        $this->container['bidi'] = $bidi;
        return $this;
    }

    /*
     * Gets drop_cap_position
     *
     * @return string
     */
    public function getDropCapPosition()
    {
        return $this->container['drop_cap_position'];
    }

    /*
     * Sets drop_cap_position
     *
     * @param string $drop_cap_position Gets or sets the position for a drop cap text.
     *
     * @return $this
     */
    public function setDropCapPosition($drop_cap_position)
    {
        $allowedValues = $this->getDropCapPositionAllowableValues();
        if ((!is_numeric($drop_cap_position) && !in_array($drop_cap_position, $allowedValues)) || (is_numeric($drop_cap_position) && !in_array($allowedValues[$drop_cap_position], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'drop_cap_position', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['drop_cap_position'] = $drop_cap_position;
        return $this;
    }

    /*
     * Gets first_line_indent
     *
     * @return double
     */
    public function getFirstLineIndent()
    {
        return $this->container['first_line_indent'];
    }

    /*
     * Sets first_line_indent
     *
     * @param double $first_line_indent Gets or sets the value (in points) for a first line or hanging indent. Use a positive value to set a first-line indent, and use a negative value to set a hanging indent.
     *
     * @return $this
     */
    public function setFirstLineIndent($first_line_indent)
    {
        $this->container['first_line_indent'] = $first_line_indent;
        return $this;
    }

    /*
     * Gets keep_together
     *
     * @return bool
     */
    public function getKeepTogether()
    {
        return $this->container['keep_together'];
    }

    /*
     * Sets keep_together
     *
     * @param bool $keep_together Gets or sets a value indicating whether all lines in the paragraph are to remain on the same page.
     *
     * @return $this
     */
    public function setKeepTogether($keep_together)
    {
        $this->container['keep_together'] = $keep_together;
        return $this;
    }

    /*
     * Gets keep_with_next
     *
     * @return bool
     */
    public function getKeepWithNext()
    {
        return $this->container['keep_with_next'];
    }

    /*
     * Sets keep_with_next
     *
     * @param bool $keep_with_next Gets or sets a value indicating whether the paragraph is to remains on the same page as the paragraph that follows it.
     *
     * @return $this
     */
    public function setKeepWithNext($keep_with_next)
    {
        $this->container['keep_with_next'] = $keep_with_next;
        return $this;
    }

    /*
     * Gets left_indent
     *
     * @return double
     */
    public function getLeftIndent()
    {
        return $this->container['left_indent'];
    }

    /*
     * Sets left_indent
     *
     * @param double $left_indent Gets or sets the value (in points), that represents the left indent for paragraph.
     *
     * @return $this
     */
    public function setLeftIndent($left_indent)
    {
        $this->container['left_indent'] = $left_indent;
        return $this;
    }

    /*
     * Gets line_spacing
     *
     * @return double
     */
    public function getLineSpacing()
    {
        return $this->container['line_spacing'];
    }

    /*
     * Sets line_spacing
     *
     * @param double $line_spacing Gets or sets the line spacing (in points) for the paragraph.
     *
     * @return $this
     */
    public function setLineSpacing($line_spacing)
    {
        $this->container['line_spacing'] = $line_spacing;
        return $this;
    }

    /*
     * Gets line_spacing_rule
     *
     * @return string
     */
    public function getLineSpacingRule()
    {
        return $this->container['line_spacing_rule'];
    }

    /*
     * Sets line_spacing_rule
     *
     * @param string $line_spacing_rule Gets or sets the line spacing for the paragraph.
     *
     * @return $this
     */
    public function setLineSpacingRule($line_spacing_rule)
    {
        $allowedValues = $this->getLineSpacingRuleAllowableValues();
        if ((!is_numeric($line_spacing_rule) && !in_array($line_spacing_rule, $allowedValues)) || (is_numeric($line_spacing_rule) && !in_array($allowedValues[$line_spacing_rule], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'line_spacing_rule', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['line_spacing_rule'] = $line_spacing_rule;
        return $this;
    }

    /*
     * Gets lines_to_drop
     *
     * @return int
     */
    public function getLinesToDrop()
    {
        return $this->container['lines_to_drop'];
    }

    /*
     * Sets lines_to_drop
     *
     * @param int $lines_to_drop Gets or sets the number of lines of the paragraph text used to calculate the drop cap height.
     *
     * @return $this
     */
    public function setLinesToDrop($lines_to_drop)
    {
        $this->container['lines_to_drop'] = $lines_to_drop;
        return $this;
    }

    /*
     * Gets no_space_between_paragraphs_of_same_style
     *
     * @return bool
     */
    public function getNoSpaceBetweenParagraphsOfSameStyle()
    {
        return $this->container['no_space_between_paragraphs_of_same_style'];
    }

    /*
     * Sets no_space_between_paragraphs_of_same_style
     *
     * @param bool $no_space_between_paragraphs_of_same_style Gets or sets a value indicating whether SpaceBefore and SpaceAfter will be ignored between the paragraphs of the same style.
     *
     * @return $this
     */
    public function setNoSpaceBetweenParagraphsOfSameStyle($no_space_between_paragraphs_of_same_style)
    {
        $this->container['no_space_between_paragraphs_of_same_style'] = $no_space_between_paragraphs_of_same_style;
        return $this;
    }

    /*
     * Gets outline_level
     *
     * @return string
     */
    public function getOutlineLevel()
    {
        return $this->container['outline_level'];
    }

    /*
     * Sets outline_level
     *
     * @param string $outline_level Gets or sets the outline level of the paragraph in the document.
     *
     * @return $this
     */
    public function setOutlineLevel($outline_level)
    {
        $allowedValues = $this->getOutlineLevelAllowableValues();
        if ((!is_numeric($outline_level) && !in_array($outline_level, $allowedValues)) || (is_numeric($outline_level) && !in_array($allowedValues[$outline_level], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'outline_level', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['outline_level'] = $outline_level;
        return $this;
    }

    /*
     * Gets page_break_before
     *
     * @return bool
     */
    public function getPageBreakBefore()
    {
        return $this->container['page_break_before'];
    }

    /*
     * Sets page_break_before
     *
     * @param bool $page_break_before Gets or sets a value indicating whether a page break is forced before the paragraph.
     *
     * @return $this
     */
    public function setPageBreakBefore($page_break_before)
    {
        $this->container['page_break_before'] = $page_break_before;
        return $this;
    }

    /*
     * Gets right_indent
     *
     * @return double
     */
    public function getRightIndent()
    {
        return $this->container['right_indent'];
    }

    /*
     * Sets right_indent
     *
     * @param double $right_indent Gets or sets the value (in points) that represents the right indent for paragraph.
     *
     * @return $this
     */
    public function setRightIndent($right_indent)
    {
        $this->container['right_indent'] = $right_indent;
        return $this;
    }

    /*
     * Gets shading
     *
     * @return \Aspose\Words\Model\Shading
     */
    public function getShading()
    {
        return $this->container['shading'];
    }

    /*
     * Sets shading
     *
     * @param \Aspose\Words\Model\Shading $shading Gets or sets the Shading object, that refers to the shading formatting for the paragraph.
     *
     * @return $this
     */
    public function setShading($shading)
    {
        $this->container['shading'] = $shading;
        return $this;
    }

    /*
     * Gets space_after
     *
     * @return double
     */
    public function getSpaceAfter()
    {
        return $this->container['space_after'];
    }

    /*
     * Sets space_after
     *
     * @param double $space_after Gets or sets the amount of spacing (in points) after the paragraph.
     *
     * @return $this
     */
    public function setSpaceAfter($space_after)
    {
        $this->container['space_after'] = $space_after;
        return $this;
    }

    /*
     * Gets space_after_auto
     *
     * @return bool
     */
    public function getSpaceAfterAuto()
    {
        return $this->container['space_after_auto'];
    }

    /*
     * Sets space_after_auto
     *
     * @param bool $space_after_auto Gets or sets a value indicating whether the amount of spacing after the paragraph is set automatically.
     *
     * @return $this
     */
    public function setSpaceAfterAuto($space_after_auto)
    {
        $this->container['space_after_auto'] = $space_after_auto;
        return $this;
    }

    /*
     * Gets space_before
     *
     * @return double
     */
    public function getSpaceBefore()
    {
        return $this->container['space_before'];
    }

    /*
     * Sets space_before
     *
     * @param double $space_before Gets or sets the amount of spacing (in points) before the paragraph.
     *
     * @return $this
     */
    public function setSpaceBefore($space_before)
    {
        $this->container['space_before'] = $space_before;
        return $this;
    }

    /*
     * Gets space_before_auto
     *
     * @return bool
     */
    public function getSpaceBeforeAuto()
    {
        return $this->container['space_before_auto'];
    }

    /*
     * Sets space_before_auto
     *
     * @param bool $space_before_auto Gets or sets a value indicating whether the amount of spacing before the paragraph is set automatically.
     *
     * @return $this
     */
    public function setSpaceBeforeAuto($space_before_auto)
    {
        $this->container['space_before_auto'] = $space_before_auto;
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
     * @param string $style_identifier Gets or sets the locale independent style identifier of the paragraph style applied to this formatting.
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
     * @param string $style_name Gets or sets the name of the paragraph style applied to this formatting.
     *
     * @return $this
     */
    public function setStyleName($style_name)
    {
        $this->container['style_name'] = $style_name;
        return $this;
    }

    /*
     * Gets suppress_auto_hyphens
     *
     * @return bool
     */
    public function getSuppressAutoHyphens()
    {
        return $this->container['suppress_auto_hyphens'];
    }

    /*
     * Sets suppress_auto_hyphens
     *
     * @param bool $suppress_auto_hyphens Gets or sets a value indicating whether the current paragraph should be exempted from any hyphenation which is applied in the document settings.
     *
     * @return $this
     */
    public function setSuppressAutoHyphens($suppress_auto_hyphens)
    {
        $this->container['suppress_auto_hyphens'] = $suppress_auto_hyphens;
        return $this;
    }

    /*
     * Gets suppress_line_numbers
     *
     * @return bool
     */
    public function getSuppressLineNumbers()
    {
        return $this->container['suppress_line_numbers'];
    }

    /*
     * Sets suppress_line_numbers
     *
     * @param bool $suppress_line_numbers Gets or sets a value indicating whether the current paragraph's lines should be exempted from line numbering which is applied in the parent section.
     *
     * @return $this
     */
    public function setSuppressLineNumbers($suppress_line_numbers)
    {
        $this->container['suppress_line_numbers'] = $suppress_line_numbers;
        return $this;
    }

    /*
     * Gets widow_control
     *
     * @return bool
     */
    public function getWidowControl()
    {
        return $this->container['widow_control'];
    }

    /*
     * Sets widow_control
     *
     * @param bool $widow_control Gets or sets a value indicating whether the first and last lines in the paragraph are to remain on the same page as the rest of the paragraph.
     *
     * @return $this
     */
    public function setWidowControl($widow_control)
    {
        $this->container['widow_control'] = $widow_control;
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

