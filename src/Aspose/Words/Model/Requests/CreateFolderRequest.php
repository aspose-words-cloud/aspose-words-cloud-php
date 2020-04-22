<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CreateFolderRequest.php">
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
 * Request model for createFolder operation.
 */
class CreateFolderRequest
{
    /*
     * Target folder's path e.g. Folder1/Folder2/. The folders will be created recursively
     */
    public $path;
	
    /*
     * Storage name
     */
    public $storage_name;
    
	
    /*
     * Initializes a new instance of the CreateFolderRequest class.
     *  
     * @param string $path Target folder's path e.g. Folder1/Folder2/. The folders will be created recursively
     * @param string $storage_name Storage name
     */
    public function __construct($path, $storage_name = null)             
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
    }

    /*
     * Target folder's path e.g. Folder1/Folder2/. The folders will be created recursively
     */
    public function get_path()
    {
        return $this->path;
    }

    /*
     * Target folder's path e.g. Folder1/Folder2/. The folders will be created recursively
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }
	
    /*
     * Storage name
     */
    public function get_storage_name()
    {
        return $this->storage_name;
    }

    /*
     * Storage name
     */
    public function set_storage_name($value)
    {
        $this->storage_name = $value;
        return $this;
    }
}
