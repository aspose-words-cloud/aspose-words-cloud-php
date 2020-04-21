<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SplitDocumentRequest.php">
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
 * Request model for splitDocument operation.
 */
class SplitDocumentRequest
{
    /*
     * Original document name.
     */
    public $name;
	
    /*
     * Format to split.
     */
    public $format;
	
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
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $dest_file_name;
	
    /*
     * Start page.
     */
    public $from;
	
    /*
     * End page.
     */
    public $to;
	
    /*
     * ZipOutput or not.
     */
    public $zip_output;
	
    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;
    
	
    /*
     * Initializes a new instance of the SplitDocumentRequest class.
     *  
     * @param string $name Original document name.
     * @param string $format Format to split.
     * @param string $folder Original document folder.
     * @param string $storage Original document storage.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param string $dest_file_name Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param int $from Start page.
     * @param int $to End page.
     * @param bool $zip_output ZipOutput or not.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     */
    public function __construct($name, $format, $folder = null, $storage = null, $load_encoding = null, $password = null, $dest_file_name = null, $from = null, $to = null, $zip_output = null, $fonts_location = null)             
    {
        $this->name = $name;
        $this->format = $format;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->dest_file_name = $dest_file_name;
        $this->from = $from;
        $this->to = $to;
        $this->zip_output = $zip_output;
        $this->fonts_location = $fonts_location;
    }

    /*
     * Original document name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * Original document name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
	
    /*
     * Format to split.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Format to split.
     */
    public function set_format($value)
    {
        $this->format = $value;
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
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public function get_dest_file_name()
    {
        return $this->dest_file_name;
    }

    /*
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public function set_dest_file_name($value)
    {
        $this->dest_file_name = $value;
        return $this;
    }
	
    /*
     * Start page.
     */
    public function get_from()
    {
        return $this->from;
    }

    /*
     * Start page.
     */
    public function set_from($value)
    {
        $this->from = $value;
        return $this;
    }
	
    /*
     * End page.
     */
    public function get_to()
    {
        return $this->to;
    }

    /*
     * End page.
     */
    public function set_to($value)
    {
        $this->to = $value;
        return $this;
    }
	
    /*
     * ZipOutput or not.
     */
    public function get_zip_output()
    {
        return $this->zip_output;
    }

    /*
     * ZipOutput or not.
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
