<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FolderTests.php">
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
use Aspose\Words\Model\Requests\{CopyFolderRequest, CreateFolderRequest, DeleteFolderRequest, GetFilesListRequest, MoveFolderRequest};
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with folders.
 */
class FolderTests extends BaseTestContext
{
    /*
     * Test for create folder.
     */
    public function testCreateFolder()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";

        $request = new CreateFolderRequest(
            $remoteDataFolder . "/TestCreateFolder",
            NULL
        );

        Assert::assertNull($this->words->createFolder($request));
    }

    /*
     * Test for delete folder.
     */
    public function testDeleteFolder()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";
        $localFile = "Common/test_multi_pages.docx";
        $testDeleteFolder = $remoteDataFolder . "/TestDeleteFolder";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $testDeleteFolder . "/TestDeleteFolder.docx"
        );

        $request = new DeleteFolderRequest(
            $testDeleteFolder,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteFolder($request));
    }

    /*
     * Test for get file list of folder.
     */
    public function testGetFilesList()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";

        $request = new GetFilesListRequest(
            $remoteDataFolder,
            NULL
        );

        $result = $this->words->getFilesList($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getValue());
    }

    /*
     * Test for copy folder.
     */
    public function testCopyFolder()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";
        $localFile = "Common/test_multi_pages.docx";
        $folderToCopy = $remoteDataFolder . "/TestCopyFolder";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $folderToCopy . "Src/TestCopyFolderSrc.docx"
        );

        $request = new CopyFolderRequest(
            $folderToCopy . "Dest",
            $folderToCopy . "Src",
            NULL,
            NULL
        );

        Assert::assertNull($this->words->copyFolder($request));
    }

    /*
     * Test for move folder.
     */
    public function testMoveFolder()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/Storage";
        $localFile = "Common/test_multi_pages.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/TestMoveFolderSrc/TestMoveFolderSrc.docx"
        );

        $request = new MoveFolderRequest(
            self::$baseTestOutPath . "/TestMoveFolderDest_" . $this->getGUID(),
            $remoteDataFolder . "/TestMoveFolderSrc",
            NULL,
            NULL
        );

        Assert::assertNull($this->words->moveFolder($request));
    }
}