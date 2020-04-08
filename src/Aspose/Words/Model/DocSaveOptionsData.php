<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DocSaveOptionsData.php">
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
 * DocSaveOptionsData
 */

namespace Aspose\Words\Model;
use \Aspose\Words\ObjectSerializer;

/*
 * DocSaveOptionsData
 *
 * @description container class for doc/dot save options.
 */
class DocSaveOptionsData extends SaveOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DocSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'always_compress_metafiles' => 'bool',
        'password' => 'string',
        'save_picture_bullet' => 'bool',
        'save_routing_slip' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'always_compress_metafiles' => null,
        'password' => null,
        'save_picture_bullet' => null,
        'save_routing_slip' => null
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
        'always_compress_metafiles' => 'AlwaysCompressMetafiles',
        'password' => 'Password',
        'save_picture_bullet' => 'SavePictureBullet',
        'save_routing_slip' => 'SaveRoutingSlip'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'always_compress_metafiles' => 'setAlwaysCompressMetafiles',
        'password' => 'setPassword',
        'save_picture_bullet' => 'setSavePictureBullet',
        'save_routing_slip' => 'setSaveRoutingSlip'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'always_compress_metafiles' => 'getAlwaysCompressMetafiles',
        'password' => 'getPassword',
        'save_picture_bullet' => 'getSavePictureBullet',
        'save_routing_slip' => 'getSaveRoutingSlip'
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

        $this->container['always_compress_metafiles'] = isset($data['always_compress_metafiles']) ? $data['always_compress_metafiles'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['save_picture_bullet'] = isset($data['save_picture_bullet']) ? $data['save_picture_bullet'] : null;
        $this->container['save_routing_slip'] = isset($data['save_routing_slip']) ? $data['save_routing_slip'] : null;
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
     * Gets always_compress_metafiles
     *
     * @return bool
     */
    public function getAlwaysCompressMetafiles()
    {
        return $this->container['always_compress_metafiles'];
    }

    /*
     * Sets always_compress_metafiles
     *
     * @param bool $always_compress_metafiles Gets or sets When false, small metafiles are not compressed for performance reason. Default value is true, all metafiles are compressed regardless of its size.
     *
     * @return $this
     */
    public function setAlwaysCompressMetafiles($always_compress_metafiles)
    {
        $this->container['always_compress_metafiles'] = $always_compress_metafiles;

        return $this;
    }

    /*
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /*
     * Sets password
     *
     * @param string $password Gets or sets password.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /*
     * Gets save_picture_bullet
     *
     * @return bool
     */
    public function getSavePictureBullet()
    {
        return $this->container['save_picture_bullet'];
    }

    /*
     * Sets save_picture_bullet
     *
     * @param bool $save_picture_bullet Gets or sets When false, PictureBullet data is not saved to output document. Default value is true.
     *
     * @return $this
     */
    public function setSavePictureBullet($save_picture_bullet)
    {
        $this->container['save_picture_bullet'] = $save_picture_bullet;

        return $this;
    }

    /*
     * Gets save_routing_slip
     *
     * @return bool
     */
    public function getSaveRoutingSlip()
    {
        return $this->container['save_routing_slip'];
    }

    /*
     * Sets save_routing_slip
     *
     * @param bool $save_routing_slip Gets or sets determine whether or not save RoutingSlip data saved to output document.
     *
     * @return $this
     */
    public function setSaveRoutingSlip($save_routing_slip)
    {
        $this->container['save_routing_slip'] = $save_routing_slip;

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
