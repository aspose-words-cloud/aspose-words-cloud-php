<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="FormFieldTests.php">
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
use Aspose\Words\Model\FormFieldTextInput;
use PHPUnit\Framework\Assert;

class FormFieldTests extends BaseTestContext
{
    /**
     * Test case for updateFormField
     *
     * Updates properties of form field, returns updated form field..
     *
     */
    public function testUpdateFormField()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestUpdateFormField.docx";
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

        $request = new Requests\UpdateFormFieldRequest($remoteName, $body, "sections/0", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null);

        $result = $this->words->updateFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for updateFormFieldWithoutNodePath
     *
     * Updates properties of form field, returns updated form field..
     *
     */
    public function testUpdateFormFieldWithoutNodePath()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestUpdateFormFieldWithoutNodePath.docx";
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

        $request = new Requests\UpdateFormFieldWithoutNodePathRequest($remoteName, $body, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null);

        $result = $this->words->updateFormFieldWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for insertFormField
     *
     * Adds form field to paragraph, returns added form field's data..
     *
     */
    public function testInsertFormField()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestInsertFormField.docx";
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
     * Test case for insertFormFieldWithoutNodePath
     *
     * Adds form field to paragraph, returns added form field's data..
     *
     */
    public function testInsertFormFieldWithoutNodePath()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestInsertFormFieldWithoutNodePath.docx";
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

        $request = new Requests\InsertFormFieldWithoutNodePathRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null);

        $result = $this->words->insertFormFieldWithoutNodePath($request);
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

        $request = new Requests\DeleteFormFieldRequest($remoteName, "sections/0", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null, null, null);

        $result = $this->words->deleteFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteFormFieldWithoutNodePath
     *
     * Removes form field from document..
     *
     */
    public function testDeleteFormFieldWithoutNodePath()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestDeleteFormFieldWithoutNodePath.docx";
        $subfolder = "DocumentElements/FormField";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/FormFields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteFormFieldWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null, null, null);

        $result = $this->words->deleteFormFieldWithoutNodePath($request);
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

        $request = new Requests\GetFormFieldRequest($remoteName,"sections/0", $index,  $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFormField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getFormFieldWithoutNodePath
     *
     * Returns representation of an one of the form field..
     *
     */
    public function testGetFormFieldWithoutNodePath()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestGetFormFieldWithoutNodePath.docx";
        $subfolder = "DocumentElements/FormField";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/FormFields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFormFieldWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFormFieldWithoutNodePath($request);
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

    /**
     * Test case for getFormFieldsWithoutNodePath
     *
     * Get form fields from document..
     *
     */
    public function testGetFormFieldsWithoutNodePath()
    {
        $localName = "FormFilled.docx";
        $remoteName = "TestGetFormFieldsWithoutNodePath.docx";
        $subfolder = "DocumentElements/FormField";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/FormFields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFormFieldsWithoutNodePathRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFormFieldsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}