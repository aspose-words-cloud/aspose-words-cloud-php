<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MhtmlSaveOptionsData.php">
 *   Copyright (c) 2025 Aspose.Words for Cloud
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
 * MhtmlSaveOptionsData
 *
 * @description Container class for mhtml save options.
 */
class MhtmlSaveOptionsData extends HtmlSaveOptionsData
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MhtmlSaveOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'export_cid_urls_for_mhtml_resources' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'export_cid_urls_for_mhtml_resources' => 'null'
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
        'export_cid_urls_for_mhtml_resources' => 'ExportCidUrlsForMhtmlResources'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'export_cid_urls_for_mhtml_resources' => 'setExportCidUrlsForMhtmlResources'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'export_cid_urls_for_mhtml_resources' => 'getExportCidUrlsForMhtmlResources'
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
        $this->container['export_cid_urls_for_mhtml_resources'] = isset($data['export_cid_urls_for_mhtml_resources']) ? $data['export_cid_urls_for_mhtml_resources'] : null;
        $this->container['save_format'] = "mht";
    }

    /*
     * Validate all the properties in the model
     */
    public function validate()
    {
        parent::validate();

    }

    /*
     * Gets export_cid_urls_for_mhtml_resources
     *
     * @return bool
     */
    public function getExportCidUrlsForMhtmlResources()
    {
        return $this->container['export_cid_urls_for_mhtml_resources'];
    }

    /*
     * Sets export_cid_urls_for_mhtml_resources
     *
     * @param bool $export_cid_urls_for_mhtml_resources Gets or sets a value indicating whether to use CID (Content-ID) URLs to reference resources (images, fonts, CSS) included in MHTML documents. The default value is false. By default, resources in MHTML documents are referenced by file name (for example, "image.png"), which are matched against "Content-Location" headers of MIME parts. This option enables an alternative method, where references to resource files are written as CID (Content-ID) URLs (for example, "cid:image.png") and are matched against "Content-ID" headers. In theory, there should be no difference between the two referencing methods and either of them should work fine in any browser or mail agent. In practice, however, some agents fail to fetch resources by file name. If your browser or mail agent refuses to load resources included in an MTHML document (doesn't show images or doesn't load CSS styles), try exporting the document with CID URLs.
     *
     * @return $this
     */
    public function setExportCidUrlsForMhtmlResources($export_cid_urls_for_mhtml_resources)
    {
        $this->container['export_cid_urls_for_mhtml_resources'] = $export_cid_urls_for_mhtml_resources;
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

