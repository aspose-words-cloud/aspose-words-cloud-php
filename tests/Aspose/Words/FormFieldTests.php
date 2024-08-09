<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FormFieldTests.php">
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
use Aspose\Words\Model\Requests\{DeleteFormFieldOnlineRequest, DeleteFormFieldRequest, GetFormFieldOnlineRequest, GetFormFieldRequest, GetFormFieldsOnlineRequest, GetFormFieldsRequest, InsertFormFieldOnlineRequest, InsertFormFieldRequest, UpdateFormFieldOnlineRequest, UpdateFormFieldRequest};
use Aspose\Words\Model\{FormFieldTextInput};
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with form field.
 */
class FormFieldTests extends BaseTestContext
{
    /*
     * Test for posting form field.
     */
    public function testUpdateFormField()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $fieldFolder = "DocumentElements/FormFields";
        $remoteFileName = "TestUpdateFormField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormField = new FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "No name",
            "text_input_format" => "",
        ));
        $request = new UpdateFormFieldRequest(
            $remoteFileName,
            0,
            $requestFormField,
            "sections/0",
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

        $result = $this->words->updateFormField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFormField());
        Assert::assertEquals("FullName", $result->getFormField()->getName());
        Assert::assertEquals("", $result->getFormField()->getStatusText());
    }

    /*
     * Test for posting form field online.
     */
    public function testUpdateFormFieldOnline()
    {
        $fieldFolder = "DocumentElements/FormFields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/FormFilled.docx";
        $requestFormField = new FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "No name",
            "text_input_format" => "",
        ));
        $request = new UpdateFormFieldOnlineRequest(
            $requestDocument,
            $requestFormField,
            0,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateFormFieldOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for posting form field without node path.
     */
    public function testUpdateFormFieldWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $fieldFolder = "DocumentElements/FormFields";
        $remoteFileName = "TestUpdateFormFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormField = new FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "No name",
            "text_input_format" => "",
        ));
        $request = new UpdateFormFieldRequest(
            $remoteFileName,
            0,
            $requestFormField,
            NULL,
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

        $result = $this->words->updateFormField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFormField());
        Assert::assertEquals("FullName", $result->getFormField()->getName());
        Assert::assertEquals("", $result->getFormField()->getStatusText());
    }

    /*
     * Test for getting form field.
     */
    public function testGetFormField()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $fieldFolder = "DocumentElements/FormFields";
        $remoteFileName = "TestGetFormField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetFormFieldRequest(
            $remoteFileName,
            0,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFormField());
        Assert::assertEquals("FullName", $result->getFormField()->getName());
    }

    /*
     * Test for getting form field online.
     */
    public function testGetFormFieldOnline()
    {
        $fieldFolder = "DocumentElements/FormFields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/FormFilled.docx";
        $request = new GetFormFieldOnlineRequest(
            $requestDocument,
            0,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormFieldOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting form field without node path.
     */
    public function testGetFormFieldWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $fieldFolder = "DocumentElements/FormFields";
        $remoteFileName = "TestGetFormFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetFormFieldRequest(
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

        $result = $this->words->getFormField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFormField());
        Assert::assertEquals("FullName", $result->getFormField()->getName());
    }

    /*
     * Test for getting form fields.
     */
    public function testGetFormFields()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $fieldFolder = "DocumentElements/FormFields";
        $remoteFileName = "TestGetFormFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetFormFieldsRequest(
            $remoteFileName,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormFields($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFormFields());
        Assert::assertNotNull($result->getFormFields()->getList());
        Assert::assertCount(5, $result->getFormFields()->getList());
        Assert::assertEquals("FullName", $result->getFormFields()->getList()[0]->getName());
    }

    /*
     * Test for getting form fields online.
     */
    public function testGetFormFieldsOnline()
    {
        $fieldFolder = "DocumentElements/FormFields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/FormFilled.docx";
        $request = new GetFormFieldsOnlineRequest(
            $requestDocument,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormFieldsOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting form fields without node path.
     */
    public function testGetFormFieldsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $fieldFolder = "DocumentElements/FormFields";
        $remoteFileName = "TestGetFormFieldsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetFormFieldsRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormFields($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFormFields());
        Assert::assertNotNull($result->getFormFields()->getList());
        Assert::assertCount(5, $result->getFormFields()->getList());
        Assert::assertEquals("FullName", $result->getFormFields()->getList()[0]->getName());
    }

    /*
     * Test for insert form field without node path.
     */
    public function testInsertFormField()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $remoteFileName = "TestInsertFormField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/test_multi_pages.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormField = new FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "123",
            "text_input_format" => "UPPERCASE",
        ));
        $request = new InsertFormFieldRequest(
            $remoteFileName,
            $requestFormField,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFormField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFormField());
        Assert::assertEquals("FullName", $result->getFormField()->getName());
        Assert::assertEquals("", $result->getFormField()->getStatusText());
    }

    /*
     * Test for insert form field without node path online.
     */
    public function testInsertFormFieldOnline()
    {
        $fieldFolder = "DocumentElements/FormFields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/FormFilled.docx";
        $requestFormField = new FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "123",
            "text_input_format" => "UPPERCASE",
        ));
        $request = new InsertFormFieldOnlineRequest(
            $requestDocument,
            $requestFormField,
            "sections/0/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFormFieldOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for insert form field without node path.
     */
    public function testInsertFormFieldWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $remoteFileName = "TestInsertFormFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/test_multi_pages.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormField = new FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "123",
            "text_input_format" => "UPPERCASE",
        ));
        $request = new InsertFormFieldRequest(
            $remoteFileName,
            $requestFormField,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFormField($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getFormField());
        Assert::assertEquals("FullName", $result->getFormField()->getName());
        Assert::assertEquals("", $result->getFormField()->getStatusText());
    }

    /*
     * Test for deleting form field.
     */
    public function testDeleteFormField()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $fieldFolder = "DocumentElements/FormFields";
        $remoteFileName = "TestDeleteFormField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFormFieldRequest(
            $remoteFileName,
            0,
            "sections/0",
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

        Assert::assertNull($this->words->deleteFormField($request));
    }

    /*
     * Test for deleting form field online.
     */
    public function testDeleteFormFieldOnline()
    {
        $fieldFolder = "DocumentElements/FormFields";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $fieldFolder . "/FormFilled.docx";
        $request = new DeleteFormFieldOnlineRequest(
            $requestDocument,
            0,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteFormFieldOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for deleting form field without node path.
     */
    public function testDeleteFormFieldWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/FormFields";
        $fieldFolder = "DocumentElements/FormFields";
        $remoteFileName = "TestDeleteFormFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteFormFieldRequest(
            $remoteFileName,
            0,
            NULL,
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

        Assert::assertNull($this->words->deleteFormField($request));
    }
}