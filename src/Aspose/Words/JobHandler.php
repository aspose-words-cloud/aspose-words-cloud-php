<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="JobHandler.php">
 *   Copyright (c) 2026 Aspose.Words for Cloud
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

namespace Aspose\Words;

use Aspose\Words\Model\JobInfo;
use Aspose\Words\Model\Requests\BaseApiRequest;

/*
 * Job handler for async job-based operations.
 */
class JobHandler
{
    /*
     * @var WordsApi
     */
    private $api;

    /*
     * @var BaseApiRequest
     */
    private $request;

    /*
     * @var JobInfo
     */
    private $info;

    /*
     * @var mixed
     */
    private $result;

    public function __construct(WordsApi $api, BaseApiRequest $request, JobInfo $info)
    {
        $this->api = $api;
        $this->request = $request;
        $this->info = $info;
        $this->result = null;
    }

    public function getStatus()
    {
        return $this->info->getStatus() ?? '';
    }

    public function getMessage()
    {
        return $this->info->getMessage() ?? '';
    }

    public function getResult()
    {
        return $this->result;
    }

    public function update()
    {
        if ($this->info->getJobId() === null) {
            throw new ApiException('Invalid job id.', 400, null, null);
        }

        $parts = $this->api->callJobResult($this->info->getJobId());
        if (count($parts) >= 1) {
            $this->info = ObjectSerializer::deserializeJobInfoPart($parts[0]);
            if (count($parts) >= 2 && $this->isSucceeded()) {
                $this->result = ObjectSerializer::deserializeHttpResponsePart($this->request, $parts[1]);
            }
        }

        return $this->result;
    }

    public function waitResult($updateIntervalMs = 3000)
    {
        while ($this->isQueued() || $this->isProcessing()) {
            usleep($updateIntervalMs * 1000);
            $this->update();
        }

        if ($this->isSucceeded() && $this->result === null) {
            $this->update();
        }

        if (!$this->isSucceeded()) {
            throw new ApiException(
                sprintf('Job failed with status "%s" - "%s".', $this->getStatus(), $this->getMessage()),
                400,
                null,
                null
            );
        }

        return $this->result;
    }

    private function isQueued()
    {
        return strcasecmp($this->getStatus(), 'Queued') == 0;
    }

    private function isProcessing()
    {
        return strcasecmp($this->getStatus(), 'Processing') == 0;
    }

    private function isSucceeded()
    {
        return strcasecmp($this->getStatus(), 'Succeded') == 0 || strcasecmp($this->getStatus(), 'Succeeded') == 0;
    }
}
