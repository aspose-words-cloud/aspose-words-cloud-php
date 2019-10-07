<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="FileTests.php">
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

class FileTests extends BaseTestContext
{
    public $testFolder = 'Temp/SdkTests/TestData';
    /**
     * Test case for uploadFile
     */
    public function testUploadFile()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestUploadFile.docx";
        $fullName = self::$baseRemoteFolder . '\\' . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $request = new Requests\UploadFileRequest($file, $fullName);
        $result = $this->words->uploadFile($request);
        Assert::isTrue(count(json_decode($result)->Uploaded) == 1, "File was not uploaded");
    }

    /**
     * Test case for copyFile
     */
    public function testCopyFile()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestCopyFileSrc.docx";
        $remoteNameDst = "TestCopyFileDst" . $this->getGUID() .".docx";
        $remotePathSrc = self::$baseRemoteFolder . '/' . $remoteName;
        $remotePathDst = self::$baseRemoteFolder . '/' . $remoteNameDst;

        $this->uploadFile(realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName, $remotePathSrc);
        $request = new Requests\CopyFileRequest($remotePathDst, $remotePathSrc);
        $response = $this->words->copyFile($request);
        
        $result = $this->words->downloadFile(new Requests\DownloadFileRequest($remotePathDst));
        Assert::greaterThan(0, strlen($result), "Should return non-empty result");
    }

    /**
     * Test case for moveFile
     */
    public function testMoveFile()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestMoveFileSrc.docx";
        $remoteNameDst = "TestMoveFileDst" . $this->getGUID() .".docx";
        $remotePathSrc = self::$baseRemoteFolder . '/' . $remoteName;
        $remotePathDst = self::$baseRemoteFolder . '/' . $remoteNameDst;

        $this->uploadFile(realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName, $remotePathSrc);

        $request = new Requests\MoveFileRequest($remotePathDst, $remotePathSrc);
        $response = $this->words->moveFile($request);
        try{
            $result = $this->words->downloadFile(new Requests\DownloadFileRequest($remotePathSrc));
            echo $result;
            Assert::fail('Source file should be removed');
        } catch (\Aspose\Words\ApiException $ex){
            Assert::isTrue($ex->getCode() == 404, 'Exception Code should be 404');
        }
    }

    /**
     * Test case for deleteFile
     */
    public function testDeleteFile() {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDeleteFile.docx";
        $fullName = self::$baseRemoteFolder . '\\' . $remoteName;

        $this->uploadFile(realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName, $fullName);

        $request = new Requests\DeleteFileRequest($fullName);
        $response = $this->words->deleteFile($request);
    }

    /**
     * Test case for downloadFile
     */
    public function testDownloadFile() {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDownloadFile.docx";
        $fullName = self::$baseRemoteFolder . '\\' . $remoteName;

        $this->uploadFile(realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName, $fullName);

        $request = new Requests\DownloadFileRequest($fullName);
        $response = $this->words->downloadFile($request);
        Assert::greaterThan(0, strlen($response));
    }
}