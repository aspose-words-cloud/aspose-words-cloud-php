<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CompatibilityTests.php">
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

use Aspose\Words\WordsApi;
use Aspose\Words\Model;
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with compatibility options.
 */
class CompatibilityTests extends BaseTestContext
{
    /*
     * Test for optimize document to specific MS Word version.
     */
    public function testOptimizeDocument()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Compatibility";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestOptimizeDocument.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestOptions = new \Aspose\Words\Model\OptimizationOptions(array(
            "ms_word_version" => "Word2002",
        ));
        $request = new Requests\OptimizeDocumentRequest(
            $remoteFileName,
            $requestOptions,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->optimizeDocument($request);
    }

    /*
     * Test for optimize document to specific MS Word version.
     */
    public function testOptimizeDocumentOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestOptions = new \Aspose\Words\Model\OptimizationOptions(array(
            "ms_word_version" => "Word2002",
        ));
        $request = new Requests\OptimizeDocumentOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            $requestOptions,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->optimizeDocumentOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}