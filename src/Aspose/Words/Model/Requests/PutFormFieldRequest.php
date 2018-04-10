<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutFormFieldRequest.php">
 *   Copyright (c) 2018 Aspose.Words for Cloud
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
 * Request model for putFormField operation.
 */
class PutFormFieldRequest
{
    /*
     * Initializes a new instance of the PutFormFieldRequest class.
     *  
     * @param \Aspose\Words\Model\FormField $form_field From field data.
     * @param string $name The document name.
     * @param string $dest_file_name Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     * @param string $folder Original document folder.
     * @param string $insert_before_node Form field will be inserted before node with index.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $node_path Path to node that contains collection of formfields.
     * @param string $password Password for opening an encrypted document.
     * @param string $revision_author Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     * @param string $revision_date_time The date and time to use for revisions.
     * @param string $storage File storage, which have to be used.
     */
    public function __construct($form_field, $name, $dest_file_name = null, $folder = null, $insert_before_node = null, $load_encoding = null, $node_path = null, $password = null, $revision_author = null, $revision_date_time = null, $storage = null)             
    {
        $this->form_field = $form_field;
        $this->name = $name;
        $this->dest_file_name = $dest_file_name;
        $this->folder = $folder;
        $this->insert_before_node = $insert_before_node;
        $this->load_encoding = $load_encoding;
        $this->node_path = $node_path;
        $this->password = $password;
        $this->revision_author = $revision_author;
        $this->revision_date_time = $revision_date_time;
        $this->storage = $storage;
    }

    /*
     * From field data.
     */
    public $form_field;
	
    /*
     * The document name.
     */
    public $name;
	
    /*
     * Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved as the source document.
     */
    public $dest_file_name;
	
    /*
     * Original document folder.
     */
    public $folder;
	
    /*
     * Form field will be inserted before node with index.
     */
    public $insert_before_node;
	
    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;
	
    /*
     * Path to node that contains collection of formfields.
     */
    public $node_path;
	
    /*
     * Password for opening an encrypted document.
     */
    public $password;
	
    /*
     * Initials of the author to use for revisions.If you set this parameter and then make some changes to the document programmatically, save the document and later open the document in MS Word you will see these changes as revisions.
     */
    public $revision_author;
	
    /*
     * The date and time to use for revisions.
     */
    public $revision_date_time;
	
    /*
     * File storage, which have to be used.
     */
    public $storage;
}
