<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TiffSaveOptionsData.php">
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
 * TiffSaveOptionsData
 *
 * @description Container class for tiff save options.
 */
class TiffSaveOptionsData extends ImageSaveOptionsData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TiffSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'threshold_for_floyd_steinberg_dithering' => 'int',
        'tiff_binarization_method' => 'string',
        'tiff_compression' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'threshold_for_floyd_steinberg_dithering' => 'null',
        'tiff_binarization_method' => 'null',
        'tiff_compression' => 'null'
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
        'threshold_for_floyd_steinberg_dithering' => 'ThresholdForFloydSteinbergDithering',
        'tiff_binarization_method' => 'TiffBinarizationMethod',
        'tiff_compression' => 'TiffCompression'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'threshold_for_floyd_steinberg_dithering' => 'setThresholdForFloydSteinbergDithering',
        'tiff_binarization_method' => 'setTiffBinarizationMethod',
        'tiff_compression' => 'setTiffCompression'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'threshold_for_floyd_steinberg_dithering' => 'getThresholdForFloydSteinbergDithering',
        'tiff_binarization_method' => 'getTiffBinarizationMethod',
        'tiff_compression' => 'getTiffCompression'
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

    const TIFF_BINARIZATION_METHOD_THRESHOLD = 'Threshold';
    const TIFF_BINARIZATION_METHOD_FLOYD_STEINBERG_DITHERING = 'FloydSteinbergDithering';
    const TIFF_COMPRESSION_NONE = 'None';
    const TIFF_COMPRESSION_RLE = 'Rle';
    const TIFF_COMPRESSION_LZW = 'Lzw';
    const TIFF_COMPRESSION_CCITT3 = 'Ccitt3';
    const TIFF_COMPRESSION_CCITT4 = 'Ccitt4';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTiffBinarizationMethodAllowableValues()
    {
        return [
            self::TIFF_BINARIZATION_METHOD_THRESHOLD,
            self::TIFF_BINARIZATION_METHOD_FLOYD_STEINBERG_DITHERING
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTiffCompressionAllowableValues()
    {
        return [
            self::TIFF_COMPRESSION_NONE,
            self::TIFF_COMPRESSION_RLE,
            self::TIFF_COMPRESSION_LZW,
            self::TIFF_COMPRESSION_CCITT3,
            self::TIFF_COMPRESSION_CCITT4
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
        $this->container['threshold_for_floyd_steinberg_dithering'] = isset($data['threshold_for_floyd_steinberg_dithering']) ? $data['threshold_for_floyd_steinberg_dithering'] : null;
        $this->container['tiff_binarization_method'] = isset($data['tiff_binarization_method']) ? $data['tiff_binarization_method'] : null;
        $this->container['tiff_compression'] = isset($data['tiff_compression']) ? $data['tiff_compression'] : null;
        $this->container['save_format'] = "tiff";
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['tiff_binarization_method'])) {
            $allowedValuesTiffBinarizationMethod = $this->getTiffBinarizationMethodAllowableValues();
            if (!in_array($this->container['tiff_binarization_method'], $allowedValuesTiffBinarizationMethod)) {
                throw new \InvalidArgumentException('Property TiffBinarizationMethod in TiffSaveOptionsData has invalid format.');
            }
        }

        if (isset($this->container['tiff_compression'])) {
            $allowedValuesTiffCompression = $this->getTiffCompressionAllowableValues();
            if (!in_array($this->container['tiff_compression'], $allowedValuesTiffCompression)) {
                throw new \InvalidArgumentException('Property TiffCompression in TiffSaveOptionsData has invalid format.');
            }
        }

    }

    /*
     * Gets threshold_for_floyd_steinberg_dithering
     *
     * @return int
     */
    public function getThresholdForFloydSteinbergDithering()
    {
        return $this->container['threshold_for_floyd_steinberg_dithering'];
    }

    /*
     * Sets threshold_for_floyd_steinberg_dithering
     *
     * @param int $threshold_for_floyd_steinberg_dithering Gets or sets the threshold that determines the value of the binarization error in the Floyd-Steinberg method. when ImageBinarizationMethod is ImageBinarizationMethod.FloydSteinbergDithering. Default value is 128.
     *
     * @return $this
     */
    public function setThresholdForFloydSteinbergDithering($threshold_for_floyd_steinberg_dithering)
    {
        $this->container['threshold_for_floyd_steinberg_dithering'] = $threshold_for_floyd_steinberg_dithering;
        return $this;
    }


    /*
     * Gets tiff_binarization_method
     *
     * @return string
     */
    public function getTiffBinarizationMethod()
    {
        return $this->container['tiff_binarization_method'];
    }

    /*
     * Sets tiff_binarization_method
     *
     * @param string $tiff_binarization_method Gets or sets the method used while converting images to 1 bpp format.
     *
     * @return $this
     */
    public function setTiffBinarizationMethod($tiff_binarization_method)
    {
        $allowedValues = $this->getTiffBinarizationMethodAllowableValues();
        if ((!is_numeric($tiff_binarization_method) && !in_array($tiff_binarization_method, $allowedValues)) || (is_numeric($tiff_binarization_method) && !in_array($allowedValues[$tiff_binarization_method], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'tiff_binarization_method', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['tiff_binarization_method'] = $tiff_binarization_method;
        return $this;
    }


    /*
     * Gets tiff_compression
     *
     * @return string
     */
    public function getTiffCompression()
    {
        return $this->container['tiff_compression'];
    }

    /*
     * Sets tiff_compression
     *
     * @param string $tiff_compression Gets or sets the type of compression.
     *
     * @return $this
     */
    public function setTiffCompression($tiff_compression)
    {
        $allowedValues = $this->getTiffCompressionAllowableValues();
        if ((!is_numeric($tiff_compression) && !in_array($tiff_compression, $allowedValues)) || (is_numeric($tiff_compression) && !in_array($allowedValues[$tiff_compression], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'tiff_compression', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['tiff_compression'] = $tiff_compression;
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

