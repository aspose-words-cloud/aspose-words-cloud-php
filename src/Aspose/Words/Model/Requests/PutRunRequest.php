<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutRunRequest.php">
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
 * Request model for putRun" operation.
 */
class PutRunRequest
{
    /*
     * Initializes a new instance of the PutRunRequest class.
     *  
     * @param string $name The document name.
     * @param string $paragraph_path Path to parent paragraph.
     * @param \Aspose\Words\Model\Run $run Run data.
     * @param string $folder Original document folder.
     * @param string $storage File storage, which have to be used.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param string $dest_file_name Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param string $revision_author Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     * @param string $revision_date_time The date and time to use for revisions.
     * @param string $insert_before_node Paragraph will be inserted before node with index.
     */
    public function __construct($name, $paragraph_path, $run, $folder = null, $storage = null, $load_encoding = null, $password = null, $dest_file_name = null, $revision_author = null, $revision_date_time = null, $insert_before_node = null)             
    {
        $this->name = $name;
        $this->paragraph_path = $paragraph_path;
        $this->run = $run;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->dest_file_name = $dest_file_name;
        $this->revision_author = $revision_author;
        $this->revision_date_time = $revision_date_time;
        $this->insert_before_node = $insert_before_node;
    }

    /*
     * The document name.
     */
    public $name;
	
    /*
     * Path to parent paragraph.
     */
    public $paragraph_path;
	
    /*
     * Run data.
     */
    public $run;
	
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
     * Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $dest_file_name;
	
    /*
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public $revision_author;
	
    /*
     * The date and time to use for revisions.
     */
    public $revision_date_time;
	
    /*
     * Paragraph will be inserted before node with index.
     */
    public $insert_before_node;
}