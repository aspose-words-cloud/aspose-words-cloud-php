<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MarkdownSaveOptionsData.php">
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
use \Aspose\Words\ObjectSerializer;

/*
 * MarkdownSaveOptionsData
 *
 * @description Container class for markdown save options.
 */
class MarkdownSaveOptionsData extends TxtSaveOptionsBaseData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MarkdownSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'table_content_alignment' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'table_content_alignment' => 'null'
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
        'table_content_alignment' => 'TableContentAlignment'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'table_content_alignment' => 'setTableContentAlignment'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'table_content_alignment' => 'getTableContentAlignment'
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

    const TABLE_CONTENT_ALIGNMENT_AUTO = 'Auto';
    const TABLE_CONTENT_ALIGNMENT_LEFT = 'Left';
    const TABLE_CONTENT_ALIGNMENT_CENTER = 'Center';
    const TABLE_CONTENT_ALIGNMENT_RIGHT = 'Right';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTableContentAlignmentAllowableValues()
    {
        return [
            self::TABLE_CONTENT_ALIGNMENT_AUTO,
            self::TABLE_CONTENT_ALIGNMENT_LEFT,
            self::TABLE_CONTENT_ALIGNMENT_CENTER,
            self::TABLE_CONTENT_ALIGNMENT_RIGHT
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
        $this->container['table_content_alignment'] = isset($data['table_content_alignment']) ? $data['table_content_alignment'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();
        $allowedValues = $this->getTableContentAlignmentAllowableValues();
        if (!in_array($this->container['table_content_alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'table_content_alignment', must be one of '%s'",
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

        $allowedValues = $this->getTableContentAlignmentAllowableValues();
        if (!in_array($this->container['table_content_alignment'], $allowedValues)) {
            return false;
        }


        return true;
    }

    /*
     * Gets table_content_alignment
     *
     * @return string
     */
    public function getTableContentAlignment()
    {
        return $this->container['table_content_alignment'];
    }

    /*
     * Sets table_content_alignment
     *
     * @param string $table_content_alignment Gets or sets the value, that specifies how to align contents in tables when exporting into the Markdown format. The default value is Auto.
     *
     * @return $this
     */
    public function setTableContentAlignment($table_content_alignment)
    {
        $allowedValues = $this->getTableContentAlignmentAllowableValues();
        if ((!is_numeric($table_content_alignment) && !in_array($table_content_alignment, $allowedValues)) || (is_numeric($table_content_alignment) && !in_array($allowedValues[$table_content_alignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'table_content_alignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['table_content_alignment'] = $table_content_alignment;
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

