<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyFileRequest.php">
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
 * Request model for copyFile operation.
 */
class CopyFileRequest
{
    /*
     * Destination file path
     */
    public $dest_path;
	
    /*
     * Source file's path e.g. '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     */
    public $src_path;
	
    /*
     * Source storage name
     */
    public $src_storage_name;
	
    /*
     * Destination storage name
     */
    public $dest_storage_name;
	
    /*
     * File version ID to copy
     */
    public $version_id;
    
	
    /*
     * Initializes a new instance of the CopyFileRequest class.
     *  
     * @param string $dest_path Destination file path
     * @param string $src_path Source file's path e.g. '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     * @param string $src_storage_name Source storage name
     * @param string $dest_storage_name Destination storage name
     * @param string $version_id File version ID to copy
     */
    public function __construct($dest_path, $src_path, $src_storage_name = null, $dest_storage_name = null, $version_id = null)             
    {
        $this->dest_path = $dest_path;
        $this->src_path = $src_path;
        $this->src_storage_name = $src_storage_name;
        $this->dest_storage_name = $dest_storage_name;
        $this->version_id = $version_id;
    }

    /*
     * Destination file path
     */
    public function get_dest_path()
    {
        return $this->dest_path;
    }

    /*
     * Destination file path
     */
    public function set_dest_path($value)
    {
        $this->dest_path = $value;
        return $this;
    }
	
    /*
     * Source file's path e.g. '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     */
    public function get_src_path()
    {
        return $this->src_path;
    }

    /*
     * Source file's path e.g. '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     */
    public function set_src_path($value)
    {
        $this->src_path = $value;
        return $this;
    }
	
    /*
     * Source storage name
     */
    public function get_src_storage_name()
    {
        return $this->src_storage_name;
    }

    /*
     * Source storage name
     */
    public function set_src_storage_name($value)
    {
        $this->src_storage_name = $value;
        return $this;
    }
	
    /*
     * Destination storage name
     */
    public function get_dest_storage_name()
    {
        return $this->dest_storage_name;
    }

    /*
     * Destination storage name
     */
    public function set_dest_storage_name($value)
    {
        $this->dest_storage_name = $value;
        return $this;
    }
	
    /*
     * File version ID to copy
     */
    public function get_version_id()
    {
        return $this->version_id;
    }

    /*
     * File version ID to copy
     */
    public function set_version_id($value)
    {
        $this->version_id = $value;
        return $this;
    }
}
