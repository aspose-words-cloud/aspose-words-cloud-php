<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SaveAsTiffRequest.php">
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

namespace Aspose\Words\Model\Requests;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Words\ObjectSerializer;
use Aspose\Words\HeaderSelector;
use Aspose\Words\Model\Response\SaveAsTiffResponse;

/*
 * Request model for saveAsTiff operation.
 */
class SaveAsTiffRequest
{
    /*
     * The filename of the input document.
     */
    public $name;

    /*
     * Tiff save options.
     */
    public $save_options;

    /*
     * Original document folder.
     */
    public $folder;

    /*
     * Original document storage.
     */
    public $storage;

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;

    /*
     * Password for opening an encrypted document.
     */
    public $password;

    /*
     * The flag indicating whether to use antialiasing.
     */
    public $use_anti_aliasing;

    /*
     * The flag indicating whether to use high quality.
     */
    public $use_high_quality_rendering;

    /*
     * The level of brightness for the generated images.
     */
    public $image_brightness;

    /*
     * The color mode for the generated images.
     */
    public $image_color_mode;

    /*
     * The contrast for the generated images.
     */
    public $image_contrast;

    /*
     * The images numeral format.
     */
    public $numeral_format;

    /*
     * The number of pages to render.
     */
    public $page_count;

    /*
     * The index of the page to start rendering.
     */
    public $page_index;

    /*
     * The background image color.
     */
    public $paper_color;

    /*
     * The pixel format of the generated images.
     */
    public $pixel_format;

    /*
     * The resolution of the generated images.
     */
    public $resolution;

    /*
     * The zoom factor for the generated images.
     */
    public $scale;

    /*
     * The compression tipe.
     */
    public $tiff_compression;

    /*
     * The optional dml rendering mode. The default value is Fallback.
     */
    public $dml_rendering_mode;

    /*
     * The optional dml effects rendering mode. The default value is Simplified.
     */
    public $dml_effects_rendering_mode;

    /*
     * The optional TIFF binarization method. Possible values are: FloydSteinbergDithering, Threshold.
     */
    public $tiff_binarization_method;

    /*
     * The flag indicating whether to ZIP the output.
     */
    public $zip_output;

    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;

    /*
     * Initializes a new instance of the SaveAsTiffRequest class.
     *
     * @param string $name The filename of the input document.
     * @param \Aspose\Words\Model\TiffSaveOptionsData $save_options Tiff save options.
     * @param string $folder Original document folder.
     * @param string $storage Original document storage.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param bool $use_anti_aliasing The flag indicating whether to use antialiasing.
     * @param bool $use_high_quality_rendering The flag indicating whether to use high quality.
     * @param double $image_brightness The level of brightness for the generated images.
     * @param string $image_color_mode The color mode for the generated images.
     * @param double $image_contrast The contrast for the generated images.
     * @param string $numeral_format The images numeral format.
     * @param int $page_count The number of pages to render.
     * @param int $page_index The index of the page to start rendering.
     * @param string $paper_color The background image color.
     * @param string $pixel_format The pixel format of the generated images.
     * @param double $resolution The resolution of the generated images.
     * @param double $scale The zoom factor for the generated images.
     * @param string $tiff_compression The compression tipe.
     * @param string $dml_rendering_mode The optional dml rendering mode. The default value is Fallback.
     * @param string $dml_effects_rendering_mode The optional dml effects rendering mode. The default value is Simplified.
     * @param string $tiff_binarization_method The optional TIFF binarization method. Possible values are: FloydSteinbergDithering, Threshold.
     * @param bool $zip_output The flag indicating whether to ZIP the output.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     */
    public function __construct($name, $save_options, $folder = null, $storage = null, $load_encoding = null, $password = null, $use_anti_aliasing = null, $use_high_quality_rendering = null, $image_brightness = null, $image_color_mode = null, $image_contrast = null, $numeral_format = null, $page_count = null, $page_index = null, $paper_color = null, $pixel_format = null, $resolution = null, $scale = null, $tiff_compression = null, $dml_rendering_mode = null, $dml_effects_rendering_mode = null, $tiff_binarization_method = null, $zip_output = null, $fonts_location = null)
    {
        $this->name = $name;
        $this->save_options = $save_options;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->use_anti_aliasing = $use_anti_aliasing;
        $this->use_high_quality_rendering = $use_high_quality_rendering;
        $this->image_brightness = $image_brightness;
        $this->image_color_mode = $image_color_mode;
        $this->image_contrast = $image_contrast;
        $this->numeral_format = $numeral_format;
        $this->page_count = $page_count;
        $this->page_index = $page_index;
        $this->paper_color = $paper_color;
        $this->pixel_format = $pixel_format;
        $this->resolution = $resolution;
        $this->scale = $scale;
        $this->tiff_compression = $tiff_compression;
        $this->dml_rendering_mode = $dml_rendering_mode;
        $this->dml_effects_rendering_mode = $dml_effects_rendering_mode;
        $this->tiff_binarization_method = $tiff_binarization_method;
        $this->zip_output = $zip_output;
        $this->fonts_location = $fonts_location;
    }

