<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SvgSaveOptionsData.php">
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
 * SvgSaveOptionsData
 *
 * @description Container class for svg save options.
 */
class SvgSaveOptionsData extends FixedPageSaveOptionsData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SvgSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'export_embedded_images' => 'bool',
        'fit_to_view_port' => 'bool',
        'max_image_resolution' => 'int',
        'resources_folder' => 'string',
        'resources_folder_alias' => 'string',
        'show_page_border' => 'bool',
        'text_output_mode' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'export_embedded_images' => 'null',
        'fit_to_view_port' => 'null',
        'max_image_resolution' => 'null',
        'resources_folder' => 'null',
        'resources_folder_alias' => 'null',
        'show_page_border' => 'null',
        'text_output_mode' => 'null'
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
        'export_embedded_images' => 'ExportEmbeddedImages',
        'fit_to_view_port' => 'FitToViewPort',
        'max_image_resolution' => 'MaxImageResolution',
        'resources_folder' => 'ResourcesFolder',
        'resources_folder_alias' => 'ResourcesFolderAlias',
        'show_page_border' => 'ShowPageBorder',
        'text_output_mode' => 'TextOutputMode'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'export_embedded_images' => 'setExportEmbeddedImages',
        'fit_to_view_port' => 'setFitToViewPort',
        'max_image_resolution' => 'setMaxImageResolution',
        'resources_folder' => 'setResourcesFolder',
        'resources_folder_alias' => 'setResourcesFolderAlias',
        'show_page_border' => 'setShowPageBorder',
        'text_output_mode' => 'setTextOutputMode'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'export_embedded_images' => 'getExportEmbeddedImages',
        'fit_to_view_port' => 'getFitToViewPort',
        'max_image_resolution' => 'getMaxImageResolution',
        'resources_folder' => 'getResourcesFolder',
        'resources_folder_alias' => 'getResourcesFolderAlias',
        'show_page_border' => 'getShowPageBorder',
        'text_output_mode' => 'getTextOutputMode'
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

    const TEXT_OUTPUT_MODE_USE_SVG_FONTS = 'UseSvgFonts';
    const TEXT_OUTPUT_MODE_USE_TARGET_MACHINE_FONTS = 'UseTargetMachineFonts';
    const TEXT_OUTPUT_MODE_USE_PLACED_GLYPHS = 'UsePlacedGlyphs';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextOutputModeAllowableValues()
    {
        return [
            self::TEXT_OUTPUT_MODE_USE_SVG_FONTS,
            self::TEXT_OUTPUT_MODE_USE_TARGET_MACHINE_FONTS,
            self::TEXT_OUTPUT_MODE_USE_PLACED_GLYPHS
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
        $this->container['export_embedded_images'] = isset($data['export_embedded_images']) ? $data['export_embedded_images'] : null;
        $this->container['fit_to_view_port'] = isset($data['fit_to_view_port']) ? $data['fit_to_view_port'] : null;
        $this->container['max_image_resolution'] = isset($data['max_image_resolution']) ? $data['max_image_resolution'] : null;
        $this->container['resources_folder'] = isset($data['resources_folder']) ? $data['resources_folder'] : null;
        $this->container['resources_folder_alias'] = isset($data['resources_folder_alias']) ? $data['resources_folder_alias'] : null;
        $this->container['show_page_border'] = isset($data['show_page_border']) ? $data['show_page_border'] : null;
        $this->container['text_output_mode'] = isset($data['text_output_mode']) ? $data['text_output_mode'] : null;
        $this->container['save_format'] = "svg";
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['text_output_mode'])) {
            $allowedValuesTextOutputMode = $this->getTextOutputModeAllowableValues();
            if (!in_array($this->container['text_output_mode'], $allowedValuesTextOutputMode)) {
                throw new \InvalidArgumentException('Property TextOutputMode in SvgSaveOptionsData has invalid format.');
            }
        }

    }

    /*
     * Gets export_embedded_images
     *
     * @return bool
     */
    public function getExportEmbeddedImages()
    {
        return $this->container['export_embedded_images'];
    }

    /*
     * Sets export_embedded_images
     *
     * @param bool $export_embedded_images Gets or sets a value indicating whether images should be embedded into SVG document as base64.
     *
     * @return $this
     */
    public function setExportEmbeddedImages($export_embedded_images)
    {
        $this->container['export_embedded_images'] = $export_embedded_images;
        return $this;
    }


    /*
     * Gets fit_to_view_port
     *
     * @return bool
     */
    public function getFitToViewPort()
    {
        return $this->container['fit_to_view_port'];
    }

    /*
     * Sets fit_to_view_port
     *
     * @param bool $fit_to_view_port Gets or sets a value indicating whether the output SVG should fill the available viewport area (browser window or container). When set to true width and height of output SVG are set to 100%.
     *
     * @return $this
     */
    public function setFitToViewPort($fit_to_view_port)
    {
        $this->container['fit_to_view_port'] = $fit_to_view_port;
        return $this;
    }


    /*
     * Gets max_image_resolution
     *
     * @return int
     */
    public function getMaxImageResolution()
    {
        return $this->container['max_image_resolution'];
    }

    /*
     * Sets max_image_resolution
     *
     * @param int $max_image_resolution Gets or sets a value in pixels per inch that limits resolution of exported raster images. If the value of this property is non-zero, it limits resolution of exported raster images. That is, higher-resolution images are resampled down to the limit and lower-resolution images are exported as is.
     *
     * @return $this
     */
    public function setMaxImageResolution($max_image_resolution)
    {
        $this->container['max_image_resolution'] = $max_image_resolution;
        return $this;
    }


    /*
     * Gets resources_folder
     *
     * @return string
     */
    public function getResourcesFolder()
    {
        return $this->container['resources_folder'];
    }

    /*
     * Sets resources_folder
     *
     * @param string $resources_folder Gets or sets the physical folder where resources (images) are saved when exporting.
     *
     * @return $this
     */
    public function setResourcesFolder($resources_folder)
    {
        $this->container['resources_folder'] = $resources_folder;
        return $this;
    }


    /*
     * Gets resources_folder_alias
     *
     * @return string
     */
    public function getResourcesFolderAlias()
    {
        return $this->container['resources_folder_alias'];
    }

    /*
     * Sets resources_folder_alias
     *
     * @param string $resources_folder_alias Gets or sets the name of the folder used to construct image URIs.
     *
     * @return $this
     */
    public function setResourcesFolderAlias($resources_folder_alias)
    {
        $this->container['resources_folder_alias'] = $resources_folder_alias;
        return $this;
    }


    /*
     * Gets show_page_border
     *
     * @return bool
     */
    public function getShowPageBorder()
    {
        return $this->container['show_page_border'];
    }

    /*
     * Sets show_page_border
     *
     * @param bool $show_page_border Gets or sets a value indicating whether to show or hide page stepper.
     *
     * @return $this
     */
    public function setShowPageBorder($show_page_border)
    {
        $this->container['show_page_border'] = $show_page_border;
        return $this;
    }


    /*
     * Gets text_output_mode
     *
     * @return string
     */
    public function getTextOutputMode()
    {
        return $this->container['text_output_mode'];
    }

    /*
     * Sets text_output_mode
     *
     * @param string $text_output_mode Gets or sets the option that controls how text should be rendered.
     *
     * @return $this
     */
    public function setTextOutputMode($text_output_mode)
    {
        $allowedValues = $this->getTextOutputModeAllowableValues();
        if ((!is_numeric($text_output_mode) && !in_array($text_output_mode, $allowedValues)) || (is_numeric($text_output_mode) && !in_array($allowedValues[$text_output_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'text_output_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['text_output_mode'] = $text_output_mode;
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

