<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="InsertWatermarkImageRequest.php">
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
 * Request model for insertWatermarkImage operation.
 */
class InsertWatermarkImageRequest
{
    /*
     * The document name.
     */
    public $;
    /*
     * File with image
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
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public $;
    /*
     * The date and time to use for revisions.
     */
    public $;
    /*
     * The watermark rotation angle.
     */
    public $;
    /*
     * The image file server full name. If the name is empty the image is expected in request content.
     */
    public $;
    
	
    /*
     * Initializes a new instance of the InsertWatermarkImageRequest class.
     *  
     * @param  $ The document name.
     * @param  $ File with image
     * @param  $ Original document folder.
     * @param  $ Original document storage.
     * @param  $ Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param  $ Password for opening an encrypted document.
     * @param  $ Result path of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param  $ Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     * @param  $ The date and time to use for revisions.
     * @param  $ The watermark rotation angle.
     * @param  $ The image file server full name. If the name is empty the image is expected in request content.
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
     * File with image
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * File with image
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
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * The date and time to use for revisions.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The date and time to use for revisions.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * The watermark rotation angle.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The watermark rotation angle.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * The image file server full name. If the name is empty the image is expected in request content.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * The image file server full name. If the name is empty the image is expected in request content.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
}
