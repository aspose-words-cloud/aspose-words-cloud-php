<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetDocumentStatisticsRequest.php">
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
 * Request model for getDocumentStatistics" operation.
 */
class GetDocumentStatisticsRequest
{
    /*
     * Initializes a new instance of the GetDocumentStatisticsRequest class.
     *  
     * @param string $name The document name.
     * @param string $folder Original document folder.
     * @param string $storage File storage, which have to be used.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param bool $include_comments Support including/excluding comments from the WordCount. Default value is \"true\".
     * @param bool $include_footnotes Support including/excluding footnotes from the WordCount. Default value is \"false\".
     * @param bool $include_text_in_shapes Support including/excluding shape's text from the WordCount. Default value is \"false\"
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
    public $name;
	
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
     * Support including/excluding comments from the WordCount. Default value is \"true\".
     */
    public $include_comments;
	
    /*
     * Support including/excluding footnotes from the WordCount. Default value is \"false\".
     */
    public $include_footnotes;
	
    /*
     * Support including/excluding shape's text from the WordCount. Default value is \"false\"
     */
    public $include_text_in_shapes;
}