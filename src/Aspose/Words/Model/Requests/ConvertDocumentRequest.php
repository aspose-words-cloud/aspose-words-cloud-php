<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertDocumentRequest.php">
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
 * Request model for convertDocument operation.
 */
class ConvertDocumentRequest
{
    /*
     * Converting document
     */
    public $document;
	
    /*
     * Format to convert.
     */
    public $format;
	
    /*
     * Original document storage.
     */
    public $storage;
	
    /*
     * Path for saving operation result to the local storage.
     */
    public $out_path;
	
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, "sourceFilename" will be used instead.
     */
    public $file_name_field_value;
	
    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;
    
	
    /*
     * Initializes a new instance of the ConvertDocumentRequest class.
     *  
     * @param \SplFileObject $document Converting document
     * @param string $format Format to convert.
     * @param string $storage Original document storage.
     * @param string $out_path Path for saving operation result to the local storage.
     * @param string $file_name_field_value This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, "sourceFilename" will be used instead.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     */
    public function __construct($document, $format, $storage = null, $out_path = null, $file_name_field_value = null, $fonts_location = null)             
    {
        $this->document = $document;
        $this->format = $format;
        $this->storage = $storage;
        $this->out_path = $out_path;
        $this->file_name_field_value = $file_name_field_value;
        $this->fonts_location = $fonts_location;
    }

    /*
     * Converting document
     */
    public function get_document()
    {
        return $this->document;
    }

    /*
     * Converting document
     */
    public function set_document($value)
    {
        $this->document = $value;
        return $this;
    }
	
    /*
     * Format to convert.
     */
    public function get_format()
    {
        return $this->format;
    }

    /*
     * Format to convert.
     */
    public function set_format($value)
    {
        $this->format = $value;
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
     * Path for saving operation result to the local storage.
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /*
     * Path for saving operation result to the local storage.
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
        return $this;
    }
	
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, "sourceFilename" will be used instead.
     */
    public function get_file_name_field_value()
    {
        return $this->file_name_field_value;
    }

    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, "sourceFilename" will be used instead.
     */
    public function set_file_name_field_value($value)
    {
        $this->file_name_field_value = $value;
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
