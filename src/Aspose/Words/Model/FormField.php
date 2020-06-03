<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FormField.php">
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
 * FormField
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * FormField
 *
 * @description FromField.
 */
class FormField extends NodeLink 
{
    const DISCRIMINATOR = 'Discriminator{propertyName&#x3D;&#x27;Type&#x27;, mapping&#x3D;null}';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "FormField";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'calculate_on_exit' => 'bool',
        'enabled' => 'bool',
        'entry_macro' => 'string',
        'exit_macro' => 'string',
        'help_text' => 'string',
        'name' => 'string',
        'own_help' => 'bool',
        'own_status' => 'bool',
        'status_text' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'calculate_on_exit' => null,
        'enabled' => null,
        'entry_macro' => null,
        'exit_macro' => null,
        'help_text' => null,
        'name' => null,
        'own_help' => null,
        'own_status' => null,
        'status_text' => null
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
        'calculate_on_exit' => 'CalculateOnExit',
        'enabled' => 'Enabled',
        'entry_macro' => 'EntryMacro',
        'exit_macro' => 'ExitMacro',
        'help_text' => 'HelpText',
        'name' => 'Name',
        'own_help' => 'OwnHelp',
        'own_status' => 'OwnStatus',
        'status_text' => 'StatusText'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calculate_on_exit' => 'setCalculateOnExit',
        'enabled' => 'setEnabled',
        'entry_macro' => 'setEntryMacro',
        'exit_macro' => 'setExitMacro',
        'help_text' => 'setHelpText',
        'name' => 'setName',
        'own_help' => 'setOwnHelp',
        'own_status' => 'setOwnStatus',
        'status_text' => 'setStatusText'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calculate_on_exit' => 'getCalculateOnExit',
        'enabled' => 'getEnabled',
        'entry_macro' => 'getEntryMacro',
        'exit_macro' => 'getExitMacro',
        'help_text' => 'getHelpText',
        'name' => 'getName',
        'own_help' => 'getOwnHelp',
        'own_status' => 'getOwnStatus',
        'status_text' => 'getStatusText'
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

        $this->container['calculate_on_exit'] = isset($data['calculate_on_exit']) ? $data['calculate_on_exit'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['entry_macro'] = isset($data['entry_macro']) ? $data['entry_macro'] : null;
        $this->container['exit_macro'] = isset($data['exit_macro']) ? $data['exit_macro'] : null;
        $this->container['help_text'] = isset($data['help_text']) ? $data['help_text'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['own_help'] = isset($data['own_help']) ? $data['own_help'] : null;
        $this->container['own_status'] = isset($data['own_status']) ? $data['own_status'] : null;
        $this->container['status_text'] = isset($data['status_text']) ? $data['status_text'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Discriminator{propertyName&#x3D;&#x27;Type&#x27;, mapping&#x3D;null}', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
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
     * Gets calculate_on_exit
     *
     * @return bool
     */
    public function getCalculateOnExit()
    {
        return $this->container['calculate_on_exit'];
    }

    /*
     * Sets calculate_on_exit
     *
     * @param bool $calculate_on_exit Gets or sets true if references to the specified form field are automatically updated whenever the field is exited.
     *
     * @return $this
     */
    public function setCalculateOnExit($calculate_on_exit)
    {
        $this->container['calculate_on_exit'] = $calculate_on_exit;

        return $this;
    }

    /*
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /*
     * Sets enabled
     *
     * @param bool $enabled Gets or sets true if a form field is enabled.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /*
     * Gets entry_macro
     *
     * @return string
     */
    public function getEntryMacro()
    {
        return $this->container['entry_macro'];
    }

    /*
     * Sets entry_macro
     *
     * @param string $entry_macro Gets or sets returns or sets an entry macro name for the form field.
     *
     * @return $this
     */
    public function setEntryMacro($entry_macro)
    {
        $this->container['entry_macro'] = $entry_macro;

        return $this;
    }

    /*
     * Gets exit_macro
     *
     * @return string
     */
    public function getExitMacro()
    {
        return $this->container['exit_macro'];
    }

    /*
     * Sets exit_macro
     *
     * @param string $exit_macro Gets or sets returns or sets an exit macro name for the form field.
     *
     * @return $this
     */
    public function setExitMacro($exit_macro)
    {
        $this->container['exit_macro'] = $exit_macro;

        return $this;
    }

    /*
     * Gets help_text
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->container['help_text'];
    }

    /*
     * Sets help_text
     *
     * @param string $help_text Gets or sets returns or sets the text that's displayed in a message box when the form field has the focus and the user presses F1.
     *
     * @return $this
     */
    public function setHelpText($help_text)
    {
        $this->container['help_text'] = $help_text;

        return $this;
    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name Gets or sets the form field name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets own_help
     *
     * @return bool
     */
    public function getOwnHelp()
    {
        return $this->container['own_help'];
    }

    /*
     * Sets own_help
     *
     * @param bool $own_help Gets or sets specifies the source of the text that's displayed in a message box when a form field has the focus and the user presses F1.
     *
     * @return $this
     */
    public function setOwnHelp($own_help)
    {
        $this->container['own_help'] = $own_help;

        return $this;
    }

    /*
     * Gets own_status
     *
     * @return bool
     */
    public function getOwnStatus()
    {
        return $this->container['own_status'];
    }

    /*
     * Sets own_status
     *
     * @param bool $own_status Gets or sets specifies the source of the text that's displayed in the status bar when a form field has the focus.
     *
     * @return $this
     */
    public function setOwnStatus($own_status)
    {
        $this->container['own_status'] = $own_status;

        return $this;
    }

    /*
     * Gets status_text
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->container['status_text'];
    }

    /*
     * Sets status_text
     *
     * @param string $status_text Gets or sets returns or sets the text that's displayed in the status bar when a form field has the focus.
     *
     * @return $this
     */
    public function setStatusText($status_text)
    {
        $this->container['status_text'] = $status_text;

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
