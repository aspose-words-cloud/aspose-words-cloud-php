<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageSetup.php">
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
 * PageSetup
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * PageSetup
 *
 * @description Represents the page setup properties of a section.
 */
class PageSetup extends LinkElement 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PageSetup";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bidi' => 'bool',
        'border_always_in_front' => 'bool',
        'border_applies_to' => 'string',
        'border_distance_from' => 'string',
        'bottom_margin' => 'double',
        'different_first_page_header_footer' => 'bool',
        'first_page_tray' => 'int',
        'footer_distance' => 'double',
        'gutter' => 'double',
        'header_distance' => 'double',
        'left_margin' => 'double',
        'line_number_count_by' => 'int',
        'line_number_distance_from_text' => 'double',
        'line_number_restart_mode' => 'string',
        'line_starting_number' => 'int',
        'orientation' => 'string',
        'other_pages_tray' => 'int',
        'page_height' => 'double',
        'page_number_style' => 'string',
        'page_starting_number' => 'int',
        'page_width' => 'double',
        'paper_size' => 'string',
        'restart_page_numbering' => 'bool',
        'right_margin' => 'double',
        'rtl_gutter' => 'bool',
        'section_start' => 'string',
        'suppress_endnotes' => 'bool',
        'top_margin' => 'double',
        'vertical_alignment' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bidi' => null,
        'border_always_in_front' => null,
        'border_applies_to' => null,
        'border_distance_from' => null,
        'bottom_margin' => 'double',
        'different_first_page_header_footer' => null,
        'first_page_tray' => 'int32',
        'footer_distance' => 'double',
        'gutter' => 'double',
        'header_distance' => 'double',
        'left_margin' => 'double',
        'line_number_count_by' => 'int32',
        'line_number_distance_from_text' => 'double',
        'line_number_restart_mode' => null,
        'line_starting_number' => 'int32',
        'orientation' => null,
        'other_pages_tray' => 'int32',
        'page_height' => 'double',
        'page_number_style' => null,
        'page_starting_number' => 'int32',
        'page_width' => 'double',
        'paper_size' => null,
        'restart_page_numbering' => null,
        'right_margin' => 'double',
        'rtl_gutter' => null,
        'section_start' => null,
        'suppress_endnotes' => null,
        'top_margin' => 'double',
        'vertical_alignment' => null
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
        'bidi' => 'Bidi',
        'border_always_in_front' => 'BorderAlwaysInFront',
        'border_applies_to' => 'BorderAppliesTo',
        'border_distance_from' => 'BorderDistanceFrom',
        'bottom_margin' => 'BottomMargin',
        'different_first_page_header_footer' => 'DifferentFirstPageHeaderFooter',
        'first_page_tray' => 'FirstPageTray',
        'footer_distance' => 'FooterDistance',
        'gutter' => 'Gutter',
        'header_distance' => 'HeaderDistance',
        'left_margin' => 'LeftMargin',
        'line_number_count_by' => 'LineNumberCountBy',
        'line_number_distance_from_text' => 'LineNumberDistanceFromText',
        'line_number_restart_mode' => 'LineNumberRestartMode',
        'line_starting_number' => 'LineStartingNumber',
        'orientation' => 'Orientation',
        'other_pages_tray' => 'OtherPagesTray',
        'page_height' => 'PageHeight',
        'page_number_style' => 'PageNumberStyle',
        'page_starting_number' => 'PageStartingNumber',
        'page_width' => 'PageWidth',
        'paper_size' => 'PaperSize',
        'restart_page_numbering' => 'RestartPageNumbering',
        'right_margin' => 'RightMargin',
        'rtl_gutter' => 'RtlGutter',
        'section_start' => 'SectionStart',
        'suppress_endnotes' => 'SuppressEndnotes',
        'top_margin' => 'TopMargin',
        'vertical_alignment' => 'VerticalAlignment'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bidi' => 'setBidi',
        'border_always_in_front' => 'setBorderAlwaysInFront',
        'border_applies_to' => 'setBorderAppliesTo',
        'border_distance_from' => 'setBorderDistanceFrom',
        'bottom_margin' => 'setBottomMargin',
        'different_first_page_header_footer' => 'setDifferentFirstPageHeaderFooter',
        'first_page_tray' => 'setFirstPageTray',
        'footer_distance' => 'setFooterDistance',
        'gutter' => 'setGutter',
        'header_distance' => 'setHeaderDistance',
        'left_margin' => 'setLeftMargin',
        'line_number_count_by' => 'setLineNumberCountBy',
        'line_number_distance_from_text' => 'setLineNumberDistanceFromText',
        'line_number_restart_mode' => 'setLineNumberRestartMode',
        'line_starting_number' => 'setLineStartingNumber',
        'orientation' => 'setOrientation',
        'other_pages_tray' => 'setOtherPagesTray',
        'page_height' => 'setPageHeight',
        'page_number_style' => 'setPageNumberStyle',
        'page_starting_number' => 'setPageStartingNumber',
        'page_width' => 'setPageWidth',
        'paper_size' => 'setPaperSize',
        'restart_page_numbering' => 'setRestartPageNumbering',
        'right_margin' => 'setRightMargin',
        'rtl_gutter' => 'setRtlGutter',
        'section_start' => 'setSectionStart',
        'suppress_endnotes' => 'setSuppressEndnotes',
        'top_margin' => 'setTopMargin',
        'vertical_alignment' => 'setVerticalAlignment'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bidi' => 'getBidi',
        'border_always_in_front' => 'getBorderAlwaysInFront',
        'border_applies_to' => 'getBorderAppliesTo',
        'border_distance_from' => 'getBorderDistanceFrom',
        'bottom_margin' => 'getBottomMargin',
        'different_first_page_header_footer' => 'getDifferentFirstPageHeaderFooter',
        'first_page_tray' => 'getFirstPageTray',
        'footer_distance' => 'getFooterDistance',
        'gutter' => 'getGutter',
        'header_distance' => 'getHeaderDistance',
        'left_margin' => 'getLeftMargin',
        'line_number_count_by' => 'getLineNumberCountBy',
        'line_number_distance_from_text' => 'getLineNumberDistanceFromText',
        'line_number_restart_mode' => 'getLineNumberRestartMode',
        'line_starting_number' => 'getLineStartingNumber',
        'orientation' => 'getOrientation',
        'other_pages_tray' => 'getOtherPagesTray',
        'page_height' => 'getPageHeight',
        'page_number_style' => 'getPageNumberStyle',
        'page_starting_number' => 'getPageStartingNumber',
        'page_width' => 'getPageWidth',
        'paper_size' => 'getPaperSize',
        'restart_page_numbering' => 'getRestartPageNumbering',
        'right_margin' => 'getRightMargin',
        'rtl_gutter' => 'getRtlGutter',
        'section_start' => 'getSectionStart',
        'suppress_endnotes' => 'getSuppressEndnotes',
        'top_margin' => 'getTopMargin',
        'vertical_alignment' => 'getVerticalAlignment'
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

    const BORDER_APPLIES_TO_ALL_PAGES = 'AllPages';
    const BORDER_APPLIES_TO_FIRST_PAGE = 'FirstPage';
    const BORDER_APPLIES_TO_OTHER_PAGES = 'OtherPages';
    const BORDER_DISTANCE_FROM_TEXT = 'Text';
    const BORDER_DISTANCE_FROM_PAGE_EDGE = 'PageEdge';
    const LINE_NUMBER_RESTART_MODE_RESTART_PAGE = 'RestartPage';
    const LINE_NUMBER_RESTART_MODE_RESTART_SECTION = 'RestartSection';
    const LINE_NUMBER_RESTART_MODE_CONTINUOUS = 'Continuous';
    const ORIENTATION_PORTRAIT = 'Portrait';
    const ORIENTATION_LANDSCAPE = 'Landscape';
    const PAGE_NUMBER_STYLE_ARABIC = 'Arabic';
    const PAGE_NUMBER_STYLE_UPPERCASE_ROMAN = 'UppercaseRoman';
    const PAGE_NUMBER_STYLE_LOWERCASE_ROMAN = 'LowercaseRoman';
    const PAGE_NUMBER_STYLE_UPPERCASE_LETTER = 'UppercaseLetter';
    const PAGE_NUMBER_STYLE_LOWERCASE_LETTER = 'LowercaseLetter';
    const PAGE_NUMBER_STYLE_ORDINAL = 'Ordinal';
    const PAGE_NUMBER_STYLE_NUMBER = 'Number';
    const PAGE_NUMBER_STYLE_ORDINAL_TEXT = 'OrdinalText';
    const PAGE_NUMBER_STYLE_HEX = 'Hex';
    const PAGE_NUMBER_STYLE_CHICAGO_MANUAL = 'ChicagoManual';
    const PAGE_NUMBER_STYLE_KANJI = 'Kanji';
    const PAGE_NUMBER_STYLE_KANJI_DIGIT = 'KanjiDigit';
    const PAGE_NUMBER_STYLE_AIUEO_HALF_WIDTH = 'AiueoHalfWidth';
    const PAGE_NUMBER_STYLE_IROHA_HALF_WIDTH = 'IrohaHalfWidth';
    const PAGE_NUMBER_STYLE_ARABIC_FULL_WIDTH = 'ArabicFullWidth';
    const PAGE_NUMBER_STYLE_ARABIC_HALF_WIDTH = 'ArabicHalfWidth';
    const PAGE_NUMBER_STYLE_KANJI_TRADITIONAL = 'KanjiTraditional';
    const PAGE_NUMBER_STYLE_KANJI_TRADITIONAL2 = 'KanjiTraditional2';
    const PAGE_NUMBER_STYLE_NUMBER_IN_CIRCLE = 'NumberInCircle';
    const PAGE_NUMBER_STYLE_DECIMAL_FULL_WIDTH = 'DecimalFullWidth';
    const PAGE_NUMBER_STYLE_AIUEO = 'Aiueo';
    const PAGE_NUMBER_STYLE_IROHA = 'Iroha';
    const PAGE_NUMBER_STYLE_LEADING_ZERO = 'LeadingZero';
    const PAGE_NUMBER_STYLE_BULLET = 'Bullet';
    const PAGE_NUMBER_STYLE_GANADA = 'Ganada';
    const PAGE_NUMBER_STYLE_CHOSUNG = 'Chosung';
    const PAGE_NUMBER_STYLE_GB1 = 'GB1';
    const PAGE_NUMBER_STYLE_GB2 = 'GB2';
    const PAGE_NUMBER_STYLE_GB3 = 'GB3';
    const PAGE_NUMBER_STYLE_GB4 = 'GB4';
    const PAGE_NUMBER_STYLE_ZODIAC1 = 'Zodiac1';
    const PAGE_NUMBER_STYLE_ZODIAC2 = 'Zodiac2';
    const PAGE_NUMBER_STYLE_ZODIAC3 = 'Zodiac3';
    const PAGE_NUMBER_STYLE_TRAD_CHIN_NUM1 = 'TradChinNum1';
    const PAGE_NUMBER_STYLE_TRAD_CHIN_NUM2 = 'TradChinNum2';
    const PAGE_NUMBER_STYLE_TRAD_CHIN_NUM3 = 'TradChinNum3';
    const PAGE_NUMBER_STYLE_TRAD_CHIN_NUM4 = 'TradChinNum4';
    const PAGE_NUMBER_STYLE_SIMP_CHIN_NUM1 = 'SimpChinNum1';
    const PAGE_NUMBER_STYLE_SIMP_CHIN_NUM2 = 'SimpChinNum2';
    const PAGE_NUMBER_STYLE_SIMP_CHIN_NUM3 = 'SimpChinNum3';
    const PAGE_NUMBER_STYLE_SIMP_CHIN_NUM4 = 'SimpChinNum4';
    const PAGE_NUMBER_STYLE_HANJA_READ = 'HanjaRead';
    const PAGE_NUMBER_STYLE_HANJA_READ_DIGIT = 'HanjaReadDigit';
    const PAGE_NUMBER_STYLE_HANGUL = 'Hangul';
    const PAGE_NUMBER_STYLE_HANJA = 'Hanja';
    const PAGE_NUMBER_STYLE_HEBREW1 = 'Hebrew1';
    const PAGE_NUMBER_STYLE_ARABIC1 = 'Arabic1';
    const PAGE_NUMBER_STYLE_HEBREW2 = 'Hebrew2';
    const PAGE_NUMBER_STYLE_ARABIC2 = 'Arabic2';
    const PAGE_NUMBER_STYLE_HINDI_LETTER1 = 'HindiLetter1';
    const PAGE_NUMBER_STYLE_HINDI_LETTER2 = 'HindiLetter2';
    const PAGE_NUMBER_STYLE_HINDI_ARABIC = 'HindiArabic';
    const PAGE_NUMBER_STYLE_HINDI_CARDINAL_TEXT = 'HindiCardinalText';
    const PAGE_NUMBER_STYLE_THAI_LETTER = 'ThaiLetter';
    const PAGE_NUMBER_STYLE_THAI_ARABIC = 'ThaiArabic';
    const PAGE_NUMBER_STYLE_THAI_CARDINAL_TEXT = 'ThaiCardinalText';
    const PAGE_NUMBER_STYLE_VIET_CARDINAL_TEXT = 'VietCardinalText';
    const PAGE_NUMBER_STYLE_NUMBER_IN_DASH = 'NumberInDash';
    const PAGE_NUMBER_STYLE_LOWERCASE_RUSSIAN = 'LowercaseRussian';
    const PAGE_NUMBER_STYLE_UPPERCASE_RUSSIAN = 'UppercaseRussian';
    const PAGE_NUMBER_STYLE_NONE = 'None';
    const PAGE_NUMBER_STYLE_CUSTOM = 'Custom';
    const PAPER_SIZE_A3 = 'A3';
    const PAPER_SIZE_A4 = 'A4';
    const PAPER_SIZE_A5 = 'A5';
    const PAPER_SIZE_B4 = 'B4';
    const PAPER_SIZE_B5 = 'B5';
    const PAPER_SIZE_EXECUTIVE = 'Executive';
    const PAPER_SIZE_FOLIO = 'Folio';
    const PAPER_SIZE_LEDGER = 'Ledger';
    const PAPER_SIZE_LEGAL = 'Legal';
    const PAPER_SIZE_LETTER = 'Letter';
    const PAPER_SIZE_ENVELOPE_DL = 'EnvelopeDL';
    const PAPER_SIZE_QUARTO = 'Quarto';
    const PAPER_SIZE_STATEMENT = 'Statement';
    const PAPER_SIZE_TABLOID = 'Tabloid';
    const PAPER_SIZE_PAPER10X14 = 'Paper10x14';
    const PAPER_SIZE_PAPER11X17 = 'Paper11x17';
    const PAPER_SIZE_CUSTOM = 'Custom';
    const SECTION_START_CONTINUOUS = 'Continuous';
    const SECTION_START_NEW_COLUMN = 'NewColumn';
    const SECTION_START_NEW_PAGE = 'NewPage';
    const SECTION_START_EVEN_PAGE = 'EvenPage';
    const SECTION_START_ODD_PAGE = 'OddPage';
    const VERTICAL_ALIGNMENT_TOP = 'Top';
    const VERTICAL_ALIGNMENT_CENTER = 'Center';
    const VERTICAL_ALIGNMENT_JUSTIFY = 'Justify';
    const VERTICAL_ALIGNMENT_BOTTOM = 'Bottom';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBorderAppliesToAllowableValues()
    {
        return [
            self::BORDER_APPLIES_TO_ALL_PAGES,
            self::BORDER_APPLIES_TO_FIRST_PAGE,
            self::BORDER_APPLIES_TO_OTHER_PAGES
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBorderDistanceFromAllowableValues()
    {
        return [
            self::BORDER_DISTANCE_FROM_TEXT,
            self::BORDER_DISTANCE_FROM_PAGE_EDGE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLineNumberRestartModeAllowableValues()
    {
        return [
            self::LINE_NUMBER_RESTART_MODE_RESTART_PAGE,
            self::LINE_NUMBER_RESTART_MODE_RESTART_SECTION,
            self::LINE_NUMBER_RESTART_MODE_CONTINUOUS
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrientationAllowableValues()
    {
        return [
            self::ORIENTATION_PORTRAIT,
            self::ORIENTATION_LANDSCAPE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageNumberStyleAllowableValues()
    {
        return [
            self::PAGE_NUMBER_STYLE_ARABIC,
            self::PAGE_NUMBER_STYLE_UPPERCASE_ROMAN,
            self::PAGE_NUMBER_STYLE_LOWERCASE_ROMAN,
            self::PAGE_NUMBER_STYLE_UPPERCASE_LETTER,
            self::PAGE_NUMBER_STYLE_LOWERCASE_LETTER,
            self::PAGE_NUMBER_STYLE_ORDINAL,
            self::PAGE_NUMBER_STYLE_NUMBER,
            self::PAGE_NUMBER_STYLE_ORDINAL_TEXT,
            self::PAGE_NUMBER_STYLE_HEX,
            self::PAGE_NUMBER_STYLE_CHICAGO_MANUAL,
            self::PAGE_NUMBER_STYLE_KANJI,
            self::PAGE_NUMBER_STYLE_KANJI_DIGIT,
            self::PAGE_NUMBER_STYLE_AIUEO_HALF_WIDTH,
            self::PAGE_NUMBER_STYLE_IROHA_HALF_WIDTH,
            self::PAGE_NUMBER_STYLE_ARABIC_FULL_WIDTH,
            self::PAGE_NUMBER_STYLE_ARABIC_HALF_WIDTH,
            self::PAGE_NUMBER_STYLE_KANJI_TRADITIONAL,
            self::PAGE_NUMBER_STYLE_KANJI_TRADITIONAL2,
            self::PAGE_NUMBER_STYLE_NUMBER_IN_CIRCLE,
            self::PAGE_NUMBER_STYLE_DECIMAL_FULL_WIDTH,
            self::PAGE_NUMBER_STYLE_AIUEO,
            self::PAGE_NUMBER_STYLE_IROHA,
            self::PAGE_NUMBER_STYLE_LEADING_ZERO,
            self::PAGE_NUMBER_STYLE_BULLET,
            self::PAGE_NUMBER_STYLE_GANADA,
            self::PAGE_NUMBER_STYLE_CHOSUNG,
            self::PAGE_NUMBER_STYLE_GB1,
            self::PAGE_NUMBER_STYLE_GB2,
            self::PAGE_NUMBER_STYLE_GB3,
            self::PAGE_NUMBER_STYLE_GB4,
            self::PAGE_NUMBER_STYLE_ZODIAC1,
            self::PAGE_NUMBER_STYLE_ZODIAC2,
            self::PAGE_NUMBER_STYLE_ZODIAC3,
            self::PAGE_NUMBER_STYLE_TRAD_CHIN_NUM1,
            self::PAGE_NUMBER_STYLE_TRAD_CHIN_NUM2,
            self::PAGE_NUMBER_STYLE_TRAD_CHIN_NUM3,
            self::PAGE_NUMBER_STYLE_TRAD_CHIN_NUM4,
            self::PAGE_NUMBER_STYLE_SIMP_CHIN_NUM1,
            self::PAGE_NUMBER_STYLE_SIMP_CHIN_NUM2,
            self::PAGE_NUMBER_STYLE_SIMP_CHIN_NUM3,
            self::PAGE_NUMBER_STYLE_SIMP_CHIN_NUM4,
            self::PAGE_NUMBER_STYLE_HANJA_READ,
            self::PAGE_NUMBER_STYLE_HANJA_READ_DIGIT,
            self::PAGE_NUMBER_STYLE_HANGUL,
            self::PAGE_NUMBER_STYLE_HANJA,
            self::PAGE_NUMBER_STYLE_HEBREW1,
            self::PAGE_NUMBER_STYLE_ARABIC1,
            self::PAGE_NUMBER_STYLE_HEBREW2,
            self::PAGE_NUMBER_STYLE_ARABIC2,
            self::PAGE_NUMBER_STYLE_HINDI_LETTER1,
            self::PAGE_NUMBER_STYLE_HINDI_LETTER2,
            self::PAGE_NUMBER_STYLE_HINDI_ARABIC,
            self::PAGE_NUMBER_STYLE_HINDI_CARDINAL_TEXT,
            self::PAGE_NUMBER_STYLE_THAI_LETTER,
            self::PAGE_NUMBER_STYLE_THAI_ARABIC,
            self::PAGE_NUMBER_STYLE_THAI_CARDINAL_TEXT,
            self::PAGE_NUMBER_STYLE_VIET_CARDINAL_TEXT,
            self::PAGE_NUMBER_STYLE_NUMBER_IN_DASH,
            self::PAGE_NUMBER_STYLE_LOWERCASE_RUSSIAN,
            self::PAGE_NUMBER_STYLE_UPPERCASE_RUSSIAN,
            self::PAGE_NUMBER_STYLE_NONE,
            self::PAGE_NUMBER_STYLE_CUSTOM
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaperSizeAllowableValues()
    {
        return [
            self::PAPER_SIZE_A3,
            self::PAPER_SIZE_A4,
            self::PAPER_SIZE_A5,
            self::PAPER_SIZE_B4,
            self::PAPER_SIZE_B5,
            self::PAPER_SIZE_EXECUTIVE,
            self::PAPER_SIZE_FOLIO,
            self::PAPER_SIZE_LEDGER,
            self::PAPER_SIZE_LEGAL,
            self::PAPER_SIZE_LETTER,
            self::PAPER_SIZE_ENVELOPE_DL,
            self::PAPER_SIZE_QUARTO,
            self::PAPER_SIZE_STATEMENT,
            self::PAPER_SIZE_TABLOID,
            self::PAPER_SIZE_PAPER10X14,
            self::PAPER_SIZE_PAPER11X17,
            self::PAPER_SIZE_CUSTOM
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSectionStartAllowableValues()
    {
        return [
            self::SECTION_START_CONTINUOUS,
            self::SECTION_START_NEW_COLUMN,
            self::SECTION_START_NEW_PAGE,
            self::SECTION_START_EVEN_PAGE,
            self::SECTION_START_ODD_PAGE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalAlignmentAllowableValues()
    {
        return [
            self::VERTICAL_ALIGNMENT_TOP,
            self::VERTICAL_ALIGNMENT_CENTER,
            self::VERTICAL_ALIGNMENT_JUSTIFY,
            self::VERTICAL_ALIGNMENT_BOTTOM
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

        $this->container['bidi'] = isset($data['bidi']) ? $data['bidi'] : null;
        $this->container['border_always_in_front'] = isset($data['border_always_in_front']) ? $data['border_always_in_front'] : null;
        $this->container['border_applies_to'] = isset($data['border_applies_to']) ? $data['border_applies_to'] : null;
        $this->container['border_distance_from'] = isset($data['border_distance_from']) ? $data['border_distance_from'] : null;
        $this->container['bottom_margin'] = isset($data['bottom_margin']) ? $data['bottom_margin'] : null;
        $this->container['different_first_page_header_footer'] = isset($data['different_first_page_header_footer']) ? $data['different_first_page_header_footer'] : null;
        $this->container['first_page_tray'] = isset($data['first_page_tray']) ? $data['first_page_tray'] : null;
        $this->container['footer_distance'] = isset($data['footer_distance']) ? $data['footer_distance'] : null;
        $this->container['gutter'] = isset($data['gutter']) ? $data['gutter'] : null;
        $this->container['header_distance'] = isset($data['header_distance']) ? $data['header_distance'] : null;
        $this->container['left_margin'] = isset($data['left_margin']) ? $data['left_margin'] : null;
        $this->container['line_number_count_by'] = isset($data['line_number_count_by']) ? $data['line_number_count_by'] : null;
        $this->container['line_number_distance_from_text'] = isset($data['line_number_distance_from_text']) ? $data['line_number_distance_from_text'] : null;
        $this->container['line_number_restart_mode'] = isset($data['line_number_restart_mode']) ? $data['line_number_restart_mode'] : null;
        $this->container['line_starting_number'] = isset($data['line_starting_number']) ? $data['line_starting_number'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['other_pages_tray'] = isset($data['other_pages_tray']) ? $data['other_pages_tray'] : null;
        $this->container['page_height'] = isset($data['page_height']) ? $data['page_height'] : null;
        $this->container['page_number_style'] = isset($data['page_number_style']) ? $data['page_number_style'] : null;
        $this->container['page_starting_number'] = isset($data['page_starting_number']) ? $data['page_starting_number'] : null;
        $this->container['page_width'] = isset($data['page_width']) ? $data['page_width'] : null;
        $this->container['paper_size'] = isset($data['paper_size']) ? $data['paper_size'] : null;
        $this->container['restart_page_numbering'] = isset($data['restart_page_numbering']) ? $data['restart_page_numbering'] : null;
        $this->container['right_margin'] = isset($data['right_margin']) ? $data['right_margin'] : null;
        $this->container['rtl_gutter'] = isset($data['rtl_gutter']) ? $data['rtl_gutter'] : null;
        $this->container['section_start'] = isset($data['section_start']) ? $data['section_start'] : null;
        $this->container['suppress_endnotes'] = isset($data['suppress_endnotes']) ? $data['suppress_endnotes'] : null;
        $this->container['top_margin'] = isset($data['top_margin']) ? $data['top_margin'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getBorderAppliesToAllowableValues();
        if (!in_array($this->container['border_applies_to'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'border_applies_to', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBorderDistanceFromAllowableValues();
        if (!in_array($this->container['border_distance_from'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'border_distance_from', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLineNumberRestartModeAllowableValues();
        if (!in_array($this->container['line_number_restart_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'line_number_restart_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($this->container['orientation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orientation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPageNumberStyleAllowableValues();
        if (!in_array($this->container['page_number_style'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'page_number_style', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaperSizeAllowableValues();
        if (!in_array($this->container['paper_size'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paper_size', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSectionStartAllowableValues();
        if (!in_array($this->container['section_start'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'section_start', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if (!in_array($this->container['vertical_alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vertical_alignment', must be one of '%s'",
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

        $allowedValues = $this->getBorderAppliesToAllowableValues();
        if (!in_array($this->container['border_applies_to'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getBorderDistanceFromAllowableValues();
        if (!in_array($this->container['border_distance_from'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getLineNumberRestartModeAllowableValues();
        if (!in_array($this->container['line_number_restart_mode'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getOrientationAllowableValues();
        if (!in_array($this->container['orientation'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPageNumberStyleAllowableValues();
        if (!in_array($this->container['page_number_style'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPaperSizeAllowableValues();
        if (!in_array($this->container['paper_size'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSectionStartAllowableValues();
        if (!in_array($this->container['section_start'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if (!in_array($this->container['vertical_alignment'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param bool $bidi Gets or sets specifies that this section contains bidirectional (complex scripts) text.
     *
     * @return $this
     */
    public function setBidi($bidi)
    {
        $this->container['bidi'] = $bidi;

        return $this;
    }

    /*
     * Gets border_always_in_front
     *
     * @return bool
     */
    public function getBorderAlwaysInFront()
    {
        return $this->container['border_always_in_front'];
    }

    /*
     * Sets border_always_in_front
     *
     * @param bool $border_always_in_front Gets or sets specifies where the page border is positioned relative to intersecting texts and objects.
     *
     * @return $this
     */
    public function setBorderAlwaysInFront($border_always_in_front)
    {
        $this->container['border_always_in_front'] = $border_always_in_front;

        return $this;
    }

    /*
     * Gets border_applies_to
     *
     * @return string
     */
    public function getBorderAppliesTo()
    {
        return $this->container['border_applies_to'];
    }

    /*
     * Sets border_applies_to
     *
     * @param string $border_applies_to Gets or sets specifies which pages the page border is printed on.
     *
     * @return $this
     */
    public function setBorderAppliesTo($border_applies_to)
    {
        $allowedValues = $this->getBorderAppliesToAllowableValues();
        if ((!is_numeric($border_applies_to) && !in_array($border_applies_to, $allowedValues)) || (is_numeric($border_applies_to) && !in_array($allowedValues[$border_applies_to], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'border_applies_to', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['border_applies_to'] = $border_applies_to;

        return $this;
    }

    /*
     * Gets border_distance_from
     *
     * @return string
     */
    public function getBorderDistanceFrom()
    {
        return $this->container['border_distance_from'];
    }

    /*
     * Sets border_distance_from
     *
     * @param string $border_distance_from Gets or sets a value that indicates whether the specified page border is measured from the edge of the page or from the text it surrounds.
     *
     * @return $this
     */
    public function setBorderDistanceFrom($border_distance_from)
    {
        $allowedValues = $this->getBorderDistanceFromAllowableValues();
        if ((!is_numeric($border_distance_from) && !in_array($border_distance_from, $allowedValues)) || (is_numeric($border_distance_from) && !in_array($allowedValues[$border_distance_from], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'border_distance_from', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['border_distance_from'] = $border_distance_from;

        return $this;
    }

    /*
     * Gets bottom_margin
     *
     * @return double
     */
    public function getBottomMargin()
    {
        return $this->container['bottom_margin'];
    }

    /*
     * Sets bottom_margin
     *
     * @param double $bottom_margin Gets or sets returns or sets the distance (in points) between the bottom edge of the page and the bottom boundary of the body text.
     *
     * @return $this
     */
    public function setBottomMargin($bottom_margin)
    {
        $this->container['bottom_margin'] = $bottom_margin;

        return $this;
    }

    /*
     * Gets different_first_page_header_footer
     *
     * @return bool
     */
    public function getDifferentFirstPageHeaderFooter()
    {
        return $this->container['different_first_page_header_footer'];
    }

    /*
     * Sets different_first_page_header_footer
     *
     * @param bool $different_first_page_header_footer Gets or sets true if a different header or footer is used on the first page.
     *
     * @return $this
     */
    public function setDifferentFirstPageHeaderFooter($different_first_page_header_footer)
    {
        $this->container['different_first_page_header_footer'] = $different_first_page_header_footer;

        return $this;
    }

    /*
     * Gets first_page_tray
     *
     * @return int
     */
    public function getFirstPageTray()
    {
        return $this->container['first_page_tray'];
    }

    /*
     * Sets first_page_tray
     *
     * @param int $first_page_tray Gets or sets the paper tray (bin) to use for the first page of a section. The value is implementation (printer) specific.
     *
     * @return $this
     */
    public function setFirstPageTray($first_page_tray)
    {
        $this->container['first_page_tray'] = $first_page_tray;

        return $this;
    }

    /*
     * Gets footer_distance
     *
     * @return double
     */
    public function getFooterDistance()
    {
        return $this->container['footer_distance'];
    }

    /*
     * Sets footer_distance
     *
     * @param double $footer_distance Gets or sets returns or sets the distance (in points) between the footer and the bottom of the page.
     *
     * @return $this
     */
    public function setFooterDistance($footer_distance)
    {
        $this->container['footer_distance'] = $footer_distance;

        return $this;
    }

    /*
     * Gets gutter
     *
     * @return double
     */
    public function getGutter()
    {
        return $this->container['gutter'];
    }

    /*
     * Sets gutter
     *
     * @param double $gutter Gets or sets the amount of extra space added to the margin for document binding.
     *
     * @return $this
     */
    public function setGutter($gutter)
    {
        $this->container['gutter'] = $gutter;

        return $this;
    }

    /*
     * Gets header_distance
     *
     * @return double
     */
    public function getHeaderDistance()
    {
        return $this->container['header_distance'];
    }

    /*
     * Sets header_distance
     *
     * @param double $header_distance Gets or sets returns or sets the distance (in points) between the header and the top of the page.
     *
     * @return $this
     */
    public function setHeaderDistance($header_distance)
    {
        $this->container['header_distance'] = $header_distance;

        return $this;
    }

    /*
     * Gets left_margin
     *
     * @return double
     */
    public function getLeftMargin()
    {
        return $this->container['left_margin'];
    }

    /*
     * Sets left_margin
     *
     * @param double $left_margin Gets or sets returns or sets the distance (in points) between the left edge of the page and the left boundary of the body text.
     *
     * @return $this
     */
    public function setLeftMargin($left_margin)
    {
        $this->container['left_margin'] = $left_margin;

        return $this;
    }

    /*
     * Gets line_number_count_by
     *
     * @return int
     */
    public function getLineNumberCountBy()
    {
        return $this->container['line_number_count_by'];
    }

    /*
     * Sets line_number_count_by
     *
     * @param int $line_number_count_by Gets or sets returns or sets the numeric increment for line numbers.
     *
     * @return $this
     */
    public function setLineNumberCountBy($line_number_count_by)
    {
        $this->container['line_number_count_by'] = $line_number_count_by;

        return $this;
    }

    /*
     * Gets line_number_distance_from_text
     *
     * @return double
     */
    public function getLineNumberDistanceFromText()
    {
        return $this->container['line_number_distance_from_text'];
    }

    /*
     * Sets line_number_distance_from_text
     *
     * @param double $line_number_distance_from_text Gets or sets distance between the right edge of line numbers and the left edge of the document.
     *
     * @return $this
     */
    public function setLineNumberDistanceFromText($line_number_distance_from_text)
    {
        $this->container['line_number_distance_from_text'] = $line_number_distance_from_text;

        return $this;
    }

    /*
     * Gets line_number_restart_mode
     *
     * @return string
     */
    public function getLineNumberRestartMode()
    {
        return $this->container['line_number_restart_mode'];
    }

    /*
     * Sets line_number_restart_mode
     *
     * @param string $line_number_restart_mode Gets or sets the way line numbering runs  that is, whether it starts over at the beginning of a new page or section or runs continuously.
     *
     * @return $this
     */
    public function setLineNumberRestartMode($line_number_restart_mode)
    {
        $allowedValues = $this->getLineNumberRestartModeAllowableValues();
        if ((!is_numeric($line_number_restart_mode) && !in_array($line_number_restart_mode, $allowedValues)) || (is_numeric($line_number_restart_mode) && !in_array($allowedValues[$line_number_restart_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'line_number_restart_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['line_number_restart_mode'] = $line_number_restart_mode;

        return $this;
    }

    /*
     * Gets line_starting_number
     *
     * @return int
     */
    public function getLineStartingNumber()
    {
        return $this->container['line_starting_number'];
    }

    /*
     * Sets line_starting_number
     *
     * @param int $line_starting_number Gets or sets the starting line number.
     *
     * @return $this
     */
    public function setLineStartingNumber($line_starting_number)
    {
        $this->container['line_starting_number'] = $line_starting_number;

        return $this;
    }

    /*
     * Gets orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /*
     * Sets orientation
     *
     * @param string $orientation Gets or sets returns or sets the orientation of the page.
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $allowedValues = $this->getOrientationAllowableValues();
        if ((!is_numeric($orientation) && !in_array($orientation, $allowedValues)) || (is_numeric($orientation) && !in_array($allowedValues[$orientation], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'orientation', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /*
     * Gets other_pages_tray
     *
     * @return int
     */
    public function getOtherPagesTray()
    {
        return $this->container['other_pages_tray'];
    }

    /*
     * Sets other_pages_tray
     *
     * @param int $other_pages_tray Gets or sets the paper tray (bin) to be used for all but the first page of a section. The value is implementation (printer) specific.
     *
     * @return $this
     */
    public function setOtherPagesTray($other_pages_tray)
    {
        $this->container['other_pages_tray'] = $other_pages_tray;

        return $this;
    }

    /*
     * Gets page_height
     *
     * @return double
     */
    public function getPageHeight()
    {
        return $this->container['page_height'];
    }

    /*
     * Sets page_height
     *
     * @param double $page_height Gets or sets returns or sets the height of the page in points.
     *
     * @return $this
     */
    public function setPageHeight($page_height)
    {
        $this->container['page_height'] = $page_height;

        return $this;
    }

    /*
     * Gets page_number_style
     *
     * @return string
     */
    public function getPageNumberStyle()
    {
        return $this->container['page_number_style'];
    }

    /*
     * Sets page_number_style
     *
     * @param string $page_number_style Gets or sets the page number format.
     *
     * @return $this
     */
    public function setPageNumberStyle($page_number_style)
    {
        $allowedValues = $this->getPageNumberStyleAllowableValues();
        if ((!is_numeric($page_number_style) && !in_array($page_number_style, $allowedValues)) || (is_numeric($page_number_style) && !in_array($allowedValues[$page_number_style], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'page_number_style', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['page_number_style'] = $page_number_style;

        return $this;
    }

    /*
     * Gets page_starting_number
     *
     * @return int
     */
    public function getPageStartingNumber()
    {
        return $this->container['page_starting_number'];
    }

    /*
     * Sets page_starting_number
     *
     * @param int $page_starting_number Gets or sets the starting page number of the section.
     *
     * @return $this
     */
    public function setPageStartingNumber($page_starting_number)
    {
        $this->container['page_starting_number'] = $page_starting_number;

        return $this;
    }

    /*
     * Gets page_width
     *
     * @return double
     */
    public function getPageWidth()
    {
        return $this->container['page_width'];
    }

    /*
     * Sets page_width
     *
     * @param double $page_width Gets or sets returns or sets the width of the page in points.
     *
     * @return $this
     */
    public function setPageWidth($page_width)
    {
        $this->container['page_width'] = $page_width;

        return $this;
    }

    /*
     * Gets paper_size
     *
     * @return string
     */
    public function getPaperSize()
    {
        return $this->container['paper_size'];
    }

    /*
     * Sets paper_size
     *
     * @param string $paper_size Gets or sets returns or sets the paper size.
     *
     * @return $this
     */
    public function setPaperSize($paper_size)
    {
        $allowedValues = $this->getPaperSizeAllowableValues();
        if ((!is_numeric($paper_size) && !in_array($paper_size, $allowedValues)) || (is_numeric($paper_size) && !in_array($allowedValues[$paper_size], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'paper_size', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['paper_size'] = $paper_size;

        return $this;
    }

    /*
     * Gets restart_page_numbering
     *
     * @return bool
     */
    public function getRestartPageNumbering()
    {
        return $this->container['restart_page_numbering'];
    }

    /*
     * Sets restart_page_numbering
     *
     * @param bool $restart_page_numbering Gets or sets true if page numbering restarts at the beginning of the section.
     *
     * @return $this
     */
    public function setRestartPageNumbering($restart_page_numbering)
    {
        $this->container['restart_page_numbering'] = $restart_page_numbering;

        return $this;
    }

    /*
     * Gets right_margin
     *
     * @return double
     */
    public function getRightMargin()
    {
        return $this->container['right_margin'];
    }

    /*
     * Sets right_margin
     *
     * @param double $right_margin Gets or sets returns or sets the distance (in points) between the right edge of the page and the right boundary of the body text.
     *
     * @return $this
     */
    public function setRightMargin($right_margin)
    {
        $this->container['right_margin'] = $right_margin;

        return $this;
    }

    /*
     * Gets rtl_gutter
     *
     * @return bool
     */
    public function getRtlGutter()
    {
        return $this->container['rtl_gutter'];
    }

    /*
     * Sets rtl_gutter
     *
     * @param bool $rtl_gutter Gets or sets whether Microsoft Word uses gutters for the section based on a right-to-left language or a left-to-right language.
     *
     * @return $this
     */
    public function setRtlGutter($rtl_gutter)
    {
        $this->container['rtl_gutter'] = $rtl_gutter;

        return $this;
    }

    /*
     * Gets section_start
     *
     * @return string
     */
    public function getSectionStart()
    {
        return $this->container['section_start'];
    }

    /*
     * Sets section_start
     *
     * @param string $section_start Gets or sets returns or sets the type of section break for the specified object.
     *
     * @return $this
     */
    public function setSectionStart($section_start)
    {
        $allowedValues = $this->getSectionStartAllowableValues();
        if ((!is_numeric($section_start) && !in_array($section_start, $allowedValues)) || (is_numeric($section_start) && !in_array($allowedValues[$section_start], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'section_start', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['section_start'] = $section_start;

        return $this;
    }

    /*
     * Gets suppress_endnotes
     *
     * @return bool
     */
    public function getSuppressEndnotes()
    {
        return $this->container['suppress_endnotes'];
    }

    /*
     * Sets suppress_endnotes
     *
     * @param bool $suppress_endnotes Gets or sets true if endnotes are printed at the end of the next section that doesn't suppress endnotes. Suppressed endnotes are printed before the endnotes in that section.
     *
     * @return $this
     */
    public function setSuppressEndnotes($suppress_endnotes)
    {
        $this->container['suppress_endnotes'] = $suppress_endnotes;

        return $this;
    }

    /*
     * Gets top_margin
     *
     * @return double
     */
    public function getTopMargin()
    {
        return $this->container['top_margin'];
    }

    /*
     * Sets top_margin
     *
     * @param double $top_margin Gets or sets returns or sets the distance (in points) between the top edge of the page and the top boundary of the body text.
     *
     * @return $this
     */
    public function setTopMargin($top_margin)
    {
        $this->container['top_margin'] = $top_margin;

        return $this;
    }

    /*
     * Gets vertical_alignment
     *
     * @return string
     */
    public function getVerticalAlignment()
    {
        return $this->container['vertical_alignment'];
    }

    /*
     * Sets vertical_alignment
     *
     * @param string $vertical_alignment Gets or sets returns or sets the vertical alignment of text on each page in a document or section.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if ((!is_numeric($vertical_alignment) && !in_array($vertical_alignment, $allowedValues)) || (is_numeric($vertical_alignment) && !in_array($allowedValues[$vertical_alignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'vertical_alignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['vertical_alignment'] = $vertical_alignment;

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
