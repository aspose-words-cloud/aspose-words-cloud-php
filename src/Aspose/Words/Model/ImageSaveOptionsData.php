<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImageSaveOptionsData.php">
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
 * ImageSaveOptionsData
 *
 * @description Container abstract class for image save options.
 */
class ImageSaveOptionsData extends FixedPageSaveOptionsData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ImageSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'horizontal_resolution' => 'double',
        'image_brightness' => 'double',
        'image_color_mode' => 'string',
        'image_contrast' => 'double',
        'paper_color' => 'string',
        'pixel_format' => 'string',
        'resolution' => 'double',
        'scale' => 'double',
        'use_anti_aliasing' => 'bool',
        'use_gdi_emf_renderer' => 'bool',
        'use_high_quality_rendering' => 'bool',
        'vertical_resolution' => 'double'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'horizontal_resolution' => 'null',
        'image_brightness' => 'null',
        'image_color_mode' => 'null',
        'image_contrast' => 'null',
        'paper_color' => 'null',
        'pixel_format' => 'null',
        'resolution' => 'null',
        'scale' => 'null',
        'use_anti_aliasing' => 'null',
        'use_gdi_emf_renderer' => 'null',
        'use_high_quality_rendering' => 'null',
        'vertical_resolution' => 'null'
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
        'horizontal_resolution' => 'HorizontalResolution',
        'image_brightness' => 'ImageBrightness',
        'image_color_mode' => 'ImageColorMode',
        'image_contrast' => 'ImageContrast',
        'paper_color' => 'PaperColor',
        'pixel_format' => 'PixelFormat',
        'resolution' => 'Resolution',
        'scale' => 'Scale',
        'use_anti_aliasing' => 'UseAntiAliasing',
        'use_gdi_emf_renderer' => 'UseGdiEmfRenderer',
        'use_high_quality_rendering' => 'UseHighQualityRendering',
        'vertical_resolution' => 'VerticalResolution'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'horizontal_resolution' => 'setHorizontalResolution',
        'image_brightness' => 'setImageBrightness',
        'image_color_mode' => 'setImageColorMode',
        'image_contrast' => 'setImageContrast',
        'paper_color' => 'setPaperColor',
        'pixel_format' => 'setPixelFormat',
        'resolution' => 'setResolution',
        'scale' => 'setScale',
        'use_anti_aliasing' => 'setUseAntiAliasing',
        'use_gdi_emf_renderer' => 'setUseGdiEmfRenderer',
        'use_high_quality_rendering' => 'setUseHighQualityRendering',
        'vertical_resolution' => 'setVerticalResolution'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'horizontal_resolution' => 'getHorizontalResolution',
        'image_brightness' => 'getImageBrightness',
        'image_color_mode' => 'getImageColorMode',
        'image_contrast' => 'getImageContrast',
        'paper_color' => 'getPaperColor',
        'pixel_format' => 'getPixelFormat',
        'resolution' => 'getResolution',
        'scale' => 'getScale',
        'use_anti_aliasing' => 'getUseAntiAliasing',
        'use_gdi_emf_renderer' => 'getUseGdiEmfRenderer',
        'use_high_quality_rendering' => 'getUseHighQualityRendering',
        'vertical_resolution' => 'getVerticalResolution'
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
        $this->container['horizontal_resolution'] = isset($data['horizontal_resolution']) ? $data['horizontal_resolution'] : null;
        $this->container['image_brightness'] = isset($data['image_brightness']) ? $data['image_brightness'] : null;
        $this->container['image_color_mode'] = isset($data['image_color_mode']) ? $data['image_color_mode'] : null;
        $this->container['image_contrast'] = isset($data['image_contrast']) ? $data['image_contrast'] : null;
        $this->container['paper_color'] = isset($data['paper_color']) ? $data['paper_color'] : null;
        $this->container['pixel_format'] = isset($data['pixel_format']) ? $data['pixel_format'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
        $this->container['use_anti_aliasing'] = isset($data['use_anti_aliasing']) ? $data['use_anti_aliasing'] : null;
        $this->container['use_gdi_emf_renderer'] = isset($data['use_gdi_emf_renderer']) ? $data['use_gdi_emf_renderer'] : null;
        $this->container['use_high_quality_rendering'] = isset($data['use_high_quality_rendering']) ? $data['use_high_quality_rendering'] : null;
        $this->container['vertical_resolution'] = isset($data['vertical_resolution']) ? $data['vertical_resolution'] : null;
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
     * Gets horizontal_resolution
     *
     * @return double
     */
    public function getHorizontalResolution()
    {
        return $this->container['horizontal_resolution'];
    }

    /*
     * Sets horizontal_resolution
     *
     * @param double $horizontal_resolution Gets or sets the horizontal resolution in dots per inch for the generated images. This property has effect only when saving to raster image formats. The default value is 96.
     *
     * @return $this
     */
    public function setHorizontalResolution($horizontal_resolution)
    {
        $this->container['horizontal_resolution'] = $horizontal_resolution;
        return $this;
    }

    /*
     * Gets image_brightness
     *
     * @return double
     */
    public function getImageBrightness()
    {
        return $this->container['image_brightness'];
    }

    /*
     * Sets image_brightness
     *
     * @param double $image_brightness Gets or sets the brightness level of the image.
     *
     * @return $this
     */
    public function setImageBrightness($image_brightness)
    {
        $this->container['image_brightness'] = $image_brightness;
        return $this;
    }

    /*
     * Gets image_color_mode
     *
     * @return string
     */
    public function getImageColorMode()
    {
        return $this->container['image_color_mode'];
    }

    /*
     * Sets image_color_mode
     *
     * @param string $image_color_mode Gets or sets the color mode of the image.
     *
     * @return $this
     */
    public function setImageColorMode($image_color_mode)
    {
        $this->container['image_color_mode'] = $image_color_mode;
        return $this;
    }

    /*
     * Gets image_contrast
     *
     * @return double
     */
    public function getImageContrast()
    {
        return $this->container['image_contrast'];
    }

    /*
     * Sets image_contrast
     *
     * @param double $image_contrast Gets or sets the contrast level of the image.
     *
     * @return $this
     */
    public function setImageContrast($image_contrast)
    {
        $this->container['image_contrast'] = $image_contrast;
        return $this;
    }

    /*
     * Gets paper_color
     *
     * @return string
     */
    public function getPaperColor()
    {
        return $this->container['paper_color'];
    }

    /*
     * Sets paper_color
     *
     * @param string $paper_color Gets or sets the background (paper) color of the image.
     *
     * @return $this
     */
    public function setPaperColor($paper_color)
    {
        $this->container['paper_color'] = $paper_color;
        return $this;
    }

    /*
     * Gets pixel_format
     *
     * @return string
     */
    public function getPixelFormat()
    {
        return $this->container['pixel_format'];
    }

    /*
     * Sets pixel_format
     *
     * @param string $pixel_format Gets or sets the pixel format of the image.
     *
     * @return $this
     */
    public function setPixelFormat($pixel_format)
    {
        $this->container['pixel_format'] = $pixel_format;
        return $this;
    }

    /*
     * Gets resolution
     *
     * @return double
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /*
     * Sets resolution
     *
     * @param double $resolution Gets or sets both horizontal and vertical resolution in dots per inch for the generated images. This property has effect only when saving to raster image formats. The default value is 96.
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;
        return $this;
    }

    /*
     * Gets scale
     *
     * @return double
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /*
     * Sets scale
     *
     * @param double $scale Gets or sets the zoom factor of the image.
     *
     * @return $this
     */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;
        return $this;
    }

    /*
     * Gets use_anti_aliasing
     *
     * @return bool
     */
    public function getUseAntiAliasing()
    {
        return $this->container['use_anti_aliasing'];
    }

    /*
     * Sets use_anti_aliasing
     *
     * @param bool $use_anti_aliasing Gets or sets a value indicating whether to use anti-aliasing for rendering.
     *
     * @return $this
     */
    public function setUseAntiAliasing($use_anti_aliasing)
    {
        $this->container['use_anti_aliasing'] = $use_anti_aliasing;
        return $this;
    }

    /*
     * Gets use_gdi_emf_renderer
     *
     * @return bool
     */
    public function getUseGdiEmfRenderer()
    {
        return $this->container['use_gdi_emf_renderer'];
    }

    /*
     * Sets use_gdi_emf_renderer
     *
     * @param bool $use_gdi_emf_renderer Gets or sets a value indicating whether to use GDI+ or Aspose.Words metafile renderer when saving to EMF.
     *
     * @return $this
     */
    public function setUseGdiEmfRenderer($use_gdi_emf_renderer)
    {
        $this->container['use_gdi_emf_renderer'] = $use_gdi_emf_renderer;
        return $this;
    }

    /*
     * Gets use_high_quality_rendering
     *
     * @return bool
     */
    public function getUseHighQualityRendering()
    {
        return $this->container['use_high_quality_rendering'];
    }

    /*
     * Sets use_high_quality_rendering
     *
     * @param bool $use_high_quality_rendering Gets or sets a value indicating whether to use high quality (i.e. slow) rendering algorithms.
     *
     * @return $this
     */
    public function setUseHighQualityRendering($use_high_quality_rendering)
    {
        $this->container['use_high_quality_rendering'] = $use_high_quality_rendering;
        return $this;
    }

    /*
     * Gets vertical_resolution
     *
     * @return double
     */
    public function getVerticalResolution()
    {
        return $this->container['vertical_resolution'];
    }

    /*
     * Sets vertical_resolution
     *
     * @param double $vertical_resolution Gets or sets the vertical resolution in dots per inch for the generated images. This property has effect only when saving to raster image formats. The default value is 96.
     *
     * @return $this
     */
    public function setVerticalResolution($vertical_resolution)
    {
        $this->container['vertical_resolution'] = $vertical_resolution;
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

