<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AvailableFontsResponse.php">
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
 * AvailableFontsResponse
 *
 * @description The REST response with data on system, additional and custom fonts, available for document processing.
 */
class AvailableFontsResponse extends WordsResponse
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "AvailableFontsResponse";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'additional_fonts' => '\Aspose\Words\Model\FontInfo[]',
        'custom_fonts' => '\Aspose\Words\Model\FontInfo[]',
        'system_fonts' => '\Aspose\Words\Model\FontInfo[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'additional_fonts' => 'null',
        'custom_fonts' => 'null',
        'system_fonts' => 'null'
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
        'additional_fonts' => 'AdditionalFonts',
        'custom_fonts' => 'CustomFonts',
        'system_fonts' => 'SystemFonts'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_fonts' => 'setAdditionalFonts',
        'custom_fonts' => 'setCustomFonts',
        'system_fonts' => 'setSystemFonts'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_fonts' => 'getAdditionalFonts',
        'custom_fonts' => 'getCustomFonts',
        'system_fonts' => 'getSystemFonts'
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
        $this->container['additional_fonts'] = isset($data['additional_fonts']) ? $data['additional_fonts'] : null;
        $this->container['custom_fonts'] = isset($data['custom_fonts']) ? $data['custom_fonts'] : null;
        $this->container['system_fonts'] = isset($data['system_fonts']) ? $data['system_fonts'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();


        if (isset($this->container['additional_fonts'])) {
            foreach ($this->getAdditionalFonts() as &$elementAdditionalFonts)
            {
                if ($elementAdditionalFonts != null)
                {
                    $elementAdditionalFonts->validate();
                }
            }
        }


        if (isset($this->container['custom_fonts'])) {
            foreach ($this->getCustomFonts() as &$elementCustomFonts)
            {
                if ($elementCustomFonts != null)
                {
                    $elementCustomFonts->validate();
                }
            }
        }


        if (isset($this->container['system_fonts'])) {
            foreach ($this->getSystemFonts() as &$elementSystemFonts)
            {
                if ($elementSystemFonts != null)
                {
                    $elementSystemFonts->validate();
                }
            }
        }

    }

    /*
     * Gets additional_fonts
     *
     * @return \Aspose\Words\Model\FontInfo[]
     */
    public function getAdditionalFonts()
    {
        return $this->container['additional_fonts'];
    }

    /*
     * Sets additional_fonts
     *
     * @param \Aspose\Words\Model\FontInfo[] $additional_fonts Gets or sets the list of additional fonts, provided by Aspose team.
     *
     * @return $this
     */
    public function setAdditionalFonts($additional_fonts)
    {
        $this->container['additional_fonts'] = $additional_fonts;
        return $this;
    }


    /*
     * Gets custom_fonts
     *
     * @return \Aspose\Words\Model\FontInfo[]
     */
    public function getCustomFonts()
    {
        return $this->container['custom_fonts'];
    }

    /*
     * Sets custom_fonts
     *
     * @param \Aspose\Words\Model\FontInfo[] $custom_fonts Gets or sets the list of custom user fonts from user cloud storage. To use them, you should specify "fontsLocation" parameter in any request.
     *
     * @return $this
     */
    public function setCustomFonts($custom_fonts)
    {
        $this->container['custom_fonts'] = $custom_fonts;
        return $this;
    }


    /*
     * Gets system_fonts
     *
     * @return \Aspose\Words\Model\FontInfo[]
     */
    public function getSystemFonts()
    {
        return $this->container['system_fonts'];
    }

    /*
     * Sets system_fonts
     *
     * @param \Aspose\Words\Model\FontInfo[] $system_fonts Gets or sets the list of system fonts, available on the server.
     *
     * @return $this
     */
    public function setSystemFonts($system_fonts)
    {
        $this->container['system_fonts'] = $system_fonts;
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

