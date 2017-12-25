<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutConvertDocumentRequest.php">
 *   Copyright (c) 2017 Aspose.Words for Cloud
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
 * Request model for putConvertDocument" operation.
 */
class PutConvertDocumentRequest
{
    /*
     * Initializes a new instance of the PutConvertDocumentRequest class.
     *  
     * @param \SplFileObject $document Converting document
     * @param string $format Format to convert.
     * @param string $storage File storage, which have to be used.
     * @param string $out_path Path for saving operation result to the local storage.
     * @param string $fonts_location Folder in filestorage with custom fonts.
     */
    public function __construct($document, $format, $storage = null, $out_path = null, $fonts_location = null)             
    {
        $this->document = $document;
        $this->format = $format;
        $this->storage = $storage;
        $this->out_path = $out_path;
        $this->fonts_location = $fonts_location;
    }

    /*
     * Converting document
     */
    public $document;
	
    /*
     * Format to convert.
     */
    public $format;
	
    /*
     * File storage, which have to be used.
     */
    public $storage;
	
    /*
     * Path for saving operation result to the local storage.
     */
    public $out_path;
	
    /*
     * Folder in filestorage with custom fonts.
     */
    public $fonts_location;
}