<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="SectionsTests.php">
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

class SectionsTests extends BaseTestContext
{
    /**
     * Test case for getSection
     *
     * Get document section by index..
     *
     */
    public function testGetSection()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetSection.docx";
        $subfolder = "DocumentElements/Section";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetSectionRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getSection($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getSections
     *
     * Return a list of sections that are contained in the document..
     *
     */
    public function testGetSections()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetSections.docx";
        $subfolder = "DocumentElements/Section";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetSectionsRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getSections($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteSection
     * 
     * Delete a section from document
     */
    public function testDeleteSection() {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDeleteSection.docx";
        $subfolder = "DocumentElements/Section";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteSectionRequest($remoteName, 0, self::$baseTestPath . $subfolder);

        $result = $this->words->deleteSection($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}