<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ClassificationTests.php">
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

class ClassificationTests extends BaseTestContext
{
    /**
     * Test case for classify
     *
     * Raw text classification
     *
     */
    public function testClassify()
    {
        $request = new Requests\ClassifyRequest("Try text classification", "3");

        $result = $this->words->classify($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
	
	/**
     * Test case for classifyDocument
     *
     * Classify document
     *
     */
    public function testClassifyDocument()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "Source.docx";
        $subfolder = "Common";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\ClassifyDocumentRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->classifyDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
	
	/**
     * Test case for classifyDocument
     *
     * Classify document with taxonomy "documents"
     *
     */
    public function testClassificationTaxonomyDocuments()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "Source.docx";
        $subfolder = "Common";
		$taxonomy = "documents";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\ClassifyDocumentRequest($remoteName, $folder=self::$baseTestPath . $subfolder);
        $request->set_taxonomy($taxonomy);
        
        $result = $this->words->classifyDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}