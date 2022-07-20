<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AppendDocumentTests.php">
 *   Copyright (c) 2022 Aspose.Words for Cloud
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
use Aspose\Words\Model\{DocumentEntry, DocumentEntryList};
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
        $remoteDataFolder = "Temp";
        $localFile = realpath(__DIR__ . '/../../..') . "/TestData/Common/401.docx";
        $remoteFileName = "401.docx";
        $localFile1 = realpath(__DIR__ . '/../../..') . "/TestData/Common/402.docx";
        $remoteFileName1 = "402.docx";
        $localFile2 = realpath(__DIR__ . '/../../..') . "/TestData/Common/403.docx";
        $remoteFileName2 = "403.docx";
        $localFile3 = realpath(__DIR__ . '/../../..') . "/TestData/Common/404.docx";
        $remoteFileName3 = "404.docx";
        $localFile4 = realpath(__DIR__ . '/../../..') . "/TestData/Common/405.docx";
        $remoteFileName4 = "405.docx";
        $localFile5 = realpath(__DIR__ . '/../../..') . "/TestData/Common/494.docx";
        $remoteFileName5 = "494.docx";
        $localFile6 = realpath(__DIR__ . '/../../..') . "/TestData/Common/495.docx";
        $remoteFileName6 = "495.docx";

        $outputFileName = "TestAppendDocument.docx";


        $uploadRequest = new Aspose\Words\Model\Requests\UploadFileRequest($localFile,$remoteDataFolder."/".$remoteFileName,null);
        $wordsApi->uploadFile($uploadRequest);
        $uploadRequest1 = new Aspose\Words\Model\Requests\UploadFileRequest($localFile1,$remoteDataFolder."/".$remoteFileName1,null);
        $wordsApi->uploadFile($uploadRequest1);
        $uploadRequest2 = new Aspose\Words\Model\Requests\UploadFileRequest($localFile2,$remoteDataFolder."/".$remoteFileName2,null);
        $wordsApi->uploadFile($uploadRequest2);
        $uploadRequest3 = new Aspose\Words\Model\Requests\UploadFileRequest($localFile2,$remoteDataFolder."/".$remoteFileName3,null);
        $wordsApi->uploadFile($uploadRequest3);
        $uploadRequest4 = new Aspose\Words\Model\Requests\UploadFileRequest($localFile2,$remoteDataFolder."/".$remoteFileName4,null);
        $wordsApi->uploadFile($uploadRequest4);
        $uploadRequest5 = new Aspose\Words\Model\Requests\UploadFileRequest($localFile2,$remoteDataFolder."/".$remoteFileName5,null);
        $wordsApi->uploadFile($uploadRequest5);
        $uploadRequest6 = new Aspose\Words\Model\Requests\UploadFileRequest($localFile2,$remoteDataFolder."/".$remoteFileName6,null);
        $wordsApi->uploadFile($uploadRequest6);

        $requestDocumentListDocumentEntries0 = new Aspose\Words\Model\DocumentEntry(array(
            "href" => $remoteDataFolder . "/" . $remoteFileName1,
            "import_format_mode" => "KeepSourceFormatting",
        ));
        $requestDocumentListDocumentEntries1 = new Aspose\Words\Model\DocumentEntry(array(
            "href" => $remoteDataFolder . "/" . $remoteFileName2,
            "import_format_mode" => "KeepSourceFormatting",
        ));
        $requestDocumentListDocumentEntries2 = new Aspose\Words\Model\DocumentEntry(array(
            "href" => $remoteDataFolder . "/" . $remoteFileName3,
            "import_format_mode" => "KeepSourceFormatting",
        ));
        $requestDocumentListDocumentEntries3 = new Aspose\Words\Model\DocumentEntry(array(
            "href" => $remoteDataFolder . "/" . $remoteFileName4,
            "import_format_mode" => "KeepSourceFormatting",
        ));
        $requestDocumentListDocumentEntries4 = new Aspose\Words\Model\DocumentEntry(array(
            "href" => $remoteDataFolder . "/" . $remoteFileName5,
            "import_format_mode" => "KeepSourceFormatting",
        ));
        $requestDocumentListDocumentEntries5 = new Aspose\Words\Model\DocumentEntry(array(
            "href" => $remoteDataFolder . "/" . $remoteFileName6,
            "import_format_mode" => "KeepSourceFormatting",
        ));


        $requestDocumentListDocumentEntries = [
            $requestDocumentListDocumentEntries0,$requestDocumentListDocumentEntries1,$requestDocumentListDocumentEntries2,$requestDocumentListDocumentEntries3,$requestDocumentListDocumentEntries4,$requestDocumentListDocumentEntries5,
        ];
        $requestDocumentList = new Aspose\Words\Model\DocumentEntryList(array(
            "document_entries" => $requestDocumentListDocumentEntries,
        ));
        $request = new Aspose\Words\Model\Requests\AppendDocumentRequest(
            $remoteFileName,
            $requestDocumentList,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            $remoteDataFolder . "/" . $outputFileName,
            NULL,
            NULL
        );

        $result = $wordsApi->appendDocument($request);
    }

    /*
     * Test for appending document online.
     */
    public function testAppendDocumentOnline()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/AppendDocument";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestAppendDocument.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestDocumentListDocumentEntries0 = new DocumentEntry(array(
            "href" => $remoteDataFolder . "/" . $remoteFileName,
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
            NULL
        );

        $result = $this->words->appendDocumentOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}