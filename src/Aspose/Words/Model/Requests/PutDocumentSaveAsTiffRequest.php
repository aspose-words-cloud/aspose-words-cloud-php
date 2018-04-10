<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutDocumentSaveAsTiffRequest.php">
 *   Copyright (c) 2018 Aspose.Words for Cloud
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
 * Request model for putDocumentSaveAsTiff operation.
 */
class PutDocumentSaveAsTiffRequest
{
    /*
     * Initializes a new instance of the PutDocumentSaveAsTiffRequest class.
     *  
     * @param string $name The document name.
     * @param \Aspose\Words\Model\TiffSaveOptionsData $save_options Tiff save options.
     * @param string $dest_file_name Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param string $dml_effects_rendering_mode Optional, default is Simplified.
     * @param string $dml_rendering_mode Optional, default is Fallback.
     * @param string $folder Original document folder.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     * @param double $image_brightness Brightness for the generated images.
     * @param string $image_color_mode Color mode for the generated images.
     * @param double $image_contrast The contrast for the generated images.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $numeral_format The images numeral format.
     * @param int $page_count Number of pages to render.
     * @param int $page_index Page index to start rendering.
     * @param string $paper_color Background image color.
     * @param string $password Password for opening an encrypted document.
     * @param string $pixel_format The pixel format of generated images.
     * @param double $resolution The resolution of generated images.
     * @param string $result_file The resulting file name.
     * @param double $scale Zoom factor for generated images.
     * @param string $storage File storage, which have to be used.
     * @param string $tiff_binarization_method Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     * @param string $tiff_compression The compression tipe.
     * @param bool $use_anti_aliasing Use antialiasing flag.
     * @param bool $use_high_quality_rendering Use high quality flag.
     * @param bool $zip_output Optional. A value determining zip output or not.
     */
    public function __construct($name, $save_options, $dest_file_name = null, $dml_effects_rendering_mode = null, $dml_rendering_mode = null, $folder = null, $fonts_location = null, $image_brightness = null, $image_color_mode = null, $image_contrast = null, $load_encoding = null, $numeral_format = null, $page_count = null, $page_index = null, $paper_color = null, $password = null, $pixel_format = null, $resolution = null, $result_file = null, $scale = null, $storage = null, $tiff_binarization_method = null, $tiff_compression = null, $use_anti_aliasing = null, $use_high_quality_rendering = null, $zip_output = null)             
    {
        $this->name = $name;
        $this->save_options = $save_options;
        $this->dest_file_name = $dest_file_name;
        $this->dml_effects_rendering_mode = $dml_effects_rendering_mode;
        $this->dml_rendering_mode = $dml_rendering_mode;
        $this->folder = $folder;
        $this->fonts_location = $fonts_location;
        $this->image_brightness = $image_brightness;
        $this->image_color_mode = $image_color_mode;
        $this->image_contrast = $image_contrast;
        $this->load_encoding = $load_encoding;
        $this->numeral_format = $numeral_format;
        $this->page_count = $page_count;
        $this->page_index = $page_index;
        $this->paper_color = $paper_color;
        $this->password = $password;
        $this->pixel_format = $pixel_format;
        $this->resolution = $resolution;
        $this->result_file = $result_file;
        $this->scale = $scale;
        $this->storage = $storage;
        $this->tiff_binarization_method = $tiff_binarization_method;
        $this->tiff_compression = $tiff_compression;
        $this->use_anti_aliasing = $use_anti_aliasing;
        $this->use_high_quality_rendering = $use_high_quality_rendering;
        $this->zip_output = $zip_output;
    }

    /*
     * The document name.
     */
    public $name;
	
    /*
     * Tiff save options.
     */
    public $save_options;
	
    /*
     * Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $dest_file_name;
	
    /*
     * Optional, default is Simplified.
     */
    public $dml_effects_rendering_mode;
	
    /*
     * Optional, default is Fallback.
     */
    public $dml_rendering_mode;
	
    /*
     * Original document folder.
     */
    public $folder;
	
    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;
	
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
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;
	
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
     * Password for opening an encrypted document.
     */
    public $password;
	
    /*
     * The pixel format of generated images.
     */
    public $pixel_format;
	
    /*
     * The resolution of generated images.
     */
    public $resolution;
	
    /*
     * The resulting file name.
     */
    public $result_file;
	
    /*
     * Zoom factor for generated images.
     */
    public $scale;
	
    /*
     * File storage, which have to be used.
     */
    public $storage;
	
    /*
     * Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     */
    public $tiff_binarization_method;
	
    /*
     * The compression tipe.
     */
    public $tiff_compression;
	
    /*
     * Use antialiasing flag.
     */
    public $use_anti_aliasing;
	
    /*
     * Use high quality flag.
     */
    public $use_high_quality_rendering;
	
    /*
     * Optional. A value determining zip output or not.
     */
    public $zip_output;
}
