<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetDocumentStatisticsRequest.php">
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
 * Request model for getDocumentStatistics operation.
 */
class GetDocumentStatisticsRequest
{
    /*
     * The document name.
     */
    public $name;
	
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
     * Support including/excluding comments from the WordCount. Default value is "false".
     */
    public $include_comments;
	
    /*
     * Support including/excluding footnotes from the WordCount. Default value is "false".
     */
    public $include_footnotes;
	
    /*
     * Support including/excluding shape's text from the WordCount. Default value is "false".
     */
    public $include_text_in_shapes;
    
	
    /*
     * Initializes a new instance of the GetDocumentStatisticsRequest class.
     *  
     * @param string $name The document name.
     * @param string $folder Original document folder.
     * @param string $storage Original document storage.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param bool $include_comments Support including/excluding comments from the WordCount. Default value is "false".
     * @param bool $include_footnotes Support including/excluding footnotes from the WordCount. Default value is "false".
     * @param bool $include_text_in_shapes Support including/excluding shape's text from the WordCount. Default value is "false".
     */
    public function __construct($name, $folder = null, $storage = null, $load_encoding = null, $password = null, $include_comments = null, $include_footnotes = null, $include_text_in_shapes = null)             
    {
        $this->name = $name;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->include_comments = $include_comments;
        $this->include_footnotes = $include_footnotes;
        $this->include_text_in_shapes = $include_text_in_shapes;
    }

    /*
     * The document name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The document name.
     */
    public function set_name($value)
    {
        $this->name = $value;
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
     * Support including/excluding comments from the WordCount. Default value is "false".
     */
    public function get_include_comments()
    {
        return $this->include_comments;
    }

    /*
     * Support including/excluding comments from the WordCount. Default value is "false".
     */
    public function set_include_comments($value)
    {
        $this->include_comments = $value;
        return $this;
    }
	
    /*
     * Support including/excluding footnotes from the WordCount. Default value is "false".
     */
    public function get_include_footnotes()
    {
        return $this->include_footnotes;
    }

    /*
     * Support including/excluding footnotes from the WordCount. Default value is "false".
     */
    public function set_include_footnotes($value)
    {
        $this->include_footnotes = $value;
        return $this;
    }
	
    /*
     * Support including/excluding shape's text from the WordCount. Default value is "false".
     */
    public function get_include_text_in_shapes()
    {
        return $this->include_text_in_shapes;
    }

    /*
     * Support including/excluding shape's text from the WordCount. Default value is "false".
     */
    public function set_include_text_in_shapes($value)
    {
        $this->include_text_in_shapes = $value;
        return $this;
    }
}
