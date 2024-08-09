<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CustomXmlPartsTests.php">
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
use Aspose\Words\Model\Requests\{DeleteCustomXmlPartOnlineRequest, DeleteCustomXmlPartRequest, DeleteCustomXmlPartsOnlineRequest, DeleteCustomXmlPartsRequest, GetCustomXmlPartOnlineRequest, GetCustomXmlPartRequest, GetCustomXmlPartsOnlineRequest, GetCustomXmlPartsRequest, InsertCustomXmlPartOnlineRequest, InsertCustomXmlPartRequest, UpdateCustomXmlPartOnlineRequest, UpdateCustomXmlPartRequest};
use Aspose\Words\Model\{CustomXmlPartInsert, CustomXmlPartUpdate};
use PHPUnit\Framework\Assert;

/*
 * Example of how to use custom xml parts in documents.
 */
class CustomXmlPartsTests extends BaseTestContext
{
    /*
     * Test for getting custom xml part by specified index.
     */
    public function testGetCustomXmlPart()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/CustomXmlParts";
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";
        $remoteFileName = "TestGetCustomXmlPart.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetCustomXmlPartRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getCustomXmlPart($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCustomXmlPart());
        Assert::assertEquals("aspose", $result->getCustomXmlPart()->getId());
        Assert::assertEquals("<Metadata><Author>author1</Author><Initial>initial</Initial><DateTime>2015-01-22T00:00:00</DateTime><Text>text</Text></Metadata>", $result->getCustomXmlPart()->getData());
    }

    /*
     * Test for getting custom xml part by specified index online.
     */
    public function testGetCustomXmlPartOnline()
    {
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetCustomXmlPartOnlineRequest(
            $requestDocument,
            0,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getCustomXmlPartOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCustomXmlPart());
        Assert::assertEquals("aspose", $result->getCustomXmlPart()->getId());
        Assert::assertEquals("<Metadata><Author>author1</Author><Initial>initial</Initial><DateTime>2015-01-22T00:00:00</DateTime><Text>text</Text></Metadata>", $result->getCustomXmlPart()->getData());
    }

    /*
     * Test for getting all custom xml parts from document.
     */
    public function testGetCustomXmlParts()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/CustomXmlParts";
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";
        $remoteFileName = "TestGetCustomXmlParts.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetCustomXmlPartsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getCustomXmlParts($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCustomXmlParts());
        Assert::assertNotNull($result->getCustomXmlParts()->getCustomXmlPartsList());
        Assert::assertCount(2, $result->getCustomXmlParts()->getCustomXmlPartsList());
        Assert::assertEquals("aspose", $result->getCustomXmlParts()->getCustomXmlPartsList()[0]->getId());
        Assert::assertEquals("<Metadata><Author>author1</Author><Initial>initial</Initial><DateTime>2015-01-22T00:00:00</DateTime><Text>text</Text></Metadata>", $result->getCustomXmlParts()->getCustomXmlPartsList()[0]->getData());
    }

    /*
     * Test for getting all custom xml parts from document online.
     */
    public function testGetCustomXmlPartsOnline()
    {
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetCustomXmlPartsOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getCustomXmlPartsOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCustomXmlParts());
        Assert::assertNotNull($result->getCustomXmlParts()->getCustomXmlPartsList());
        Assert::assertCount(2, $result->getCustomXmlParts()->getCustomXmlPartsList());
        Assert::assertEquals("aspose", $result->getCustomXmlParts()->getCustomXmlPartsList()[0]->getId());
        Assert::assertEquals("<Metadata><Author>author1</Author><Initial>initial</Initial><DateTime>2015-01-22T00:00:00</DateTime><Text>text</Text></Metadata>", $result->getCustomXmlParts()->getCustomXmlPartsList()[0]->getData());
    }

    /*
     * Test for adding custom xml part.
     */
    public function testInsertCustomXmlPart()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/CustomXmlParts";
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";
        $remoteFileName = "TestInsertCustomXmlPart.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCustomXmlPart = new CustomXmlPartInsert(array(
            "id" => "hello",
            "data" => "<data>Hello world</data>",
        ));
        $request = new InsertCustomXmlPartRequest(
            $remoteFileName,
            $requestCustomXmlPart,
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

        $result = $this->words->insertCustomXmlPart($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCustomXmlPart());
        Assert::assertEquals("hello", $result->getCustomXmlPart()->getId());
        Assert::assertEquals("<data>Hello world</data>", $result->getCustomXmlPart()->getData());
    }

    /*
     * Test for adding custom xml part online.
     */
    public function testInsertCustomXmlPartOnline()
    {
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestCustomXmlPart = new CustomXmlPartInsert(array(
            "id" => "hello",
            "data" => "<data>Hello world</data>",
        ));
        $request = new InsertCustomXmlPartOnlineRequest(
            $requestDocument,
            $requestCustomXmlPart,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertCustomXmlPartOnline($request);
        Assert::assertTrue($result !== NULL);
        Assert::assertNotNull($result->getModel()->getCustomXmlPart());
        Assert::assertEquals("hello", $result->getModel()->getCustomXmlPart()->getId());
        Assert::assertEquals("<data>Hello world</data>", $result->getModel()->getCustomXmlPart()->getData());
    }

    /*
     * Test for updating custom xml part.
     */
    public function testUpdateCustomXmlPart()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/CustomXmlParts";
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";
        $remoteFileName = "TestUpdateCustomXmlPart.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestCustomXmlPart = new CustomXmlPartUpdate(array(
            "data" => "<data>Hello world</data>",
        ));
        $request = new UpdateCustomXmlPartRequest(
            $remoteFileName,
            0,
            $requestCustomXmlPart,
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

        $result = $this->words->updateCustomXmlPart($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getCustomXmlPart());
        Assert::assertEquals("aspose", $result->getCustomXmlPart()->getId());
        Assert::assertEquals("<data>Hello world</data>", $result->getCustomXmlPart()->getData());
    }

    /*
     * Test for updating custom xml part online.
     */
    public function testUpdateCustomXmlPartOnline()
    {
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestCustomXmlPart = new CustomXmlPartUpdate(array(
            "data" => "<data>Hello world</data>",
        ));
        $request = new UpdateCustomXmlPartOnlineRequest(
            $requestDocument,
            0,
            $requestCustomXmlPart,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateCustomXmlPartOnline($request);
        Assert::assertTrue($result !== NULL);
        Assert::assertNotNull($result->getModel()->getCustomXmlPart());
        Assert::assertEquals("aspose", $result->getModel()->getCustomXmlPart()->getId());
        Assert::assertEquals("<data>Hello world</data>", $result->getModel()->getCustomXmlPart()->getData());
    }

    /*
     * A test for DeleteCustomXmlPart.
     */
    public function testDeleteCustomXmlPart()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/CustomXmlParts";
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";
        $remoteFileName = "TestDeleteCustomXmlPart.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteCustomXmlPartRequest(
            $remoteFileName,
            0,
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

        Assert::assertNull($this->words->deleteCustomXmlPart($request));
    }

    /*
     * A test for DeleteCustomXmlPart online.
     */
    public function testDeleteCustomXmlPartOnline()
    {
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteCustomXmlPartOnlineRequest(
            $requestDocument,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteCustomXmlPartOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * A test for DeleteCustomXmlParts.
     */
    public function testDeleteCustomXmlParts()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/CustomXmlParts";
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";
        $remoteFileName = "TestDeleteCustomXmlPart.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteCustomXmlPartsRequest(
            $remoteFileName,
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

        Assert::assertNull($this->words->deleteCustomXmlParts($request));
    }

    /*
     * A test for DeleteCustomXmlParts online.
     */
    public function testDeleteCustomXmlPartsOnline()
    {
        $localFile = "DocumentElements/CustomXmlParts/MultipleCustomXmlParts.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteCustomXmlPartsOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteCustomXmlPartsOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}