<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SaveOptionsData.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
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
use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * SaveOptionsData
 *
 * @description base container class for save options data.
 */
class SaveOptionsData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'allow_embedding_post_script_fonts' => 'bool',
        'custom_time_zone_info_data' => '\Aspose\Words\Model\TimeZoneInfoData',
        'dml3_d_effects_rendering_mode' => 'string',
        'dml_effects_rendering_mode' => 'string',
        'dml_rendering_mode' => 'string',
        'file_name' => 'string',
        'save_format' => 'string',
        'update_created_time_property' => 'bool',
        'update_fields' => 'bool',
        'update_last_printed_property' => 'bool',
        'update_last_saved_time_property' => 'bool',
        'update_sdt_content' => 'bool',
        'zip_output' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'allow_embedding_post_script_fonts' => 'null',
        'custom_time_zone_info_data' => 'null',
        'dml3_d_effects_rendering_mode' => 'null',
        'dml_effects_rendering_mode' => 'null',
        'dml_rendering_mode' => 'null',
        'file_name' => 'null',
        'save_format' => 'null',
        'update_created_time_property' => 'null',
        'update_fields' => 'null',
        'update_last_printed_property' => 'null',
        'update_last_saved_time_property' => 'null',
        'update_sdt_content' => 'null',
        'zip_output' => 'null'
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'allow_embedding_post_script_fonts' => 'AllowEmbeddingPostScriptFonts',
        'custom_time_zone_info_data' => 'CustomTimeZoneInfoData',
        'dml3_d_effects_rendering_mode' => 'Dml3DEffectsRenderingMode',
        'dml_effects_rendering_mode' => 'DmlEffectsRenderingMode',
        'dml_rendering_mode' => 'DmlRenderingMode',
        'file_name' => 'FileName',
        'save_format' => 'SaveFormat',
        'update_created_time_property' => 'UpdateCreatedTimeProperty',
        'update_fields' => 'UpdateFields',
        'update_last_printed_property' => 'UpdateLastPrintedProperty',
        'update_last_saved_time_property' => 'UpdateLastSavedTimeProperty',
        'update_sdt_content' => 'UpdateSdtContent',
        'zip_output' => 'ZipOutput'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_embedding_post_script_fonts' => 'setAllowEmbeddingPostScriptFonts',
        'custom_time_zone_info_data' => 'setCustomTimeZoneInfoData',
        'dml3_d_effects_rendering_mode' => 'setDml3DEffectsRenderingMode',
        'dml_effects_rendering_mode' => 'setDmlEffectsRenderingMode',
        'dml_rendering_mode' => 'setDmlRenderingMode',
        'file_name' => 'setFileName',
        'save_format' => 'setSaveFormat',
        'update_created_time_property' => 'setUpdateCreatedTimeProperty',
        'update_fields' => 'setUpdateFields',
        'update_last_printed_property' => 'setUpdateLastPrintedProperty',
        'update_last_saved_time_property' => 'setUpdateLastSavedTimeProperty',
        'update_sdt_content' => 'setUpdateSdtContent',
        'zip_output' => 'setZipOutput'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_embedding_post_script_fonts' => 'getAllowEmbeddingPostScriptFonts',
        'custom_time_zone_info_data' => 'getCustomTimeZoneInfoData',
        'dml3_d_effects_rendering_mode' => 'getDml3DEffectsRenderingMode',
        'dml_effects_rendering_mode' => 'getDmlEffectsRenderingMode',
        'dml_rendering_mode' => 'getDmlRenderingMode',
        'file_name' => 'getFileName',
        'save_format' => 'getSaveFormat',
        'update_created_time_property' => 'getUpdateCreatedTimeProperty',
        'update_fields' => 'getUpdateFields',
        'update_last_printed_property' => 'getUpdateLastPrintedProperty',
        'update_last_saved_time_property' => 'getUpdateLastSavedTimeProperty',
        'update_sdt_content' => 'getUpdateSdtContent',
        'zip_output' => 'getZipOutput'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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

    const DML3_D_EFFECTS_RENDERING_MODE_BASIC = 'Basic';
    const DML3_D_EFFECTS_RENDERING_MODE_ADVANCED = 'Advanced';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDml3DEffectsRenderingModeAllowableValues()
    {
        return [
            self::DML3_D_EFFECTS_RENDERING_MODE_BASIC,
            self::DML3_D_EFFECTS_RENDERING_MODE_ADVANCED
        ];
    }

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['allow_embedding_post_script_fonts'] = isset($data['allow_embedding_post_script_fonts']) ? $data['allow_embedding_post_script_fonts'] : null;
        $this->container['custom_time_zone_info_data'] = isset($data['custom_time_zone_info_data']) ? $data['custom_time_zone_info_data'] : null;
        $this->container['dml3_d_effects_rendering_mode'] = isset($data['dml3_d_effects_rendering_mode']) ? $data['dml3_d_effects_rendering_mode'] : null;
        $this->container['dml_effects_rendering_mode'] = isset($data['dml_effects_rendering_mode']) ? $data['dml_effects_rendering_mode'] : null;
        $this->container['dml_rendering_mode'] = isset($data['dml_rendering_mode']) ? $data['dml_rendering_mode'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['save_format'] = isset($data['save_format']) ? $data['save_format'] : null;
        $this->container['update_created_time_property'] = isset($data['update_created_time_property']) ? $data['update_created_time_property'] : null;
        $this->container['update_fields'] = isset($data['update_fields']) ? $data['update_fields'] : null;
        $this->container['update_last_printed_property'] = isset($data['update_last_printed_property']) ? $data['update_last_printed_property'] : null;
        $this->container['update_last_saved_time_property'] = isset($data['update_last_saved_time_property']) ? $data['update_last_saved_time_property'] : null;
        $this->container['update_sdt_content'] = isset($data['update_sdt_content']) ? $data['update_sdt_content'] : null;
        $this->container['zip_output'] = isset($data['zip_output']) ? $data['zip_output'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDml3DEffectsRenderingModeAllowableValues();
        if (!in_array($this->container['dml3_d_effects_rendering_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dml3_d_effects_rendering_mode', must be one of '%s'",
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
        $allowedValues = $this->getDml3DEffectsRenderingModeAllowableValues();
        if (!in_array($this->container['dml3_d_effects_rendering_mode'], $allowedValues)) {
            return false;
        }


        return true;
    }

    /*
     * Gets allow_embedding_post_script_fonts
     *
     * @return bool
     */
    public function getAllowEmbeddingPostScriptFonts()
    {
        return $this->container['allow_embedding_post_script_fonts'];
    }

    /*
     * Sets allow_embedding_post_script_fonts
     *
     * @param bool $allow_embedding_post_script_fonts Gets or sets a boolean value indicating whether to allow embedding fonts with PostScript outlines when embedding TrueType fonts in a document upon it is saved. The default value is false..
     *
     * @return $this
     */
    public function setAllowEmbeddingPostScriptFonts($allow_embedding_post_script_fonts)
    {
        $this->container['allow_embedding_post_script_fonts'] = $allow_embedding_post_script_fonts;
        return $this;
    }

    /*
     * Gets custom_time_zone_info_data
     *
     * @return \Aspose\Words\Model\TimeZoneInfoData
     */
    public function getCustomTimeZoneInfoData()
    {
        return $this->container['custom_time_zone_info_data'];
    }

    /*
     * Sets custom_time_zone_info_data
     *
     * @param \Aspose\Words\Model\TimeZoneInfoData $custom_time_zone_info_data Gets or sets CustomTimeZoneInfo.
     *
     * @return $this
     */
    public function setCustomTimeZoneInfoData($custom_time_zone_info_data)
    {
        $this->container['custom_time_zone_info_data'] = $custom_time_zone_info_data;
        return $this;
    }

    /*
     * Gets dml3_d_effects_rendering_mode
     *
     * @return string
     */
    public function getDml3DEffectsRenderingMode()
    {
        return $this->container['dml3_d_effects_rendering_mode'];
    }

    /*
     * Sets dml3_d_effects_rendering_mode
     *
     * @param string $dml3_d_effects_rendering_mode Gets or sets the value determining how 3D effects are rendered.
     *
     * @return $this
     */
    public function setDml3DEffectsRenderingMode($dml3_d_effects_rendering_mode)
    {
        $allowedValues = $this->getDml3DEffectsRenderingModeAllowableValues();
        if ((!is_numeric($dml3_d_effects_rendering_mode) && !in_array($dml3_d_effects_rendering_mode, $allowedValues)) || (is_numeric($dml3_d_effects_rendering_mode) && !in_array($allowedValues[$dml3_d_effects_rendering_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'dml3_d_effects_rendering_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['dml3_d_effects_rendering_mode'] = $dml3_d_effects_rendering_mode;
        return $this;
    }

    /*
     * Gets dml_effects_rendering_mode
     *
     * @return string
     */
    public function getDmlEffectsRenderingMode()
    {
        return $this->container['dml_effects_rendering_mode'];
    }

    /*
     * Sets dml_effects_rendering_mode
     *
     * @param string $dml_effects_rendering_mode Gets or sets the value determining how DrawingML effects are rendered. { Simplified | None | Fine }.
     *
     * @return $this
     */
    public function setDmlEffectsRenderingMode($dml_effects_rendering_mode)
    {
        $this->container['dml_effects_rendering_mode'] = $dml_effects_rendering_mode;
        return $this;
    }

    /*
     * Gets dml_rendering_mode
     *
     * @return string
     */
    public function getDmlRenderingMode()
    {
        return $this->container['dml_rendering_mode'];
    }

    /*
     * Sets dml_rendering_mode
     *
     * @param string $dml_rendering_mode Gets or sets the option that controls how DrawingML shapes are rendered.
     *
     * @return $this
     */
    public function setDmlRenderingMode($dml_rendering_mode)
    {
        $this->container['dml_rendering_mode'] = $dml_rendering_mode;
        return $this;
    }

    /*
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /*
     * Sets file_name
     *
     * @param string $file_name Gets or sets the name of destination file.
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;
        return $this;
    }

    /*
     * Gets save_format
     *
     * @return string
     */
    public function getSaveFormat()
    {
        return $this->container['save_format'];
    }

    /*
     * Sets save_format
     *
     * @param string $save_format Gets or sets the format of save.
     *
     * @return $this
     */
    public function setSaveFormat($save_format)
    {
        $this->container['save_format'] = $save_format;
        return $this;
    }

    /*
     * Gets update_created_time_property
     *
     * @return bool
     */
    public function getUpdateCreatedTimeProperty()
    {
        return $this->container['update_created_time_property'];
    }

    /*
     * Sets update_created_time_property
     *
     * @param bool $update_created_time_property Gets or sets a value determining whether the Aspose.Words.Properties.BuiltInDocumentProperties.CreatedTime property is updated before saving. Default value is false.
     *
     * @return $this
     */
    public function setUpdateCreatedTimeProperty($update_created_time_property)
    {
        $this->container['update_created_time_property'] = $update_created_time_property;
        return $this;
    }

    /*
     * Gets update_fields
     *
     * @return bool
     */
    public function getUpdateFields()
    {
        return $this->container['update_fields'];
    }

    /*
     * Sets update_fields
     *
     * @param bool $update_fields Gets or sets a value indicating whether fields should be updated before saving the document to a fixed page format. The default value is true.
     *
     * @return $this
     */
    public function setUpdateFields($update_fields)
    {
        $this->container['update_fields'] = $update_fields;
        return $this;
    }

    /*
     * Gets update_last_printed_property
     *
     * @return bool
     */
    public function getUpdateLastPrintedProperty()
    {
        return $this->container['update_last_printed_property'];
    }

    /*
     * Sets update_last_printed_property
     *
     * @param bool $update_last_printed_property Gets or sets a value indicating whether the Aspose.Words.Properties.BuiltInDocumentProperties.LastPrinted property is updated before saving.
     *
     * @return $this
     */
    public function setUpdateLastPrintedProperty($update_last_printed_property)
    {
        $this->container['update_last_printed_property'] = $update_last_printed_property;
        return $this;
    }

    /*
     * Gets update_last_saved_time_property
     *
     * @return bool
     */
    public function getUpdateLastSavedTimeProperty()
    {
        return $this->container['update_last_saved_time_property'];
    }

    /*
     * Sets update_last_saved_time_property
     *
     * @param bool $update_last_saved_time_property Gets or sets a value indicating whether the Aspose.Words.Properties.BuiltInDocumentProperties.LastSavedTime property is updated before saving.
     *
     * @return $this
     */
    public function setUpdateLastSavedTimeProperty($update_last_saved_time_property)
    {
        $this->container['update_last_saved_time_property'] = $update_last_saved_time_property;
        return $this;
    }

    /*
     * Gets update_sdt_content
     *
     * @return bool
     */
    public function getUpdateSdtContent()
    {
        return $this->container['update_sdt_content'];
    }

    /*
     * Sets update_sdt_content
     *
     * @param bool $update_sdt_content Gets or sets a value indicating whether content of StructuredDocumentTag is updated before saving.
     *
     * @return $this
     */
    public function setUpdateSdtContent($update_sdt_content)
    {
        $this->container['update_sdt_content'] = $update_sdt_content;
        return $this;
    }

    /*
     * Gets zip_output
     *
     * @return bool
     */
    public function getZipOutput()
    {
        return $this->container['zip_output'];
    }

    /*
     * Sets zip_output
     *
     * @param bool $zip_output Gets or sets a value indicating whether to zip output or not. The default value is false.
     *
     * @return $this
     */
    public function setZipOutput($zip_output)
    {
        $this->container['zip_output'] = $zip_output;
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

