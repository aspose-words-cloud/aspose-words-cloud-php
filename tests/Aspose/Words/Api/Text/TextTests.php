<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextTests.php">
 *   Copyright (c) 2020 Aspose.Words for Cloud
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

use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with macros.
 */
class TextTests extends BaseTestContext
{
    /*
     * Test for replacing text.
     */
    public function testReplaceText()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Text";
        $remoteFileName = "TestReplaceText.docx";
        $localFile = "Common/test_multi_pages.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestReplaceText = new \Aspose\Words\Model\ReplaceTextParameters(array(
            "old_value" => "aspose",
            "new_value" => "aspose new",
        ));
        $request = new Requests\ReplaceTextRequest(
            $remoteFileName,
            $requestReplaceText,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->replaceText($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for searching.
     */
    public function testSearch()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Text";
        $remoteFileName = "TestSearch.docx";
        $localFile = "DocumentElements/Text/SampleWordDocument.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\SearchRequest(
            $remoteFileName,
            "aspose",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->search($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}