<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Shading.php">
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
 * Shading
 *
 * @description DTO container with a paragraph format shading element.
 */
class Shading implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Shading";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'background_pattern_color' => '\Aspose\Words\Model\XmlColor',
        'foreground_pattern_color' => '\Aspose\Words\Model\XmlColor',
        'texture' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'background_pattern_color' => 'null',
        'foreground_pattern_color' => 'null',
        'texture' => 'null'
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
        'background_pattern_color' => 'BackgroundPatternColor',
        'foreground_pattern_color' => 'ForegroundPatternColor',
        'texture' => 'Texture'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background_pattern_color' => 'setBackgroundPatternColor',
        'foreground_pattern_color' => 'setForegroundPatternColor',
        'texture' => 'setTexture'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background_pattern_color' => 'getBackgroundPatternColor',
        'foreground_pattern_color' => 'getForegroundPatternColor',
        'texture' => 'getTexture'
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

    const TEXTURE_TEXTURE_NONE = 'TextureNone';
    const TEXTURE_TEXTURE_SOLID = 'TextureSolid';
    const TEXTURE_TEXTURE5_PERCENT = 'Texture5Percent';
    const TEXTURE_TEXTURE10_PERCENT = 'Texture10Percent';
    const TEXTURE_TEXTURE20_PERCENT = 'Texture20Percent';
    const TEXTURE_TEXTURE25_PERCENT = 'Texture25Percent';
    const TEXTURE_TEXTURE30_PERCENT = 'Texture30Percent';
    const TEXTURE_TEXTURE40_PERCENT = 'Texture40Percent';
    const TEXTURE_TEXTURE50_PERCENT = 'Texture50Percent';
    const TEXTURE_TEXTURE60_PERCENT = 'Texture60Percent';
    const TEXTURE_TEXTURE70_PERCENT = 'Texture70Percent';
    const TEXTURE_TEXTURE75_PERCENT = 'Texture75Percent';
    const TEXTURE_TEXTURE80_PERCENT = 'Texture80Percent';
    const TEXTURE_TEXTURE90_PERCENT = 'Texture90Percent';
    const TEXTURE_TEXTURE_DARK_HORIZONTAL = 'TextureDarkHorizontal';
    const TEXTURE_TEXTURE_DARK_VERTICAL = 'TextureDarkVertical';
    const TEXTURE_TEXTURE_DARK_DIAGONAL_DOWN = 'TextureDarkDiagonalDown';
    const TEXTURE_TEXTURE_DARK_DIAGONAL_UP = 'TextureDarkDiagonalUp';
    const TEXTURE_TEXTURE_DARK_CROSS = 'TextureDarkCross';
    const TEXTURE_TEXTURE_DARK_DIAGONAL_CROSS = 'TextureDarkDiagonalCross';
    const TEXTURE_TEXTURE_HORIZONTAL = 'TextureHorizontal';
    const TEXTURE_TEXTURE_VERTICAL = 'TextureVertical';
    const TEXTURE_TEXTURE_DIAGONAL_DOWN = 'TextureDiagonalDown';
    const TEXTURE_TEXTURE_DIAGONAL_UP = 'TextureDiagonalUp';
    const TEXTURE_TEXTURE_CROSS = 'TextureCross';
    const TEXTURE_TEXTURE_DIAGONAL_CROSS = 'TextureDiagonalCross';
    const TEXTURE_TEXTURE2_PT5_PERCENT = 'Texture2Pt5Percent';
    const TEXTURE_TEXTURE7_PT5_PERCENT = 'Texture7Pt5Percent';
    const TEXTURE_TEXTURE12_PT5_PERCENT = 'Texture12Pt5Percent';
    const TEXTURE_TEXTURE15_PERCENT = 'Texture15Percent';
    const TEXTURE_TEXTURE17_PT5_PERCENT = 'Texture17Pt5Percent';
    const TEXTURE_TEXTURE22_PT5_PERCENT = 'Texture22Pt5Percent';
    const TEXTURE_TEXTURE27_PT5_PERCENT = 'Texture27Pt5Percent';
    const TEXTURE_TEXTURE32_PT5_PERCENT = 'Texture32Pt5Percent';
    const TEXTURE_TEXTURE35_PERCENT = 'Texture35Percent';
    const TEXTURE_TEXTURE37_PT5_PERCENT = 'Texture37Pt5Percent';
    const TEXTURE_TEXTURE42_PT5_PERCENT = 'Texture42Pt5Percent';
    const TEXTURE_TEXTURE45_PERCENT = 'Texture45Percent';
    const TEXTURE_TEXTURE47_PT5_PERCENT = 'Texture47Pt5Percent';
    const TEXTURE_TEXTURE52_PT5_PERCENT = 'Texture52Pt5Percent';
    const TEXTURE_TEXTURE55_PERCENT = 'Texture55Percent';
    const TEXTURE_TEXTURE57_PT5_PERCENT = 'Texture57Pt5Percent';
    const TEXTURE_TEXTURE62_PT5_PERCENT = 'Texture62Pt5Percent';
    const TEXTURE_TEXTURE65_PERCENT = 'Texture65Percent';
    const TEXTURE_TEXTURE67_PT5_PERCENT = 'Texture67Pt5Percent';
    const TEXTURE_TEXTURE72_PT5_PERCENT = 'Texture72Pt5Percent';
    const TEXTURE_TEXTURE77_PT5_PERCENT = 'Texture77Pt5Percent';
    const TEXTURE_TEXTURE82_PT5_PERCENT = 'Texture82Pt5Percent';
    const TEXTURE_TEXTURE85_PERCENT = 'Texture85Percent';
    const TEXTURE_TEXTURE87_PT5_PERCENT = 'Texture87Pt5Percent';
    const TEXTURE_TEXTURE92_PT5_PERCENT = 'Texture92Pt5Percent';
    const TEXTURE_TEXTURE95_PERCENT = 'Texture95Percent';
    const TEXTURE_TEXTURE97_PT5_PERCENT = 'Texture97Pt5Percent';
    const TEXTURE_TEXTURE_NIL = 'TextureNil';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextureAllowableValues()
    {
        return [
            self::TEXTURE_TEXTURE_NONE,
            self::TEXTURE_TEXTURE_SOLID,
            self::TEXTURE_TEXTURE5_PERCENT,
            self::TEXTURE_TEXTURE10_PERCENT,
            self::TEXTURE_TEXTURE20_PERCENT,
            self::TEXTURE_TEXTURE25_PERCENT,
            self::TEXTURE_TEXTURE30_PERCENT,
            self::TEXTURE_TEXTURE40_PERCENT,
            self::TEXTURE_TEXTURE50_PERCENT,
            self::TEXTURE_TEXTURE60_PERCENT,
            self::TEXTURE_TEXTURE70_PERCENT,
            self::TEXTURE_TEXTURE75_PERCENT,
            self::TEXTURE_TEXTURE80_PERCENT,
            self::TEXTURE_TEXTURE90_PERCENT,
            self::TEXTURE_TEXTURE_DARK_HORIZONTAL,
            self::TEXTURE_TEXTURE_DARK_VERTICAL,
            self::TEXTURE_TEXTURE_DARK_DIAGONAL_DOWN,
            self::TEXTURE_TEXTURE_DARK_DIAGONAL_UP,
            self::TEXTURE_TEXTURE_DARK_CROSS,
            self::TEXTURE_TEXTURE_DARK_DIAGONAL_CROSS,
            self::TEXTURE_TEXTURE_HORIZONTAL,
            self::TEXTURE_TEXTURE_VERTICAL,
            self::TEXTURE_TEXTURE_DIAGONAL_DOWN,
            self::TEXTURE_TEXTURE_DIAGONAL_UP,
            self::TEXTURE_TEXTURE_CROSS,
            self::TEXTURE_TEXTURE_DIAGONAL_CROSS,
            self::TEXTURE_TEXTURE2_PT5_PERCENT,
            self::TEXTURE_TEXTURE7_PT5_PERCENT,
            self::TEXTURE_TEXTURE12_PT5_PERCENT,
            self::TEXTURE_TEXTURE15_PERCENT,
            self::TEXTURE_TEXTURE17_PT5_PERCENT,
            self::TEXTURE_TEXTURE22_PT5_PERCENT,
            self::TEXTURE_TEXTURE27_PT5_PERCENT,
            self::TEXTURE_TEXTURE32_PT5_PERCENT,
            self::TEXTURE_TEXTURE35_PERCENT,
            self::TEXTURE_TEXTURE37_PT5_PERCENT,
            self::TEXTURE_TEXTURE42_PT5_PERCENT,
            self::TEXTURE_TEXTURE45_PERCENT,
            self::TEXTURE_TEXTURE47_PT5_PERCENT,
            self::TEXTURE_TEXTURE52_PT5_PERCENT,
            self::TEXTURE_TEXTURE55_PERCENT,
            self::TEXTURE_TEXTURE57_PT5_PERCENT,
            self::TEXTURE_TEXTURE62_PT5_PERCENT,
            self::TEXTURE_TEXTURE65_PERCENT,
            self::TEXTURE_TEXTURE67_PT5_PERCENT,
            self::TEXTURE_TEXTURE72_PT5_PERCENT,
            self::TEXTURE_TEXTURE77_PT5_PERCENT,
            self::TEXTURE_TEXTURE82_PT5_PERCENT,
            self::TEXTURE_TEXTURE85_PERCENT,
            self::TEXTURE_TEXTURE87_PT5_PERCENT,
            self::TEXTURE_TEXTURE92_PT5_PERCENT,
            self::TEXTURE_TEXTURE95_PERCENT,
            self::TEXTURE_TEXTURE97_PT5_PERCENT,
            self::TEXTURE_TEXTURE_NIL
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
        $this->container['background_pattern_color'] = isset($data['background_pattern_color']) ? $data['background_pattern_color'] : null;
        $this->container['foreground_pattern_color'] = isset($data['foreground_pattern_color']) ? $data['foreground_pattern_color'] : null;
        $this->container['texture'] = isset($data['texture']) ? $data['texture'] : null;
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {

        if (isset($this->container['background_pattern_color'])) {
            $this->getBackgroundPatternColor()->validate();
        }


        if (isset($this->container['foreground_pattern_color'])) {
            $this->getForegroundPatternColor()->validate();
        }

        if (isset($this->container['texture'])) {
            $allowedValuesTexture = $this->getTextureAllowableValues();
            if (!in_array($this->container['texture'], $allowedValuesTexture)) {
                throw new \InvalidArgumentException('Property Texture in Shading has invalid format.');
            }
        }

    }

    /*
     * Gets background_pattern_color
     *
     * @return \Aspose\Words\Model\XmlColor
     */
    public function getBackgroundPatternColor()
    {
        return $this->container['background_pattern_color'];
    }

    /*
     * Sets background_pattern_color
     *
     * @param \Aspose\Words\Model\XmlColor $background_pattern_color Gets or sets the color that's applied to the background of the Shading object.
     *
     * @return $this
     */
    public function setBackgroundPatternColor($background_pattern_color)
    {
        $this->container['background_pattern_color'] = $background_pattern_color;
        return $this;
    }


    /*
     * Gets foreground_pattern_color
     *
     * @return \Aspose\Words\Model\XmlColor
     */
    public function getForegroundPatternColor()
    {
        return $this->container['foreground_pattern_color'];
    }

    /*
     * Sets foreground_pattern_color
     *
     * @param \Aspose\Words\Model\XmlColor $foreground_pattern_color Gets or sets the color that's applied to the foreground of the Shading object.
     *
     * @return $this
     */
    public function setForegroundPatternColor($foreground_pattern_color)
    {
        $this->container['foreground_pattern_color'] = $foreground_pattern_color;
        return $this;
    }


    /*
     * Gets texture
     *
     * @return string
     */
    public function getTexture()
    {
        return $this->container['texture'];
    }

    /*
     * Sets texture
     *
     * @param string $texture Gets or sets the shading texture.
     *
     * @return $this
     */
    public function setTexture($texture)
    {
        $allowedValues = $this->getTextureAllowableValues();
        if ((!is_numeric($texture) && !in_array($texture, $allowedValues)) || (is_numeric($texture) && !in_array($allowedValues[$texture], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'texture', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['texture'] = $texture;
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

