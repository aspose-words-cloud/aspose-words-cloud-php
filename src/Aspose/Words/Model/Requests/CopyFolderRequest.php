<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyFolderRequest.php">
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
 * Request model for copyFolder operation.
 */
class CopyFolderRequest
{
    /*
     * Destination folder path e.g. '/dst'
     */
    public $;
    /*
     * Source folder path e.g. /Folder1
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
     * Initializes a new instance of the CopyFolderRequest class.
     *  
     * @param  $ Destination folder path e.g. '/dst'
     * @param  $ Source folder path e.g. /Folder1
     * @param  $ Source storage name
     * @param  $ Destination storage name
     */
    public function __construct($$$ = null$ = null)             
    {
        $this-> = $;
        $this-> = $;
        $this-> = $;
        $this-> = $;
    }

    /*
     * Destination folder path e.g. '/dst'
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Destination folder path e.g. '/dst'
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Source folder path e.g. /Folder1
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Source folder path e.g. /Folder1
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
}
