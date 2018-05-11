<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutExecuteTemplateOnlineRequest.php">
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
 * Request model for putExecuteTemplateOnline operation.
 */
class PutExecuteTemplateOnlineRequest
{
    /*
     * File with template
     */
    public $template;
	
    /*
     * File with mailmerge data
     */
    public $data;
	
    /*
     * Clean up options.
     */
    public $cleanup;
	
    /*
     * Gets or sets a value indicating whether paragraph with TableStart or              TableEnd field should be fully included into mail merge region or particular range between TableStart and TableEnd fields.              The default value is true.
     */
    public $use_whole_paragraph_as_region;
	
    /*
     * Merge with regions or not. True by default
     */
    public $with_regions;
	
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}.  If it is not setted, \"template\" will be used instead.  Note: if withRegions == true executeTemplate updates fields only inside regions
     */
    public $document_file_name;
    
	
    /*
     * Initializes a new instance of the PutExecuteTemplateOnlineRequest class.
     *  
     * @param \SplFileObject $template File with template
     * @param \SplFileObject $data File with mailmerge data
     * @param string $cleanup Clean up options.
     * @param bool $use_whole_paragraph_as_region Gets or sets a value indicating whether paragraph with TableStart or              TableEnd field should be fully included into mail merge region or particular range between TableStart and TableEnd fields.              The default value is true.
     * @param bool $with_regions Merge with regions or not. True by default
     * @param string $document_file_name This file name will be used when resulting document has dynamic field for document file name {filename}.  If it is not setted, \"template\" will be used instead.  Note: if withRegions == true executeTemplate updates fields only inside regions
     */
    public function __construct($template, $data, $cleanup = null, $use_whole_paragraph_as_region = null, $with_regions = null, $document_file_name = null)             
    {
        $this->template = $template;
        $this->data = $data;
        $this->cleanup = $cleanup;
        $this->use_whole_paragraph_as_region = $use_whole_paragraph_as_region;
        $this->with_regions = $with_regions;
        $this->document_file_name = $document_file_name;
    }

    /*
     * File with template
     */
    public function get_template()
    {
        return $this->template;
    }

    /*
     * File with template
     */
    public function set_template($value)
    {
        $this->template = $value;
        return $this;
    }
	
    /*
     * File with mailmerge data
     */
    public function get_data()
    {
        return $this->data;
    }

    /*
     * File with mailmerge data
     */
    public function set_data($value)
    {
        $this->data = $value;
        return $this;
    }
	
    /*
     * Clean up options.
     */
    public function get_cleanup()
    {
        return $this->cleanup;
    }

    /*
     * Clean up options.
     */
    public function set_cleanup($value)
    {
        $this->cleanup = $value;
        return $this;
    }
	
    /*
     * Gets or sets a value indicating whether paragraph with TableStart or              TableEnd field should be fully included into mail merge region or particular range between TableStart and TableEnd fields.              The default value is true.
     */
    public function get_use_whole_paragraph_as_region()
    {
        return $this->use_whole_paragraph_as_region;
    }

    /*
     * Gets or sets a value indicating whether paragraph with TableStart or              TableEnd field should be fully included into mail merge region or particular range between TableStart and TableEnd fields.              The default value is true.
     */
    public function set_use_whole_paragraph_as_region($value)
    {
        $this->use_whole_paragraph_as_region = $value;
        return $this;
    }
	
    /*
     * Merge with regions or not. True by default
     */
    public function get_with_regions()
    {
        return $this->with_regions;
    }

    /*
     * Merge with regions or not. True by default
     */
    public function set_with_regions($value)
    {
        $this->with_regions = $value;
        return $this;
    }
	
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}.  If it is not setted, \"template\" will be used instead.  Note: if withRegions == true executeTemplate updates fields only inside regions
     */
    public function get_document_file_name()
    {
        return $this->document_file_name;
    }

    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}.  If it is not setted, \"template\" will be used instead.  Note: if withRegions == true executeTemplate updates fields only inside regions
     */
    public function set_document_file_name($value)
    {
        $this->document_file_name = $value;
        return $this;
    }
}
