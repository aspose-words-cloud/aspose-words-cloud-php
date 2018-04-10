<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostSplitDocumentRequest.php">
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
 * Request model for postSplitDocument operation.
 */
class PostSplitDocumentRequest
{
    /*
     * Initializes a new instance of the PostSplitDocumentRequest class.
     *  
     * @param string $name Original document name.
     * @param string $dest_file_name Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param string $folder Original document folder.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     * @param string $format Format to split.
     * @param int $from Start page.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param string $storage File storage, which have to be used.
     * @param int $to End page.
     * @param bool $zip_output ZipOutput or not.
     */
    public function __construct($name, $dest_file_name = null, $folder = null, $fonts_location = null, $format = null, $from = null, $load_encoding = null, $password = null, $storage = null, $to = null, $zip_output = null)             
    {
        $this->name = $name;
        $this->dest_file_name = $dest_file_name;
        $this->folder = $folder;
        $this->fonts_location = $fonts_location;
        $this->format = $format;
        $this->from = $from;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->storage = $storage;
        $this->to = $to;
        $this->zip_output = $zip_output;
    }

    /*
     * Original document name.
     */
    public $name;
	
    /*
     * Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $dest_file_name;
	
    /*
     * Original document folder.
     */
    public $folder;
	
    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;
	
    /*
     * Format to split.
     */
    public $format;
	
    /*
     * Start page.
     */
    public $from;
	
    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;
	
    /*
     * Password for opening an encrypted document.
     */
    public $password;
	
    /*
     * File storage, which have to be used.
     */
    public $storage;
	
    /*
     * End page.
     */
    public $to;
	
    /*
     * ZipOutput or not.
     */
    public $zip_output;
}
