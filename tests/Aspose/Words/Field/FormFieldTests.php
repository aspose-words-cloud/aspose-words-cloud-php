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
use Aspose\Storage\StorageApi;
use Aspose\Words\Configuration;
use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests;
use Aspose\Words\Model\FormFieldTextInput;
use PHPUnit\Framework\Assert;

class FormFieldTests extends \PHPUnit_Framework_TestCase
{
    protected $words;

    protected $storage;

    protected $config;
    protected static $baseTestPath = "Temp/SdkTests/TestData/";
    protected static $baseTestOut = "TestOut/";

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->storage = new StorageApi();
        $this->config = new Configuration();
        $this->storage->apiClient->apiKey = $this->config->getAppKey();
        $this->storage->apiClient->appSid = $this->config->getAppSid();
        $this->storage->apiClient->apiServer = $this->config->getHost() . "/v1.1/";
        $this->words = new WordsApi(null, $this->config);
    }

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

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Field/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PostFormFieldRequest($remoteName, $body, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null, "sections/0");

        $result = $this->words->postFormField($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
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
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\PutFormFieldRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null, "sections/0/paragraphs/0");

        $result = $this->words->putFormField($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
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

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Field/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\DeleteFormFieldRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null, null, null, "sections/0");

        $result = $this->words->deleteFormField($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
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

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Field/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetFormFieldRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "sections/0");

        $result = $this->words->getFormField($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
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

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Field/' . $localName;
        $this->storage->PutCreate($Path=$fullName, $versionId = null, $storage = null, $file);

        $request = new Requests\GetFormFieldsRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null, "sections/0");

        $result = $this->words->getFormFields($request);
        Assert::assertEquals(200, json_decode($result, true)["Code"]);
    }
}