<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClassificationResponse.php">
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
 * ClassificationResponse
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * ClassificationResponse
 *
 * @description This response should be returned by the service when handling: PUT https://api.aspose.cloud/v4.0/words/classify.
 */
class ClassificationResponse extends WordsResponse 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ClassificationResponse";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'best_class_name' => 'string',
        'best_class_probability' => 'double',
        'best_results' => '\Aspose\Words\Model\ClassificationResult[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'best_class_name' => null,
        'best_class_probability' => 'double',
        'best_results' => null
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
        'best_class_name' => 'BestClassName',
        'best_class_probability' => 'BestClassProbability',
        'best_results' => 'BestResults'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'best_class_name' => 'setBestClassName',
        'best_class_probability' => 'setBestClassProbability',
        'best_results' => 'setBestResults'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'best_class_name' => 'getBestClassName',
        'best_class_probability' => 'getBestClassProbability',
        'best_results' => 'getBestResults'
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

        $this->container['best_class_name'] = isset($data['best_class_name']) ? $data['best_class_name'] : null;
        $this->container['best_class_probability'] = isset($data['best_class_probability']) ? $data['best_class_probability'] : null;
        $this->container['best_results'] = isset($data['best_results']) ? $data['best_results'] : null;
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
     * Gets best_class_name
     *
     * @return string
     */
    public function getBestClassName()
    {
        return $this->container['best_class_name'];
    }

    /*
     * Sets best_class_name
     *
     * @param string $best_class_name Gets or sets best class name.
     *
     * @return $this
     */
    public function setBestClassName($best_class_name)
    {
        $this->container['best_class_name'] = $best_class_name;

        return $this;
    }

    /*
     * Gets best_class_probability
     *
     * @return double
     */
    public function getBestClassProbability()
    {
        return $this->container['best_class_probability'];
    }

    /*
     * Sets best_class_probability
     *
     * @param double $best_class_probability Gets or sets best class probability.
     *
     * @return $this
     */
    public function setBestClassProbability($best_class_probability)
    {
        $this->container['best_class_probability'] = $best_class_probability;

        return $this;
    }

    /*
     * Gets best_results
     *
     * @return \Aspose\Words\Model\ClassificationResult[]
     */
    public function getBestResults()
    {
        return $this->container['best_results'];
    }

    /*
     * Sets best_results
     *
     * @param \Aspose\Words\Model\ClassificationResult[] $best_results Gets or sets array of best classes results.
     *
     * @return $this
     */
    public function setBestResults($best_results)
    {
        $this->container['best_results'] = $best_results;

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
