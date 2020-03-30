<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DocumentPropertiesTests.php">
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
use Aspose\Words\Model\DocumentPropertyCreateOrUpdate;
use PHPUnit\Framework\Assert;

class DocumentPropertiesTests extends BaseTestContext
{
    /**
     * Test case for createOrUpdateDocumentProperty
     *
     * Add new or update existing document property..
     *
     */
    public function testCreateOrUpdateDocumentProperty()
    {
        $localName = "test_doc.docx";
        $remoteName = "TestPutUpdateDocumentProperty.docx";
        $subfolder = "DocumentElements/DocumentProperties";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $propertyName = "AsposeAuthor";
        $property = new DocumentPropertyCreateOrUpdate(array("value" => "Imran Anwar"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\CreateOrUpdateDocumentPropertyRequest($remoteName, $propertyName, $property, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->createOrUpdateDocumentProperty($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteDocumentProperty
     *
     * Delete document property..
     *
     */
    public function testDeleteDocumentProperty()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDeleteDocumentProperty.docx";
        $subfolder = "DocumentElements/DocumentProperties";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $propertyName = "testProp";
        $destName = self::$baseTestOut . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteDocumentPropertyRequest($remoteName, $propertyName, $folder=self::$baseTestPath . $subfolder, null, null, null, $destName);

        $result = $this->words->deleteDocumentProperty($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentProperties
     *
     * Read document properties info..
     *
     */
    public function testGetDocumentProperties()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentProperties.docx";
        $subfolder = "DocumentElements/DocumentProperties";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentPropertiesRequest($remoteName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentProperties($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentProperty
     *
     * Read document property info by the property name..
     *
     */
    public function testGetDocumentProperty()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentProperty.docx";
        $subfolder = "DocumentElements/DocumentProperties";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $propertyName = "Author";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentPropertyRequest($remoteName, $propertyName, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->getDocumentProperty($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}