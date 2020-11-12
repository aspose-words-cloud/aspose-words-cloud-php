<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListsTests.php">
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
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with lists.
 */
class ListsTests extends BaseTestContext
{
    /*
     * Test for getting lists from document.
     */
    public function testGetLists()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Lists";
        $localFile = "DocumentElements/Lists/ListsGet.doc";
        $remoteFileName = "TestGetLists.doc";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetListsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getLists($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getLists());
        Assert::assertNotNull($result->getLists()->getListInfo());
        Assert::assertCount(2, $result->getLists()->getListInfo());
        Assert::assertEquals(1, $result->getLists()->getListInfo()[0]->getListId());
    }

    /*
     * Test for getting list from document.
     */
    public function testGetList()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Lists";
        $localFile = "DocumentElements/Lists/ListsGet.doc";
        $remoteFileName = "TestGetList.doc";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetListRequest(
            $remoteFileName,
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getList($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getList());
        Assert::assertEquals(1, $result->getList()->getListId());
    }

    /*
     * Test for updating list from document.
     */
    public function testUpdateList()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Lists";
        $localFile = "DocumentElements/Lists/ListsGet.doc";
        $remoteFileName = "TestUpdateList.doc";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestListUpdate = new \Aspose\Words\Model\ListUpdate(array(
            "is_restart_at_each_section" => true,
        ));
        $request = new Requests\UpdateListRequest(
            $remoteFileName,
            $requestListUpdate,
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateList($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getList());
        Assert::assertEquals(1, $result->getList()->getListId());
        Assert::assertTrue($result->getList()->getIsRestartAtEachSection());
    }

    /*
     * Test for updating list level from document.
     */
    public function testUpdateListLevel()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Lists";
        $localFile = "DocumentElements/Lists/ListsGet.doc";
        $remoteFileName = "TestUpdateListLevel.doc";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestListUpdate = new \Aspose\Words\Model\ListLevelUpdate(array(
            "alignment" => "Right",
        ));
        $request = new Requests\UpdateListLevelRequest(
            $remoteFileName,
            $requestListUpdate,
            1,
            1,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateListLevel($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getList());
        Assert::assertNotNull($result->getList()->getListLevels());
        Assert::assertNotNull($result->getList()->getListLevels()->getListLevel());
        Assert::assertCount(9, $result->getList()->getListLevels()->getListLevel());

    }

    /*
     * Test for inserting list from document.
     */
    public function testInsertList()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Lists";
        $localFile = "DocumentElements/Lists/ListsGet.doc";
        $remoteFileName = "TestInsertList.doc";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestListInsert = new \Aspose\Words\Model\ListInsert(array(
            "template" => "OutlineLegal",
        ));
        $request = new Requests\InsertListRequest(
            $remoteFileName,
            $requestListInsert,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertList($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getList());
        Assert::assertEquals(3, $result->getList()->getListId());
    }
}