<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SaveAsTiffRequest.php">
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

namespace Aspose\Words\Model\Requests;

/*
 * Request model for saveAsTiff operation.
 */
class SaveAsTiffRequest
{
    /*
     * The document name.
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
     * Use antialiasing flag.
     */
    public $use_anti_aliasing;
	
    /*
     * Use high quality flag.
     */
    public $use_high_quality_rendering;
	
    /*
     * Brightness for the generated images.
     */
    public $image_brightness;
	
    /*
     * Color mode for the generated images.
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
     * Number of pages to render.
     */
    public $page_count;
	
    /*
     * Page index to start rendering.
     */
    public $page_index;
	
    /*
     * Background image color.
     */
    public $paper_color;
	
    /*
     * The pixel format of generated images.
     */
    public $pixel_format;
	
    /*
     * The resolution of generated images.
     */
    public $resolution;
	
    /*
     * Zoom factor for generated images.
     */
    public $scale;
	
    /*
     * The compression tipe.
     */
    public $tiff_compression;
	
    /*
     * Optional, default is Fallback.
     */
    public $dml_rendering_mode;
	
    /*
     * Optional, default is Simplified.
     */
    public $dml_effects_rendering_mode;
	
    /*
     * Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     */
    public $tiff_binarization_method;
	
    /*
     * Optional. A value determining zip output or not.
     */
    public $zip_output;
	
    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;
    
	
    /*
     * Initializes a new instance of the SaveAsTiffRequest class.
     *  
     * @param string $name The document name.
     * @param \Aspose\Words\Model\TiffSaveOptionsData $save_options Tiff save options.
     * @param string $folder Original document folder.
     * @param string $storage Original document storage.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param bool $use_anti_aliasing Use antialiasing flag.
     * @param bool $use_high_quality_rendering Use high quality flag.
     * @param double $image_brightness Brightness for the generated images.
     * @param string $image_color_mode Color mode for the generated images.
     * @param double $image_contrast The contrast for the generated images.
     * @param string $numeral_format The images numeral format.
     * @param int $page_count Number of pages to render.
     * @param int $page_index Page index to start rendering.
     * @param string $paper_color Background image color.
     * @param string $pixel_format The pixel format of generated images.
     * @param double $resolution The resolution of generated images.
     * @param double $scale Zoom factor for generated images.
     * @param string $tiff_compression The compression tipe.
     * @param string $dml_rendering_mode Optional, default is Fallback.
     * @param string $dml_effects_rendering_mode Optional, default is Simplified.
     * @param string $tiff_binarization_method Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     * @param bool $zip_output Optional. A value determining zip output or not.
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
     * The document name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The document name.
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
     * Use antialiasing flag.
     */
    public function get_use_anti_aliasing()
    {
        return $this->use_anti_aliasing;
    }

    /*
     * Use antialiasing flag.
     */
    public function set_use_anti_aliasing($value)
    {
        $this->use_anti_aliasing = $value;
        return $this;
    }
	
    /*
     * Use high quality flag.
     */
    public function get_use_high_quality_rendering()
    {
        return $this->use_high_quality_rendering;
    }

    /*
     * Use high quality flag.
     */
    public function set_use_high_quality_rendering($value)
    {
        $this->use_high_quality_rendering = $value;
        return $this;
    }
	
    /*
     * Brightness for the generated images.
     */
    public function get_image_brightness()
    {
        return $this->image_brightness;
    }

    /*
     * Brightness for the generated images.
     */
    public function set_image_brightness($value)
    {
        $this->image_brightness = $value;
        return $this;
    }
	
    /*
     * Color mode for the generated images.
     */
    public function get_image_color_mode()
    {
        return $this->image_color_mode;
    }

    /*
     * Color mode for the generated images.
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
     * Number of pages to render.
     */
    public function get_page_count()
    {
        return $this->page_count;
    }

    /*
     * Number of pages to render.
     */
    public function set_page_count($value)
    {
        $this->page_count = $value;
        return $this;
    }
	
    /*
     * Page index to start rendering.
     */
    public function get_page_index()
    {
        return $this->page_index;
    }

    /*
     * Page index to start rendering.
     */
    public function set_page_index($value)
    {
        $this->page_index = $value;
        return $this;
    }
	
    /*
     * Background image color.
     */
    public function get_paper_color()
    {
        return $this->paper_color;
    }

    /*
     * Background image color.
     */
    public function set_paper_color($value)
    {
        $this->paper_color = $value;
        return $this;
    }
	
    /*
     * The pixel format of generated images.
     */
    public function get_pixel_format()
    {
        return $this->pixel_format;
    }

    /*
     * The pixel format of generated images.
     */
    public function set_pixel_format($value)
    {
        $this->pixel_format = $value;
        return $this;
    }
	
    /*
     * The resolution of generated images.
     */
    public function get_resolution()
    {
        return $this->resolution;
    }

    /*
     * The resolution of generated images.
     */
    public function set_resolution($value)
    {
        $this->resolution = $value;
        return $this;
    }
	
    /*
     * Zoom factor for generated images.
     */
    public function get_scale()
    {
        return $this->scale;
    }

    /*
     * Zoom factor for generated images.
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
     * Optional, default is Fallback.
     */
    public function get_dml_rendering_mode()
    {
        return $this->dml_rendering_mode;
    }

    /*
     * Optional, default is Fallback.
     */
    public function set_dml_rendering_mode($value)
    {
        $this->dml_rendering_mode = $value;
        return $this;
    }
	
    /*
     * Optional, default is Simplified.
     */
    public function get_dml_effects_rendering_mode()
    {
        return $this->dml_effects_rendering_mode;
    }

    /*
     * Optional, default is Simplified.
     */
    public function set_dml_effects_rendering_mode($value)
    {
        $this->dml_effects_rendering_mode = $value;
        return $this;
    }
	
    /*
     * Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     */
    public function get_tiff_binarization_method()
    {
        return $this->tiff_binarization_method;
    }

    /*
     * Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     */
    public function set_tiff_binarization_method($value)
    {
        $this->tiff_binarization_method = $value;
        return $this;
    }
	
    /*
     * Optional. A value determining zip output or not.
     */
    public function get_zip_output()
    {
        return $this->zip_output;
    }

    /*
     * Optional. A value determining zip output or not.
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
}
