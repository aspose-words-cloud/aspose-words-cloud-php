<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RunTests.php">
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
use Aspose\Words\Model\Requests\{DeleteRunOnlineRequest, DeleteRunRequest, InsertRunOnlineRequest, InsertRunRequest, UpdateRunOnlineRequest, UpdateRunRequest};
use Aspose\Words\Model\{RunInsert, RunUpdate};
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRun = new RunUpdate(array(
            "text" => "run with text",
        ));
        $request = new UpdateRunRequest(
            $remoteFileName,
            "paragraphs/1",
            0,
            $requestRun,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateRun($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getRun());
        Assert::assertEquals("run with text", $result->getRun()->getText());
    }

    /*
     * Test for updating run online.
     */
    public function testUpdateRunOnline()
    {
        $localFile = "DocumentElements/Runs/Run.doc";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestRun = new RunUpdate(array(
            "text" => "run with text",
        ));
        $request = new UpdateRunOnlineRequest(
            $requestDocument,
            "paragraphs/1",
            $requestRun,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateRunOnline($request);
        Assert::assertTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestRun = new RunInsert(array(
            "text" => "run with text",
        ));
        $request = new InsertRunRequest(
            $remoteFileName,
            $requestRun,
            "paragraphs/1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertRun($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getRun());
        Assert::assertEquals("run with text", $result->getRun()->getText());
        Assert::assertEquals("0.0.1.3", $result->getRun()->getNodeId());
    }

    /*
     * Test for adding run online.
     */
    public function testInsertRunOnline()
    {
        $localFile = "DocumentElements/Runs/Run.doc";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestRun = new RunInsert(array(
            "text" => "run with text",
        ));
        $request = new InsertRunOnlineRequest(
            $requestDocument,
            $requestRun,
            "paragraphs/1",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertRunOnline($request);
        Assert::assertTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteRunRequest(
            $remoteFileName,
            "paragraphs/1",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteRun($request));
    }

    /*
     * Test for deleting run online.
     */
    public function testDeleteRunOnline()
    {
        $localFile = "DocumentElements/Runs/Run.doc";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteRunOnlineRequest(
            $requestDocument,
            "paragraphs/1",
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteRunOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}