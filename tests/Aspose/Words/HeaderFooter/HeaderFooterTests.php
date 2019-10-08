<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="HeaderFooterTests.php">
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
use Aspose\Words\Model\HeaderFooter;
use PHPUnit\Framework\Assert;

class HeaderFooterTests extends BaseTestContext
{
    /**
     * Test case for insertHeaderFooter
     *
     * Insert to document header or footer..
     *
     */
    public function testInsertHeaderFooter()
    {
        $localName = "HeadersFooters.doc";
        $remoteName = "TestInsertHeaderFooter.docx";
        $subfolder = "DocumentElements/HeaderFooter";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $footerType = HeaderFooter::TYPE_FOOTER_EVEN;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/HeaderFooters/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertHeaderFooterRequest($remoteName, $footerType, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->insertHeaderFooter($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getHeaderFooter
     *
     * Return a header/footer that is contained in the document..
     *
     */
    public function testGetHeaderFooter()
    {
        $localName = "HeadersFooters.doc";
        $remoteName = "TestGetHeaderFooter.docx";
        $subfolder = "DocumentElements/HeaderFooter";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/HeaderFooters/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetHeaderFooterRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getHeaderFooter($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getHeaderFooterOfSection
     *
     * Return a header/footer that is contained in the document..
     *
     */
    public function testGetHeaderFooterOfSection()
    {
        $localName = "HeadersFooters.doc";
        $remoteName = "TestGetHeaderFooterOfSection.docx";
        $subfolder = "DocumentElements/HeaderFooter";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $sectionIndex = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/HeaderFooters/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetHeaderFooterOfSectionRequest($remoteName, $index, $sectionIndex, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getHeaderFooterOfSection($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getHeaderFooters
     *
     * Return a list of header/footers that are contained in the document..
     *
     */
    public function testGetHeaderFooters()
    {
        $localName = "HeadersFooters.doc";
        $remoteName = "TestGetHeaderFooters.docx";
        $subfolder = "DocumentElements/HeaderFooter";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/HeaderFooters/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetHeaderFootersRequest($remoteName, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getHeaderFooters($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteHeaderFooter
     *
     * Delete header/footer from document..
     *
     */
    public function testDeleteHeaderFooter()
    {
        $localName = "HeadersFooters.doc";
        $remoteName = "TestDeleteHeaderFooter.docx";
        $subfolder = "DocumentElements/HeaderFooter";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/HeaderFooters/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteHeaderFooterRequest($remoteName, "", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null, null, null);

        $result = $this->words->deleteHeaderFooter($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteHeadersFooters
     *
     * Delete document headers and footers..
     *
     */
    public function testDeleteHeadersFooters()
    {
        $localName = "HeadersFooters.doc";
        $remoteName = "TestDeleteHeadersFooters.docx";
        $subfolder = "DocumentElements/HeaderFooter";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/HeaderFooters/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteHeadersFootersRequest($remoteName, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null, null,
            null);

        $result = $this->words->deleteHeadersFooters($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}