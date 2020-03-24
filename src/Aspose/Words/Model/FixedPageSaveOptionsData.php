<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FixedPageSaveOptionsData.php">
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
 * FixedPageSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * FixedPageSaveOptionsData
 *
 * @description Contains common options that can be specified when saving a document into fixed page formats (PDF, XPS, images etc).
 */
class FixedPageSaveOptionsData extends SaveOptionsData 
{
    const DISCRIMINATOR = 'Discriminator{propertyName&#x3D;&#x27;Type&#x27;, mapping&#x3D;null}';

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
        'color_mode' => null,
        'jpeg_quality' => 'int32',
        'metafile_rendering_options' => null,
        'numeral_format' => null,
        'optimize_output' => null,
        'page_count' => 'int32',
        'page_index' => 'int32'
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
     * @param string $color_mode Gets or sets a value determining how colors are rendered. { Normal | Grayscale}.
     *
     * @return $this
     */
    public function setColorMode($color_mode)
    {
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
     * @param int $jpeg_quality Gets or sets determines the quality of the JPEG images inside PDF document.
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
     * @param \Aspose\Words\Model\MetafileRenderingOptionsData $metafile_rendering_options metafile_rendering_options
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
     * @param string $numeral_format Gets or sets indicates the symbol set that is used to represent numbers while rendering to fixed page formats.
     *
     * @return $this
     */
    public function setNumeralFormat($numeral_format)
    {
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
     * @param bool $optimize_output Gets or sets flag indicates whether it is required to optimize output of XPS. If this flag is set redundant nested canvases and empty canvases are removed, also neighbor glyphs with the same formatting are concatenated. Note: The accuracy of the content display may be affected if this property is set to true.  Default is false.
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
     * @param int $page_count Gets or sets determines number of pages to render.
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
     * @param int $page_index Gets or sets determines 0-based index of the first page to render.
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
