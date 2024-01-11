<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OoxmlSaveOptionsData.php">
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
 * OoxmlSaveOptionsData
 *
 * @description Container class for docx/docm/dotx/dotm/flatopc save options.
 */
abstract class OoxmlSaveOptionsData extends SaveOptionsData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OoxmlSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'compliance' => 'string',
        'compression_level' => 'string',
        'password' => 'string',
        'pretty_format' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'compliance' => 'null',
        'compression_level' => 'null',
        'password' => 'null',
        'pretty_format' => 'null'
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
        'compliance' => 'Compliance',
        'compression_level' => 'CompressionLevel',
        'password' => 'Password',
        'pretty_format' => 'PrettyFormat'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compliance' => 'setCompliance',
        'compression_level' => 'setCompressionLevel',
        'password' => 'setPassword',
        'pretty_format' => 'setPrettyFormat'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compliance' => 'getCompliance',
        'compression_level' => 'getCompressionLevel',
        'password' => 'getPassword',
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

    const COMPLIANCE_ECMA376_2006 = 'Ecma376_2006';
    const COMPLIANCE_ISO29500_2008__TRANSITIONAL = 'Iso29500_2008_Transitional';
    const COMPLIANCE_ISO29500_2008__STRICT = 'Iso29500_2008_Strict';
    const COMPRESSION_LEVEL_NORMAL = 'Normal';
    const COMPRESSION_LEVEL_MAXIMUM = 'Maximum';
    const COMPRESSION_LEVEL_FAST = 'Fast';
    const COMPRESSION_LEVEL_SUPER_FAST = 'SuperFast';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getComplianceAllowableValues()
    {
        return [
            self::COMPLIANCE_ECMA376_2006,
            self::COMPLIANCE_ISO29500_2008__TRANSITIONAL,
            self::COMPLIANCE_ISO29500_2008__STRICT
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionLevelAllowableValues()
    {
        return [
            self::COMPRESSION_LEVEL_NORMAL,
            self::COMPRESSION_LEVEL_MAXIMUM,
            self::COMPRESSION_LEVEL_FAST,
            self::COMPRESSION_LEVEL_SUPER_FAST
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
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['compression_level'] = isset($data['compression_level']) ? $data['compression_level'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['pretty_format'] = isset($data['pretty_format']) ? $data['pretty_format'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['compliance'])) {
            $allowedValuesCompliance = $this->getComplianceAllowableValues();
            if (!in_array($this->container['compliance'], $allowedValuesCompliance)) {
                throw new \InvalidArgumentException('Property Compliance in OoxmlSaveOptionsData has invalid format.');
            }
        }

        if (isset($this->container['compression_level'])) {
            $allowedValuesCompressionLevel = $this->getCompressionLevelAllowableValues();
            if (!in_array($this->container['compression_level'], $allowedValuesCompressionLevel)) {
                throw new \InvalidArgumentException('Property CompressionLevel in OoxmlSaveOptionsData has invalid format.');
            }
        }

    }

    /*
     * Gets compliance
     *
     * @return string
     */
    public function getCompliance()
    {
        return $this->container['compliance'];
    }

    /*
     * Sets compliance
     *
     * @param string $compliance Gets or sets the oOXML version for the output document.
     *
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $allowedValues = $this->getComplianceAllowableValues();
        if ((!is_numeric($compliance) && !in_array($compliance, $allowedValues)) || (is_numeric($compliance) && !in_array($allowedValues[$compliance], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compliance', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['compliance'] = $compliance;
        return $this;
    }


    /*
     * Gets compression_level
     *
     * @return string
     */
    public function getCompressionLevel()
    {
        return $this->container['compression_level'];
    }

    /*
     * Sets compression_level
     *
     * @param string $compression_level Gets or sets the compression level.
     *
     * @return $this
     */
    public function setCompressionLevel($compression_level)
    {
        $allowedValues = $this->getCompressionLevelAllowableValues();
        if ((!is_numeric($compression_level) && !in_array($compression_level, $allowedValues)) || (is_numeric($compression_level) && !in_array($allowedValues[$compression_level], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'compression_level', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['compression_level'] = $compression_level;
        return $this;
    }


    /*
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /*
     * Sets password
     *
     * @param string $password Gets or sets the password to encrypt document using ECMA376 Standard encryption algorithm.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
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
     * @param bool $pretty_format Gets or sets a value indicating whether to use pretty formats output.
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

