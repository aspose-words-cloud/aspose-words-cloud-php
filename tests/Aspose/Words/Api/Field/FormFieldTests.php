<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FormFieldTests.php">
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
 * Example of how to work with form field.
 */
class FormFieldTests extends BaseTestContext
{
    private static $remoteDataFolder = baseRemoteFolder . "/DocumentElements/FormFields";
    private static $fieldFolder = "DocumentElements/FormFields";

    /*
     * Test for posting form field.
     */
    public function testUpdateFormField()
    {
        $remoteFileName = "TestUpdateFormField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "No name",
        ))
        $request = new Requests\UpdateFormFieldRequest(
            $remoteFileName,
            $requestFormField,
            "sections/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->updateFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for posting form field without node path.
     */
    public function testUpdateFormFieldWithoutNodePath()
    {
        $remoteFileName = "TestUpdateFormFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "No name",
        ))
        $request = new Requests\UpdateFormFieldWithoutNodePathRequest(
            $remoteFileName,
            $requestFormField,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->updateFormFieldWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting form field.
     */
    public function testGetFormField()
    {
        $remoteFileName = "TestGetFormField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFormFieldRequest(
            $remoteFileName,
            "sections/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting form field without node path.
     */
    public function testGetFormFieldWithoutNodePath()
    {
        $remoteFileName = "TestGetFormFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFormFieldWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormFieldWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting form fields.
     */
    public function testGetFormFields()
    {
        $remoteFileName = "TestGetFormFields.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFormFieldsRequest(
            $remoteFileName,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormFields($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting form fields without node path.
     */
    public function testGetFormFieldsWithoutNodePath()
    {
        $remoteFileName = "TestGetFormFieldsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetFormFieldsWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getFormFieldsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for insert form field without node path.
     */
    public function testInsertFormField()
    {
        $remoteFileName = "TestInsertFormField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/test_multi_pages.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "123",
            "text_input_format" => "UPPERCASE",
        ))
        $request = new Requests\InsertFormFieldRequest(
            $remoteFileName,
            $requestFormField,
            "sections/0/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for insert form field without node path.
     */
    public function testInsertFormFieldWithoutNodePath()
    {
        $remoteFileName = "TestInsertFormFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/test_multi_pages.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => "Regular",
            "text_input_default" => "123",
            "text_input_format" => "UPPERCASE",
        ))
        $request = new Requests\InsertFormFieldWithoutNodePathRequest(
            $remoteFileName,
            $requestFormField,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertFormFieldWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting form field.
     */
    public function testDeleteFormField()
    {
        $remoteFileName = "TestDeleteFormField.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFormFieldRequest(
            $remoteFileName,
            "sections/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL
        );

    $this->words->deleteFormField($request);
    }

    /*
     * Test for deleting form field without node path.
     */
    public function testDeleteFormFieldWithoutNodePath()
    {
        $remoteFileName = "TestDeleteFormFieldWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $fieldFolder . "/FormFilled.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteFormFieldWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL
        );

    $this->words->deleteFormFieldWithoutNodePath($request);
    }
}