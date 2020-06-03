<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HeaderFooter.php">
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
 * HeaderFooter
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * HeaderFooter
 *
 * @description Section element.
 */
class HeaderFooter extends HeaderFooterLink 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "HeaderFooter";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'child_nodes' => '\Aspose\Words\Model\NodeLink[]',
        'drawing_objects' => '\Aspose\Words\Model\LinkElement',
        'paragraphs' => '\Aspose\Words\Model\LinkElement'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'child_nodes' => null,
        'drawing_objects' => null,
        'paragraphs' => null
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
        'child_nodes' => 'ChildNodes',
        'drawing_objects' => 'DrawingObjects',
        'paragraphs' => 'Paragraphs'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'child_nodes' => 'setChildNodes',
        'drawing_objects' => 'setDrawingObjects',
        'paragraphs' => 'setParagraphs'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'child_nodes' => 'getChildNodes',
        'drawing_objects' => 'getDrawingObjects',
        'paragraphs' => 'getParagraphs'
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

        $this->container['child_nodes'] = isset($data['child_nodes']) ? $data['child_nodes'] : null;
        $this->container['drawing_objects'] = isset($data['drawing_objects']) ? $data['drawing_objects'] : null;
        $this->container['paragraphs'] = isset($data['paragraphs']) ? $data['paragraphs'] : null;
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
     * Gets child_nodes
     *
     * @return \Aspose\Words\Model\NodeLink[]
     */
    public function getChildNodes()
    {
        return $this->container['child_nodes'];
    }

    /*
     * Sets child_nodes
     *
     * @param \Aspose\Words\Model\NodeLink[] $child_nodes Gets or sets child nodes.
     *
     * @return $this
     */
    public function setChildNodes($child_nodes)
    {
        $this->container['child_nodes'] = $child_nodes;

        return $this;
    }

    /*
     * Gets drawing_objects
     *
     * @return \Aspose\Words\Model\LinkElement
     */
    public function getDrawingObjects()
    {
        return $this->container['drawing_objects'];
    }

    /*
     * Sets drawing_objects
     *
     * @param \Aspose\Words\Model\LinkElement $drawing_objects drawing_objects
     *
     * @return $this
     */
    public function setDrawingObjects($drawing_objects)
    {
        $this->container['drawing_objects'] = $drawing_objects;

        return $this;
    }

    /*
     * Gets paragraphs
     *
     * @return \Aspose\Words\Model\LinkElement
     */
    public function getParagraphs()
    {
        return $this->container['paragraphs'];
    }

    /*
     * Sets paragraphs
     *
     * @param \Aspose\Words\Model\LinkElement $paragraphs paragraphs
     *
     * @return $this
     */
    public function setParagraphs($paragraphs)
    {
        $this->container['paragraphs'] = $paragraphs;

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
