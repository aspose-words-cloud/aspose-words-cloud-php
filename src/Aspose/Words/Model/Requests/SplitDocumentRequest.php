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
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $;
    /*
     * Format to split.
     */
    public $;
    /*
     * Start page.
     */
    public $;
    /*
     * End page.
     */
    public $;
    /*
     * ZipOutput or not.
     */
    public $;
    /*
     * Folder in filestorage with custom fonts.
     */
    public $;
    
	
    /*
     * Initializes a new instance of the SplitDocumentRequest class.
     *  
     * @param  $ Original document name.
     * @param  $ Original document folder.
     * @param  $ Original document storage.
     * @param  $ Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param  $ Password for opening an encrypted document.
     * @param  $ Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param  $ Format to split.
     * @param  $ Start page.
     * @param  $ End page.
     * @param  $ ZipOutput or not.
     * @param  $ Folder in filestorage with custom fonts.
     */
    public function __construct($$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null$ = null)             
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
    }

    /*
     * Original document name.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Original document name.
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
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Format to split.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Format to split.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Start page.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Start page.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * End page.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * End page.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * ZipOutput or not.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * ZipOutput or not.
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
