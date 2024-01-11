<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MetafileRenderingOptionsData.php">
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
use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * MetafileRenderingOptionsData
 *
 * @description Container class for options of metafile rendering.
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
        'emulate_rendering_to_size_on_page' => 'bool',
        'emulate_rendering_to_size_on_page_resolution' => 'int',
        'rendering_mode' => 'string',
        'use_emf_embedded_to_wmf' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'emf_plus_dual_rendering_mode' => 'null',
        'emulate_raster_operations' => 'null',
        'emulate_rendering_to_size_on_page' => 'null',
        'emulate_rendering_to_size_on_page_resolution' => 'null',
        'rendering_mode' => 'null',
        'use_emf_embedded_to_wmf' => 'null'
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
        'emulate_rendering_to_size_on_page' => 'EmulateRenderingToSizeOnPage',
        'emulate_rendering_to_size_on_page_resolution' => 'EmulateRenderingToSizeOnPageResolution',
        'rendering_mode' => 'RenderingMode',
        'use_emf_embedded_to_wmf' => 'UseEmfEmbeddedToWmf'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emf_plus_dual_rendering_mode' => 'setEmfPlusDualRenderingMode',
        'emulate_raster_operations' => 'setEmulateRasterOperations',
        'emulate_rendering_to_size_on_page' => 'setEmulateRenderingToSizeOnPage',
        'emulate_rendering_to_size_on_page_resolution' => 'setEmulateRenderingToSizeOnPageResolution',
        'rendering_mode' => 'setRenderingMode',
        'use_emf_embedded_to_wmf' => 'setUseEmfEmbeddedToWmf'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emf_plus_dual_rendering_mode' => 'getEmfPlusDualRenderingMode',
        'emulate_raster_operations' => 'getEmulateRasterOperations',
        'emulate_rendering_to_size_on_page' => 'getEmulateRenderingToSizeOnPage',
        'emulate_rendering_to_size_on_page_resolution' => 'getEmulateRenderingToSizeOnPageResolution',
        'rendering_mode' => 'getRenderingMode',
        'use_emf_embedded_to_wmf' => 'getUseEmfEmbeddedToWmf'
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

    const EMF_PLUS_DUAL_RENDERING_MODE_EMF_PLUS_WITH_FALLBACK = 'EmfPlusWithFallback';
    const EMF_PLUS_DUAL_RENDERING_MODE_EMF_PLUS = 'EmfPlus';
    const EMF_PLUS_DUAL_RENDERING_MODE_EMF = 'Emf';
    const RENDERING_MODE_VECTOR_WITH_FALLBACK = 'VectorWithFallback';
    const RENDERING_MODE_VECTOR = 'Vector';
    const RENDERING_MODE_BITMAP = 'Bitmap';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmfPlusDualRenderingModeAllowableValues()
    {
        return [
            self::EMF_PLUS_DUAL_RENDERING_MODE_EMF_PLUS_WITH_FALLBACK,
            self::EMF_PLUS_DUAL_RENDERING_MODE_EMF_PLUS,
            self::EMF_PLUS_DUAL_RENDERING_MODE_EMF
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRenderingModeAllowableValues()
    {
        return [
            self::RENDERING_MODE_VECTOR_WITH_FALLBACK,
            self::RENDERING_MODE_VECTOR,
            self::RENDERING_MODE_BITMAP
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
        $this->container['emf_plus_dual_rendering_mode'] = isset($data['emf_plus_dual_rendering_mode']) ? $data['emf_plus_dual_rendering_mode'] : null;
        $this->container['emulate_raster_operations'] = isset($data['emulate_raster_operations']) ? $data['emulate_raster_operations'] : null;
        $this->container['emulate_rendering_to_size_on_page'] = isset($data['emulate_rendering_to_size_on_page']) ? $data['emulate_rendering_to_size_on_page'] : null;
        $this->container['emulate_rendering_to_size_on_page_resolution'] = isset($data['emulate_rendering_to_size_on_page_resolution']) ? $data['emulate_rendering_to_size_on_page_resolution'] : null;
        $this->container['rendering_mode'] = isset($data['rendering_mode']) ? $data['rendering_mode'] : null;
        $this->container['use_emf_embedded_to_wmf'] = isset($data['use_emf_embedded_to_wmf']) ? $data['use_emf_embedded_to_wmf'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (isset($this->container['emf_plus_dual_rendering_mode'])) {
            $allowedValuesEmfPlusDualRenderingMode = $this->getEmfPlusDualRenderingModeAllowableValues();
            if (!in_array($this->container['emf_plus_dual_rendering_mode'], $allowedValuesEmfPlusDualRenderingMode)) {
                throw new \InvalidArgumentException('Property EmfPlusDualRenderingMode in MetafileRenderingOptionsData has invalid format.');
            }
        }

        if (isset($this->container['rendering_mode'])) {
            $allowedValuesRenderingMode = $this->getRenderingModeAllowableValues();
            if (!in_array($this->container['rendering_mode'], $allowedValuesRenderingMode)) {
                throw new \InvalidArgumentException('Property RenderingMode in MetafileRenderingOptionsData has invalid format.');
            }
        }

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
     * @param string $emf_plus_dual_rendering_mode Gets or sets the option that controls how EMF+ Dual metafiles should be rendered.
     *
     * @return $this
     */
    public function setEmfPlusDualRenderingMode($emf_plus_dual_rendering_mode)
    {
        $allowedValues = $this->getEmfPlusDualRenderingModeAllowableValues();
        if ((!is_numeric($emf_plus_dual_rendering_mode) && !in_array($emf_plus_dual_rendering_mode, $allowedValues)) || (is_numeric($emf_plus_dual_rendering_mode) && !in_array($allowedValues[$emf_plus_dual_rendering_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'emf_plus_dual_rendering_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
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
     * @param bool $emulate_raster_operations Gets or sets a value indicating whether the raster operations should be emulated. Specific raster operations could be used in metafiles. They can not be rendered directly to vector graphics. Emulating raster operations requires partial rasterization of the resulting vector graphics which may affect the metafile rendering performance. When this value is set to true, Aspose.Words emulates the raster operations. The resulting output maybe partially rasterized and performance might be slower. When this value is set to false, Aspose.Words does not emulate the raster operations. When Aspose.Words encounters a raster operation in a metafile it fallbacks to rendering the metafile into a bitmap by using the operating system. This option is used only when metafile is rendered as vector graphics. The default value is true.
     *
     * @return $this
     */
    public function setEmulateRasterOperations($emulate_raster_operations)
    {
        $this->container['emulate_raster_operations'] = $emulate_raster_operations;
        return $this;
    }


    /*
     * Gets emulate_rendering_to_size_on_page
     *
     * @return bool
     */
    public function getEmulateRenderingToSizeOnPage()
    {
        return $this->container['emulate_rendering_to_size_on_page'];
    }

    /*
     * Sets emulate_rendering_to_size_on_page
     *
     * @param bool $emulate_rendering_to_size_on_page Gets or sets a value determining whether metafile rendering emulates the display of the metafile according to the size on page or the display of the metafile in its default size.
     *
     * @return $this
     */
    public function setEmulateRenderingToSizeOnPage($emulate_rendering_to_size_on_page)
    {
        $this->container['emulate_rendering_to_size_on_page'] = $emulate_rendering_to_size_on_page;
        return $this;
    }


    /*
     * Gets emulate_rendering_to_size_on_page_resolution
     *
     * @return int
     */
    public function getEmulateRenderingToSizeOnPageResolution()
    {
        return $this->container['emulate_rendering_to_size_on_page_resolution'];
    }

    /*
     * Sets emulate_rendering_to_size_on_page_resolution
     *
     * @param int $emulate_rendering_to_size_on_page_resolution Gets or sets the resolution in pixels per inch for the emulation of metafile rendering to the size on page. This option is used only when EmulateRenderingToSizeOnPage is set to true.The default value is 96. This is a default display resolution. I.e. metafile rendering will emulate the display of the metafile in MS Word with a 100% zoom factor.
     *
     * @return $this
     */
    public function setEmulateRenderingToSizeOnPageResolution($emulate_rendering_to_size_on_page_resolution)
    {
        $this->container['emulate_rendering_to_size_on_page_resolution'] = $emulate_rendering_to_size_on_page_resolution;
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
     * @param string $rendering_mode Gets or sets the option that controls how metafile images should be rendered.
     *
     * @return $this
     */
    public function setRenderingMode($rendering_mode)
    {
        $allowedValues = $this->getRenderingModeAllowableValues();
        if ((!is_numeric($rendering_mode) && !in_array($rendering_mode, $allowedValues)) || (is_numeric($rendering_mode) && !in_array($allowedValues[$rendering_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'rendering_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
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
     * @param bool $use_emf_embedded_to_wmf Gets or sets the flag, that controls how WMF metafiles with embedded EMF metafiles should be rendered.
     *
     * @return $this
     */
    public function setUseEmfEmbeddedToWmf($use_emf_embedded_to_wmf)
    {
        $this->container['use_emf_embedded_to_wmf'] = $use_emf_embedded_to_wmf;
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

