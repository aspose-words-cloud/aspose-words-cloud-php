<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="HyperlinkTests.php">
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
use PHPUnit\Framework\Assert;

class HyperlinkTests extends BaseTestContext
{
    /**
     * Test case for getDocumentHyperlinkByIndex
     *
     * Read document hyperlink by its index..
     *
     */
    public function testGetDocumentHyperlinkByIndex()
    {
        $localName = "test_doc.docx";
        $remoteName = "TestGetDocumentHyperlinkByIndex.docx";
        $subfolder = "DocumentElements/Hyperlink";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentHyperlinkByIndexRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentHyperlinkByIndex($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentHyperlinks
     *
     * Read document hyperlinks common info..
     *
     */
    public function testGetDocumentHyperlinks()
    {
        $localName = "test_doc.docx";
        $remoteName = "TestGetDocumentHyperlinks.docx";
        $subfolder = "DocumentElements/Hyperlink";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentHyperlinksRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentHyperlinks($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}