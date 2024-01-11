<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FormFieldCheckbox.php">
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
 * FormFieldCheckbox
 *
 * @description FormField checkbox element.
 */
class FormFieldCheckbox extends FormField
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "FormFieldCheckbox";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'is_check_box_exact_size' => 'bool',
        'check_box_size' => 'double',
        'checked' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'is_check_box_exact_size' => 'null',
        'check_box_size' => 'null',
        'checked' => 'null'
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
        'is_check_box_exact_size' => 'IsCheckBoxExactSize',
        'check_box_size' => 'CheckBoxSize',
        'checked' => 'Checked'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_check_box_exact_size' => 'setIsCheckBoxExactSize',
        'check_box_size' => 'setCheckBoxSize',
        'checked' => 'setChecked'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_check_box_exact_size' => 'getIsCheckBoxExactSize',
        'check_box_size' => 'getCheckBoxSize',
        'checked' => 'getChecked'
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
        $this->container['is_check_box_exact_size'] = isset($data['is_check_box_exact_size']) ? $data['is_check_box_exact_size'] : null;
        $this->container['check_box_size'] = isset($data['check_box_size']) ? $data['check_box_size'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (!isset($this->container['checked'])) {
            throw new \InvalidArgumentException('Property Checked in FormFieldCheckbox is required.');
        }

    }

    /*
     * Gets is_check_box_exact_size
     *
     * @return bool
     */
    public function getIsCheckBoxExactSize()
    {
        return $this->container['is_check_box_exact_size'];
    }

    /*
     * Sets is_check_box_exact_size
     *
     * @param bool $is_check_box_exact_size Gets or sets a value indicating whether the size of the textbox is automatic or specified explicitly.
     *
     * @return $this
     */
    public function setIsCheckBoxExactSize($is_check_box_exact_size)
    {
        $this->container['is_check_box_exact_size'] = $is_check_box_exact_size;
        return $this;
    }


    /*
     * Gets check_box_size
     *
     * @return double
     */
    public function getCheckBoxSize()
    {
        return $this->container['check_box_size'];
    }

    /*
     * Sets check_box_size
     *
     * @param double $check_box_size Gets or sets the size of the checkbox in points. Has effect only when IsCheckBoxExactSize is true.
     *
     * @return $this
     */
    public function setCheckBoxSize($check_box_size)
    {
        $this->container['check_box_size'] = $check_box_size;
        return $this;
    }


    /*
     * Gets checked
     *
     * @return bool
     */
    public function getChecked()
    {
        return $this->container['checked'];
    }

    /*
     * Sets checked
     *
     * @param bool $checked Gets or sets the checked status of the check box form field.
     *
     * @return $this
     */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;
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

