<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetHeaderFooterOfSectionRequest.php">
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
 * Request model for getHeaderFooterOfSection operation.
 */
class GetHeaderFooterOfSectionRequest
{
    /*
     * The document name.
     */
    public $;
    /*
     * Header/footer index.
     */
    public $;
    /*
     * Section index.
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
     * List of types of headers and footers.
     */
    public $;
    
	
    /*
     * Initializes a new instance of the GetHeaderFooterOfSectionRequest class.
     *  
     * @param  $ The document name.
     * @param  $ Header/footer index.
     * @param  $ Section index.
     * @param  $ Original document folder.
     * @param  $ Original document storage.
     * @param  $ Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param  $ Password for opening an encrypted document.
     * @param  $ List of types of headers and footers.
     */
    public function __construct($$$$ = null$ = null$ = null$ = null$ = null)             
    {
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
     * Header/footer index.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Header/footer index.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Section index.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Section index.
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
     * List of types of headers and footers.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * List of types of headers and footers.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
}
