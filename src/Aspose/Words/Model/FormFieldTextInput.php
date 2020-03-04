<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FormFieldTextInput.php">
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
 * FormFieldTextInput
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * FormFieldTextInput
 *
 * @description FormField text input element.
 */
class FormFieldTextInput extends FormField 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "FormFieldTextInput";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'max_length' => 'int',
        'text_input_default' => 'string',
        'text_input_format' => 'string',
        'text_input_type' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'max_length' => 'int32',
        'text_input_default' => null,
        'text_input_format' => null,
        'text_input_type' => null
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
        'max_length' => 'MaxLength',
        'text_input_default' => 'TextInputDefault',
        'text_input_format' => 'TextInputFormat',
        'text_input_type' => 'TextInputType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_length' => 'setMaxLength',
        'text_input_default' => 'setTextInputDefault',
        'text_input_format' => 'setTextInputFormat',
        'text_input_type' => 'setTextInputType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_length' => 'getMaxLength',
        'text_input_default' => 'getTextInputDefault',
        'text_input_format' => 'getTextInputFormat',
        'text_input_type' => 'getTextInputType'
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

    const TEXT_INPUT_TYPE_REGULAR = 'Regular';
    const TEXT_INPUT_TYPE_NUMBER = 'Number';
    const TEXT_INPUT_TYPE_DATE = 'Date';
    const TEXT_INPUT_TYPE_CURRENT_DATE = 'CurrentDate';
    const TEXT_INPUT_TYPE_CURRENT_TIME = 'CurrentTime';
    const TEXT_INPUT_TYPE_CALCULATED = 'Calculated';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextInputTypeAllowableValues()
    {
        return [
            self::TEXT_INPUT_TYPE_REGULAR,
            self::TEXT_INPUT_TYPE_NUMBER,
            self::TEXT_INPUT_TYPE_DATE,
            self::TEXT_INPUT_TYPE_CURRENT_DATE,
            self::TEXT_INPUT_TYPE_CURRENT_TIME,
            self::TEXT_INPUT_TYPE_CALCULATED
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

        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['text_input_default'] = isset($data['text_input_default']) ? $data['text_input_default'] : null;
        $this->container['text_input_format'] = isset($data['text_input_format']) ? $data['text_input_format'] : null;
        $this->container['text_input_type'] = isset($data['text_input_type']) ? $data['text_input_type'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getTextInputTypeAllowableValues();
        if (!in_array($this->container['text_input_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text_input_type', must be one of '%s'",
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

        $allowedValues = $this->getTextInputTypeAllowableValues();
        if (!in_array($this->container['text_input_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets max_length
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /*
     * Sets max_length
     *
     * @param int $max_length Gets or sets maximum length for the text field. Zero when the length is not limited.
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /*
     * Gets text_input_default
     *
     * @return string
     */
    public function getTextInputDefault()
    {
        return $this->container['text_input_default'];
    }

    /*
     * Sets text_input_default
     *
     * @param string $text_input_default Gets or sets the default string or a calculation expression of a text form field.
     *
     * @return $this
     */
    public function setTextInputDefault($text_input_default)
    {
        $this->container['text_input_default'] = $text_input_default;

        return $this;
    }

    /*
     * Gets text_input_format
     *
     * @return string
     */
    public function getTextInputFormat()
    {
        return $this->container['text_input_format'];
    }

    /*
     * Sets text_input_format
     *
     * @param string $text_input_format Gets or sets returns or sets the text formatting for a text form field.
     *
     * @return $this
     */
    public function setTextInputFormat($text_input_format)
    {
        $this->container['text_input_format'] = $text_input_format;

        return $this;
    }

    /*
     * Gets text_input_type
     *
     * @return string
     */
    public function getTextInputType()
    {
        return $this->container['text_input_type'];
    }

    /*
     * Sets text_input_type
     *
     * @param string $text_input_type Gets or sets the type of a text form field.
     *
     * @return $this
     */
    public function setTextInputType($text_input_type)
    {
        $allowedValues = $this->getTextInputTypeAllowableValues();
        if ((!is_numeric($text_input_type) && !in_array($text_input_type, $allowedValues)) || (is_numeric($text_input_type) && !in_array($allowedValues[$text_input_type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'text_input_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['text_input_type'] = $text_input_type;

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
