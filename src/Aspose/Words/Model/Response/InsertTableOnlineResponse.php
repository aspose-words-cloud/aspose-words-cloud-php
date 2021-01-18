<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="InsertTableOnlineResponse.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
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
 * --------------------------------------------------------------------------------
 */

namespace Aspose\Words\Model\Response;
/*
 * Response model for insertTableOnline operation.
 */
class InsertTableOnlineResponse
{
    public $model;
    public $document;

    /*
     * Initializes a new instance of the InsertTableOnlineResponse class.
     *
     */
    public function __construct($model, $document)
    {
        $this->model = $model;
        $this->document = $document;
    }

    /*
     * The response model.
     */
    public function getmodel()
    {
        return $this->model;
    }

    /*
     * The response model.
     */
    public function setmodel($value)
    {
        $this->model = $value;
        return $this;
    }
    /*
     * The document after modification.
     */
    public function getdocument()
    {
        return $this->document;
    }

    /*
     * The document after modification.
     */
    public function setdocument($value)
    {
        $this->document = $value;
        return $this;
    }
}