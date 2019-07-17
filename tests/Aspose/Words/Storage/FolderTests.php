<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="RunTests.php">
*   Copyright (c) 2017 Aspose.Words for Cloud
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
require_once $_SERVER['DOCUMENT_ROOT'] . "tests/Aspose/Words/BaseTestContext.php";
use Aspose\Words\Model\Requests;
use Aspose\Words\Model\Run;
use Aspose\Words;
use PHPUnit\Framework\Assert;

class FolderTests extends \BaseTest\BaseTestContext
{
    public $testFolder = 'Temp/SdkTests/TestData/Storage';
    private function getGUID(){
        if (function_exists('com_create_guid')){
            return com_create_guid();
        }
        else {
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);// "}"
            return $uuid;
        }
    }

    /**
     * Test case for deleteRun
     *
     * Removes run from document..
     *
     */
    public function testCreateFolder()
    {
        $folderGUID = $this->getGUID();
        $folderPath = $this->$testFolder . '/TestCreateFolder' . $folderGUID;
        $request = new Requests\CreateFolderRequest($folderPath);
        $result = $this->words->createFolder($request);
        echo $result;
    }

    public function testDeleteFolder()
    {
        $folderGUID = $this->getGUID();
        $folderPath = $this->$testFolder . '/TestCreateFolder' . $folderGUID;
        $request = new Requests\CreateFolderRequest($folderPath);
        $this->words->createFolder($request);
        $request = new Requests\DeleteFolderRequest($folderPath);
        $response = $this->words->deleteFolder($request);
    }

    public function testGetFilesList()
    {
        $request = new Requests\GetFilesListRequest($this->testFolder);
        $response = $this->words->getFilesList($request);
        Assert::greaterThan(0, strlen($response), "Answer should not be empty");
    }

    public function testCopyFolder(){
        $folderGUID = $this->getGUID();
        $folderPathSrc = $this->$testFolder . '/TestCopyFolderSrc' . $folderGUID;
        $folderPathDst = $this->$testFolder . '/TestCopyFolderDst' . $folderGUID;

        $request = new Requests\CreateFolderRequest($folderPathSrc);
        $this->words->createFolder($request);

        $request = new Requests\CopyFolderRequest($folderPathDst, $folderPathSrc);
        $this->words->copyFolder($request);

        $request = new Requests\GetFilesListRequest($this->testFolder);
        $response = $this->words->getFilesList($request);
    }

    public function testMoveFolder(){
        $folderGUID = $this->getGUID();
        $folderPathSrc = $this->$testFolder . '/TestMoveFolderSrc' . $folderGUID;
        $folderPathDst = $this->$testFolder . '/TestMoveFolderDst' . $folderGUID;

        $request = new Requests\CreateFolderRequest($folderPathSrc);
        $this->words->createFolder($request);

        $request = new Requests\MoveFolderRequest($folderPathDst, $folderPathSrc);
        $this->words->moveFolder($request);

        $request = new Requests\GetFilesListRequest($this->testFolder);
        $response = $this->words->getFilesList($request);
    }
}