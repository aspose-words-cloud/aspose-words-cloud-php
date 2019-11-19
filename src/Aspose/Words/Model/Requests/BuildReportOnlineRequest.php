<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BuildReportOnlineRequest.php">
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
 * Request model for buildReportOnline operation.
 */
class BuildReportOnlineRequest
{
    /*
     * File with template
     */
    public $template;
	
    /*
     * A string providing data to populate the specified template. The string must be of one of the following types: xml, json, csv
     */
    public $data;
	
    /*
     * An object providing settings of report engine.
     */
    public $report_engine_settings;
	
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, \"template\" will be used instead.
     */
    public $document_file_name;
    
	
    /*
     * Initializes a new instance of the BuildReportOnlineRequest class.
     *  
     * @param \SplFileObject $template File with template
     * @param string $data A string providing data to populate the specified template. The string must be of one of the following types: xml, json, csv
     * @param map[string,string] $report_engine_settings An object providing settings of report engine.
     * @param string $document_file_name This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, \"template\" will be used instead.
     */
    public function __construct($template, $data, $report_engine_settings, $document_file_name = null)             
    {
        $this->template = $template;
        $this->data = $data;
        $this->report_engine_settings = $report_engine_settings;
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
     * A string providing data to populate the specified template. The string must be of one of the following types: xml, json, csv
     */
    public function get_data()
    {
        return $this->data;
    }

    /*
     * A string providing data to populate the specified template. The string must be of one of the following types: xml, json, csv
     */
    public function set_data($value)
    {
        $this->data = $value;
        return $this;
    }
	
    /*
     * An object providing settings of report engine.
     */
    public function get_report_engine_settings()
    {
        return $this->report_engine_settings;
    }

    /*
     * An object providing settings of report engine.
     */
    public function set_report_engine_settings($value)
    {
        $this->report_engine_settings = $value;
        return $this;
    }
	
    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, \"template\" will be used instead.
     */
    public function get_document_file_name()
    {
        return $this->document_file_name;
    }

    /*
     * This file name will be used when resulting document has dynamic field for document file name {filename}. If it is not set, \"template\" will be used instead.
     */
    public function set_document_file_name($value)
    {
        $this->document_file_name = $value;
        return $this;
    }
}
