<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FieldTests.php">
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
use Aspose\Words\Model\Requests\{DeleteFieldOnlineRequest, DeleteFieldRequest, DeleteFieldsOnlineRequest, DeleteFieldsRequest, GetFieldOnlineRequest, GetFieldRequest, GetFieldsOnlineRequest, GetFieldsRequest, InsertFieldOnlineRequest, InsertFieldRequest, InsertPageNumbersOnlineRequest, InsertPageNumbersRequest, UpdateFieldOnlineRequest, UpdateFieldRequest, UpdateFieldsOnlineRequest, UpdateFieldsRequest};
use Aspose\Words\Model\{FieldInsert, FieldUpdate, PageNumber};
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetFieldsRequest(
            $remoteFileName,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFields($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFields());
        Assert::assertNotNull($result->getFields()->getList());
        Assert::assertCount(1, $result->getFields()->getList());
        Assert::assertEquals("1", $result->getFields()->getList()[0]->getResult());
    }

    /*
     * Test for getting fields online.
     */
    public function testGetFieldsOnline()
    {
        $fieldFolder = "DocumentElements/Fields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/GetField.docx";
        $request = new GetFieldsOnlineRequest(
            $requestDocument,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFieldsOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetFieldsRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFields($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFields());
        Assert::assertNotNull($result->getFields()->getList());
        Assert::assertCount(1, $result->getFields()->getList());
        Assert::assertEquals("1", $result->getFields()->getList()[0]->getResult());
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetFieldRequest(
            $remoteFileName,
            0,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getField());
        Assert::assertEquals("1", $result->getField()->getResult());
    }

    /*
     * Test for getting field by index online.
     */
    public function testGetFieldOnline()
    {
        $fieldFolder = "DocumentElements/Fields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/GetField.docx";
        $request = new GetFieldOnlineRequest(
            $requestDocument,
            0,
            "sections/0/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFieldOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetFieldRequest(
            $remoteFileName,
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getField());
        Assert::assertEquals("1", $result->getField()->getResult());
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $textFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new FieldInsert(array(
            "field_code" => "{ NUMPAGES }",
        ));
        $request = new InsertFieldRequest(
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
            NULL,
            NULL
        );

        $result = $this->words->insertField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getField());
        Assert::assertEquals("{ NUMPAGES }", $result->getField()->getFieldCode());
        Assert::assertEquals("0.0.0.1", $result->getField()->getNodeId());
    }

    /*
     * Test for putting field online.
     */
    public function testInsertFieldOnline()
    {
        $fieldFolder = "DocumentElements/Fields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/GetField.docx";
        $requestField = new FieldInsert(array(
            "field_code" => "{ NUMPAGES }",
        ));
        $request = new InsertFieldOnlineRequest(
            $requestDocument,
            $requestField,
            "sections/0/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFieldOnline($request);
        Assert::assertTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $textFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new FieldInsert(array(
            "field_code" => "{ NUMPAGES }",
        ));
        $request = new InsertFieldRequest(
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
            NULL,
            NULL
        );

        $result = $this->words->insertField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getField());
        Assert::assertEquals("{ NUMPAGES }", $result->getField()->getFieldCode());
        Assert::assertEquals("5.0.22.0", $result->getField()->getNodeId());
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestField = new FieldUpdate(array(
            "field_code" => "{ NUMPAGES }",
        ));
        $request = new UpdateFieldRequest(
            $remoteFileName,
            0,
            $requestField,
            "sections/0/paragraphs/0",
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

        $result = $this->words->updateField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getField());
        Assert::assertEquals("{ NUMPAGES }", $result->getField()->getFieldCode());
        Assert::assertEquals("0.0.0.0", $result->getField()->getNodeId());
    }

    /*
     * Test for posting field online.
     */
    public function testUpdateFieldOnline()
    {
        $fieldFolder = "DocumentElements/Fields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/GetField.docx";
        $requestField = new FieldUpdate(array(
            "field_code" => "{ NUMPAGES }",
        ));
        $request = new UpdateFieldOnlineRequest(
            $requestDocument,
            $requestField,
            0,
            "sections/0/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateFieldOnline($request);
        Assert::assertTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestPageNumber = new PageNumber(array(
            "alignment" => "center",
            "format" => "{PAGE} of {NUMPAGES}",
            "is_top" => true,
            "set_page_number_on_first_page" => true,
        ));
        $request = new InsertPageNumbersRequest(
            $remoteFileName,
            $requestPageNumber,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->insertPageNumbers($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestInsertPageNumbers.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for inserting page numbers field online.
     */
    public function testInsertPageNumbersOnline()
    {
        $localFileName = "test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/" . $localFileName;
        $requestPageNumber = new PageNumber(array(
            "alignment" => "center",
            "format" => "{PAGE} of {NUMPAGES}",
            "is_top" => true,
            "set_page_number_on_first_page" => true,
        ));
        $request = new InsertPageNumbersOnlineRequest(
            $requestDocument,
            $requestPageNumber,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertPageNumbersOnline($request);
        Assert::assertTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFieldRequest(
            $remoteFileName,
            0,
            "sections/0/paragraphs/0",
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

        Assert::assertNull($this->words->deleteField($request));
    }

    /*
     * Test for deleting field online.
     */
    public function testDeleteFieldOnline()
    {
        $fieldFolder = "DocumentElements/Fields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/GetField.docx";
        $request = new DeleteFieldOnlineRequest(
            $requestDocument,
            0,
            "sections/0/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteFieldOnline($request);
        Assert::assertNotNull($result, "Error occurred");
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFieldRequest(
            $remoteFileName,
            0,
            NULL,
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

        Assert::assertNull($this->words->deleteField($request));
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFieldsRequest(
            $remoteFileName,
            "paragraphs/0",
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

        Assert::assertNull($this->words->deleteFields($request));
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFieldsRequest(
            $remoteFileName,
            NULL,
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

        Assert::assertNull($this->words->deleteFields($request));
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFieldsRequest(
            $remoteFileName,
            "sections/0",
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

        Assert::assertNull($this->words->deleteFields($request));
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFieldsRequest(
            $remoteFileName,
            NULL,
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

        Assert::assertNull($this->words->deleteFields($request));
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFieldsRequest(
            $remoteFileName,
            "sections/0/paragraphs/0",
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

        Assert::assertNull($this->words->deleteFields($request));
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFieldsRequest(
            $remoteFileName,
            "",
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

        Assert::assertNull($this->words->deleteFields($request));
    }

    /*
     * Test for deleting fields online.
     */
    public function testDeleteDocumentFieldsOnline()
    {
        $localFileName = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFileName;
        $request = new DeleteFieldsOnlineRequest(
            $requestDocument,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteFieldsOnline($request);
        Assert::assertNotNull($result, "Error occurred");
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
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/" . $localFileName,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new UpdateFieldsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateFields($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestUpdateDocumentFields.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for posting updated fields online.
     */
    public function testUpdateDocumentFieldsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new UpdateFieldsOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateFieldsOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}