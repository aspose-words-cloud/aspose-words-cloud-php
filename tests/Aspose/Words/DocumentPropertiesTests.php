<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DocumentPropertiesTests.php">
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
use Aspose\Words\Model\Requests\{CreateOrUpdateDocumentPropertyOnlineRequest, CreateOrUpdateDocumentPropertyRequest, DeleteDocumentPropertyOnlineRequest, DeleteDocumentPropertyRequest, GetDocumentPropertiesOnlineRequest, GetDocumentPropertiesRequest, GetDocumentPropertyOnlineRequest, GetDocumentPropertyRequest};
use Aspose\Words\Model\{DocumentPropertyCreateOrUpdate};
use PHPUnit\Framework\Assert;

/*
 * Example of how to get document properties.
 */
class DocumentPropertiesTests extends BaseTestContext
{
    /*
     * Test for getting document properties.
     */
    public function testGetDocumentProperties()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProperties";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentProperties.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentPropertiesRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentProperties($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocumentProperties());
        Assert::assertNotNull($result->getDocumentProperties()->getList());
        Assert::assertCount(27, $result->getDocumentProperties()->getList());
        Assert::assertNotNull($result->getDocumentProperties()->getList()[0]);
        Assert::assertEquals("Author", $result->getDocumentProperties()->getList()[0]->getName());
        Assert::assertEquals("", $result->getDocumentProperties()->getList()[0]->getValue());
    }

    /*
     * Test for getting document properties online.
     */
    public function testGetDocumentPropertiesOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetDocumentPropertiesOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentPropertiesOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * A test for GetDocumentProperty.
     */
    public function testGetDocumentProperty()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProperties";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentProperty.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentPropertyRequest(
            $remoteFileName,
            "Author",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentProperty($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocumentProperty());
        Assert::assertEquals("Author", $result->getDocumentProperty()->getName());
        Assert::assertEquals("", $result->getDocumentProperty()->getValue());
    }

    /*
     * A test for GetDocumentProperty online.
     */
    public function testGetDocumentPropertyOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetDocumentPropertyOnlineRequest(
            $requestDocument,
            "Author",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentPropertyOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting document property.
     */
    public function testDeleteDocumentProperty()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProperties";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteDocumentProperty.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteDocumentPropertyRequest(
            $remoteFileName,
            "testProp",
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

        Assert::assertNull($this->words->deleteDocumentProperty($request));
    }

    /*
     * Test for deleting document property online.
     */
    public function testDeleteDocumentPropertyOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteDocumentPropertyOnlineRequest(
            $requestDocument,
            "testProp",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteDocumentPropertyOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for updating document property.
     */
    public function testUpdateDocumentProperty()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProperties";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateDocumentProperty.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProperty = new DocumentPropertyCreateOrUpdate(array(
            "value" => "Imran Anwar",
        ));
        $request = new CreateOrUpdateDocumentPropertyRequest(
            $remoteFileName,
            "AsposeAuthor",
            $requestProperty,
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

        $result = $this->words->createOrUpdateDocumentProperty($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocumentProperty());
        Assert::assertEquals("AsposeAuthor", $result->getDocumentProperty()->getName());
        Assert::assertEquals("Imran Anwar", $result->getDocumentProperty()->getValue());
    }

    /*
     * Test for updating document property online.
     */
    public function testUpdateDocumentPropertyOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestProperty = new DocumentPropertyCreateOrUpdate(array(
            "value" => "Imran Anwar",
        ));
        $request = new CreateOrUpdateDocumentPropertyOnlineRequest(
            $requestDocument,
            "AsposeAuthor",
            $requestProperty,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->createOrUpdateDocumentPropertyOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}