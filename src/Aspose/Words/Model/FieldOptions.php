<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FieldOptions.php">
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
 * FieldOptions
 *
 * @description DTO for field options.
 */
class FieldOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "FieldOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'current_user' => '\Aspose\Words\Model\UserInformation',
        'custom_toc_style_separator' => 'string',
        'default_document_author' => 'string',
        'field_index_format' => 'string',
        'field_update_culture_name' => 'string',
        'field_update_culture_source' => 'string',
        'file_name' => 'string',
        'is_bidi_text_supported_on_update' => 'bool',
        'legacy_number_format' => 'bool',
        'pre_process_culture_name' => 'string',
        'template_name' => 'string',
        'use_invariant_culture_number_format' => 'bool',
        'built_in_templates_paths' => 'string[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'current_user' => 'null',
        'custom_toc_style_separator' => 'null',
        'default_document_author' => 'null',
        'field_index_format' => 'null',
        'field_update_culture_name' => 'null',
        'field_update_culture_source' => 'null',
        'file_name' => 'null',
        'is_bidi_text_supported_on_update' => 'null',
        'legacy_number_format' => 'null',
        'pre_process_culture_name' => 'null',
        'template_name' => 'null',
        'use_invariant_culture_number_format' => 'null',
        'built_in_templates_paths' => 'null'
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
        'current_user' => 'CurrentUser',
        'custom_toc_style_separator' => 'CustomTocStyleSeparator',
        'default_document_author' => 'DefaultDocumentAuthor',
        'field_index_format' => 'FieldIndexFormat',
        'field_update_culture_name' => 'FieldUpdateCultureName',
        'field_update_culture_source' => 'FieldUpdateCultureSource',
        'file_name' => 'FileName',
        'is_bidi_text_supported_on_update' => 'IsBidiTextSupportedOnUpdate',
        'legacy_number_format' => 'LegacyNumberFormat',
        'pre_process_culture_name' => 'PreProcessCultureName',
        'template_name' => 'TemplateName',
        'use_invariant_culture_number_format' => 'UseInvariantCultureNumberFormat',
        'built_in_templates_paths' => 'BuiltInTemplatesPaths'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_user' => 'setCurrentUser',
        'custom_toc_style_separator' => 'setCustomTocStyleSeparator',
        'default_document_author' => 'setDefaultDocumentAuthor',
        'field_index_format' => 'setFieldIndexFormat',
        'field_update_culture_name' => 'setFieldUpdateCultureName',
        'field_update_culture_source' => 'setFieldUpdateCultureSource',
        'file_name' => 'setFileName',
        'is_bidi_text_supported_on_update' => 'setIsBidiTextSupportedOnUpdate',
        'legacy_number_format' => 'setLegacyNumberFormat',
        'pre_process_culture_name' => 'setPreProcessCultureName',
        'template_name' => 'setTemplateName',
        'use_invariant_culture_number_format' => 'setUseInvariantCultureNumberFormat',
        'built_in_templates_paths' => 'setBuiltInTemplatesPaths'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_user' => 'getCurrentUser',
        'custom_toc_style_separator' => 'getCustomTocStyleSeparator',
        'default_document_author' => 'getDefaultDocumentAuthor',
        'field_index_format' => 'getFieldIndexFormat',
        'field_update_culture_name' => 'getFieldUpdateCultureName',
        'field_update_culture_source' => 'getFieldUpdateCultureSource',
        'file_name' => 'getFileName',
        'is_bidi_text_supported_on_update' => 'getIsBidiTextSupportedOnUpdate',
        'legacy_number_format' => 'getLegacyNumberFormat',
        'pre_process_culture_name' => 'getPreProcessCultureName',
        'template_name' => 'getTemplateName',
        'use_invariant_culture_number_format' => 'getUseInvariantCultureNumberFormat',
        'built_in_templates_paths' => 'getBuiltInTemplatesPaths'
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

    const FIELD_INDEX_FORMAT_TEMPLATE = 'Template';
    const FIELD_INDEX_FORMAT_CLASSIC = 'Classic';
    const FIELD_INDEX_FORMAT_FANCY = 'Fancy';
    const FIELD_INDEX_FORMAT_MODERN = 'Modern';
    const FIELD_INDEX_FORMAT_BULLETED = 'Bulleted';
    const FIELD_INDEX_FORMAT_FORMAL = 'Formal';
    const FIELD_INDEX_FORMAT_SIMPLE = 'Simple';
    const FIELD_UPDATE_CULTURE_SOURCE_CURRENT_THREAD = 'CurrentThread';
    const FIELD_UPDATE_CULTURE_SOURCE_FIELD_CODE = 'FieldCode';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldIndexFormatAllowableValues()
    {
        return [
            self::FIELD_INDEX_FORMAT_TEMPLATE,
            self::FIELD_INDEX_FORMAT_CLASSIC,
            self::FIELD_INDEX_FORMAT_FANCY,
            self::FIELD_INDEX_FORMAT_MODERN,
            self::FIELD_INDEX_FORMAT_BULLETED,
            self::FIELD_INDEX_FORMAT_FORMAL,
            self::FIELD_INDEX_FORMAT_SIMPLE
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldUpdateCultureSourceAllowableValues()
    {
        return [
            self::FIELD_UPDATE_CULTURE_SOURCE_CURRENT_THREAD,
            self::FIELD_UPDATE_CULTURE_SOURCE_FIELD_CODE
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
        $this->container['current_user'] = isset($data['current_user']) ? $data['current_user'] : null;
        $this->container['custom_toc_style_separator'] = isset($data['custom_toc_style_separator']) ? $data['custom_toc_style_separator'] : null;
        $this->container['default_document_author'] = isset($data['default_document_author']) ? $data['default_document_author'] : null;
        $this->container['field_index_format'] = isset($data['field_index_format']) ? $data['field_index_format'] : null;
        $this->container['field_update_culture_name'] = isset($data['field_update_culture_name']) ? $data['field_update_culture_name'] : null;
        $this->container['field_update_culture_source'] = isset($data['field_update_culture_source']) ? $data['field_update_culture_source'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['is_bidi_text_supported_on_update'] = isset($data['is_bidi_text_supported_on_update']) ? $data['is_bidi_text_supported_on_update'] : null;
        $this->container['legacy_number_format'] = isset($data['legacy_number_format']) ? $data['legacy_number_format'] : null;
        $this->container['pre_process_culture_name'] = isset($data['pre_process_culture_name']) ? $data['pre_process_culture_name'] : null;
        $this->container['template_name'] = isset($data['template_name']) ? $data['template_name'] : null;
        $this->container['use_invariant_culture_number_format'] = isset($data['use_invariant_culture_number_format']) ? $data['use_invariant_culture_number_format'] : null;
        $this->container['built_in_templates_paths'] = isset($data['built_in_templates_paths']) ? $data['built_in_templates_paths'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {

        if (isset($this->container['current_user'])) {
            $this->getCurrentUser()->validate();
        }

        if (isset($this->container['field_index_format'])) {
            $allowedValuesFieldIndexFormat = $this->getFieldIndexFormatAllowableValues();
            if (!in_array($this->container['field_index_format'], $allowedValuesFieldIndexFormat)) {
                throw new \InvalidArgumentException('Property FieldIndexFormat in FieldOptions has invalid format.');
            }
        }

        if (isset($this->container['field_update_culture_source'])) {
            $allowedValuesFieldUpdateCultureSource = $this->getFieldUpdateCultureSourceAllowableValues();
            if (!in_array($this->container['field_update_culture_source'], $allowedValuesFieldUpdateCultureSource)) {
                throw new \InvalidArgumentException('Property FieldUpdateCultureSource in FieldOptions has invalid format.');
            }
        }

    }

    /*
     * Gets current_user
     *
     * @return \Aspose\Words\Model\UserInformation
     */
    public function getCurrentUser()
    {
        return $this->container['current_user'];
    }

    /*
     * Sets current_user
     *
     * @param \Aspose\Words\Model\UserInformation $current_user Gets or sets Curren tUser.
     *
     * @return $this
     */
    public function setCurrentUser($current_user)
    {
        $this->container['current_user'] = $current_user;
        return $this;
    }


    /*
     * Gets custom_toc_style_separator
     *
     * @return string
     */
    public function getCustomTocStyleSeparator()
    {
        return $this->container['custom_toc_style_separator'];
    }

    /*
     * Sets custom_toc_style_separator
     *
     * @param string $custom_toc_style_separator Gets or sets Custom Toc Style Separator.
     *
     * @return $this
     */
    public function setCustomTocStyleSeparator($custom_toc_style_separator)
    {
        $this->container['custom_toc_style_separator'] = $custom_toc_style_separator;
        return $this;
    }


    /*
     * Gets default_document_author
     *
     * @return string
     */
    public function getDefaultDocumentAuthor()
    {
        return $this->container['default_document_author'];
    }

    /*
     * Sets default_document_author
     *
     * @param string $default_document_author Gets or sets Default Document Author.
     *
     * @return $this
     */
    public function setDefaultDocumentAuthor($default_document_author)
    {
        $this->container['default_document_author'] = $default_document_author;
        return $this;
    }


    /*
     * Gets field_index_format
     *
     * @return string
     */
    public function getFieldIndexFormat()
    {
        return $this->container['field_index_format'];
    }

    /*
     * Sets field_index_format
     *
     * @param string $field_index_format Gets or sets Field Index Format.
     *
     * @return $this
     */
    public function setFieldIndexFormat($field_index_format)
    {
        $allowedValues = $this->getFieldIndexFormatAllowableValues();
        if ((!is_numeric($field_index_format) && !in_array($field_index_format, $allowedValues)) || (is_numeric($field_index_format) && !in_array($allowedValues[$field_index_format], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'field_index_format', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['field_index_format'] = $field_index_format;
        return $this;
    }


    /*
     * Gets field_update_culture_name
     *
     * @return string
     */
    public function getFieldUpdateCultureName()
    {
        return $this->container['field_update_culture_name'];
    }

    /*
     * Sets field_update_culture_name
     *
     * @param string $field_update_culture_name Gets or sets Field Update Culture Name. It is used for all fields if FieldUpdateCultureSource is FieldCode.
     *
     * @return $this
     */
    public function setFieldUpdateCultureName($field_update_culture_name)
    {
        $this->container['field_update_culture_name'] = $field_update_culture_name;
        return $this;
    }


    /*
     * Gets field_update_culture_source
     *
     * @return string
     */
    public function getFieldUpdateCultureSource()
    {
        return $this->container['field_update_culture_source'];
    }

    /*
     * Sets field_update_culture_source
     *
     * @param string $field_update_culture_source Gets or sets Field Update Culture Source.
     *
     * @return $this
     */
    public function setFieldUpdateCultureSource($field_update_culture_source)
    {
        $allowedValues = $this->getFieldUpdateCultureSourceAllowableValues();
        if ((!is_numeric($field_update_culture_source) && !in_array($field_update_culture_source, $allowedValues)) || (is_numeric($field_update_culture_source) && !in_array($allowedValues[$field_update_culture_source], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'field_update_culture_source', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['field_update_culture_source'] = $field_update_culture_source;
        return $this;
    }


    /*
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /*
     * Sets file_name
     *
     * @param string $file_name Gets or sets File Name.
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;
        return $this;
    }


    /*
     * Gets is_bidi_text_supported_on_update
     *
     * @return bool
     */
    public function getIsBidiTextSupportedOnUpdate()
    {
        return $this->container['is_bidi_text_supported_on_update'];
    }

    /*
     * Sets is_bidi_text_supported_on_update
     *
     * @param bool $is_bidi_text_supported_on_update Gets or sets if Bidi Text Supported OnUpdate.
     *
     * @return $this
     */
    public function setIsBidiTextSupportedOnUpdate($is_bidi_text_supported_on_update)
    {
        $this->container['is_bidi_text_supported_on_update'] = $is_bidi_text_supported_on_update;
        return $this;
    }


    /*
     * Gets legacy_number_format
     *
     * @return bool
     */
    public function getLegacyNumberFormat()
    {
        return $this->container['legacy_number_format'];
    }

    /*
     * Sets legacy_number_format
     *
     * @param bool $legacy_number_format Gets or sets if Legacy Number Format.
     *
     * @return $this
     */
    public function setLegacyNumberFormat($legacy_number_format)
    {
        $this->container['legacy_number_format'] = $legacy_number_format;
        return $this;
    }


    /*
     * Gets pre_process_culture_name
     *
     * @return string
     */
    public function getPreProcessCultureName()
    {
        return $this->container['pre_process_culture_name'];
    }

    /*
     * Sets pre_process_culture_name
     *
     * @param string $pre_process_culture_name Gets or sets PreProcess Culture Name. It is a culture code for DOC fields.
     *
     * @return $this
     */
    public function setPreProcessCultureName($pre_process_culture_name)
    {
        $this->container['pre_process_culture_name'] = $pre_process_culture_name;
        return $this;
    }


    /*
     * Gets template_name
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /*
     * Sets template_name
     *
     * @param string $template_name Gets or sets Template Name.
     *
     * @return $this
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;
        return $this;
    }


    /*
     * Gets use_invariant_culture_number_format
     *
     * @return bool
     */
    public function getUseInvariantCultureNumberFormat()
    {
        return $this->container['use_invariant_culture_number_format'];
    }

    /*
     * Sets use_invariant_culture_number_format
     *
     * @param bool $use_invariant_culture_number_format Gets or sets if Use Invariant Culture Number Format.
     *
     * @return $this
     */
    public function setUseInvariantCultureNumberFormat($use_invariant_culture_number_format)
    {
        $this->container['use_invariant_culture_number_format'] = $use_invariant_culture_number_format;
        return $this;
    }


    /*
     * Gets built_in_templates_paths
     *
     * @return string[]
     */
    public function getBuiltInTemplatesPaths()
    {
        return $this->container['built_in_templates_paths'];
    }

    /*
     * Sets built_in_templates_paths
     *
     * @param string[] $built_in_templates_paths Gets or sets BuiltIn Templates Paths.
     *
     * @return $this
     */
    public function setBuiltInTemplatesPaths($built_in_templates_paths)
    {
        $this->container['built_in_templates_paths'] = $built_in_templates_paths;
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

