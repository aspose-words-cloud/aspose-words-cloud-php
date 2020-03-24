<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SaveOptionsData.php">
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
 * SaveOptionsData
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
    const DISCRIMINATOR = 'Discriminator{propertyName&#x3D;&#x27;Type&#x27;, mapping&#x3D;null}';

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
        'save_format' => 'string',
        'file_name' => 'string',
        'dml_rendering_mode' => 'string',
        'dml_effects_rendering_mode' => 'string',
        'zip_output' => 'bool',
        'update_last_saved_time_property' => 'bool',
        'update_sdt_content' => 'bool',
        'update_fields' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'save_format' => null,
        'file_name' => null,
        'dml_rendering_mode' => null,
        'dml_effects_rendering_mode' => null,
        'zip_output' => null,
        'update_last_saved_time_property' => null,
        'update_sdt_content' => null,
        'update_fields' => null
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
        'save_format' => 'SaveFormat',
        'file_name' => 'FileName',
        'dml_rendering_mode' => 'DmlRenderingMode',
        'dml_effects_rendering_mode' => 'DmlEffectsRenderingMode',
        'zip_output' => 'ZipOutput',
        'update_last_saved_time_property' => 'UpdateLastSavedTimeProperty',
        'update_sdt_content' => 'UpdateSdtContent',
        'update_fields' => 'UpdateFields'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'save_format' => 'setSaveFormat',
        'file_name' => 'setFileName',
        'dml_rendering_mode' => 'setDmlRenderingMode',
        'dml_effects_rendering_mode' => 'setDmlEffectsRenderingMode',
        'zip_output' => 'setZipOutput',
        'update_last_saved_time_property' => 'setUpdateLastSavedTimeProperty',
        'update_sdt_content' => 'setUpdateSdtContent',
        'update_fields' => 'setUpdateFields'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'save_format' => 'getSaveFormat',
        'file_name' => 'getFileName',
        'dml_rendering_mode' => 'getDmlRenderingMode',
        'dml_effects_rendering_mode' => 'getDmlEffectsRenderingMode',
        'zip_output' => 'getZipOutput',
        'update_last_saved_time_property' => 'getUpdateLastSavedTimeProperty',
        'update_sdt_content' => 'getUpdateSdtContent',
        'update_fields' => 'getUpdateFields'
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
        $this->container['save_format'] = isset($data['save_format']) ? $data['save_format'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['dml_rendering_mode'] = isset($data['dml_rendering_mode']) ? $data['dml_rendering_mode'] : null;
        $this->container['dml_effects_rendering_mode'] = isset($data['dml_effects_rendering_mode']) ? $data['dml_effects_rendering_mode'] : null;
        $this->container['zip_output'] = isset($data['zip_output']) ? $data['zip_output'] : null;
        $this->container['update_last_saved_time_property'] = isset($data['update_last_saved_time_property']) ? $data['update_last_saved_time_property'] : null;
        $this->container['update_sdt_content'] = isset($data['update_sdt_content']) ? $data['update_sdt_content'] : null;
        $this->container['update_fields'] = isset($data['update_fields']) ? $data['update_fields'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Discriminator{propertyName&#x3D;&#x27;Type&#x27;, mapping&#x3D;null}', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
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
     * @param string $save_format Gets or sets format of save.
     *
     * @return $this
     */
    public function setSaveFormat($save_format)
    {
        $this->container['save_format'] = $save_format;

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
     * @param string $file_name Gets or sets name of destination file.
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

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
     * @param string $dml_rendering_mode Gets or sets a value determining how DrawingML shapes are rendered. { Fallback | DrawingML }.
     *
     * @return $this
     */
    public function setDmlRenderingMode($dml_rendering_mode)
    {
        $this->container['dml_rendering_mode'] = $dml_rendering_mode;

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
     * @param string $dml_effects_rendering_mode Gets or sets a value determining how DrawingML effects are rendered. { Simplified | None | Fine }.
     *
     * @return $this
     */
    public function setDmlEffectsRenderingMode($dml_effects_rendering_mode)
    {
        $this->container['dml_effects_rendering_mode'] = $dml_effects_rendering_mode;

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
     * @param bool $zip_output Gets or sets controls zip output or not. Default value is false.
     *
     * @return $this
     */
    public function setZipOutput($zip_output)
    {
        $this->container['zip_output'] = $zip_output;

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
     * @param bool $update_last_saved_time_property Gets or sets a value determining whether the Aspose.Words.Properties.BuiltInDocumentProperties.LastSavedTime property is updated before saving.
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
     * @param bool $update_sdt_content Gets or sets value determining whether content of StructuredDocumentTag is updated before saving.
     *
     * @return $this
     */
    public function setUpdateSdtContent($update_sdt_content)
    {
        $this->container['update_sdt_content'] = $update_sdt_content;

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
     * @param bool $update_fields Gets or sets a value determining if fields should be updated before saving the document to a fixed page format. Default value for this property is. true
     *
     * @return $this
     */
    public function setUpdateFields($update_fields)
    {
        $this->container['update_fields'] = $update_fields;

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
