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
    public $;
    /*
     * Tiff save options.
     */
    public $;
    /*
     * Original document folder.
     */
    public $;
    /*
     * Original document storage.
     */
    public $;
    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $;
    /*
     * Password for opening an encrypted document.
     */
    public $;
    /*
     * Use antialiasing flag.
     */
    public $;
    /*
     * Use high quality flag.
     */
    public $;
    /*
     * Brightness for the generated images.
     */
    public $;
    /*
     * Color mode for the generated images.
     */
    public $;
    /*
     * The contrast for the generated images.
     */
    public $;
    /*
     * The images numeral format.
     */
    public $;
    /*
     * Number of pages to render.
     */
    public $;
    /*
     * Page index to start rendering.
     */
    public $;
    /*
     * Background image color.
     */
    public $;
    /*
     * The pixel format of generated images.
     */
    public $;
    /*
     * The resolution of generated images.
     */
    public $;
    /*
     * Zoom factor for generated images.
     */
    public $;
    /*
     * The compression tipe.
     */
    public $;
    /*
     * Optional, default is Fallback.
     */
    public $;
    /*
     * Optional, default is Simplified.
     */
    public $;
    /*
     * Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     */
    public $;
    /*
     * Optional. A value determining zip output or not.
     */
    public $;
    /*
     * Folder in filestorage with custom fonts.
     */
    public $;
    
	
    /*
     * Initializes a new instance of the SaveAsTiffRequest class.
     *  
     * @param  $ The document name.
     * @param  $ Tiff save options.
     * @param  $ Original document folder.
     * @param  $ Original document storage.
     * @param  $ Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param  $ Password for opening an encrypted document.
     * @param  $ Use antialiasing flag.
     * @param  $ Use high quality flag.
     * @param  $ Brightness for the generated images.
     * @param  $ Color mode for the generated images.
     * @param  $ The contrast for the generated images.
     * @param  $ The images numeral format.
     * @param  $ Number of pages to render.
     * @param  $ Page index to start rendering.
     * @param  $ Background image color.
     * @param  $ The pixel format of generated images.
     * @param  $ The resolution of generated images.
     * @param  $ Zoom factor for generated images.
     * @param  $ The compression tipe.
     * @param  $ Optional, default is Fallback.
     * @param  $ Optional, default is Simplified.
     * @param  $ Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     * @param  $ Optional. A value determining zip output or not.
     * @param  $ Folder in filestorage with custom fonts.
     */
    public function __construct($$$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null)             
    {
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
    }

    /*
     * The document name.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The document name.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Tiff save options.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Tiff save options.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Original document folder.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Original document folder.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Original document storage.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Original document storage.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Password for opening an encrypted document.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Password for opening an encrypted document.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Use antialiasing flag.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Use antialiasing flag.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Use high quality flag.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Use high quality flag.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Brightness for the generated images.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Brightness for the generated images.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Color mode for the generated images.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Color mode for the generated images.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * The contrast for the generated images.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The contrast for the generated images.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * The images numeral format.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The images numeral format.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Number of pages to render.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Number of pages to render.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Page index to start rendering.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Page index to start rendering.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Background image color.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Background image color.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * The pixel format of generated images.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The pixel format of generated images.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * The resolution of generated images.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The resolution of generated images.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Zoom factor for generated images.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Zoom factor for generated images.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * The compression tipe.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The compression tipe.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Optional, default is Fallback.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Optional, default is Fallback.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Optional, default is Simplified.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Optional, default is Simplified.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Optional, Tiff binarization method, possible values are: FloydSteinbergDithering, Threshold.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Optional. A value determining zip output or not.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Optional. A value determining zip output or not.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Folder in filestorage with custom fonts.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Folder in filestorage with custom fonts.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
}
