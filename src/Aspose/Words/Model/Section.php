<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Section.php">
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
 * Section
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * Section
 *
 * @description Section element.
 */
class Section extends LinkElement 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Section";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'child_nodes' => '\Aspose\Words\Model\NodeLink[]',
        'header_footers' => '\Aspose\Words\Model\LinkElement',
        'page_setup' => '\Aspose\Words\Model\LinkElement',
        'paragraphs' => '\Aspose\Words\Model\LinkElement',
        'tables' => '\Aspose\Words\Model\LinkElement'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'child_nodes' => null,
        'header_footers' => null,
        'page_setup' => null,
        'paragraphs' => null,
        'tables' => null
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
        'header_footers' => 'HeaderFooters',
        'page_setup' => 'PageSetup',
        'paragraphs' => 'Paragraphs',
        'tables' => 'Tables'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'child_nodes' => 'setChildNodes',
        'header_footers' => 'setHeaderFooters',
        'page_setup' => 'setPageSetup',
        'paragraphs' => 'setParagraphs',
        'tables' => 'setTables'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'child_nodes' => 'getChildNodes',
        'header_footers' => 'getHeaderFooters',
        'page_setup' => 'getPageSetup',
        'paragraphs' => 'getParagraphs',
        'tables' => 'getTables'
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
        $this->container['header_footers'] = isset($data['header_footers']) ? $data['header_footers'] : null;
        $this->container['page_setup'] = isset($data['page_setup']) ? $data['page_setup'] : null;
        $this->container['paragraphs'] = isset($data['paragraphs']) ? $data['paragraphs'] : null;
        $this->container['tables'] = isset($data['tables']) ? $data['tables'] : null;
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
     * Gets header_footers
     *
     * @return \Aspose\Words\Model\LinkElement
     */
    public function getHeaderFooters()
    {
        return $this->container['header_footers'];
    }

    /*
     * Sets header_footers
     *
     * @param \Aspose\Words\Model\LinkElement $header_footers header_footers
     *
     * @return $this
     */
    public function setHeaderFooters($header_footers)
    {
        $this->container['header_footers'] = $header_footers;

        return $this;
    }

    /*
     * Gets page_setup
     *
     * @return \Aspose\Words\Model\LinkElement
     */
    public function getPageSetup()
    {
        return $this->container['page_setup'];
    }

    /*
     * Sets page_setup
     *
     * @param \Aspose\Words\Model\LinkElement $page_setup page_setup
     *
     * @return $this
     */
    public function setPageSetup($page_setup)
    {
        $this->container['page_setup'] = $page_setup;

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
     * Gets tables
     *
     * @return \Aspose\Words\Model\LinkElement
     */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /*
     * Sets tables
     *
     * @param \Aspose\Words\Model\LinkElement $tables tables
     *
     * @return $this
     */
    public function setTables($tables)
    {
        $this->container['tables'] = $tables;

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
