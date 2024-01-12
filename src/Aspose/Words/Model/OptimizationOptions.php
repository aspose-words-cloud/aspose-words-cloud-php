<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OptimizationOptions.php">
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
 * OptimizationOptions
 *
 * @description Container class for the document optimization options.
 */
class OptimizationOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OptimizationOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'ms_word_version' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'ms_word_version' => 'null'
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
        'ms_word_version' => 'MsWordVersion'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ms_word_version' => 'setMsWordVersion'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ms_word_version' => 'getMsWordVersion'
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

    const MS_WORD_VERSION_WORD2000 = 'Word2000';
    const MS_WORD_VERSION_WORD2002 = 'Word2002';
    const MS_WORD_VERSION_WORD2003 = 'Word2003';
    const MS_WORD_VERSION_WORD2007 = 'Word2007';
    const MS_WORD_VERSION_WORD2010 = 'Word2010';
    const MS_WORD_VERSION_WORD2013 = 'Word2013';
    const MS_WORD_VERSION_WORD2016 = 'Word2016';
    const MS_WORD_VERSION_WORD2019 = 'Word2019';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMsWordVersionAllowableValues()
    {
        return [
            self::MS_WORD_VERSION_WORD2000,
            self::MS_WORD_VERSION_WORD2002,
            self::MS_WORD_VERSION_WORD2003,
            self::MS_WORD_VERSION_WORD2007,
            self::MS_WORD_VERSION_WORD2010,
            self::MS_WORD_VERSION_WORD2013,
            self::MS_WORD_VERSION_WORD2016,
            self::MS_WORD_VERSION_WORD2019
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
        $this->container['ms_word_version'] = isset($data['ms_word_version']) ? $data['ms_word_version'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        if (isset($this->container['ms_word_version'])) {
            $allowedValuesMsWordVersion = $this->getMsWordVersionAllowableValues();
            if (!in_array($this->container['ms_word_version'], $allowedValuesMsWordVersion)) {
                throw new \InvalidArgumentException('Property MsWordVersion in OptimizationOptions has invalid format.');
            }
        }
        if (!isset($this->container['ms_word_version'])) {
            throw new \InvalidArgumentException('Property MsWordVersion in OptimizationOptions is required.');
        }

    }

    /*
     * Gets ms_word_version
     *
     * @return string
     */
    public function getMsWordVersion()
    {
        return $this->container['ms_word_version'];
    }

    /*
     * Sets ms_word_version
     *
     * @param string $ms_word_version Gets or sets the specific MSWord version.
     *
     * @return $this
     */
    public function setMsWordVersion($ms_word_version)
    {
        $allowedValues = $this->getMsWordVersionAllowableValues();
        if ((!is_numeric($ms_word_version) && !in_array($ms_word_version, $allowedValues)) || (is_numeric($ms_word_version) && !in_array($allowedValues[$ms_word_version], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'ms_word_version', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['ms_word_version'] = $ms_word_version;
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

