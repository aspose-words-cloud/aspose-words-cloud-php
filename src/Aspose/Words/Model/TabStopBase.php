<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TabStopBase.php">
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
use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * TabStopBase
 *
 * @description Base class for paragraph format tab stop DTO.
 */
class TabStopBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TabStopBase";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'alignment' => 'string',
        'leader' => 'string',
        'position' => 'double'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'alignment' => 'null',
        'leader' => 'null',
        'position' => 'null'
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
        'alignment' => 'Alignment',
        'leader' => 'Leader',
        'position' => 'Position'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alignment' => 'setAlignment',
        'leader' => 'setLeader',
        'position' => 'setPosition'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alignment' => 'getAlignment',
        'leader' => 'getLeader',
        'position' => 'getPosition'
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

    const ALIGNMENT_LEFT = 'Left';
    const ALIGNMENT_CENTER = 'Center';
    const ALIGNMENT_RIGHT = 'Right';
    const ALIGNMENT_DECIMAL = 'Decimal';
    const ALIGNMENT_BAR = 'Bar';
    const ALIGNMENT_LIST = 'List';
    const ALIGNMENT_CLEAR = 'Clear';
    const LEADER_NONE = 'None';
    const LEADER_DOTS = 'Dots';
    const LEADER_DASHES = 'Dashes';
    const LEADER_LINE = 'Line';
    const LEADER_HEAVY = 'Heavy';
    const LEADER_MIDDLE_DOT = 'MiddleDot';

    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlignmentAllowableValues()
    {
        return [
            self::ALIGNMENT_LEFT,
            self::ALIGNMENT_CENTER,
            self::ALIGNMENT_RIGHT,
            self::ALIGNMENT_DECIMAL,
            self::ALIGNMENT_BAR,
            self::ALIGNMENT_LIST,
            self::ALIGNMENT_CLEAR
        ];
    }
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaderAllowableValues()
    {
        return [
            self::LEADER_NONE,
            self::LEADER_DOTS,
            self::LEADER_DASHES,
            self::LEADER_LINE,
            self::LEADER_HEAVY,
            self::LEADER_MIDDLE_DOT
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
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['leader'] = isset($data['leader']) ? $data['leader'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaderAllowableValues();
        if (!in_array($this->container['leader'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leader', must be one of '%s'",
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
        $allowedValues = $this->getAlignmentAllowableValues();
        if (!in_array($this->container['alignment'], $allowedValues)) {
            return false;
        }

        $allowedValues = $this->getLeaderAllowableValues();
        if (!in_array($this->container['leader'], $allowedValues)) {
            return false;
        }


        return true;
    }

    /*
     * Gets alignment
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /*
     * Sets alignment
     *
     * @param string $alignment Gets or sets the alignment of text at this tab stop.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $allowedValues = $this->getAlignmentAllowableValues();
        if ((!is_numeric($alignment) && !in_array($alignment, $allowedValues)) || (is_numeric($alignment) && !in_array($allowedValues[$alignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'alignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['alignment'] = $alignment;
        return $this;
    }

    /*
     * Gets leader
     *
     * @return string
     */
    public function getLeader()
    {
        return $this->container['leader'];
    }

    /*
     * Sets leader
     *
     * @param string $leader Gets or sets the type of the leader line displayed under the tab character.
     *
     * @return $this
     */
    public function setLeader($leader)
    {
        $allowedValues = $this->getLeaderAllowableValues();
        if ((!is_numeric($leader) && !in_array($leader, $allowedValues)) || (is_numeric($leader) && !in_array($allowedValues[$leader], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'leader', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['leader'] = $leader;
        return $this;
    }

    /*
     * Gets position
     *
     * @return double
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /*
     * Sets position
     *
     * @param double $position Gets or sets the position of the tab stop in points.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
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

