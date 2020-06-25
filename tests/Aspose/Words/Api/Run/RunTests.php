<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RunTests.php">
 *   Copyright (c) 2020 Aspose.Words for Cloud
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

use Aspose\Words\Model\Requests;
use Aspose\Words\Model\BookmarkData;
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with runs.
 */
class RunTests extends BaseTestContext
{
    /*
     * Test for updating run.
     */
    public function testUpdateRun()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Runs";
        $localFile = "DocumentElements/Runs/Run.doc";
        $remoteFileName = "TestUpdateRun.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRun = new \Aspose\Words\Model\RunUpdate(array(
            "text" => "run with text",
        ));
        $request = new Requests\UpdateRunRequest(
            $remoteFileName,
            $requestRun,
            "paragraphs/1",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateRun($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding run.
     */
    public function testInsertRun()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Runs";
        $localFile = "DocumentElements/Runs/Run.doc";
        $remoteFileName = "TestInsertRun.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRun = new \Aspose\Words\Model\RunInsert(array(
            "text" => "run with text",
        ));
        $request = new Requests\InsertRunRequest(
            $remoteFileName,
            "paragraphs/1",
            $requestRun,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertRun($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting run.
     */
    public function testDeleteRun()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Runs";
        $localFile = "DocumentElements/Runs/Run.doc";
        $remoteFileName = "TestDeleteRun.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteRunRequest(
            $remoteFileName,
            "paragraphs/1",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteRun($request);
    }
}