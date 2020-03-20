<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteFileRequest.php">
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
 * Request model for deleteFile operation.
 */
class DeleteFileRequest
{
    /*
     * Path of the file including file name and extension e.g. /Folder1/file.ext
     */
    public $;
    /*
     * Storage name
     */
    public $;
    /*
     * File version ID to delete
     */
    public $;
    
	
    /*
     * Initializes a new instance of the DeleteFileRequest class.
     *  
     * @param  $ Path of the file including file name and extension e.g. /Folder1/file.ext
     * @param  $ Storage name
     * @param  $ File version ID to delete
     */
    public function __construct($$ = null$ = null)             
    {
        $this-> = $;
        $this-> = $;
        $this-> = $;
    }

    /*
     * Path of the file including file name and extension e.g. /Folder1/file.ext
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Path of the file including file name and extension e.g. /Folder1/file.ext
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Storage name
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Storage name
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * File version ID to delete
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * File version ID to delete
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
}
