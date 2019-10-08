<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="TextTests.php">
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
namespace Aspose\Tests;
use Aspose\Words\Model\Requests;
use Aspose\Words\Model\ReplaceTextParameters;
use PHPUnit\Framework\Assert;

class TextTests extends BaseTestContext
{
    /**
     * Test case for replaceText
     *
     * Replace document text..
     *
     */
    public function testReplaceText()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestReplaceText.docx";
        $subfolder = "DocumentActions/Text";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $body = new ReplaceTextParameters(array("old_value" => "aspose", "new_value" => "aspose new"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\ReplaceTextRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->replaceText($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for search
     *
     * Search text in document..
     *
     */
    public function testSearch()
    {
        $localName = "SampleWordDocument.docx";
        $remoteName = "TestSearch.docx";
        $subfolder = "DocumentActions/Text";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $pattern = "aspose";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Text/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\SearchRequest($remoteName, $pattern, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->search($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}