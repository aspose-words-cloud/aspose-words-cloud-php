<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RtfSaveOptionsData.php">
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
 * RtfSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * RtfSaveOptionsData
 *
 * @description container class for rtf save options.
 */
class RtfSaveOptionsData extends SaveOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "RtfSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'export_compact_size' => 'bool',
        'export_images_for_old_readers' => 'bool',
        'pretty_format' => 'bool',
        'save_images_as_wmf' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'export_compact_size' => null,
        'export_images_for_old_readers' => null,
        'pretty_format' => null,
        'save_images_as_wmf' => null
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
        'export_compact_size' => 'ExportCompactSize',
        'export_images_for_old_readers' => 'ExportImagesForOldReaders',
        'pretty_format' => 'PrettyFormat',
        'save_images_as_wmf' => 'SaveImagesAsWmf'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'export_compact_size' => 'setExportCompactSize',
        'export_images_for_old_readers' => 'setExportImagesForOldReaders',
        'pretty_format' => 'setPrettyFormat',
        'save_images_as_wmf' => 'setSaveImagesAsWmf'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'export_compact_size' => 'getExportCompactSize',
        'export_images_for_old_readers' => 'getExportImagesForOldReaders',
        'pretty_format' => 'getPrettyFormat',
        'save_images_as_wmf' => 'getSaveImagesAsWmf'
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

        $this->container['export_compact_size'] = isset($data['export_compact_size']) ? $data['export_compact_size'] : null;
        $this->container['export_images_for_old_readers'] = isset($data['export_images_for_old_readers']) ? $data['export_images_for_old_readers'] : null;
        $this->container['pretty_format'] = isset($data['pretty_format']) ? $data['pretty_format'] : null;
        $this->container['save_images_as_wmf'] = isset($data['save_images_as_wmf']) ? $data['save_images_as_wmf'] : null;
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
     * Gets export_compact_size
     *
     * @return bool
     */
    public function getExportCompactSize()
    {
        return $this->container['export_compact_size'];
    }

    /*
     * Sets export_compact_size
     *
     * @param bool $export_compact_size Gets or sets allows to make output RTF documents smaller in size, but if they contain RTL (right-to-left) text, it will not be displayed correctly.
     *
     * @return $this
     */
    public function setExportCompactSize($export_compact_size)
    {
        $this->container['export_compact_size'] = $export_compact_size;

        return $this;
    }

    /*
     * Gets export_images_for_old_readers
     *
     * @return bool
     */
    public function getExportImagesForOldReaders()
    {
        return $this->container['export_images_for_old_readers'];
    }

    /*
     * Sets export_images_for_old_readers
     *
     * @param bool $export_images_for_old_readers Gets or sets specifies whether the keywords for \"old readers\" are written to RTF or not.
     *
     * @return $this
     */
    public function setExportImagesForOldReaders($export_images_for_old_readers)
    {
        $this->container['export_images_for_old_readers'] = $export_images_for_old_readers;

        return $this;
    }

    /*
     * Gets pretty_format
     *
     * @return bool
     */
    public function getPrettyFormat()
    {
        return $this->container['pretty_format'];
    }

    /*
     * Sets pretty_format
     *
     * @param bool $pretty_format Gets or sets specifies whether or not use pretty formats output.
     *
     * @return $this
     */
    public function setPrettyFormat($pretty_format)
    {
        $this->container['pretty_format'] = $pretty_format;

        return $this;
    }

    /*
     * Gets save_images_as_wmf
     *
     * @return bool
     */
    public function getSaveImagesAsWmf()
    {
        return $this->container['save_images_as_wmf'];
    }

    /*
     * Sets save_images_as_wmf
     *
     * @param bool $save_images_as_wmf Gets or sets a value indicating whether when true all images will be saved as WMF. This option might help to avoid WordPad warning messages.
     *
     * @return $this
     */
    public function setSaveImagesAsWmf($save_images_as_wmf)
    {
        $this->container['save_images_as_wmf'] = $save_images_as_wmf;

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
