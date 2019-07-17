<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="FormFieldTests.php">
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
use Aspose\Words\Model\FormFieldTextInput;
use PHPUnit\Framework\Assert;

class FormFieldTests extends \BaseTest\BaseTestContext
{
    /**
     * Test case for postFormField
     *
     * Updates properties of form field, returns updated form field..
     *
     */
    public function testPostFormField()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestPostFormField.docx";
        $subfolder = "DocumentElements/FormField";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $destName = self::$baseTestOut . $remoteName;
        $body = new FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => FormFieldTextInput::TEXT_INPUT_TYPE_REGULAR,
            "text_input_default" => ""
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/FormFields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateFormFieldRequest($remoteName, $body, $index, "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null);

        $result = $this->words->updateFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for putFormField
     *
     * Adds form field to paragraph, returns added form field's data..
     *
     */
    public function testPutFormField()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPutFormField.docx";
        $subfolder = "DocumentElements/FormField";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $body = new FormFieldTextInput(array(
            "name" => "FullName",
            "enabled" => true,
            "calculate_on_exit" => true,
            "status_text" => "",
            "text_input_type" => FormFieldTextInput::TEXT_INPUT_TYPE_REGULAR,
            "text_input_default" => "123",
            "text_input_format" => "UPPERCASE"
        ));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertFormFieldRequest($remoteName, $body, "sections/0/paragraphs/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null);

        $result = $this->words->insertFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteFormField
     *
     * Removes form field from document..
     *
     */
    public function testDeleteFormField()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestDeleteFormField.docx";
        $subfolder = "DocumentElements/FormField";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/FormFields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteFormFieldRequest($remoteName, $index, "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null, null, null);

        $result = $this->words->deleteFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getFormField
     *
     * Returns representation of an one of the form field..
     *
     */
    public function testGetFormField()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestGetFormField.docx";
        $subfolder = "DocumentElements/FormField";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/FormFields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFormFieldRequest($remoteName, $index, "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getFormFields
     *
     * Get form fields from document..
     *
     */
    public function testGetFormFields()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestGetFormFields.docx";
        $subfolder = "DocumentElements/FormField";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/FormFields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFormFieldsRequest($remoteName, "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFormFields($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}