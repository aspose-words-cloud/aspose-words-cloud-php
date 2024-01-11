<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FormField.php">
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
 * FormField
 *
 * @description FromField.
 */
abstract class FormField extends NodeLink
{
    const DISCRIMINATOR = null;

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
        'name' => 'string',
        'enabled' => 'bool',
        'status_text' => 'string',
        'own_status' => 'bool',
        'help_text' => 'string',
        'own_help' => 'bool',
        'calculate_on_exit' => 'bool',
        'entry_macro' => 'string',
        'exit_macro' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'name' => 'null',
        'enabled' => 'null',
        'status_text' => 'null',
        'own_status' => 'null',
        'help_text' => 'null',
        'own_help' => 'null',
        'calculate_on_exit' => 'null',
        'entry_macro' => 'null',
        'exit_macro' => 'null'
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
        'name' => 'Name',
        'enabled' => 'Enabled',
        'status_text' => 'StatusText',
        'own_status' => 'OwnStatus',
        'help_text' => 'HelpText',
        'own_help' => 'OwnHelp',
        'calculate_on_exit' => 'CalculateOnExit',
        'entry_macro' => 'EntryMacro',
        'exit_macro' => 'ExitMacro'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'enabled' => 'setEnabled',
        'status_text' => 'setStatusText',
        'own_status' => 'setOwnStatus',
        'help_text' => 'setHelpText',
        'own_help' => 'setOwnHelp',
        'calculate_on_exit' => 'setCalculateOnExit',
        'entry_macro' => 'setEntryMacro',
        'exit_macro' => 'setExitMacro'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'enabled' => 'getEnabled',
        'status_text' => 'getStatusText',
        'own_status' => 'getOwnStatus',
        'help_text' => 'getHelpText',
        'own_help' => 'getOwnHelp',
        'calculate_on_exit' => 'getCalculateOnExit',
        'entry_macro' => 'getEntryMacro',
        'exit_macro' => 'getExitMacro'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['status_text'] = isset($data['status_text']) ? $data['status_text'] : null;
        $this->container['own_status'] = isset($data['own_status']) ? $data['own_status'] : null;
        $this->container['help_text'] = isset($data['help_text']) ? $data['help_text'] : null;
        $this->container['own_help'] = isset($data['own_help']) ? $data['own_help'] : null;
        $this->container['calculate_on_exit'] = isset($data['calculate_on_exit']) ? $data['calculate_on_exit'] : null;
        $this->container['entry_macro'] = isset($data['entry_macro']) ? $data['entry_macro'] : null;
        $this->container['exit_macro'] = isset($data['exit_macro']) ? $data['exit_macro'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

        if (!isset($this->container['name'])) {
            throw new \InvalidArgumentException('Property Name in FormField is required.');
        }

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
     * @param bool $enabled Gets or sets a value indicating whether a form field is enabled. If a form field is enabled, its contents can be changed as the form is filled in.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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
     * @param string $status_text Gets or sets text, displayed in the status bar when a form field has the focus. If the OwnStatus property is set to true, the StatusText property specifies the status bar text. If the OwnStatus property is set to false, the StatusText property specifies the name of an AutoText entry that contains status bar text for the form field.
     *
     * @return $this
     */
    public function setStatusText($status_text)
    {
        $this->container['status_text'] = $status_text;
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
     * @param bool $own_status Gets or sets a value indicating whether the source of the text that's displayed in the status bar when a form field has the focus. If true, the text specified by the StatusText property is displayed. If false, the text of the AutoText entry specified by the StatusText property is displayed.
     *
     * @return $this
     */
    public function setOwnStatus($own_status)
    {
        $this->container['own_status'] = $own_status;
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
     * @param string $help_text Gets or sets text, displayed in a message box when the form field has the focus and the user presses F1. If the OwnHelp property is set to True, HelpText specifies the text string value. If OwnHelp is set to False, HelpText specifies the name of an AutoText entry that contains help text for the form field.
     *
     * @return $this
     */
    public function setHelpText($help_text)
    {
        $this->container['help_text'] = $help_text;
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
     * @param bool $own_help Gets or sets a value indicating whether the source of the text that's displayed in a message box when a form field has the focus and the user presses F1. If True, the text specified by the HelpText property is displayed. If False, the text in the AutoText entry specified by the HelpText property is displayed.
     *
     * @return $this
     */
    public function setOwnHelp($own_help)
    {
        $this->container['own_help'] = $own_help;
        return $this;
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
     * @param bool $calculate_on_exit Gets or sets a value indicating whether references to the specified form field are automatically updated whenever the field is exited. Setting CalculateOnExit only affects the behavior of the form field when the document is opened in Microsoft Word. Aspose.Words never updates references to the form field.
     *
     * @return $this
     */
    public function setCalculateOnExit($calculate_on_exit)
    {
        $this->container['calculate_on_exit'] = $calculate_on_exit;
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
     * @param string $entry_macro Gets or sets the entry macro name for the form field. The entry macro runs when the form field gets the focus in Microsoft Word.
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
     * @param string $exit_macro Gets or sets the exit macro name for the form field. The exit macro runs when the form field loses the focus in Microsoft Word.
     *
     * @return $this
     */
    public function setExitMacro($exit_macro)
    {
        $this->container['exit_macro'] = $exit_macro;
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

