<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="FiledTests.php">
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
use Aspose\Words\Model\Field;
use Aspose\Words\Model\PageNumber;
use PHPUnit\Framework\Assert;

class FieldTests extends \BaseTest\BaseTestContext
{
    /**
     * Test case for getFields
     *
     * Get fields from document..
     *
     */
    public function testGetFields()
    {
        $localName = "GetField.docx";
        $remoteName = "TestGetFields.docx";
        $subfolder = "DocumentElements/Field";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Fields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFieldsRequest($remoteName, "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getFields($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getField
     *
     * Get field from document..
     *
     */
    public function testGetField()
    {
        $localName = "GetField.docx";
        $remoteName = "TestGetField.docx";
        $subfolder = "DocumentElements/Field";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Fields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetFieldRequest($remoteName, $index, "sections/0/paragraphs/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for postField
     *
     * Updates field's properties, returns updated field's data..
     *
     */
    public function testPostField()
    {
        $localName = "GetField.docx";
        $remoteName = "TestPostField.docx";
        $subfolder = "DocumentElements/Field";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $destName = self::$baseTestOut . $remoteName;
        $body = new Field(array("result" => 3, "field_code" => "{ NUMPAGES }", "node_id" => "0.0.3"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Fields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateFieldRequest($remoteName, $body, $index, "sections/0/paragraphs/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName,
            null, null);

        $result = $this->words->updateField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for putField
     *
     * Adds field to document, returns inserted field's data..
     *
     */
    public function testPutField()
    {
        $localName = "GetField.docx";
        $remoteName = "TestPutField.docx";
        $subfolder = "DocumentElements/Field";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $body = new Field(array("result" => 3, "field_code" => "{ NUMPAGES }", "node_id" => "0.0.3"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Fields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertFieldRequest($remoteName, $body, "sections/0/paragraphs/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->insertField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for postUpdateDocumentFields
     *
     * Update (reevaluate) fields in document..
     *
     */
    public function testPostUpdateDocumentFields()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostUpdateDocumentFields.docx";
        $subfolder = "DocumentElements/Field";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateFieldsRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->updateFields($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for postInsertPageNumbers
     *
     * Insert document page numbers..
     *
     */
    public function testPostInsertPageNumbers()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostInsertPageNumbers.docx";
        $subfolder = "DocumentElements/Field";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $destName = self::$baseTestOut . $remoteName;
        $body = new PageNumber(array("alignment" => "center", "format" => "{PAGE} of {NUMPAGES}"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $putRequest = new Aspose\Storage\Model\Requests\PutCreateRequest($fullName, $file);
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertPageNumbersRequest($remoteName, $body, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->insertPageNumbers($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteField
     *
     * Delete field from document..
     *
     */
    public function testDeleteField()
    {
        $localName = "GetField.docx";
        $remoteName = "TestDeleteField.docx";
        $subfolder = "DocumentElements/Field";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $fieldIndex = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Fields/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteFieldRequest($remoteName,
            $fieldIndex,"sections/0/paragraphs/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteField($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteFields
     *
     * Remove fields from section paragraph..
     *
     */
    public function testDeleteFields()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDeleteDocumentFields.docx";
        $subfolder = "DocumentElements/Field";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteFieldsRequest($remoteName, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteFields($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}