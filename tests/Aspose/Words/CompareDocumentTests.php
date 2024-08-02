<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CompareDocumentTests.php">
 *   Copyright (c) 2024 Aspose.Words for Cloud
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

namespace Aspose\Words\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests\{CompareDocumentOnlineRequest, CompareDocumentRequest};
use Aspose\Words\Model\{CompareData, FileReference};
use PHPUnit\Framework\Assert;

/*
 * Example of document comparison.
 */
class CompareDocumentTests extends BaseTestContext
{
    /*
     * Test for document comparison.
     */
    public function testCompareDocument()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/CompareDocument";
        $localFolder = "DocumentActions/CompareDocument";
        $localName1 = "compareTestDoc1.doc";
        $localName2 = "compareTestDoc2.doc";
        $remoteName1 = "TestCompareDocument1.doc";
        $remoteName2 = "TestCompareDocument2.doc";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $localName1,
            $remoteFolder . "/" . $remoteName1
        );
        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $localName2,
            $remoteFolder . "/" . $remoteName2
        );

        $requestCompareDataFileReference = FileReference::fromRemoteFilePath($remoteFolder . "/" . $remoteName2);
        $requestCompareData = new CompareData(array(
            "author" => "author",
            "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
            "file_reference" => $requestCompareDataFileReference,
        ));
        $request = new CompareDocumentRequest(
            $remoteName1,
            $requestCompareData,
            $remoteFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/TestCompareDocumentOut.doc"
        );

        $result = $this->words->compareDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestCompareDocumentOut.doc", $result->getDocument()->getFileName());
    }

    /*
     * Test for document comparison online.
     */
    public function testCompareDocumentOnline()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/CompareDocument";
        $localFolder = "DocumentActions/CompareDocument";
        $localName1 = "compareTestDoc1.doc";
        $localName2 = "compareTestDoc2.doc";
        $remoteName2 = "TestCompareDocument2.doc";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $localName2,
            $remoteFolder . "/" . $remoteName2
        );

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFolder . "/" . $localName1;
        $requestCompareDataFileReference = FileReference::fromRemoteFilePath($remoteFolder . "/" . $remoteName2);
        $requestCompareData = new CompareData(array(
            "author" => "author",
            "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
            "file_reference" => $requestCompareDataFileReference,
        ));
        $request = new CompareDocumentOnlineRequest(
            $requestDocument,
            $requestCompareData,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/TestCompareDocumentOut.doc"
        );

        $result = $this->words->compareDocumentOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for document comparison online.
     */
    public function testCompareTwoDocumentOnline()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/CompareDocument";
        $localFolder = "DocumentActions/CompareDocument";
        $localName1 = "compareTestDoc1.doc";
        $localName2 = "compareTestDoc2.doc";
        $remoteName2 = "TestCompareDocument2.doc";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $localName2,
            $remoteFolder . "/" . $remoteName2
        );

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFolder . "/" . $localName1;
        $requestCompareDataFileReferenceStream = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFolder . "/" . $localName2;
        $requestCompareDataFileReference = FileReference::fromLocalFileContent($requestCompareDataFileReferenceStream);
        $requestCompareData = new CompareData(array(
            "author" => "author",
            "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
            "file_reference" => $requestCompareDataFileReference,
        ));
        $request = new CompareDocumentOnlineRequest(
            $requestDocument,
            $requestCompareData,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/TestCompareDocumentOut.doc"
        );

        $result = $this->words->compareDocumentOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for document comparison with password protection.
     */
    public function testCompareDocumentWithPassword()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/CompareDocument";
        $localName = "DocWithPassword.docx";
        $remoteName1 = "TestCompareDocument1.docx";
        $remoteName2 = "TestCompareDocument2.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localName,
            $remoteFolder . "/" . $remoteName1
        );
        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localName,
            $remoteFolder . "/" . $remoteName2
        );

        $requestCompareDataFileReference = FileReference::fromRemoteFilePath($remoteFolder . "/" . $remoteName2, '12345');
        $requestCompareData = new CompareData(array(
            "author" => "author",
            "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
            "file_reference" => $requestCompareDataFileReference,
        ));
        $request = new CompareDocumentRequest(
            $remoteName1,
            $requestCompareData,
            $remoteFolder,
            NULL,
            NULL,
            "12345",
            NULL,
            NULL,
            self::$baseTestOutPath . "/TestCompareDocumentOut.docx"
        );

        $result = $this->words->compareDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestCompareDocumentOut.docx", $result->getDocument()->getFileName());
    }
}