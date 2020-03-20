<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MoveFileRequest.php">
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
 * Request model for moveFile operation.
 */
class MoveFileRequest
{
    /*
     * Destination file path e.g. '/dest.ext'
     */
    public $;
    /*
     * Source file's path e.g. '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     */
    public $;
    /*
     * Source storage name
     */
    public $;
    /*
     * Destination storage name
     */
    public $;
    /*
     * File version ID to move
     */
    public $;
    
	
    /*
     * Initializes a new instance of the MoveFileRequest class.
     *  
     * @param  $ Destination file path e.g. '/dest.ext'
     * @param  $ Source file's path e.g. '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     * @param  $ Source storage name
     * @param  $ Destination storage name
     * @param  $ File version ID to move
     */
    public function __construct($$$ = null$ = null$ = null)             
    {
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
    }

    /*
     * Destination file path e.g. '/dest.ext'
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Destination file path e.g. '/dest.ext'
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Source file's path e.g. '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Source file's path e.g. '/Folder 1/file.ext' or '/Bucket/Folder 1/file.ext'
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Source storage name
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Source storage name
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Destination storage name
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Destination storage name
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * File version ID to move
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * File version ID to move
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
}
