<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StructuredDocumentTagBase.php">
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
 * StructuredDocumentTagBase
 *
 * @description DTO container with a StructuredDocumentTagBaseDto.
 */
abstract class StructuredDocumentTagBase extends NodeLink
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "StructuredDocumentTagBase";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'list_items' => '\Aspose\Words\Model\StructuredDocumentTagListItem[]',
        'checked' => 'bool',
        'appearance' => 'string',
        'date_display_locale' => 'int',
        'date_display_format' => 'string',
        'full_date' => '\DateTime',
        'title' => 'string',
        'date_storage_format' => 'string',
        'building_block_gallery' => 'string',
        'building_block_category' => 'string',
        'multiline' => 'bool',
        'color' => '\Aspose\Words\Model\XmlColor',
        'style_name' => 'string',
        'calendar_type' => 'string',
        'is_temporary' => 'bool',
        'placeholder_name' => 'string',
        'lock_content_control' => 'bool',
        'lock_contents' => 'bool',
        'is_showing_placeholder_text' => 'bool',
        'tag' => 'string',
        'id' => 'int',
        'word_open_xml' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'list_items' => 'null',
        'checked' => 'null',
        'appearance' => 'null',
        'date_display_locale' => 'null',
        'date_display_format' => 'null',
        'full_date' => 'null',
        'title' => 'null',
        'date_storage_format' => 'null',
        'building_block_gallery' => 'null',
        'building_block_category' => 'null',
        'multiline' => 'null',
        'color' => 'null',
        'style_name' => 'null',
        'calendar_type' => 'null',
        'is_temporary' => 'null',
        'placeholder_name' => 'null',
        'lock_content_control' => 'null',
        'lock_contents' => 'null',
        'is_showing_placeholder_text' => 'null',
        'tag' => 'null',
        'id' => 'null',
        'word_open_xml' => 'null'
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
        'list_items' => 'ListItems',
        'checked' => 'Checked',
        'appearance' => 'Appearance',
        'date_display_locale' => 'DateDisplayLocale',
        'date_display_format' => 'DateDisplayFormat',
        'full_date' => 'FullDate',
        'title' => 'Title',
        'date_storage_format' => 'DateStorageFormat',
        'building_block_gallery' => 'BuildingBlockGallery',
        'building_block_category' => 'BuildingBlockCategory',
        'multiline' => 'Multiline',
        'color' => 'Color',
        'style_name' => 'StyleName',
        'calendar_type' => 'CalendarType',
        'is_temporary' => 'IsTemporary',
        'placeholder_name' => 'PlaceholderName',
        'lock_content_control' => 'LockContentControl',
        'lock_contents' => 'LockContents',
        'is_showing_placeholder_text' => 'IsShowingPlaceholderText',
        'tag' => 'Tag',
        'id' => 'Id',
        'word_open_xml' => 'WordOpenXML'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_items' => 'setListItems',
        'checked' => 'setChecked',
        'appearance' => 'setAppearance',
        'date_display_locale' => 'setDateDisplayLocale',
        'date_display_format' => 'setDateDisplayFormat',
        'full_date' => 'setFullDate',
        'title' => 'setTitle',
        'date_storage_format' => 'setDateStorageFormat',
        'building_block_gallery' => 'setBuildingBlockGallery',
        'building_block_category' => 'setBuildingBlockCategory',
        'multiline' => 'setMultiline',
        'color' => 'setColor',
        'style_name' => 'setStyleName',
        'calendar_type' => 'setCalendarType',
        'is_temporary' => 'setIsTemporary',
        'placeholder_name' => 'setPlaceholderName',
        'lock_content_control' => 'setLockContentControl',
        'lock_contents' => 'setLockContents',
        'is_showing_placeholder_text' => 'setIsShowingPlaceholderText',
        'tag' => 'setTag',
        'id' => 'setId',
        'word_open_xml' => 'setWordOpenXML'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_items' => 'getListItems',
        'checked' => 'getChecked',
        'appearance' => 'getAppearance',
        'date_display_locale' => 'getDateDisplayLocale',
        'date_display_format' => 'getDateDisplayFormat',
        'full_date' => 'getFullDate',
        'title' => 'getTitle',
        'date_storage_format' => 'getDateStorageFormat',
        'building_block_gallery' => 'getBuildingBlockGallery',
        'building_block_category' => 'getBuildingBlockCategory',
        'multiline' => 'getMultiline',
        'color' => 'getColor',
        'style_name' => 'getStyleName',
        'calendar_type' => 'getCalendarType',
        'is_temporary' => 'getIsTemporary',
        'placeholder_name' => 'getPlaceholderName',
        'lock_content_control' => 'getLockContentControl',
        'lock_contents' => 'getLockContents',
        'is_showing_placeholder_text' => 'getIsShowingPlaceholderText',
        'tag' => 'getTag',
        'id' => 'getId',
        'word_open_xml' => 'getWordOpenXML'
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

    const APPEARANCE_BOUNDING_BOX = 'BoundingBox';
    const APPEARANCE_DEFAULT = 'Default';
    const APPEARANCE_TAGS = 'Tags';
    const APPEARANCE_HIDDEN = 'Hidden';
    const DATE_STORAGE_FORMAT_DATE = 'Date';
    const DATE_STORAGE_FORMAT_DATE_TIME = 'DateTime';
    const DATE_STORAGE_FORMAT_DEFAULT = 'Default';
    const DATE_STORAGE_FORMAT_TEXT = 'Text';
    const CALENDAR_TYPE_DEFAULT = 'Default';
    const CALENDAR_TYPE_GREGORIAN = 'Gregorian';
    const CALENDAR_TYPE_GREGORIAN_ARABIC = 'GregorianArabic';
    const CALENDAR_TYPE_GREGORIAN_ME_FRENCH = 'GregorianMeFrench';
    const CALENDAR_TYPE_GREGORIAN_US = 'GregorianUs';
    const CALENDAR_TYPE_GREGORIAN_XLIT_ENGLISH = 'GregorianXlitEnglish';
    const CALENDAR_TYPE_GREGORIAN_XLIT_FRENCH = 'GregorianXlitFrench';
    const CALENDAR_TYPE_HEBREW = 'Hebrew';
    const CALENDAR_TYPE_HIJRI = 'Hijri';
    const CALENDAR_TYPE_JAPAN = 'Japan';
    const CALENDAR_TYPE_KOREA = 'Korea';
    const CALENDAR_TYPE_NONE = 'None';
    const CALENDAR_TYPE_SAKA = 'Saka';
    const CALENDAR_TYPE_TAIWAN = 'Taiwan';
    const CALENDAR_TYPE_THAI = 'Thai';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppearanceAllowableValues()
    {
        return [
            self::APPEARANCE_BOUNDING_BOX,
            self::APPEARANCE_DEFAULT,
            self::APPEARANCE_TAGS,
            self::APPEARANCE_HIDDEN
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDateStorageFormatAllowableValues()
    {
        return [
            self::DATE_STORAGE_FORMAT_DATE,
            self::DATE_STORAGE_FORMAT_DATE_TIME,
            self::DATE_STORAGE_FORMAT_DEFAULT,
            self::DATE_STORAGE_FORMAT_TEXT
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalendarTypeAllowableValues()
    {
        return [
            self::CALENDAR_TYPE_DEFAULT,
            self::CALENDAR_TYPE_GREGORIAN,
            self::CALENDAR_TYPE_GREGORIAN_ARABIC,
            self::CALENDAR_TYPE_GREGORIAN_ME_FRENCH,
            self::CALENDAR_TYPE_GREGORIAN_US,
            self::CALENDAR_TYPE_GREGORIAN_XLIT_ENGLISH,
            self::CALENDAR_TYPE_GREGORIAN_XLIT_FRENCH,
            self::CALENDAR_TYPE_HEBREW,
            self::CALENDAR_TYPE_HIJRI,
            self::CALENDAR_TYPE_JAPAN,
            self::CALENDAR_TYPE_KOREA,
            self::CALENDAR_TYPE_NONE,
            self::CALENDAR_TYPE_SAKA,
            self::CALENDAR_TYPE_TAIWAN,
            self::CALENDAR_TYPE_THAI
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
        $this->container['list_items'] = isset($data['list_items']) ? $data['list_items'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
        $this->container['appearance'] = isset($data['appearance']) ? $data['appearance'] : null;
        $this->container['date_display_locale'] = isset($data['date_display_locale']) ? $data['date_display_locale'] : null;
        $this->container['date_display_format'] = isset($data['date_display_format']) ? $data['date_display_format'] : null;
        $this->container['full_date'] = isset($data['full_date']) ? $data['full_date'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['date_storage_format'] = isset($data['date_storage_format']) ? $data['date_storage_format'] : null;
        $this->container['building_block_gallery'] = isset($data['building_block_gallery']) ? $data['building_block_gallery'] : null;
        $this->container['building_block_category'] = isset($data['building_block_category']) ? $data['building_block_category'] : null;
        $this->container['multiline'] = isset($data['multiline']) ? $data['multiline'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['style_name'] = isset($data['style_name']) ? $data['style_name'] : null;
        $this->container['calendar_type'] = isset($data['calendar_type']) ? $data['calendar_type'] : null;
        $this->container['is_temporary'] = isset($data['is_temporary']) ? $data['is_temporary'] : null;
        $this->container['placeholder_name'] = isset($data['placeholder_name']) ? $data['placeholder_name'] : null;
        $this->container['lock_content_control'] = isset($data['lock_content_control']) ? $data['lock_content_control'] : null;
        $this->container['lock_contents'] = isset($data['lock_contents']) ? $data['lock_contents'] : null;
        $this->container['is_showing_placeholder_text'] = isset($data['is_showing_placeholder_text']) ? $data['is_showing_placeholder_text'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['word_open_xml'] = null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();


        if (isset($this->container['list_items'])) {
            foreach ($this->getListItems() as &$elementListItems)
            {
                if ($elementListItems != null)
                {
                    $elementListItems->validate();
                }
            }
        }

        if (isset($this->container['appearance'])) {
            $allowedValuesAppearance = $this->getAppearanceAllowableValues();
            if (!in_array($this->container['appearance'], $allowedValuesAppearance)) {
                throw new \InvalidArgumentException('Property Appearance in StructuredDocumentTagBase has invalid format.');
            }
        }

        if (isset($this->container['date_storage_format'])) {
            $allowedValuesDateStorageFormat = $this->getDateStorageFormatAllowableValues();
            if (!in_array($this->container['date_storage_format'], $allowedValuesDateStorageFormat)) {
                throw new \InvalidArgumentException('Property DateStorageFormat in StructuredDocumentTagBase has invalid format.');
            }
        }


        if (isset($this->container['color'])) {
            $this->getColor()->validate();
        }

        if (isset($this->container['calendar_type'])) {
            $allowedValuesCalendarType = $this->getCalendarTypeAllowableValues();
            if (!in_array($this->container['calendar_type'], $allowedValuesCalendarType)) {
                throw new \InvalidArgumentException('Property CalendarType in StructuredDocumentTagBase has invalid format.');
            }
        }

    }

    /*
     * Gets list_items
     *
     * @return \Aspose\Words\Model\StructuredDocumentTagListItem[]
     */
    public function getListItems()
    {
        return $this->container['list_items'];
    }

    /*
     * Sets list_items
     *
     * @param \Aspose\Words\Model\StructuredDocumentTagListItem[] $list_items Gets or sets Aspose.Words.Markup.SdtListItemCollection associated with this SDT. Accessing this property will only work for Aspose.Words.Markup.SdtType.ComboBox or Aspose.Words.Markup.SdtType.DropDownList SDT types. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setListItems($list_items)
    {
        $this->container['list_items'] = $list_items;
        return $this;
    }


    /*
     * Gets checked
     *
     * @return bool
     */
    public function getChecked()
    {
        return $this->container['checked'];
    }

    /*
     * Sets checked
     *
     * @param bool $checked Gets or sets a value indicating whether current state of the Checkbox SDT. Default value for this property. Accessing this property will only work for Aspose.Words.Markup.SdtType.Checkbox SDT types. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;
        return $this;
    }


    /*
     * Gets appearance
     *
     * @return string
     */
    public function getAppearance()
    {
        return $this->container['appearance'];
    }

    /*
     * Sets appearance
     *
     * @param string $appearance Gets or sets the appearance of a structured document tag.
     *
     * @return $this
     */
    public function setAppearance($appearance)
    {
        $allowedValues = $this->getAppearanceAllowableValues();
        if ((!is_numeric($appearance) && !in_array($appearance, $allowedValues)) || (is_numeric($appearance) && !in_array($allowedValues[$appearance], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'appearance', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['appearance'] = $appearance;
        return $this;
    }


    /*
     * Gets date_display_locale
     *
     * @return int
     */
    public function getDateDisplayLocale()
    {
        return $this->container['date_display_locale'];
    }

    /*
     * Sets date_display_locale
     *
     * @param int $date_display_locale Gets or sets the language format for the date displayed in this SDT. Accessing this property will only work for Aspose.Words.Markup.SdtType.Date SDT type. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setDateDisplayLocale($date_display_locale)
    {
        $this->container['date_display_locale'] = $date_display_locale;
        return $this;
    }


    /*
     * Gets date_display_format
     *
     * @return string
     */
    public function getDateDisplayFormat()
    {
        return $this->container['date_display_format'];
    }

    /*
     * Sets date_display_format
     *
     * @param string $date_display_format Gets or sets String that represents the format in which dates are displayed. Can not be null. The dates for English (U.S.) is "mm/dd/yyyy". Accessing this property will only work for Aspose.Words.Markup.SdtType.Date SDT type. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setDateDisplayFormat($date_display_format)
    {
        $this->container['date_display_format'] = $date_display_format;
        return $this;
    }


    /*
     * Gets full_date
     *
     * @return \DateTime
     */
    public function getFullDate()
    {
        return $this->container['full_date'];
    }

    /*
     * Sets full_date
     *
     * @param \DateTime $full_date Gets or sets the full date and time last entered into this SDT. Accessing this property will only work for Aspose.Words.Markup.SdtType.Date SDT type. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setFullDate($full_date)
    {
        $this->container['full_date'] = $full_date;
        return $this;
    }


    /*
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /*
     * Sets title
     *
     * @param string $title Gets or sets the friendly name associated with this SDT. Can not be null.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }


    /*
     * Gets date_storage_format
     *
     * @return string
     */
    public function getDateStorageFormat()
    {
        return $this->container['date_storage_format'];
    }

    /*
     * Sets date_storage_format
     *
     * @param string $date_storage_format Gets or sets format in which the date for a date SDT is stored when the SDT is bound to an XML node in the document's data store. Default value is Aspose.Words.Markup.SdtDateStorageFormat.DateTime. Accessing this property will only work for Aspose.Words.Markup.SdtType.Date SDT type. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setDateStorageFormat($date_storage_format)
    {
        $allowedValues = $this->getDateStorageFormatAllowableValues();
        if ((!is_numeric($date_storage_format) && !in_array($date_storage_format, $allowedValues)) || (is_numeric($date_storage_format) && !in_array($allowedValues[$date_storage_format], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'date_storage_format', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['date_storage_format'] = $date_storage_format;
        return $this;
    }


    /*
     * Gets building_block_gallery
     *
     * @return string
     */
    public function getBuildingBlockGallery()
    {
        return $this->container['building_block_gallery'];
    }

    /*
     * Sets building_block_gallery
     *
     * @param string $building_block_gallery Gets or sets type of building block for this SDT. Can not be null. Accessing this property will only work for Aspose.Words.Markup.SdtType.BuildingBlockGallery and Aspose.Words.Markup.SdtType.DocPartObj SDT types. It is read-only for SDT of the document part type. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setBuildingBlockGallery($building_block_gallery)
    {
        $this->container['building_block_gallery'] = $building_block_gallery;
        return $this;
    }


    /*
     * Gets building_block_category
     *
     * @return string
     */
    public function getBuildingBlockCategory()
    {
        return $this->container['building_block_category'];
    }

    /*
     * Sets building_block_category
     *
     * @param string $building_block_category Gets or sets category of building block for this SDT node. Can not be null. Accessing this property will only work for Aspose.Words.Markup.SdtType.BuildingBlockGallery and Aspose.Words.Markup.SdtType.DocPartObj SDT types. It is read-only for SDT of the document part type. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setBuildingBlockCategory($building_block_category)
    {
        $this->container['building_block_category'] = $building_block_category;
        return $this;
    }


    /*
     * Gets multiline
     *
     * @return bool
     */
    public function getMultiline()
    {
        return $this->container['multiline'];
    }

    /*
     * Sets multiline
     *
     * @param bool $multiline Gets or sets a value indicating whether this SDT allows multiple lines of text. Accessing this property will only work for Aspose.Words.Markup.SdtType.RichText and Aspose.Words.Markup.SdtType.PlainText SDT type. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setMultiline($multiline)
    {
        $this->container['multiline'] = $multiline;
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
     * @param \Aspose\Words\Model\XmlColor $color Gets or sets the color of the structured document tag.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;
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
     * @param string $style_name Gets or sets the name of the style applied to the structured document tag.
     *
     * @return $this
     */
    public function setStyleName($style_name)
    {
        $this->container['style_name'] = $style_name;
        return $this;
    }


    /*
     * Gets calendar_type
     *
     * @return string
     */
    public function getCalendarType()
    {
        return $this->container['calendar_type'];
    }

    /*
     * Sets calendar_type
     *
     * @param string $calendar_type Gets or sets the type of calendar for this SDT. Default is Aspose.Words.Markup.SdtCalendarType.Default. Accessing this property will only work for Aspose.Words.Markup.SdtType.Date SDT type. For all other SDT types exception will occur.
     *
     * @return $this
     */
    public function setCalendarType($calendar_type)
    {
        $allowedValues = $this->getCalendarTypeAllowableValues();
        if ((!is_numeric($calendar_type) && !in_array($calendar_type, $allowedValues)) || (is_numeric($calendar_type) && !in_array($allowedValues[$calendar_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'calendar_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['calendar_type'] = $calendar_type;
        return $this;
    }


    /*
     * Gets is_temporary
     *
     * @return bool
     */
    public function getIsTemporary()
    {
        return $this->container['is_temporary'];
    }

    /*
     * Sets is_temporary
     *
     * @param bool $is_temporary Gets or sets a value indicating whether this SDT shall be removed from the WordProcessingML document when its contents are modified.
     *
     * @return $this
     */
    public function setIsTemporary($is_temporary)
    {
        $this->container['is_temporary'] = $is_temporary;
        return $this;
    }


    /*
     * Gets placeholder_name
     *
     * @return string
     */
    public function getPlaceholderName()
    {
        return $this->container['placeholder_name'];
    }

    /*
     * Sets placeholder_name
     *
     * @param string $placeholder_name Gets or sets Name of the Aspose.Words.BuildingBlocks.BuildingBlock containing placeholder text. Aspose.Words.BuildingBlocks.BuildingBlock with this name Aspose.Words.BuildingBlocks.BuildingBlock.Name has to be present in the Aspose.Words.Document.GlossaryDocument otherwise System.InvalidOperationException will occur.
     *
     * @return $this
     */
    public function setPlaceholderName($placeholder_name)
    {
        $this->container['placeholder_name'] = $placeholder_name;
        return $this;
    }


    /*
     * Gets lock_content_control
     *
     * @return bool
     */
    public function getLockContentControl()
    {
        return $this->container['lock_content_control'];
    }

    /*
     * Sets lock_content_control
     *
     * @param bool $lock_content_control Gets or sets a value indicating whether, this property will prohibit a user from deleting this SDT.
     *
     * @return $this
     */
    public function setLockContentControl($lock_content_control)
    {
        $this->container['lock_content_control'] = $lock_content_control;
        return $this;
    }


    /*
     * Gets lock_contents
     *
     * @return bool
     */
    public function getLockContents()
    {
        return $this->container['lock_contents'];
    }

    /*
     * Sets lock_contents
     *
     * @param bool $lock_contents Gets or sets a value indicating whether, this property will prohibit a user from editing the contents of this SDT.
     *
     * @return $this
     */
    public function setLockContents($lock_contents)
    {
        $this->container['lock_contents'] = $lock_contents;
        return $this;
    }


    /*
     * Gets is_showing_placeholder_text
     *
     * @return bool
     */
    public function getIsShowingPlaceholderText()
    {
        return $this->container['is_showing_placeholder_text'];
    }

    /*
     * Sets is_showing_placeholder_text
     *
     * @param bool $is_showing_placeholder_text Gets or sets a value indicating whether the content of this SDT shall be interpreted to contain placeholder text (as opposed to regular text contents within the SDT). If set to true, this state shall be resumed (showing placeholder text) upon opening his document.
     *
     * @return $this
     */
    public function setIsShowingPlaceholderText($is_showing_placeholder_text)
    {
        $this->container['is_showing_placeholder_text'] = $is_showing_placeholder_text;
        return $this;
    }


    /*
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /*
     * Sets tag
     *
     * @param string $tag Gets or sets a tag associated with the current SDT node. Can not be null. A tag is an arbitrary string which applications can associate with SDT in order to identify it without providing a visible friendly name.
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }


    /*
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /*
     * Sets id
     *
     * @param int $id Gets or sets a unique read-only persistent numerical Id for this SDT. Id attribute shall follow these rules: - The document shall retain SDT ids only if the whole document is cloned Aspose.Words.Document.Clone. - During Aspose.Words.DocumentBase.ImportNode(Aspose.Words.Node,System.Boolean) - Id shall be retained if import does not cause conflicts with other SDT Ids in the target document. - If multiple SDT nodes specify the same decimal number value for the Id attribute, then the first SDT in the document shall maintain this original Id, and all subsequent - SDT nodes shall have new identifiers assigned to them when the document is loaded. - During standalone SDT Aspose.Words.Markup.StructuredDocumentTag.Clone(System.Boolean,Aspose.Words.INodeCloningListener) operation new unique ID will be generated for the cloned SDT node. - If Id is not specified in the source document, then the SDT node shall have a new unique identifier assigned to it when the document is loaded.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }


    /*
     * Gets word_open_xml
     *
     * @return string
     */
    public function getWordOpenXML()
    {
        return $this->container['word_open_xml'];
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

