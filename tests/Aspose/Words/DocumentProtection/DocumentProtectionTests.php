<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DocumentProtectionTests.php">
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
use Aspose\Words\Model\ProtectionRequest;
use PHPUnit\Framework\Assert;

class DocumentProtectionTests extends BaseTestContext
{
    /**
     * Test case for getDocumentProtection
     *
     * Read document protection common info..
     *
     */
    public function testGetDocumentProtection()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentProtection.docx";
        $subfolder = "DocumentActions/Protection";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentProtectionRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentProtection($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for protectDocument
     *
     * Protect document..
     *
     */
    public function testProtectDocument()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestProtectDocument.docx";
        $subfolder = "DocumentActions/Protection";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $body = new ProtectionRequest(array("new_password" => "123"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\ProtectDocumentRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->protectDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for postChangeDocumentProtection
     *
     * Change document protection..
     *
     */
    public function testPostChangeDocumentProtection()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostChangeDocumentProtection.docx";
        $subfolder = "DocumentActions/Protection";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $body = new ProtectionRequest(array("new_password" => ""));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\ProtectDocumentRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->protectDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for unprotectDocument
     *
     * Unprotect document..
     *
     */
    public function testUnprotectDocument()
    {
        $localName = "SampleProtectedBlankWordDocument.docx";
        $remoteName = "TestUnprotectDocument.docx";
        $subfolder = "DocumentActions/Protection";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $body = new ProtectionRequest(array("password" => "aspose"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/DocumentProtection/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UnprotectDocumentRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->unprotectDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}