    /*
     * The filename of the input document.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The filename of the input document.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }

    /*
     * Tiff save options.
     */
    public function get_save_options()
    {
        return $this->save_options;
    }

    /*
     * Tiff save options.
     */
    public function set_save_options($value)
    {
        $this->save_options = $value;
        return $this;
    }

    /*
     * Original document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Original document folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }

    /*
     * Original document storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Original document storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public function get_load_encoding()
    {
        return $this->load_encoding;
    }

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public function set_load_encoding($value)
    {
        $this->load_encoding = $value;
        return $this;
    }

    /*
     * Password for opening an encrypted document.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * Password for opening an encrypted document.
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }

    /*
     * The flag indicating whether to use antialiasing.
     */
    public function get_use_anti_aliasing()
    {
        return $this->use_anti_aliasing;
    }

    /*
     * The flag indicating whether to use antialiasing.
     */
    public function set_use_anti_aliasing($value)
    {
        $this->use_anti_aliasing = $value;
        return $this;
    }

    /*
     * The flag indicating whether to use high quality.
     */
    public function get_use_high_quality_rendering()
    {
        return $this->use_high_quality_rendering;
    }

    /*
     * The flag indicating whether to use high quality.
     */
    public function set_use_high_quality_rendering($value)
    {
        $this->use_high_quality_rendering = $value;
        return $this;
    }

    /*
     * The level of brightness for the generated images.
     */
    public function get_image_brightness()
    {
        return $this->image_brightness;
    }

    /*
     * The level of brightness for the generated images.
     */
    public function set_image_brightness($value)
    {
        $this->image_brightness = $value;
        return $this;
    }

    /*
     * The color mode for the generated images.
     */
    public function get_image_color_mode()
    {
        return $this->image_color_mode;
    }

    /*
     * The color mode for the generated images.
     */
    public function set_image_color_mode($value)
    {
        $this->image_color_mode = $value;
        return $this;
    }

    /*
     * The contrast for the generated images.
     */
    public function get_image_contrast()
    {
        return $this->image_contrast;
    }

    /*
     * The contrast for the generated images.
     */
    public function set_image_contrast($value)
    {
        $this->image_contrast = $value;
        return $this;
    }

    /*
     * The images numeral format.
     */
    public function get_numeral_format()
    {
        return $this->numeral_format;
    }

    /*
     * The images numeral format.
     */
    public function set_numeral_format($value)
    {
        $this->numeral_format = $value;
        return $this;
    }

    /*
     * The number of pages to render.
     */
    public function get_page_count()
    {
        return $this->page_count;
    }

    /*
     * The number of pages to render.
     */
    public function set_page_count($value)
    {
        $this->page_count = $value;
        return $this;
    }

    /*
     * The index of the page to start rendering.
     */
    public function get_page_index()
    {
        return $this->page_index;
    }

    /*
     * The index of the page to start rendering.
     */
    public function set_page_index($value)
    {
        $this->page_index = $value;
        return $this;
    }

    /*
     * The background image color.
     */
    public function get_paper_color()
    {
        return $this->paper_color;
    }

    /*
     * The background image color.
     */
    public function set_paper_color($value)
    {
        $this->paper_color = $value;
        return $this;
    }

    /*
     * The pixel format of the generated images.
     */
    public function get_pixel_format()
    {
        return $this->pixel_format;
    }

    /*
     * The pixel format of the generated images.
     */
    public function set_pixel_format($value)
    {
        $this->pixel_format = $value;
        return $this;
    }

    /*
     * The resolution of the generated images.
     */
    public function get_resolution()
    {
        return $this->resolution;
    }

    /*
     * The resolution of the generated images.
     */
    public function set_resolution($value)
    {
        $this->resolution = $value;
        return $this;
    }

    /*
     * The zoom factor for the generated images.
     */
    public function get_scale()
    {
        return $this->scale;
    }

    /*
     * The zoom factor for the generated images.
     */
    public function set_scale($value)
    {
        $this->scale = $value;
        return $this;
    }

    /*
     * The compression tipe.
     */
    public function get_tiff_compression()
    {
        return $this->tiff_compression;
    }

    /*
     * The compression tipe.
     */
    public function set_tiff_compression($value)
    {
        $this->tiff_compression = $value;
        return $this;
    }

    /*
     * The optional dml rendering mode. The default value is Fallback.
     */
    public function get_dml_rendering_mode()
    {
        return $this->dml_rendering_mode;
    }

