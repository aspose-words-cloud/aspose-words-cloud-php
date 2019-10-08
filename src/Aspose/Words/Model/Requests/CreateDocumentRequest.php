<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CreateDocumentRequest.php">
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
 * Request model for createDocument operation.
 */
class CreateDocumentRequest
{
    /*
     * Original document storage.
     */
    public $storage;
	
    /*
     * The document name.
     */
    public $file_name;
	
    /*
     * The document folder.
     */
    public $folder;
    
	
    /*
     * Initializes a new instance of the CreateDocumentRequest class.
     *  
     * @param string $storage Original document storage.
     * @param string $file_name The document name.
     * @param string $folder The document folder.
     */
    public function __construct($storage = null, $file_name = null, $folder = null)             
    {
        $this->storage = $storage;
        $this->file_name = $file_name;
        $this->folder = $folder;
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
     * The document name.
     */
    public function get_file_name()
    {
        return $this->file_name;
    }

    /*
     * The document name.
     */
    public function set_file_name($value)
    {
        $this->file_name = $value;
        return $this;
    }
	
    /*
     * The document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * The document folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
}
