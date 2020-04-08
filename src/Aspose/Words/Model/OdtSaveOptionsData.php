<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OdtSaveOptionsData.php">
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
 * OdtSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * OdtSaveOptionsData
 *
 * @description container class for odt/ott save options.
 */
class OdtSaveOptionsData extends SaveOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OdtSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'is_strict_schema11' => 'bool',
        'measure_unit' => 'string',
        'pretty_format' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'is_strict_schema11' => null,
        'measure_unit' => null,
        'pretty_format' => null
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
        'is_strict_schema11' => 'IsStrictSchema11',
        'measure_unit' => 'MeasureUnit',
        'pretty_format' => 'PrettyFormat'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_strict_schema11' => 'setIsStrictSchema11',
        'measure_unit' => 'setMeasureUnit',
        'pretty_format' => 'setPrettyFormat'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_strict_schema11' => 'getIsStrictSchema11',
        'measure_unit' => 'getMeasureUnit',
        'pretty_format' => 'getPrettyFormat'
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

    const MEASURE_UNIT_CENTIMETERS = 'Centimeters';
    const MEASURE_UNIT_INCHES = 'Inches';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMeasureUnitAllowableValues()
    {
        return [
            self::MEASURE_UNIT_CENTIMETERS,
            self::MEASURE_UNIT_INCHES
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

        $this->container['is_strict_schema11'] = isset($data['is_strict_schema11']) ? $data['is_strict_schema11'] : null;
        $this->container['measure_unit'] = isset($data['measure_unit']) ? $data['measure_unit'] : null;
        $this->container['pretty_format'] = isset($data['pretty_format']) ? $data['pretty_format'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getMeasureUnitAllowableValues();
        if (!in_array($this->container['measure_unit'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'measure_unit', must be one of '%s'",
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
        if (!parent::valid()) {
            return false;
        }

        $allowedValues = $this->getMeasureUnitAllowableValues();
        if (!in_array($this->container['measure_unit'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets is_strict_schema11
     *
     * @return bool
     */
    public function getIsStrictSchema11()
    {
        return $this->container['is_strict_schema11'];
    }

    /*
     * Sets is_strict_schema11
     *
     * @param bool $is_strict_schema11 Gets or sets specifies whether export should correspond to ODT specification 1.1 strictly.
     *
     * @return $this
     */
    public function setIsStrictSchema11($is_strict_schema11)
    {
        $this->container['is_strict_schema11'] = $is_strict_schema11;

        return $this;
    }

    /*
     * Gets measure_unit
     *
     * @return string
     */
    public function getMeasureUnit()
    {
        return $this->container['measure_unit'];
    }

    /*
     * Sets measure_unit
     *
     * @param string $measure_unit Gets or sets allows to specify units of measure to apply to document content. The default value is Aspose.Words.Saving.OdtSaveMeasureUnit.Centimeters.  Open Office uses centimeters when specifying lengths, widths and other measurable formatting and content properties in documents whereas MS Office uses inches.
     *
     * @return $this
     */
    public function setMeasureUnit($measure_unit)
    {
        $allowedValues = $this->getMeasureUnitAllowableValues();
        if ((!is_numeric($measure_unit) && !in_array($measure_unit, $allowedValues)) || (is_numeric($measure_unit) && !in_array($allowedValues[$measure_unit], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'measure_unit', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['measure_unit'] = $measure_unit;

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
