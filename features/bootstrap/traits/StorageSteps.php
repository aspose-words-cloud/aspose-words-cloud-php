<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="StorageSteps.php">
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

use PHPUnit\Framework\Assert;
/*
 * Trait with steps for storage
 */
trait StorageSteps
{
    /**
     * Step for specifying document name and folder
     *
     * @param string $DocName   document name
     * @param string $SubFolder folder
     *
     * @Given  /^I have uploaded document with name (.*) and subfolder is (.*) to storage$/
     * @return void
     */
    public function iHaveUploadedDocumentWithNameAndSubfolderIsToStorage($DocName, $SubFolder)
    {
        $fullName = $this->BaseRemoteFolder() . $SubFolder . $DocName;
        $file = realpath(__DIR__ . '/../../..') . '/TestData/DocumentActions/ConvertDocument/' . $DocName;
        $putRequest = new \Aspose\Words\Model\Requests\UploadFileRequest($file, $fullName);
        $this->context->get_api()->uploadfile($putRequest);
    }

    /**
     * Step for specifying output path and folder on storage
     *
     * @param string $OutPath   output path
     * @param string $subfolder folder
     *
     * @Then   /^document (.*) is existed on storage in (.*) folder$/
     * @return void
     */
    public function documentIsExistedOnStorageInOutputFolder($OutPath, $subfolder)
    {
        $remotePath = $this->BaseRemoteFolder() . $subfolder . $OutPath;
        if ($subfolder == "output") {
            $remotePath = $this->BaseRemoteOut() . $OutPath;
        }

        $existRequest = new \Aspose\Words\Model\Requests\DownloadFileRequest($remotePath);
        $response = $this->context->get_api()->downloadFile($existRequest);
        echo($response);
        if ($response instanceof \Aspose\Storage\Model\FileExistResponse) {
            Assert::assertEquals(true, $response->getFileExist()->getIsExist(), "File doesn't exist at $remotePath");
        }
    }

    /**
     * Step for deleting file from storage
     *
     * @param string $OutPath   outpath for document
     * @param string $subfolder folder
     *
     * @Given  /^There is no file (.*) on storage in (.*) folder$/
     * @return void
     */
    public function thereIsNoFileOnStorageInOutputFolder($OutPath, $subfolder)
    {
        $remotePath = $this->BaseRemoteFolder() . $subfolder . $OutPath;
        if ($subfolder == "output") {
            $remotePath = $this->BaseRemoteOut() . $OutPath;
        }

        $deleteRequest = new \Aspose\Words\Model\Requests\DeleteFileRequest($remotePath);
        $this->context->get_api()->deleteFile($deleteRequest);
    }
}