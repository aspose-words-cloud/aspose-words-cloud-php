<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StructuredDocumentTag.php">
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
 * StructuredDocumentTag
 *
 * @description DTO container with a StructuredDocumentTag.
 */
class StructuredDocumentTag extends StructuredDocumentTagBase
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "StructuredDocumentTag";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'level' => 'string',
        'sdt_type' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'level' => 'null',
        'sdt_type' => 'null'
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
        'level' => 'Level',
        'sdt_type' => 'SdtType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'level' => 'setLevel',
        'sdt_type' => 'setSdtType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'level' => 'getLevel',
        'sdt_type' => 'getSdtType'
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

    const LEVEL_UNKNOWN = 'Unknown';
    const LEVEL_INLINE = 'Inline';
    const LEVEL_BLOCK = 'Block';
    const LEVEL_ROW = 'Row';
    const LEVEL_CELL = 'Cell';
    const SDT_TYPE_NONE = 'None';
    const SDT_TYPE_BIBLIOGRAPHY = 'Bibliography';
    const SDT_TYPE_CITATION = 'Citation';
    const SDT_TYPE_EQUATION = 'Equation';
    const SDT_TYPE_DROP_DOWN_LIST = 'DropDownList';
    const SDT_TYPE_COMBO_BOX = 'ComboBox';
    const SDT_TYPE_DATE = 'Date';
    const SDT_TYPE_BUILDING_BLOCK_GALLERY = 'BuildingBlockGallery';
    const SDT_TYPE_DOC_PART_OBJ = 'DocPartObj';
    const SDT_TYPE_GROUP = 'Group';
    const SDT_TYPE_PICTURE = 'Picture';
    const SDT_TYPE_RICH_TEXT = 'RichText';
    const SDT_TYPE_PLAIN_TEXT = 'PlainText';
    const SDT_TYPE_CHECKBOX = 'Checkbox';
    const SDT_TYPE_REPEATING_SECTION = 'RepeatingSection';
    const SDT_TYPE_REPEATING_SECTION_ITEM = 'RepeatingSectionItem';
    const SDT_TYPE_ENTITY_PICKER = 'EntityPicker';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_UNKNOWN,
            self::LEVEL_INLINE,
            self::LEVEL_BLOCK,
            self::LEVEL_ROW,
            self::LEVEL_CELL
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSdtTypeAllowableValues()
    {
        return [
            self::SDT_TYPE_NONE,
            self::SDT_TYPE_BIBLIOGRAPHY,
            self::SDT_TYPE_CITATION,
            self::SDT_TYPE_EQUATION,
            self::SDT_TYPE_DROP_DOWN_LIST,
            self::SDT_TYPE_COMBO_BOX,
            self::SDT_TYPE_DATE,
            self::SDT_TYPE_BUILDING_BLOCK_GALLERY,
            self::SDT_TYPE_DOC_PART_OBJ,
            self::SDT_TYPE_GROUP,
            self::SDT_TYPE_PICTURE,
            self::SDT_TYPE_RICH_TEXT,
            self::SDT_TYPE_PLAIN_TEXT,
            self::SDT_TYPE_CHECKBOX,
            self::SDT_TYPE_REPEATING_SECTION,
            self::SDT_TYPE_REPEATING_SECTION_ITEM,
            self::SDT_TYPE_ENTITY_PICKER
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['sdt_type'] = isset($data['sdt_type']) ? $data['sdt_type'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['level'])) {
            $allowedValuesLevel = $this->getLevelAllowableValues();
            if (!in_array($this->container['level'], $allowedValuesLevel)) {
                throw new \InvalidArgumentException('Property Level in StructuredDocumentTag has invalid format.');
            }
        }

        if (isset($this->container['sdt_type'])) {
            $allowedValuesSdtType = $this->getSdtTypeAllowableValues();
            if (!in_array($this->container['sdt_type'], $allowedValuesSdtType)) {
                throw new \InvalidArgumentException('Property SdtType in StructuredDocumentTag has invalid format.');
            }
        }

    }

    /*
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /*
     * Sets level
     *
     * @param string $level Gets or sets the level at which this SDT occurs in the document tree.
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $allowedValues = $this->getLevelAllowableValues();
        if ((!is_numeric($level) && !in_array($level, $allowedValues)) || (is_numeric($level) && !in_array($allowedValues[$level], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'level', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['level'] = $level;
        return $this;
    }


    /*
     * Gets sdt_type
     *
     * @return string
     */
    public function getSdtType()
    {
        return $this->container['sdt_type'];
    }

    /*
     * Sets sdt_type
     *
     * @param string $sdt_type Gets or sets type of this Structured document tag.
     *
     * @return $this
     */
    public function setSdtType($sdt_type)
    {
        $allowedValues = $this->getSdtTypeAllowableValues();
        if ((!is_numeric($sdt_type) && !in_array($sdt_type, $allowedValues)) || (is_numeric($sdt_type) && !in_array($allowedValues[$sdt_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'sdt_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['sdt_type'] = $sdt_type;
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

