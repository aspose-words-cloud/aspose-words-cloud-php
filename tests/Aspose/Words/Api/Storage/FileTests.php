<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FileTests.php">
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
 * Example of how to work with files.
 */
class FileTests extends BaseTestContext
{
    /*
     * Test for uploading file.
     */
    public function testUploadFile()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUploadFile.docx";

        $request = new Requests\UploadFileRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            $remoteDataFolder . "/" . $remoteFileName,
            NULL
        );

        $result = $this->words->uploadFile($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getUploaded());
        Assert::assertCount(1, $result->getUploaded());
        Assert::assertEquals("TestUploadFile.docx", $result->getUploaded()[0]);
    }

    /*
     * Test for copy file.
     */
    public function testCopyFile()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestCopyFileSrc.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\CopyFileRequest(
            $remoteDataFolder . "/TestCopyFileDest.docx",
            $remoteDataFolder . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL
        );

    $this->words->copyFile($request);
    }

    /*
     * Test for move file.
     */
    public function testMoveFile()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestMoveFileSrc.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\MoveFileRequest(
            self::$baseTestOutPath . "/TestMoveFileDest_" . $this->getGUID() . ".docx",
            $remoteDataFolder . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL
        );

    $this->words->moveFile($request);
    }

    /*
     * Test for delete file.
     */
    public function testDeleteFile()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteFile.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFileRequest(
            $remoteDataFolder . "/" . $remoteFileName,
            NULL,
            NULL
        );

    $this->words->deleteFile($request);
    }

    /*
     * Test for download file.
     */
    public function testDownloadFile()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDownloadFile.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DownloadFileRequest(
            $remoteDataFolder . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->downloadFile($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}