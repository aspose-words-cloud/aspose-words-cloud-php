<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AppendDocumentTests.php">
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
use Aspose\Words\Model\Requests\{AppendDocumentOnlineRequest, AppendDocumentRequest};
use Aspose\Words\Model\{DocumentEntry, DocumentEntryList, FileReference};
use PHPUnit\Framework\Assert;

/*
 * Example of how to append document.
 */
class AppendDocumentTests extends BaseTestContext
{
    /*
     * Test for appending document.
     */
    public function testAppendDocument()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/AppendDocument";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestAppendDocument.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDocumentListDocumentEntries0FileReference = FileReference::fromRemoteFilePath($remoteDataFolder . "/" . $remoteFileName);
        $requestDocumentListDocumentEntries0 = new DocumentEntry(array(
            "file_reference" => $requestDocumentListDocumentEntries0FileReference,
            "import_format_mode" => "KeepSourceFormatting",
        ));
        $requestDocumentListDocumentEntries = [
            $requestDocumentListDocumentEntries0,
        ];
        $requestDocumentList = new DocumentEntryList(array(
            "document_entries" => $requestDocumentListDocumentEntries,
        ));
        $request = new AppendDocumentRequest(
            $remoteFileName,
            $requestDocumentList,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->appendDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestAppendDocument.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for appending document online.
     */
    public function testAppendDocumentOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestDocumentListDocumentEntries0FileReferenceStream = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestDocumentListDocumentEntries0FileReference = FileReference::fromLocalFileContent($requestDocumentListDocumentEntries0FileReferenceStream);
        $requestDocumentListDocumentEntries0 = new DocumentEntry(array(
            "file_reference" => $requestDocumentListDocumentEntries0FileReference,
            "import_format_mode" => "KeepSourceFormatting",
        ));
        $requestDocumentListDocumentEntries = [
            $requestDocumentListDocumentEntries0,
        ];
        $requestDocumentList = new DocumentEntryList(array(
            "document_entries" => $requestDocumentListDocumentEntries,
        ));
        $request = new AppendDocumentOnlineRequest(
            $requestDocument,
            $requestDocumentList,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->appendDocumentOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}