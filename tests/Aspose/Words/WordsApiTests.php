<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WordsApiTests.php">
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

namespace Aspose\Tests;
use Aspose\Words\ApiException;
use Aspose\Words\Model\Requests;
use Aspose\Words\WordsApi;
use PHPUnit\Framework\Assert;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;

class WordsApiTests extends BaseTestContext
{
    /*
     * Test case for checking correct handle of server errors
     */
    public function testHandleServerErrors()
    {
        $remoteName = "noFileWithThisName.docx";
        $request = new Requests\GetSectionsRequest($remoteName);
        try{
            $this->words->GetSections($request);
            Assert::fail("Expected exception has not been thrown");
        }
        catch (ApiException $exception)
        {
            Assert::equalTo(404, $exception->getCode());
        }
    }

    /*
     * Test case for checking bad clientId
     */
    public function testHandleBadClientId()
    {
        try{
            $this->words = new WordsApi("tttt", "qqq", "https://api-qa.aspose.cloud");
        }
        catch (RequestException $e)
        {
            Assert::equalTo(400, $e->getCode());
        }
    }
}
