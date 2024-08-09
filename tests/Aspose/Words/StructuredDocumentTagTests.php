<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StructuredDocumentTagTests.php">
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
use Aspose\Words\Model\Requests\{DeleteStructuredDocumentTagOnlineRequest, DeleteStructuredDocumentTagRequest, GetStructuredDocumentTagOnlineRequest, GetStructuredDocumentTagRequest, GetStructuredDocumentTagsOnlineRequest, GetStructuredDocumentTagsRequest, InsertStructuredDocumentTagOnlineRequest, InsertStructuredDocumentTagRequest, UpdateStructuredDocumentTagOnlineRequest, UpdateStructuredDocumentTagRequest};
use Aspose\Words\Model\{StructuredDocumentTagInsert, StructuredDocumentTagListItem, StructuredDocumentTagUpdate};
use PHPUnit\Framework\Assert;

/*
 * Example of how to use structured document tags.
 */
class StructuredDocumentTagTests extends BaseTestContext
{
    /*
     * Test for getting SDT objects from document.
     */
    public function testGetStructuredDocumentTags()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/StructuredDocumentTag";
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";
        $remoteFileName = "TestGetStructuredDocumentTags.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetStructuredDocumentTagsRequest(
            $remoteFileName,
            "sections/0/body/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getStructuredDocumentTags($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting SDT objects from document online.
     */
    public function testGetStructuredDocumentTagsOnline()
    {
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetStructuredDocumentTagsOnlineRequest(
            $requestDocument,
            "sections/0/body/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getStructuredDocumentTagsOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting SDT object from document.
     */
    public function testGetStructuredDocumentTag()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/StructuredDocumentTag";
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";
        $remoteFileName = "TestGetStructuredDocumentTag.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetStructuredDocumentTagRequest(
            $remoteFileName,
            0,
            "sections/0/body/paragraphs/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getStructuredDocumentTag($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting SDT object from document online.
     */
    public function testGetStructuredDocumentTagOnline()
    {
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetStructuredDocumentTagOnlineRequest(
            $requestDocument,
            0,
            "sections/0/body/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getStructuredDocumentTagOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding SDT object.
     */
    public function testInsertStructuredDocumentTag()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/StructuredDocumentTag";
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";
        $remoteFileName = "TestInsetStructuredDocumentTag.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestStructuredDocumentTag = new StructuredDocumentTagInsert(array(
            "sdt_type" => "ComboBox",
            "level" => "Inline",
        ));
        $request = new InsertStructuredDocumentTagRequest(
            $remoteFileName,
            $requestStructuredDocumentTag,
            "sections/0/body/paragraphs/0",
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

        $result = $this->words->insertStructuredDocumentTag($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding SDT object online.
     */
    public function testInsertStructuredDocumentTagOnline()
    {
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestStructuredDocumentTag = new StructuredDocumentTagInsert(array(
            "sdt_type" => "ComboBox",
            "level" => "Inline",
        ));
        $request = new InsertStructuredDocumentTagOnlineRequest(
            $requestDocument,
            $requestStructuredDocumentTag,
            "sections/0/body/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertStructuredDocumentTagOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for deleting SDT object.
     */
    public function testDeleteStructuredDocumentTag()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/StructuredDocumentTag";
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";
        $remoteFileName = "TestDeleteStructuredDocumentTag.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteStructuredDocumentTagRequest(
            $remoteFileName,
            0,
            "sections/0/body/paragraphs/0",
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

        Assert::assertNull($this->words->deleteStructuredDocumentTag($request));
    }

    /*
     * Test for deleting SDT object online.
     */
    public function testDeleteStructuredDocumentTagOnline()
    {
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteStructuredDocumentTagOnlineRequest(
            $requestDocument,
            0,
            "sections/0/body/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteStructuredDocumentTagOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for updating SDT object.
     */
    public function testUpdateStructuredDocumentTag()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/StructuredDocumentTag";
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";
        $remoteFileName = "TestUpdateStructuredDocumentTag.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestStructuredDocumentTagListItems0 = new StructuredDocumentTagListItem(array(
            "display_text" => "Aspose Words",
            "value" => "1",
        ));
        $requestStructuredDocumentTagListItems1 = new StructuredDocumentTagListItem(array(
            "display_text" => "Hello world",
            "value" => "2",
        ));
        $requestStructuredDocumentTagListItems = [
            $requestStructuredDocumentTagListItems0,
            $requestStructuredDocumentTagListItems1,
        ];
        $requestStructuredDocumentTag = new StructuredDocumentTagUpdate(array(
            "list_items" => $requestStructuredDocumentTagListItems,
        ));
        $request = new UpdateStructuredDocumentTagRequest(
            $remoteFileName,
            0,
            $requestStructuredDocumentTag,
            "sections/0/body/paragraphs/0",
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

        $result = $this->words->updateStructuredDocumentTag($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating SDT object online.
     */
    public function testUpdateStructuredDocumentTagOnline()
    {
        $localFile = "DocumentElements/StructuredDocumentTag/StructuredDocumentTag.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestStructuredDocumentTagListItems0 = new StructuredDocumentTagListItem(array(
            "display_text" => "Aspose Words",
            "value" => "1",
        ));
        $requestStructuredDocumentTagListItems1 = new StructuredDocumentTagListItem(array(
            "display_text" => "Hello world",
            "value" => "2",
        ));
        $requestStructuredDocumentTagListItems = [
            $requestStructuredDocumentTagListItems0,
            $requestStructuredDocumentTagListItems1,
        ];
        $requestStructuredDocumentTag = new StructuredDocumentTagUpdate(array(
            "list_items" => $requestStructuredDocumentTagListItems,
        ));
        $request = new UpdateStructuredDocumentTagOnlineRequest(
            $requestDocument,
            $requestStructuredDocumentTag,
            0,
            "sections/0/body/paragraphs/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateStructuredDocumentTagOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}