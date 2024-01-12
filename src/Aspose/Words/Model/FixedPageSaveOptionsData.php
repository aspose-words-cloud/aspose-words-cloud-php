<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FixedPageSaveOptionsData.php">
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
 * FixedPageSaveOptionsData
 *
 * @description Contains common options that can be specified when saving a document into fixed page formats (PDF, XPS, images etc).
 */
abstract class FixedPageSaveOptionsData extends SaveOptionsData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "FixedPageSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'color_mode' => 'string',
        'jpeg_quality' => 'int',
        'metafile_rendering_options' => '\Aspose\Words\Model\MetafileRenderingOptionsData',
        'numeral_format' => 'string',
        'optimize_output' => 'bool',
        'page_count' => 'int',
        'page_index' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'color_mode' => 'null',
        'jpeg_quality' => 'null',
        'metafile_rendering_options' => 'null',
        'numeral_format' => 'null',
        'optimize_output' => 'null',
        'page_count' => 'null',
        'page_index' => 'null'
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
        'color_mode' => 'ColorMode',
        'jpeg_quality' => 'JpegQuality',
        'metafile_rendering_options' => 'MetafileRenderingOptions',
        'numeral_format' => 'NumeralFormat',
        'optimize_output' => 'OptimizeOutput',
        'page_count' => 'PageCount',
        'page_index' => 'PageIndex'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color_mode' => 'setColorMode',
        'jpeg_quality' => 'setJpegQuality',
        'metafile_rendering_options' => 'setMetafileRenderingOptions',
        'numeral_format' => 'setNumeralFormat',
        'optimize_output' => 'setOptimizeOutput',
        'page_count' => 'setPageCount',
        'page_index' => 'setPageIndex'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color_mode' => 'getColorMode',
        'jpeg_quality' => 'getJpegQuality',
        'metafile_rendering_options' => 'getMetafileRenderingOptions',
        'numeral_format' => 'getNumeralFormat',
        'optimize_output' => 'getOptimizeOutput',
        'page_count' => 'getPageCount',
        'page_index' => 'getPageIndex'
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

    const COLOR_MODE_NORMAL = 'Normal';
    const COLOR_MODE_GRAYSCALE = 'Grayscale';
    const NUMERAL_FORMAT_EUROPEAN = 'European';
    const NUMERAL_FORMAT_ARABIC_INDIC = 'ArabicIndic';
    const NUMERAL_FORMAT_EASTERN_ARABIC_INDIC = 'EasternArabicIndic';
    const NUMERAL_FORMAT_CONTEXT = 'Context';
    const NUMERAL_FORMAT_SYSTEM = 'System';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorModeAllowableValues()
    {
        return [
            self::COLOR_MODE_NORMAL,
            self::COLOR_MODE_GRAYSCALE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNumeralFormatAllowableValues()
    {
        return [
            self::NUMERAL_FORMAT_EUROPEAN,
            self::NUMERAL_FORMAT_ARABIC_INDIC,
            self::NUMERAL_FORMAT_EASTERN_ARABIC_INDIC,
            self::NUMERAL_FORMAT_CONTEXT,
            self::NUMERAL_FORMAT_SYSTEM
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
        $this->container['color_mode'] = isset($data['color_mode']) ? $data['color_mode'] : null;
        $this->container['jpeg_quality'] = isset($data['jpeg_quality']) ? $data['jpeg_quality'] : null;
        $this->container['metafile_rendering_options'] = isset($data['metafile_rendering_options']) ? $data['metafile_rendering_options'] : null;
        $this->container['numeral_format'] = isset($data['numeral_format']) ? $data['numeral_format'] : null;
        $this->container['optimize_output'] = isset($data['optimize_output']) ? $data['optimize_output'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['color_mode'])) {
            $allowedValuesColorMode = $this->getColorModeAllowableValues();
            if (!in_array($this->container['color_mode'], $allowedValuesColorMode)) {
                throw new \InvalidArgumentException('Property ColorMode in FixedPageSaveOptionsData has invalid format.');
            }
        }


        if (isset($this->container['metafile_rendering_options'])) {
            $this->getMetafileRenderingOptions()->validate();
        }

        if (isset($this->container['numeral_format'])) {
            $allowedValuesNumeralFormat = $this->getNumeralFormatAllowableValues();
            if (!in_array($this->container['numeral_format'], $allowedValuesNumeralFormat)) {
                throw new \InvalidArgumentException('Property NumeralFormat in FixedPageSaveOptionsData has invalid format.');
            }
        }

    }

    /*
     * Gets color_mode
     *
     * @return string
     */
    public function getColorMode()
    {
        return $this->container['color_mode'];
    }

    /*
     * Sets color_mode
     *
     * @param string $color_mode Gets or sets the value determining how colors are rendered. { Normal | Grayscale}. The default value is Normal. This property is used when the document is exported to fixed page formats.
     *
     * @return $this
     */
    public function setColorMode($color_mode)
    {
        $allowedValues = $this->getColorModeAllowableValues();
        if ((!is_numeric($color_mode) && !in_array($color_mode, $allowedValues)) || (is_numeric($color_mode) && !in_array($allowedValues[$color_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'color_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['color_mode'] = $color_mode;
        return $this;
    }


    /*
     * Gets jpeg_quality
     *
     * @return int
     */
    public function getJpegQuality()
    {
        return $this->container['jpeg_quality'];
    }

    /*
     * Sets jpeg_quality
     *
     * @param int $jpeg_quality Gets or sets the quality of the JPEG images inside PDF document.
     *
     * @return $this
     */
    public function setJpegQuality($jpeg_quality)
    {
        $this->container['jpeg_quality'] = $jpeg_quality;
        return $this;
    }


    /*
     * Gets metafile_rendering_options
     *
     * @return \Aspose\Words\Model\MetafileRenderingOptionsData
     */
    public function getMetafileRenderingOptions()
    {
        return $this->container['metafile_rendering_options'];
    }

    /*
     * Sets metafile_rendering_options
     *
     * @param \Aspose\Words\Model\MetafileRenderingOptionsData $metafile_rendering_options Gets or sets the metafile rendering options.
     *
     * @return $this
     */
    public function setMetafileRenderingOptions($metafile_rendering_options)
    {
        $this->container['metafile_rendering_options'] = $metafile_rendering_options;
        return $this;
    }


    /*
     * Gets numeral_format
     *
     * @return string
     */
    public function getNumeralFormat()
    {
        return $this->container['numeral_format'];
    }

    /*
     * Sets numeral_format
     *
     * @param string $numeral_format Gets or sets the symbol set, that is used to represent numbers while rendering to fixed page formats.
     *
     * @return $this
     */
    public function setNumeralFormat($numeral_format)
    {
        $allowedValues = $this->getNumeralFormatAllowableValues();
        if ((!is_numeric($numeral_format) && !in_array($numeral_format, $allowedValues)) || (is_numeric($numeral_format) && !in_array($allowedValues[$numeral_format], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'numeral_format', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['numeral_format'] = $numeral_format;
        return $this;
    }


    /*
     * Gets optimize_output
     *
     * @return bool
     */
    public function getOptimizeOutput()
    {
        return $this->container['optimize_output'];
    }

    /*
     * Sets optimize_output
     *
     * @param bool $optimize_output Gets or sets a value indicating whether it is required to optimize output of XPS. If this flag is set redundant nested canvases and empty canvases are removed, also neighbor glyphs with the same formatting are concatenated. Note: The accuracy of the content display may be affected if this property is set to true.. The default value is false.
     *
     * @return $this
     */
    public function setOptimizeOutput($optimize_output)
    {
        $this->container['optimize_output'] = $optimize_output;
        return $this;
    }


    /*
     * Gets page_count
     *
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /*
     * Sets page_count
     *
     * @param int $page_count Gets or sets the number of pages to render.
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;
        return $this;
    }


    /*
     * Gets page_index
     *
     * @return int
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /*
     * Sets page_index
     *
     * @param int $page_index Gets or sets the 0-based index of the first page to render.
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;
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

