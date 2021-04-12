<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DocumentProtectionTests.php">
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
 * Example of how to set document protection.
 */
class DocumentProtectionTests extends BaseTestContext
{
    /*
     * Test for setting document protection.
     */
    public function testProtectDocument()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProtection";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestProtectDocument.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
            "password" => "123",
            "protection_type" => "ReadOnly",
        ));
        $request = new Requests\ProtectDocumentRequest(
            $remoteFileName,
            $requestProtectionRequest,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName
        );

        $result = $this->words->protectDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getProtectionData());
        Assert::assertEquals("ReadOnly", $result->getProtectionData()->getProtectionType());
    }

    /*
     * Test for setting document protection.
     */
    public function testProtectDocumentOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
            "new_password" => "123",
        ));
        $request = new Requests\ProtectDocumentOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            $requestProtectionRequest,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->protectDocumentOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for getting document protection.
     */
    public function testGetDocumentProtection()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProtection";
        $localFilePath = "DocumentActions/DocumentProtection/SampleProtectedBlankWordDocument.docx";
        $remoteFileName = "TestGetDocumentProtection.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFilePath,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentProtectionRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentProtection($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting document protection.
     */
    public function testGetDocumentProtectionOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\GetDocumentProtectionOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentProtectionOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting unprotect document.
     */
    public function testDeleteUnprotectDocument()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProtection";
        $localFilePath = "DocumentActions/DocumentProtection/SampleProtectedBlankWordDocument.docx";
        $remoteFileName = "TestDeleteUnprotectDocument.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFilePath,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
            "password" => "aspose",
        ));
        $request = new Requests\UnprotectDocumentRequest(
            $remoteFileName,
            $requestProtectionRequest,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->unprotectDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getProtectionData());
        Assert::assertEquals("NoProtection", $result->getProtectionData()->getProtectionType());
    }

    /*
     * Test for deleting unprotect document.
     */
    public function testDeleteUnprotectDocumentOnline()
    {
        $localFilePath = "DocumentActions/DocumentProtection/SampleProtectedBlankWordDocument.docx";

        $requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
            "password" => "aspose",
        ));
        $request = new Requests\UnprotectDocumentOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFilePath,
            $requestProtectionRequest,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->unprotectDocumentOnline($request);
        Assert::isTrue($result !== NULL);
    }
}