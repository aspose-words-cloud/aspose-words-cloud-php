<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BatchPartRequest.php">
 *   Copyright (c) 2024 Aspose.Words for Cloud
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
namespace Aspose\Words\Model\Requests;
/*
 * Batch Part Request
 */
class BatchPartRequest
{
    /*
     * Api Request
     */
    private $request;

    /*
     * Request Id
     */
    private $requestId;

    /*
     * Parent RequestId
     */
    private $parentRequestId;

    /*
     * Initializes a new instance of the BatchPartRequestRequest class.
     * @param BaseApiRequest api request
     */
    public function __construct(BaseApiRequest $request)
    {
        $this->request = $request;
        $this->requestId = \Aspose\Words\ObjectSerializer::guidv4();
        $this->parentRequestId = null;
    }

    /*
     * Gets api request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /*
     * Gets requestId
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /*
     * Gets parentRequestId
     */
    public function getParentRequestId()
    {
        return $this->parentRequestId;
    }

    /*
     * Sets parentRequestId
     * @param BatchPartRequest a parent request
     */
    public function setParentRequestId(BatchPartRequest $parentRequest)
    {
        $this->parentRequestId = $parentRequest->getRequestId();
        return $this;
    }

    /*
     * Use a binary response of the request as an input for another request
     */
    public function resultOf()
    {
        $stream = new \GuzzleHttp\Psr7\AppendStream();
        $stream->addStream(\GuzzleHttp\Psr7\Utils::streamFor(mb_convert_encoding("resultOf(" . $this->requestId . ")", 'UTF-8')));
        return $stream;
    }
}
