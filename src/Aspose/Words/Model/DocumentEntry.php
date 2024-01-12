<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DocumentEntry.php">
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
 * DocumentEntry
 *
 * @description Represents a document which will be appended to the original resource document.
 */
class DocumentEntry extends BaseEntry
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DocumentEntry";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'encrypted_password' => 'string',
        'import_format_mode' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'encrypted_password' => 'null',
        'import_format_mode' => 'null'
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
        'encrypted_password' => 'EncryptedPassword',
        'import_format_mode' => 'ImportFormatMode'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encrypted_password' => 'setEncryptedPassword',
        'import_format_mode' => 'setImportFormatMode'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encrypted_password' => 'getEncryptedPassword',
        'import_format_mode' => 'getImportFormatMode'
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

    const IMPORT_FORMAT_MODE_USE_DESTINATION_STYLES = 'UseDestinationStyles';
    const IMPORT_FORMAT_MODE_KEEP_SOURCE_FORMATTING = 'KeepSourceFormatting';
    const IMPORT_FORMAT_MODE_KEEP_DIFFERENT_STYLES = 'KeepDifferentStyles';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImportFormatModeAllowableValues()
    {
        return [
            self::IMPORT_FORMAT_MODE_USE_DESTINATION_STYLES,
            self::IMPORT_FORMAT_MODE_KEEP_SOURCE_FORMATTING,
            self::IMPORT_FORMAT_MODE_KEEP_DIFFERENT_STYLES
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
        $this->container['encrypted_password'] = isset($data['encrypted_password']) ? $data['encrypted_password'] : null;
        $this->container['import_format_mode'] = isset($data['import_format_mode']) ? $data['import_format_mode'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (isset($this->container['import_format_mode'])) {
            $allowedValuesImportFormatMode = $this->getImportFormatModeAllowableValues();
            if (!in_array($this->container['import_format_mode'], $allowedValuesImportFormatMode)) {
                throw new \InvalidArgumentException('Property ImportFormatMode in DocumentEntry has invalid format.');
            }
        }
        if (!isset($this->container['import_format_mode'])) {
            throw new \InvalidArgumentException('Property ImportFormatMode in DocumentEntry is required.');
        }

    }

    /*
     * Gets encrypted_password
     *
     * @return string
     */
    public function getEncryptedPassword()
    {
        return $this->container['encrypted_password'];
    }

    /*
     * Sets encrypted_password
     *
     * @param string $encrypted_password Gets or sets document password encrypted on API public key. The default value is null (the document has no password).
     *
     * @return $this
     */
    public function setEncryptedPassword($encrypted_password)
    {
        $this->container['encrypted_password'] = $encrypted_password;
        return $this;
    }


    /*
     * Gets import_format_mode
     *
     * @return string
     */
    public function getImportFormatMode()
    {
        return $this->container['import_format_mode'];
    }

    /*
     * Sets import_format_mode
     *
     * @param string $import_format_mode Gets or sets the option that controls formatting will be used: appended or destination document. Can be KeepSourceFormatting or UseDestinationStyles.
     *
     * @return $this
     */
    public function setImportFormatMode($import_format_mode)
    {
        $allowedValues = $this->getImportFormatModeAllowableValues();
        if ((!is_numeric($import_format_mode) && !in_array($import_format_mode, $allowedValues)) || (is_numeric($import_format_mode) && !in_array($allowedValues[$import_format_mode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'import_format_mode', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['import_format_mode'] = $import_format_mode;
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
        $resultFilesContent = parent::collectFilesContent($resultFilesContent);
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

