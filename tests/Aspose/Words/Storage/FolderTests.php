<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="FolderTests.php">
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
use Aspose\Words\Model\Run;
use Aspose\Words;
use PHPUnit\Framework\Assert;

class FolderTests extends BaseTestContext
{
    public $testFolder = "asdasdas";
    /**
     * Test case for createFolder
     */
    public function testCreateFolder()
    {
        $subfolder = 'Temp/SdkTests/TestData/Storage';
        $folderGUID = $this->getGUID();
        $folderPath = $subfolder . '/TestCreateFolder' . $folderGUID;
        $request = new Requests\CreateFolderRequest($folderPath);
        $result = $this->words->createFolder($request);
        echo $result;
    }

    /**
     * Test case for deleteFolder
     */
    public function testDeleteFolder()
    {
        $subfolder = 'Temp/SdkTests/TestData/Storage';
        $folderGUID = $this->getGUID();
        $folderPath = $subfolder . '/TestCreateFolder' . $folderGUID;
        $request = new Requests\CreateFolderRequest($folderPath);
        $this->words->createFolder($request);
        $request = new Requests\DeleteFolderRequest($folderPath);
        $response = $this->words->deleteFolder($request);
    }

    /**
     * Test case for getFilesList
     */
    public function testGetFilesList()
    {
        $subfolder = 'Temp/SdkTests/TestData/Storage';
        $request = new Requests\GetFilesListRequest($this->testFolder);
        $response = $this->words->getFilesList($request);
        Assert::greaterThan(0, strlen($response), "Answer should not be empty");
    }

    /**
     * Test case for copyFolder
     */
    public function testCopyFolder(){
        $subfolder = 'Temp/SdkTests/TestData/Storage';
        $folderGUID = $this->getGUID();
        $folderPathSrc = $subfolder . '/TestCopyFolderSrc' . $folderGUID;
        $folderPathDst = $subfolder . '/TestCopyFolderDst' . $folderGUID;

        $request = new Requests\CreateFolderRequest($folderPathSrc);
        $this->words->createFolder($request);

        $request = new Requests\CopyFolderRequest($folderPathDst, $folderPathSrc);
        $this->words->copyFolder($request);

        $request = new Requests\GetFilesListRequest($this->testFolder);
        $response = $this->words->getFilesList($request);
    }

    /**
     * Test case for moveFolder
     */
    public function testMoveFolder(){
        $subfolder = 'Temp/SdkTests/TestData/Storage';
        $folderGUID = $this->getGUID();
        $folderPathSrc = $subfolder . '/TestMoveFolderSrc' . $folderGUID;
        $folderPathDst = $subfolder . '/TestMoveFolderDst' . $folderGUID;

        $request = new Requests\CreateFolderRequest($folderPathSrc);
        $this->words->createFolder($request);

        $request = new Requests\MoveFolderRequest($folderPathDst, $folderPathSrc);
        $this->words->moveFolder($request);

        $request = new Requests\GetFilesListRequest($this->testFolder);
        $response = $this->words->getFilesList($request);
    }
}