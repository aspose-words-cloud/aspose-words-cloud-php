<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="RangeTests.php">
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
use Aspose\Words\Model\ListUpdate;
use Aspose\Words\Model\ListLevelUpdate;
use Aspose\Words\Model\ListInsert;
use PHPUnit\Framework\Assert;

class ListsTests extends BaseTestContext
{
    /**
     *
     * Test for getting lists
     *
     */
    public function testGetLists()
    {
        $localName = "ListsGet.doc";
        $remoteName = "testGetLists.doc";
        $subfolder = "Lists";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Lists/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetListsRequest($remoteName);
        $result = $this->words->getLists($request);
    }

    /**
     *
     * Test for getting list
     *
     */
    public function testGetList()
    {
        $localName = "ListsGet.doc";
        $remoteName = "testGetList.doc";
        $subfolder = "Lists";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Lists/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetListRequest($remoteName, 1);
        $result = $this->words->getList($request);
    }
    
    /**
     *
     * Test for updating list
     *
     */
    public function testUpdatingList()
    {
        $localName = "ListsGet.doc";
        $remoteName = "testUpdateList.doc";
        $subfolder = "Lists";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Lists/' . $localName;
        $this->uploadFile($file, $fullName);

        $data = new ListUpdate(array("is_restart_at_each_section" => true));
        $request = new Requests\UpdateListRequest($remoteName, $data, 1);
        $result = $this->words->updateList($request);
    }
    
    /**
     *
     * Test for updating list level
     *
     */
    public function testUpdatingListLevel()
    {
        $localName = "ListsGet.doc";
        $remoteName = "testUpdateListLevel.doc";
        $subfolder = "Lists";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Lists/' . $localName;
        $this->uploadFile($file, $fullName);

        $data = new ListLevelUpdate(array("alignment" => "Right"));
        $request = new Requests\UpdateListLevelRequest($remoteName, $data, 1, 1);
        $result = $this->words->updateListLevel($request);
    }
    
    /**
     *
     * Test for inserting list
     *
     */
    public function testInsertList()
    {
        $localName = "ListsGet.doc";
        $remoteName = "testInsertList.doc";
        $subfolder = "Lists";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Lists/' . $localName;
        $this->uploadFile($file, $fullName);

        $data = new ListInsert(array("template" => "OutlineLegal"));
        $request = new Requests\InsertListRequest($remoteName, $data);
        $result = $this->words->insertList($request);
    }
}