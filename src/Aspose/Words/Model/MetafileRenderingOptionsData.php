<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MetafileRenderingOptionsData.php">
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
 * MetafileRenderingOptionsData
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * MetafileRenderingOptionsData
 *
 * @description container class for options of metafile rendering.
 */
class MetafileRenderingOptionsData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MetafileRenderingOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'emf_plus_dual_rendering_mode' => 'string',
        'emulate_raster_operations' => 'bool',
        'rendering_mode' => 'string',
        'use_emf_embedded_to_wmf' => 'bool',
        'scale_wmf_fonts_to_metafile_size' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'emf_plus_dual_rendering_mode' => null,
        'emulate_raster_operations' => null,
        'rendering_mode' => null,
        'use_emf_embedded_to_wmf' => null,
        'scale_wmf_fonts_to_metafile_size' => null
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
        'emf_plus_dual_rendering_mode' => 'EmfPlusDualRenderingMode',
        'emulate_raster_operations' => 'EmulateRasterOperations',
        'rendering_mode' => 'RenderingMode',
        'use_emf_embedded_to_wmf' => 'UseEmfEmbeddedToWmf',
        'scale_wmf_fonts_to_metafile_size' => 'ScaleWmfFontsToMetafileSize'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emf_plus_dual_rendering_mode' => 'setEmfPlusDualRenderingMode',
        'emulate_raster_operations' => 'setEmulateRasterOperations',
        'rendering_mode' => 'setRenderingMode',
        'use_emf_embedded_to_wmf' => 'setUseEmfEmbeddedToWmf',
        'scale_wmf_fonts_to_metafile_size' => 'setScaleWmfFontsToMetafileSize'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emf_plus_dual_rendering_mode' => 'getEmfPlusDualRenderingMode',
        'emulate_raster_operations' => 'getEmulateRasterOperations',
        'rendering_mode' => 'getRenderingMode',
        'use_emf_embedded_to_wmf' => 'getUseEmfEmbeddedToWmf',
        'scale_wmf_fonts_to_metafile_size' => 'getScaleWmfFontsToMetafileSize'
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
        $this->container['emf_plus_dual_rendering_mode'] = isset($data['emf_plus_dual_rendering_mode']) ? $data['emf_plus_dual_rendering_mode'] : null;
        $this->container['emulate_raster_operations'] = isset($data['emulate_raster_operations']) ? $data['emulate_raster_operations'] : null;
        $this->container['rendering_mode'] = isset($data['rendering_mode']) ? $data['rendering_mode'] : null;
        $this->container['use_emf_embedded_to_wmf'] = isset($data['use_emf_embedded_to_wmf']) ? $data['use_emf_embedded_to_wmf'] : null;
        $this->container['scale_wmf_fonts_to_metafile_size'] = isset($data['scale_wmf_fonts_to_metafile_size']) ? $data['scale_wmf_fonts_to_metafile_size'] : null;
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
     * Gets emf_plus_dual_rendering_mode
     *
     * @return string
     */
    public function getEmfPlusDualRenderingMode()
    {
        return $this->container['emf_plus_dual_rendering_mode'];
    }

    /*
     * Sets emf_plus_dual_rendering_mode
     *
     * @param string $emf_plus_dual_rendering_mode Gets or sets determines how EMF+ Dual metafiles should be rendered.
     *
     * @return $this
     */
    public function setEmfPlusDualRenderingMode($emf_plus_dual_rendering_mode)
    {
        $this->container['emf_plus_dual_rendering_mode'] = $emf_plus_dual_rendering_mode;

        return $this;
    }

    /*
     * Gets emulate_raster_operations
     *
     * @return bool
     */
    public function getEmulateRasterOperations()
    {
        return $this->container['emulate_raster_operations'];
    }

    /*
     * Sets emulate_raster_operations
     *
     * @param bool $emulate_raster_operations Gets or sets a value determining whether or not the raster operations should be emulated.
     *
     * @return $this
     */
    public function setEmulateRasterOperations($emulate_raster_operations)
    {
        $this->container['emulate_raster_operations'] = $emulate_raster_operations;

        return $this;
    }

    /*
     * Gets rendering_mode
     *
     * @return string
     */
    public function getRenderingMode()
    {
        return $this->container['rendering_mode'];
    }

    /*
     * Sets rendering_mode
     *
     * @param string $rendering_mode Gets or sets determines how metafile images should be rendered.
     *
     * @return $this
     */
    public function setRenderingMode($rendering_mode)
    {
        $this->container['rendering_mode'] = $rendering_mode;

        return $this;
    }

    /*
     * Gets use_emf_embedded_to_wmf
     *
     * @return bool
     */
    public function getUseEmfEmbeddedToWmf()
    {
        return $this->container['use_emf_embedded_to_wmf'];
    }

    /*
     * Sets use_emf_embedded_to_wmf
     *
     * @param bool $use_emf_embedded_to_wmf Gets or sets determines how WMF metafiles with embedded EMF metafiles should be rendered.
     *
     * @return $this
     */
    public function setUseEmfEmbeddedToWmf($use_emf_embedded_to_wmf)
    {
        $this->container['use_emf_embedded_to_wmf'] = $use_emf_embedded_to_wmf;

        return $this;
    }

    /*
     * Gets scale_wmf_fonts_to_metafile_size
     *
     * @return bool
     */
    public function getScaleWmfFontsToMetafileSize()
    {
        return $this->container['scale_wmf_fonts_to_metafile_size'];
    }

    /*
     * Sets scale_wmf_fonts_to_metafile_size
     *
     * @param bool $scale_wmf_fonts_to_metafile_size Gets or sets a value determining whether or not to scale fonts in WMF metafile according to metafile size on the page. The default value is true.
     *
     * @return $this
     */
    public function setScaleWmfFontsToMetafileSize($scale_wmf_fonts_to_metafile_size)
    {
        $this->container['scale_wmf_fonts_to_metafile_size'] = $scale_wmf_fonts_to_metafile_size;

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
