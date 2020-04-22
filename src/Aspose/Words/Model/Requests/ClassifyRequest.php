<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClassifyRequest.php">
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
 * Request model for classify operation.
 */
class ClassifyRequest
{
    /*
     * Text to classify.
     */
    public $text;
	
    /*
     * Number of the best classes to return.
     */
    public $best_classes_count;
    
	
    /*
     * Initializes a new instance of the ClassifyRequest class.
     *  
     * @param string $text Text to classify.
     * @param string $best_classes_count Number of the best classes to return.
     */
    public function __construct($text, $best_classes_count = null)             
    {
        $this->text = $text;
        $this->best_classes_count = $best_classes_count;
    }

    /*
     * Text to classify.
     */
    public function get_text()
    {
        return $this->text;
    }

    /*
     * Text to classify.
     */
    public function set_text($value)
    {
        $this->text = $value;
        return $this;
    }
	
    /*
     * Number of the best classes to return.
     */
    public function get_best_classes_count()
    {
        return $this->best_classes_count;
    }

    /*
     * Number of the best classes to return.
     */
    public function set_best_classes_count($value)
    {
        $this->best_classes_count = $value;
        return $this;
    }
}
