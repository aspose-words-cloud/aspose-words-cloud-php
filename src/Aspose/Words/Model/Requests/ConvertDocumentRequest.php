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
    public $;
    /*
     * Format to convert.
     */
    public $;
    /*
     * Original document storage.
     */
    public $;
    /*
     * Path for saving operation result to the local storage.
     */
    public $;
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, "sourceFilename" will be used instead. 
     */
    public $;
    /*
     * Folder in filestorage with custom fonts.
     */
    public $;
    
	
    /*
     * Initializes a new instance of the ConvertDocumentRequest class.
     *  
     * @param  $ Converting document
     * @param  $ Format to convert.
     * @param  $ Original document storage.
     * @param  $ Path for saving operation result to the local storage.
     * @param  $ This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, "sourceFilename" will be used instead. 
     * @param  $ Folder in filestorage with custom fonts.
     */
    public function __construct($$$ = null$ = null$ = null$ = null)             
    {
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
    }

    /*
     * Converting document
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Converting document
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Format to convert.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Format to convert.
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
     * Path for saving operation result to the local storage.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Path for saving operation result to the local storage.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, "sourceFilename" will be used instead. 
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, "sourceFilename" will be used instead. 
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