    /*
     * The optional dml rendering mode. The default value is Fallback.
     */
    public function set_dml_rendering_mode($value)
    {
        $this->dml_rendering_mode = $value;
        return $this;
    }

    /*
     * The optional dml effects rendering mode. The default value is Simplified.
     */
    public function get_dml_effects_rendering_mode()
    {
        return $this->dml_effects_rendering_mode;
    }

    /*
     * The optional dml effects rendering mode. The default value is Simplified.
     */
    public function set_dml_effects_rendering_mode($value)
    {
        $this->dml_effects_rendering_mode = $value;
        return $this;
    }

    /*
     * The optional TIFF binarization method. Possible values are: FloydSteinbergDithering, Threshold.
     */
    public function get_tiff_binarization_method()
    {
        return $this->tiff_binarization_method;
    }

    /*
     * The optional TIFF binarization method. Possible values are: FloydSteinbergDithering, Threshold.
     */
    public function set_tiff_binarization_method($value)
    {
        $this->tiff_binarization_method = $value;
        return $this;
    }

    /*
     * The flag indicating whether to ZIP the output.
     */
    public function get_zip_output()
    {
        return $this->zip_output;
    }

    /*
     * The flag indicating whether to ZIP the output.
     */
    public function set_zip_output($value)
    {
        $this->zip_output = $value;
        return $this;
    }

    /*
     * Folder in filestorage with custom fonts.
     */
    public function get_fonts_location()
    {
        return $this->fonts_location;
    }

    /*
     * Folder in filestorage with custom fonts.
     */
    public function set_fonts_location($value)
    {
        $this->fonts_location = $value;
        return $this;
    }

