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
use Aspose\Words\Model\BookmarkData;
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with field.
 */
class FieldTests extends BaseTestContext
{
    private static $remoteDataFolder = baseRemoteFolder . "/DocumentElements/Fields";
    private static $textFolder = "DocumentElements/Text";
    private static $fieldFolder = "DocumentElements/Fields";

    /*
     * Test for getting fields.
     */
    public function testGetFields()
    {
        $localFileName = "GetField.docx";
        $remoteFileName = "TestGetFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/" . $localFileName,
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
        $localFileName = "GetField.docx";
        $remoteFileName = "TestGetFieldsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFieldsWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFieldsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting field by index.
     */
    public function testGetField()
    {
        $localFileName = "GetField.docx";
        $remoteFileName = "TestGetField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFieldRequest(
            $remoteFileName,
            "sections/0/paragraphs/0",
            0,
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
        $localFileName = "GetField.docx";
        $remoteFileName = "TestGetFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFieldWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFieldWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for putting field.
     */
    public function testInsertField()
    {
        $localFileName = "SampleWordDocument.docx";
        $remoteFileName = "TestInsertField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $textFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new \Aspose\Words\Model\FieldInsert(array(
            "field_code" => "{ NUMPAGES }",
        ))
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
        $localFileName = "SampleWordDocument.docx";
        $remoteFileName = "TestInsertFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $textFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new \Aspose\Words\Model\FieldInsert(array(
            "field_code" => "{ NUMPAGES }",
        ))
        $request = new Requests\InsertFieldWithoutNodePathRequest(
            $remoteFileName,
            $requestField,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFieldWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for posting field.
     */
    public function testUpdateField()
    {
        $localFileName = "GetField.docx";
        $remoteFileName = "TestUpdateField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new \Aspose\Words\Model\FieldUpdate(array(
            "field_code" => "{ NUMPAGES }",
        ))
        $request = new Requests\UpdateFieldRequest(
            $remoteFileName,
            $requestField,
            "sections/0/paragraphs/0",
            0,
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
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestInsertPageNumbers.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestPageNumber = new \Aspose\Words\Model\PageNumber(array(
            "alignment" => "center",
            "format" => "{PAGE} of {NUMPAGES}",
        ))
        $request = new Requests\InsertPageNumbersRequest(
            $remoteFileName,
            $requestPageNumber,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName,
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
        $localFileName = "GetField.docx";
        $remoteFileName = "TestDeleteField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldRequest(
            $remoteFileName,
            "sections/0/paragraphs/0",
            0,
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
        $localFileName = "GetField.docx";
        $remoteFileName = "TestDeleteFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFieldWithoutNodePath($request);
    }

    /*
     * Test for deleting paragraph fields.
     */
    public function testDeleteParagraphFields()
    {
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteParagraphFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localFileName,
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
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteParagraphFieldsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldsWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFieldsWithoutNodePath($request);
    }

    /*
     * Test for deleting section fields.
     */
    public function testDeleteSectionFields()
    {
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteSectionFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localFileName,
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
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteSectionFieldsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFieldsWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteFieldsWithoutNodePath($request);
    }

    /*
     * Test for deleting paragraph fields in section.
     */
    public function testDeleteSectionParagraphFields()
    {
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteSectionParagraphFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localFileName,
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
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestDeleteSectionParagraphFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localFileName,
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
        $localFileName = "test_multi_pages.docx";
        $remoteFileName = "TestUpdateDocumentFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/" . $localFileName,
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