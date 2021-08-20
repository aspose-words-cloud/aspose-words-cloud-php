<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReportEngineSettings.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
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
 * ReportEngineSettings
 *
 * @description Report engine settings.
 */
class ReportEngineSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ReportEngineSettings";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'csv_data_load_options' => '\Aspose\Words\Model\CsvDataLoadOptions',
        'data_source_name' => 'string',
        'data_source_type' => 'string',
        'report_build_options' => 'string[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'csv_data_load_options' => 'null',
        'data_source_name' => 'null',
        'data_source_type' => 'null',
        'report_build_options' => 'null'
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
        'csv_data_load_options' => 'CsvDataLoadOptions',
        'data_source_name' => 'DataSourceName',
        'data_source_type' => 'DataSourceType',
        'report_build_options' => 'ReportBuildOptions'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'csv_data_load_options' => 'setCsvDataLoadOptions',
        'data_source_name' => 'setDataSourceName',
        'data_source_type' => 'setDataSourceType',
        'report_build_options' => 'setReportBuildOptions'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'csv_data_load_options' => 'getCsvDataLoadOptions',
        'data_source_name' => 'getDataSourceName',
        'data_source_type' => 'getDataSourceType',
        'report_build_options' => 'getReportBuildOptions'
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

    const DATA_SOURCE_TYPE_XML = 'Xml';
    const DATA_SOURCE_TYPE_JSON = 'Json';
    const DATA_SOURCE_TYPE_CSV = 'Csv';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataSourceTypeAllowableValues()
    {
        return [
            self::DATA_SOURCE_TYPE_XML,
            self::DATA_SOURCE_TYPE_JSON,
            self::DATA_SOURCE_TYPE_CSV
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
        $this->container['csv_data_load_options'] = isset($data['csv_data_load_options']) ? $data['csv_data_load_options'] : null;
        $this->container['data_source_name'] = isset($data['data_source_name']) ? $data['data_source_name'] : null;
        $this->container['data_source_type'] = isset($data['data_source_type']) ? $data['data_source_type'] : null;
        $this->container['report_build_options'] = isset($data['report_build_options']) ? $data['report_build_options'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDataSourceTypeAllowableValues();
        if (!in_array($this->container['data_source_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'data_source_type', must be one of '%s'",
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
        $allowedValues = $this->getDataSourceTypeAllowableValues();
        if (!in_array($this->container['data_source_type'], $allowedValues)) {
            return false;
        }


        return true;
    }

    /*
     * Gets csv_data_load_options
     *
     * @return \Aspose\Words\Model\CsvDataLoadOptions
     */
    public function getCsvDataLoadOptions()
    {
        return $this->container['csv_data_load_options'];
    }

    /*
     * Sets csv_data_load_options
     *
     * @param \Aspose\Words\Model\CsvDataLoadOptions $csv_data_load_options Gets or sets the options for parsing CSV data.
     *
     * @return $this
     */
    public function setCsvDataLoadOptions($csv_data_load_options)
    {
        $this->container['csv_data_load_options'] = $csv_data_load_options;
        return $this;
    }

    /*
     * Gets data_source_name
     *
     * @return string
     */
    public function getDataSourceName()
    {
        return $this->container['data_source_name'];
    }

    /*
     * Sets data_source_name
     *
     * @param string $data_source_name Gets or sets the name to reference the data source object in the template.
     *
     * @return $this
     */
    public function setDataSourceName($data_source_name)
    {
        $this->container['data_source_name'] = $data_source_name;
        return $this;
    }

    /*
     * Gets data_source_type
     *
     * @return string
     */
    public function getDataSourceType()
    {
        return $this->container['data_source_type'];
    }

    /*
     * Sets data_source_type
     *
     * @param string $data_source_type Gets or sets type of datasource.
     *
     * @return $this
     */
    public function setDataSourceType($data_source_type)
    {
        $allowedValues = $this->getDataSourceTypeAllowableValues();
        if ((!is_numeric($data_source_type) && !in_array($data_source_type, $allowedValues)) || (is_numeric($data_source_type) && !in_array($allowedValues[$data_source_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'data_source_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['data_source_type'] = $data_source_type;
        return $this;
    }

    /*
     * Gets report_build_options
     *
     * @return string[]
     */
    public function getReportBuildOptions()
    {
        return $this->container['report_build_options'];
    }

    /*
     * Sets report_build_options
     *
     * @param string[] $report_build_options Gets or sets type of options to build report.
     *
     * @return $this
     */
    public function setReportBuildOptions($report_build_options)
    {
        $allowedValues = $this->getReportBuildOptionsAllowableValues();
        if (!is_null($report_build_options) && array_diff($report_build_options, $allowedValues)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'report_build_options', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['report_build_options'] = $report_build_options;
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