    /*
     * Create request data for operation 'saveAsTiff'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequestData($config)
    {
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling saveAsTiff');
        }
        if ($this->save_options === null) {
            throw new \InvalidArgumentException('Missing the required parameter $save_options when calling saveAsTiff');
        }

        $resourcePath = '/words/{name}/saveAs/tiff';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $filename = null;
        // path params
        if ($this->name !== null) {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }
        else {
            $localName = lcfirst('Name');
            $resourcePath = str_replace('{' . $localName . '}', '', $resourcePath);
        }

        // remove empty path parameters
        $resourcePath = str_replace("//", "/", $resourcePath);
        // query params
        if ($this->folder !== null) {
            $localName = lcfirst('Folder');
            $localValue = is_bool($this->folder) ? ($this->folder ? 'true' : 'false') : $this->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->storage !== null) {
            $localName = lcfirst('Storage');
            $localValue = is_bool($this->storage) ? ($this->storage ? 'true' : 'false') : $this->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->load_encoding !== null) {
            $localName = lcfirst('LoadEncoding');
            $localValue = is_bool($this->load_encoding) ? ($this->load_encoding ? 'true' : 'false') : $this->load_encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->password !== null) {
            $localName = lcfirst('Password');
            $localValue = is_bool($this->password) ? ($this->password ? 'true' : 'false') : $this->password;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->use_anti_aliasing !== null) {
            $localName = lcfirst('UseAntiAliasing');
            $localValue = is_bool($this->use_anti_aliasing) ? ($this->use_anti_aliasing ? 'true' : 'false') : $this->use_anti_aliasing;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->use_high_quality_rendering !== null) {
            $localName = lcfirst('UseHighQualityRendering');
            $localValue = is_bool($this->use_high_quality_rendering) ? ($this->use_high_quality_rendering ? 'true' : 'false') : $this->use_high_quality_rendering;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->image_brightness !== null) {
            $localName = lcfirst('ImageBrightness');
            $localValue = is_bool($this->image_brightness) ? ($this->image_brightness ? 'true' : 'false') : $this->image_brightness;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->image_color_mode !== null) {
            $localName = lcfirst('ImageColorMode');
            $localValue = is_bool($this->image_color_mode) ? ($this->image_color_mode ? 'true' : 'false') : $this->image_color_mode;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->image_contrast !== null) {
            $localName = lcfirst('ImageContrast');
            $localValue = is_bool($this->image_contrast) ? ($this->image_contrast ? 'true' : 'false') : $this->image_contrast;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->numeral_format !== null) {
            $localName = lcfirst('NumeralFormat');
            $localValue = is_bool($this->numeral_format) ? ($this->numeral_format ? 'true' : 'false') : $this->numeral_format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->page_count !== null) {
            $localName = lcfirst('PageCount');
            $localValue = is_bool($this->page_count) ? ($this->page_count ? 'true' : 'false') : $this->page_count;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->page_index !== null) {
            $localName = lcfirst('PageIndex');
            $localValue = is_bool($this->page_index) ? ($this->page_index ? 'true' : 'false') : $this->page_index;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->paper_color !== null) {
            $localName = lcfirst('PaperColor');
            $localValue = is_bool($this->paper_color) ? ($this->paper_color ? 'true' : 'false') : $this->paper_color;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->pixel_format !== null) {
            $localName = lcfirst('PixelFormat');
            $localValue = is_bool($this->pixel_format) ? ($this->pixel_format ? 'true' : 'false') : $this->pixel_format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->resolution !== null) {
            $localName = lcfirst('Resolution');
            $localValue = is_bool($this->resolution) ? ($this->resolution ? 'true' : 'false') : $this->resolution;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->scale !== null) {
            $localName = lcfirst('Scale');
            $localValue = is_bool($this->scale) ? ($this->scale ? 'true' : 'false') : $this->scale;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->tiff_compression !== null) {
            $localName = lcfirst('TiffCompression');
            $localValue = is_bool($this->tiff_compression) ? ($this->tiff_compression ? 'true' : 'false') : $this->tiff_compression;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->dml_rendering_mode !== null) {
            $localName = lcfirst('DmlRenderingMode');
            $localValue = is_bool($this->dml_rendering_mode) ? ($this->dml_rendering_mode ? 'true' : 'false') : $this->dml_rendering_mode;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->dml_effects_rendering_mode !== null) {
            $localName = lcfirst('DmlEffectsRenderingMode');
            $localValue = is_bool($this->dml_effects_rendering_mode) ? ($this->dml_effects_rendering_mode ? 'true' : 'false') : $this->dml_effects_rendering_mode;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->tiff_binarization_method !== null) {
            $localName = lcfirst('TiffBinarizationMethod');
            $localValue = is_bool($this->tiff_binarization_method) ? ($this->tiff_binarization_method ? 'true' : 'false') : $this->tiff_binarization_method;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->zip_output !== null) {
            $localName = lcfirst('ZipOutput');
            $localValue = is_bool($this->zip_output) ? ($this->zip_output ? 'true' : 'false') : $this->zip_output;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($this->fonts_location !== null) {
            $localName = lcfirst('FontsLocation');
            $localValue = is_bool($this->fonts_location) ? ($this->fonts_location ? 'true' : 'false') : $this->fonts_location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toQueryValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }

        $resourcePath = ObjectSerializer::parseURL($config, $resourcePath, $queryParams);

        // body params
        $_tempBody = null;
        if (isset($this->save_options)) {
            if (is_string($this->save_options)) {
                $_tempBody = ['content' => "\"" . $this->save_options . "\"", 'mime' => 'application/json'];
            } else {
                $_tempBody = ['content' => $this->save_options, 'mime' => 'application/json'];
            }
        }
        $headerParams = [];
        // for model (json/xml)
        if (isset($_tempBody)) {
            $headerParams['Content-Type'] = $_tempBody['mime'];
            if (gettype($_tempBody['content']) === 'string') {
                $httpBody = ObjectSerializer::sanitizeForSerialization($_tempBody['content']);
            } else {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody['content']));
            }
        } elseif (count($formParams) > 1) {
            $multipartContents = [];
            foreach ($formParams as $formParamName => $formParamValue) {
                $multipartContents[] = [
                    'name' => $formParamName,
                    'contents' => $formParamValue['content'],
                    'headers' => ['Content-Type' => $formParamValue['mime']]
                ];
            }
            // for HTTP post (form)
            $httpBody = new MultipartStream($multipartContents);
            $headerParams['Content-Type'] = "multipart/form-data; boundary=" . $httpBody->getBoundary();
        }

        $result = array();
        $result['method'] = 'PUT';
        $result['url'] = $resourcePath;
        $result['headers'] = $headerParams;
        $result['body'] = $httpBody;
        return $result;
    }

    /*
     * Create request for operation 'saveAsTiff'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequest($config)
    {
        $reqdata = $this->createRequestData($config);
        $defaultHeaders = [];

        if ($config->getAccessToken() !== null) {
            $defaultHeaders['Authorization'] = 'Bearer ' . $config->getAccessToken();
        }

        if ($config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $config->getClientVersion();

        $reqdata['headers'] = array_merge($defaultHeaders, $reqdata['headers']);
        $req = new Request(
            $reqdata['method'],
            $reqdata['url'],
            $reqdata['headers'],
            $reqdata['body']
        );

        if ($config->getDebug()) {
            $this->_writeRequestLog($reqdata['method'], $reqdata['url'], $reqdata['headers'], $reqdata['body']);
        }

        return $req;
    }

    /*
     * Gets response type of this request.
     */
    public function getResponseType()
    {
        return '\Aspose\Words\Model\SaveResponse';
    }

    public function deserializeResponse($responseContent)
    {
        return ObjectSerializer::deserialize($responseContent, '\Aspose\Words\Model\SaveResponse', []);
    }
}
