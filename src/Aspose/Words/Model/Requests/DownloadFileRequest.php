<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DownloadFileRequest.php">
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
 * Request model for downloadFile operation.
 */
class DownloadFileRequest
{
    /*
     * Path of the file including the file name and extension e.g. /folder1/file.ext
     */
    public $path;
	
    /*
     * Storage name
     */
    public $storage_name;
	
    /*
     * File version ID to download
     */
    public $version_id;
    
	
    /*
     * Initializes a new instance of the DownloadFileRequest class.
     *  
     * @param string $path Path of the file including the file name and extension e.g. /folder1/file.ext
     * @param string $storage_name Storage name
     * @param string $version_id File version ID to download
     */
    public function __construct($path, $storage_name = null, $version_id = null)             
    {
        $this->path = $path;
        $this->storage_name = $storage_name;
        $this->version_id = $version_id;
    }

    /*
     * Path of the file including the file name and extension e.g. /folder1/file.ext
     */
    public function get_path()
    {
        return $this->path;
    }

    /*
     * Path of the file including the file name and extension e.g. /folder1/file.ext
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
	
    /*
     * File version ID to download
     */
    public function get_version_id()
    {
        return $this->version_id;
    }

    /*
     * File version ID to download
     */
    public function set_version_id($value)
    {
        $this->version_id = $value;
        return $this;
    }
}
