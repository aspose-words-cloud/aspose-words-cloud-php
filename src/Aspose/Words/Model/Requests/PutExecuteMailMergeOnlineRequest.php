<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutExecuteMailMergeOnlineRequest.php">
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
 * Request model for putExecuteMailMergeOnline" operation.
 */
class PutExecuteMailMergeOnlineRequest
{
    /*
     * Initializes a new instance of the PutExecuteMailMergeOnlineRequest class.
     *  
     * @param \SplFileObject $template File with template
     * @param \SplFileObject $data File with mailmerge data
     * @param bool $with_regions With regions flag.
     * @param string $cleanup Clean up options.
     */
    public function __construct($template, $data, $with_regions = null, $cleanup = null)             
    {
        $this->template = $template;
        $this->data = $data;
        $this->with_regions = $with_regions;
        $this->cleanup = $cleanup;
    }

    /*
     * File with template
     */
    public $template;
	
    /*
     * File with mailmerge data
     */
    public $data;
	
    /*
     * With regions flag.
     */
    public $with_regions;
	
    /*
     * Clean up options.
     */
    public $cleanup;
}