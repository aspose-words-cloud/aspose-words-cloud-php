<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExecuteMailMergeOnlineRequest.php">
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
 * Request model for executeMailMergeOnline operation.
 */
class ExecuteMailMergeOnlineRequest
{
    /*
     * File with template
     */
    public $;
    /*
     * File with mailmerge data
     */
    public $;
    /*
     * With regions flag.
     */
    public $;
    /*
     * Clean up options.
     */
    public $;
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not setted, "template" will be used instead. 
     */
    public $;
    
	
    /*
     * Initializes a new instance of the ExecuteMailMergeOnlineRequest class.
     *  
     * @param  $ File with template
     * @param  $ File with mailmerge data
     * @param  $ With regions flag.
     * @param  $ Clean up options.
     * @param  $ This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not setted, "template" will be used instead. 
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
     * File with template
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * File with template
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * File with mailmerge data
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * File with mailmerge data
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * With regions flag.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * With regions flag.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * Clean up options.
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * Clean up options.
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not setted, "template" will be used instead. 
     */
    public function get_()
    {
        return $this->;
    }

    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not setted, "template" will be used instead. 
     */
    public function set_($value)
    {
        $this-> = $value;
        return $this;
    }
}
