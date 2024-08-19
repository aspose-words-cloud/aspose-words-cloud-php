<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WordsApiTests.php">
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

namespace Aspose\Words\Tests;
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

            Assert::assertNull($this->words->GetSections($request));
        }
        catch (ApiException $exception)
        {
            Assert::assertEquals(404, $exception->getCode());
        }
    }

    /*
     * Test case for checking bad clientId
     */
    public function testHandleBadClientId()
    {
        try{
            $creds = self::getConfig();
            $this->words = new WordsApi("tttt", "qqq", $creds["BaseUrl"]);
            $this->words->getAvailableFonts(new Requests\GetAvailableFontsRequest());
        }
        catch (RequestException $e)
        {
            Assert::assertEquals(400, $e->getCode());
        }
    }
}
