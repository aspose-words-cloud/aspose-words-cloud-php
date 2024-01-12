<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListInfo.php">
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
 * ListInfo
 *
 * @description DTO container with a single document list.
 */
class ListInfo extends LinkElement
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ListInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'list_id' => 'int',
        'is_multi_level' => 'bool',
        'is_restart_at_each_section' => 'bool',
        'is_list_style_definition' => 'bool',
        'is_list_style_reference' => 'bool',
        'style' => '\Aspose\Words\Model\Style',
        'list_levels' => '\Aspose\Words\Model\ListLevels'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'list_id' => 'null',
        'is_multi_level' => 'null',
        'is_restart_at_each_section' => 'null',
        'is_list_style_definition' => 'null',
        'is_list_style_reference' => 'null',
        'style' => 'null',
        'list_levels' => 'null'
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
        'list_id' => 'ListId',
        'is_multi_level' => 'IsMultiLevel',
        'is_restart_at_each_section' => 'IsRestartAtEachSection',
        'is_list_style_definition' => 'IsListStyleDefinition',
        'is_list_style_reference' => 'IsListStyleReference',
        'style' => 'Style',
        'list_levels' => 'ListLevels'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_id' => 'setListId',
        'is_multi_level' => 'setIsMultiLevel',
        'is_restart_at_each_section' => 'setIsRestartAtEachSection',
        'is_list_style_definition' => 'setIsListStyleDefinition',
        'is_list_style_reference' => 'setIsListStyleReference',
        'style' => 'setStyle',
        'list_levels' => 'setListLevels'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_id' => 'getListId',
        'is_multi_level' => 'getIsMultiLevel',
        'is_restart_at_each_section' => 'getIsRestartAtEachSection',
        'is_list_style_definition' => 'getIsListStyleDefinition',
        'is_list_style_reference' => 'getIsListStyleReference',
        'style' => 'getStyle',
        'list_levels' => 'getListLevels'
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
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['is_multi_level'] = isset($data['is_multi_level']) ? $data['is_multi_level'] : null;
        $this->container['is_restart_at_each_section'] = isset($data['is_restart_at_each_section']) ? $data['is_restart_at_each_section'] : null;
        $this->container['is_list_style_definition'] = isset($data['is_list_style_definition']) ? $data['is_list_style_definition'] : null;
        $this->container['is_list_style_reference'] = isset($data['is_list_style_reference']) ? $data['is_list_style_reference'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['list_levels'] = isset($data['list_levels']) ? $data['list_levels'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (!isset($this->container['list_id'])) {
            throw new \InvalidArgumentException('Property ListId in ListInfo is required.');
        }

        if (!isset($this->container['is_multi_level'])) {
            throw new \InvalidArgumentException('Property IsMultiLevel in ListInfo is required.');
        }

        if (!isset($this->container['is_restart_at_each_section'])) {
            throw new \InvalidArgumentException('Property IsRestartAtEachSection in ListInfo is required.');
        }

        if (!isset($this->container['is_list_style_definition'])) {
            throw new \InvalidArgumentException('Property IsListStyleDefinition in ListInfo is required.');
        }

        if (!isset($this->container['is_list_style_reference'])) {
            throw new \InvalidArgumentException('Property IsListStyleReference in ListInfo is required.');
        }


        if (isset($this->container['style'])) {
            $this->getStyle()->validate();
        }


        if (isset($this->container['list_levels'])) {
            $this->getListLevels()->validate();
        }

    }

    /*
     * Gets list_id
     *
     * @return int
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /*
     * Sets list_id
     *
     * @param int $list_id Gets or sets the unique identifier of the list. You do not normally need to use this property. But if you use it, you normally do so in conjunction with the Aspose.Words.Lists.ListCollection.GetListByListId(System.Int32) method to find a list by its identifier.
     *
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;
        return $this;
    }


    /*
     * Gets is_multi_level
     *
     * @return bool
     */
    public function getIsMultiLevel()
    {
        return $this->container['is_multi_level'];
    }

    /*
     * Sets is_multi_level
     *
     * @param bool $is_multi_level Gets or sets a value indicating whether the list contains 9 levels; false when 1 level. The lists that you create with Aspose.Words are always multi-level lists and contain 9 levels. Microsoft Word 2003 and later always create multi-level lists with 9 levels. But in some documents, created with earlier versions of Microsoft Word you might encounter lists that have 1 level only.
     *
     * @return $this
     */
    public function setIsMultiLevel($is_multi_level)
    {
        $this->container['is_multi_level'] = $is_multi_level;
        return $this;
    }


    /*
     * Gets is_restart_at_each_section
     *
     * @return bool
     */
    public function getIsRestartAtEachSection()
    {
        return $this->container['is_restart_at_each_section'];
    }

    /*
     * Sets is_restart_at_each_section
     *
     * @param bool $is_restart_at_each_section Gets or sets a value indicating whether list should be restarted at each section. The default value is false. This option is supported only in RTF, DOC and DOCX document formats. This option will be written to DOCX only if Aspose.Words.Saving.OoxmlCompliance is higher then Aspose.Words.Saving.OoxmlCompliance.Ecma376_2006.
     *
     * @return $this
     */
    public function setIsRestartAtEachSection($is_restart_at_each_section)
    {
        $this->container['is_restart_at_each_section'] = $is_restart_at_each_section;
        return $this;
    }


    /*
     * Gets is_list_style_definition
     *
     * @return bool
     */
    public function getIsListStyleDefinition()
    {
        return $this->container['is_list_style_definition'];
    }

    /*
     * Sets is_list_style_definition
     *
     * @param bool $is_list_style_definition Gets or sets a value indicating whether this list is a definition of a list style. When this property is true, the Aspose.Words.Lists.List.Style property returns the list style that this list defines. By modifying properties of a list that defines a list style, you modify The properties of the list style. A list that is a definition of a list style cannot be applied directly to paragraphs to make them numbered. Aspose.Words.Lists.List.Style Aspose.Words.Lists.List.IsListStyleReference.
     *
     * @return $this
     */
    public function setIsListStyleDefinition($is_list_style_definition)
    {
        $this->container['is_list_style_definition'] = $is_list_style_definition;
        return $this;
    }


    /*
     * Gets is_list_style_reference
     *
     * @return bool
     */
    public function getIsListStyleReference()
    {
        return $this->container['is_list_style_reference'];
    }

    /*
     * Sets is_list_style_reference
     *
     * @param bool $is_list_style_reference Gets or sets a value indicating whether this list is a reference to a list style. Note, modifying properties of a list that is a reference to list style has no effect. The list formatting specified in the list style itself always takes precedence. Aspose.Words.Lists.List.Style Aspose.Words.Lists.List.IsListStyleDefinition.
     *
     * @return $this
     */
    public function setIsListStyleReference($is_list_style_reference)
    {
        $this->container['is_list_style_reference'] = $is_list_style_reference;
        return $this;
    }


    /*
     * Gets style
     *
     * @return \Aspose\Words\Model\Style
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /*
     * Sets style
     *
     * @param \Aspose\Words\Model\Style $style Gets or sets the list style that this list references or defines. If this list is not associated with a list style, the property will return null. A list could be a reference to a list style, in this case Aspose.Words.Lists.List.IsListStyleReference will be true. A list could be a definition of a list style, in this case Aspose.Words.Lists.List.IsListStyleDefinition will be true. Such a list cannot be applied to paragraphs in the document directly.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;
        return $this;
    }


    /*
     * Gets list_levels
     *
     * @return \Aspose\Words\Model\ListLevels
     */
    public function getListLevels()
    {
        return $this->container['list_levels'];
    }

    /*
     * Sets list_levels
     *
     * @param \Aspose\Words\Model\ListLevels $list_levels Gets or sets the collection of list levels for this list. Use this property to access and modify formatting individual to each level of the list.
     *
     * @return $this
     */
    public function setListLevels($list_levels)
    {
        $this->container['list_levels'] = $list_levels;
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

