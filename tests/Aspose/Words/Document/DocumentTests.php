<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DocumentTests.php">
*   Copyright (c) 2017 Aspose.Words for Cloud
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
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/Words/BaseTestContext.php";
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;
class DocumentTests extends \BaseTest\BaseTestContext
{
    /**
     * Test case for getDocument
     *
     * Read document common info..
     *
     */
    public function testGetDocument()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocument.docx";
        $subfolder = "DocumentActions/Document";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for putCreateDocument
     *
     * Creates new document. Document is created with format which is recognized from file extensions.  Supported extentions: \".doc\", \".docx\", \".docm\", \".dot\", \".dotm\", \".dotx\", \".flatopc\", \".fopc\", \".flatopc_macro\", \".fopc_macro\", \".flatopc_template\", \".fopc_template\", \".flatopc_template_macro\", \".fopc_template_macro\", \".wordml\", \".wml\", \".rtf\".
     *
     */
    public function testPutCreateDocument()
    {
        $remoteName = "TestPutCreateDocument.doc";
        $subfolder = "DocumentActions/Document";
        $request = new Requests\CreateDocumentRequest(null, $remoteName,  $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->createDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}