<?php
/**
 * Created by PhpStorm.
 * User: EkimovYN
 * Date: 10.05.2018
 * Time: 21:50
 */
use PHPUnit\Framework\Assert;
trait StorageSteps
{
    /**
     * @Given /^I have uploaded document with name (.*) and subfolder is (.*) to storage$/
     */
    public function iHaveUploadedDocumentWithNameAndSubfolderIsToStorage($DocName, $SubFolder)
    {
        $fullName = $this->BaseRemoteFolder() . $SubFolder . $DocName;
        $file = realpath(__DIR__ . '/../../..') . '/TestData/DocumentActions/ConvertDocument/' . $DocName;
        $putRequest = new \Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->context->get_storage()->PutCreate($putRequest);
    }

    /**
     * @Then /^document (.*) is existed on storage in (.*) folder$/
     */
    public function documentIsExistedOnStorageInOutputFolder($OutPath, $subfolder)
    {
        $remotePath = $this->BaseRemoteFolder() . $subfolder . $OutPath;
        if ($subfolder == "output")
        {
            $remotePath = $this->BaseRemoteOut() . $OutPath;
        }
        $existRequest = new \Aspose\Storage\Model\Requests\GetIsExistRequest($remotePath);
        $response = $this->context->get_storage()->getIsExist($existRequest);
        if ($response instanceof \Aspose\Storage\Model\FileExistResponse)
        {
            Assert::assertEquals(true, $response->getFileExist()->getIsExist(), "File doesn't exist at $remotePath");
        }
    }

    /**
     * @Given /^There is no file (.*) on storage in (.*) folder$/
     */
    public function thereIsNoFileOnStorageInOutputFolder($OutPath, $subfolder)
    {
        $remotePath = $this->BaseRemoteFolder() . $subfolder . $OutPath;
        if ($subfolder == "output")
        {
            $remotePath = $this->BaseRemoteOut() . $OutPath;
        }
        $deleteRequest = new \Aspose\Storage\Model\Requests\DeleteFileRequest($remotePath);
        $this->context->get_storage()->deleteFile($deleteRequest);
    }
}