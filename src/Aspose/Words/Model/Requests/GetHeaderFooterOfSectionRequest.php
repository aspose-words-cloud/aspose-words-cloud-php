<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetHeaderFooterOfSectionRequest.php">
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
 * Request model for getHeaderFooterOfSection" operation.
 */
class GetHeaderFooterOfSectionRequest
{
    /*
     * Initializes a new instance of the GetHeaderFooterOfSectionRequest class.
     *  
     * @param string $name The document name.
     * @param int $header_footer_index Header/footer index.
     * @param int $section_index Section index.
     * @param string $folder Original document folder.
     * @param string $storage File storage, which have to be used.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param string $filter_by_type List of types of headers and footers.
     */
    public function __construct($name, $header_footer_index, $section_index, $folder = null, $storage = null, $load_encoding = null, $password = null, $filter_by_type = null)             
    {
        $this->name = $name;
        $this->header_footer_index = $header_footer_index;
        $this->section_index = $section_index;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->filter_by_type = $filter_by_type;
    }

    /*
     * The document name.
     */
    public $name;
	
    /*
     * Header/footer index.
     */
    public $header_footer_index;
	
    /*
     * Section index.
     */
    public $section_index;
	
    /*
     * Original document folder.
     */
    public $folder;
	
    /*
     * File storage, which have to be used.
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
     * List of types of headers and footers.
     */
    public $filter_by_type;
}