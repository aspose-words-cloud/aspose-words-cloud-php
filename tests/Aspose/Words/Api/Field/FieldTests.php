<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FieldTests.php">
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
 * Example of how to work with field.
 */
class FieldTests extends BaseTestContext
{
    /*
     * Test for getting fields.
     */
    public function testGetFields()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $fieldFolder = "DocumentElements/Fields";
        $localFileName = "GetField.docx";
        $remoteFileName = "TestGetFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFieldsRequest(
            $remoteFileName,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFields($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting fields without node path.
     */
    public function testGetFieldsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $fieldFolder = "DocumentElements/Fields";
        $localFileName = "GetField.docx";
        $remoteFileName = "TestGetFieldsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFieldsRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFields($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting field by index.
     */
    public function testGetField()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $fieldFolder = "DocumentElements/Fields";
        $localFileName = "GetField.docx";
        $remoteFileName = "TestGetField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFieldRequest(
            $remoteFileName,
            0,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting field by index without node path.
     */
    public function testGetFieldWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $fieldFolder = "DocumentElements/Fields";
        $localFileName = "GetField.docx";
        $remoteFileName = "TestGetFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFieldRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for putting field.
     */
    public function testInsertField()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $textFolder = "DocumentElements/Text";
        $localFileName = "SampleWordDocument.docx";
        $remoteFileName = "TestInsertField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $textFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new \Aspose\Words\Model\FieldInsert(array(
            "field_code" => "{ NUMPAGES }",
        ));
        $request = new Requests\InsertFieldRequest(
            $remoteFileName,
            $requestField,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for putting field without node path.
     */
    public function testInsertFieldWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $textFolder = "DocumentElements/Text";
        $localFileName = "SampleWordDocument.docx";
        $remoteFileName = "TestInsertFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $textFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new \Aspose\Words\Model\FieldInsert(array(
            "field_code" => "{ NUMPAGES }",
        ));
        $request = new Requests\InsertFieldRequest(
            $remoteFileName,
            $requestField,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for posting field.
     */
    public function testUpdateField()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $fieldFolder = "DocumentElements/Fields";
        $localFileName = "GetField.docx";
        $remoteFileName = "TestUpdateField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new \Aspose\Words\Model\FieldUpdate(array(
            "field_code" => "{ NUMPAGES }",
        ));
        $request = new Requests\UpdateFieldRequest(
            $remoteFileName,
            $requestField,
            0,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for inserting page numbers field.
     */
    public function testInsertPageNumbers()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestInsertPageNumbers.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestPageNumber = new \Aspose\Words\Model\PageNumber(array(
            "alignment" => "center",
            "format" => "{PAGE} of {NUMPAGES}",
        ));
        $request = new Requests\InsertPageNumbersRequest(
            $remoteFileName,
            $requestPageNumber,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->insertPageNumbers($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting field.
     */
    public function testDeleteField()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $fieldFolder = "DocumentElements/Fields";
        $localFileName = "GetField.docx";
        $remoteFileName = "TestDeleteField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldRequest(
            $remoteFileName,
            0,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteField($request);
    }

    /*
     * Test for deleting field without node path.
     */
    public function testDeleteFieldWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $fieldFolder = "DocumentElements/Fields";
        $localFileName = "GetField.docx";
        $remoteFileName = "TestDeleteFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteField($request);
    }

    /*
     * Test for deleting paragraph fields.
     */
    public function testDeleteParagraphFields()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteParagraphFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldsRequest(
            $remoteFileName,
            "paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFields($request);
    }

    /*
     * Test for deleting paragraph fields without node path.
     */
    public function testDeleteParagraphFieldsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteParagraphFieldsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldsRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFields($request);
    }

    /*
     * Test for deleting section fields.
     */
    public function testDeleteSectionFields()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteSectionFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldsRequest(
            $remoteFileName,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFields($request);
    }

    /*
     * Test for deleting section fields without node path.
     */
    public function testDeleteSectionFieldsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteSectionFieldsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldsRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFields($request);
    }

    /*
     * Test for deleting paragraph fields in section.
     */
    public function testDeleteSectionParagraphFields()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteSectionParagraphFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldsRequest(
            $remoteFileName,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFields($request);
    }

    /*
     * Test for deleting fields.
     */
    public function testDeleteDocumentFields()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteSectionParagraphFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldsRequest(
            $remoteFileName,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFields($request);
    }

    /*
     * Test for posting updated fields.
     */
    public function testUpdateDocumentFields()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Fields";
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestUpdateDocumentFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\UpdateFieldsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateFields($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}