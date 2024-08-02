<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DrawingObjectsTests.php">
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
use Aspose\Words\Model\Requests\{DeleteDrawingObjectOnlineRequest, DeleteDrawingObjectRequest, GetDocumentDrawingObjectByIndexOnlineRequest, GetDocumentDrawingObjectByIndexRequest, GetDocumentDrawingObjectImageDataOnlineRequest, GetDocumentDrawingObjectImageDataRequest, GetDocumentDrawingObjectOleDataOnlineRequest, GetDocumentDrawingObjectOleDataRequest, GetDocumentDrawingObjectsOnlineRequest, GetDocumentDrawingObjectsRequest, InsertDrawingObjectOnlineRequest, InsertDrawingObjectRequest, RenderDrawingObjectOnlineRequest, RenderDrawingObjectRequest, UpdateDrawingObjectOnlineRequest, UpdateDrawingObjectRequest};
use Aspose\Words\Model\{DrawingObjectInsert, DrawingObjectUpdate};
use PHPUnit\Framework\Assert;

/*
 * Example of how to get drawing objects.
 */
class DrawingObjectsTests extends BaseTestContext
{
    /*
     * Test for getting drawing objects from document.
     */
    public function testGetDocumentDrawingObjects()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentDrawingObjects.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentDrawingObjectsRequest(
            $remoteFileName,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjects($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing objects from document online.
     */
    public function testGetDocumentDrawingObjectsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetDocumentDrawingObjectsOnlineRequest(
            $requestDocument,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectsOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing objects from document without node path.
     */
    public function testGetDocumentDrawingObjectsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentDrawingObjectsRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjects($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing object by specified index.
     */
    public function testGetDocumentDrawingObjectByIndex()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectByIndex.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentDrawingObjectByIndexRequest(
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

        $result = $this->words->getDocumentDrawingObjectByIndex($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing object by specified index online.
     */
    public function testGetDocumentDrawingObjectByIndexOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetDocumentDrawingObjectByIndexOnlineRequest(
            $requestDocument,
            0,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectByIndexOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing object by specified index without node path.
     */
    public function testGetDocumentDrawingObjectByIndexWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectByIndexWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentDrawingObjectByIndexRequest(
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

        $result = $this->words->getDocumentDrawingObjectByIndex($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing object by specified index and format.
     */
    public function testRenderDrawingObject()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectByIndexWithFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new RenderDrawingObjectRequest(
            $remoteFileName,
            "png",
            0,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderDrawingObject($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting drawing object by specified index and format online.
     */
    public function testRenderDrawingObjectOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new RenderDrawingObjectOnlineRequest(
            $requestDocument,
            "png",
            0,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderDrawingObjectOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting drawing object by specified index and format without node path.
     */
    public function testRenderDrawingObjectWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectByIndexWithFormatWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new RenderDrawingObjectRequest(
            $remoteFileName,
            "png",
            0,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderDrawingObject($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for reading drawing object's image data.
     */
    public function testGetDocumentDrawingObjectImageData()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectImageData.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentDrawingObjectImageDataRequest(
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

        $result = $this->words->getDocumentDrawingObjectImageData($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for reading drawing object's image data online.
     */
    public function testGetDocumentDrawingObjectImageDataOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetDocumentDrawingObjectImageDataOnlineRequest(
            $requestDocument,
            0,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectImageDataOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for reading drawing object's image data without node path.
     */
    public function testGetDocumentDrawingObjectImageDataWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectImageDataWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentDrawingObjectImageDataRequest(
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

        $result = $this->words->getDocumentDrawingObjectImageData($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting drawing object OLE data.
     */
    public function testGetDocumentDrawingObjectOleData()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localDrawingFile = "DocumentElements/DrawingObjects/sample_EmbeddedOLE.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectOleData.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localDrawingFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentDrawingObjectOleDataRequest(
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

        $result = $this->words->getDocumentDrawingObjectOleData($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting drawing object OLE data online.
     */
    public function testGetDocumentDrawingObjectOleDataOnline()
    {
        $localDrawingFile = "DocumentElements/DrawingObjects/sample_EmbeddedOLE.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localDrawingFile;
        $request = new GetDocumentDrawingObjectOleDataOnlineRequest(
            $requestDocument,
            0,
            "sections/0",
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectOleDataOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting drawing object OLE data without node path.
     */
    public function testGetDocumentDrawingObjectOleDataWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localDrawingFile = "DocumentElements/DrawingObjects/sample_EmbeddedOLE.docx";
        $remoteFileName = "TestGetDocumentDrawingObjectOleDataWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localDrawingFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentDrawingObjectOleDataRequest(
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

        $result = $this->words->getDocumentDrawingObjectOleData($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for adding drawing object.
     */
    public function testInsertDrawingObject()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsetDrawingObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDrawingObject = new DrawingObjectInsert(array(
            "height" => 0,
            "left" => 0,
            "top" => 0,
            "width" => 0,
            "relative_horizontal_position" => "Margin",
            "relative_vertical_position" => "Margin",
            "wrap_type" => "Inline",
        ));
        $requestImageFile = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/aspose-cloud.png";
        $request = new InsertDrawingObjectRequest(
            $remoteFileName,
            $requestDrawingObject,
            $requestImageFile,
            "",
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

        $result = $this->words->insertDrawingObject($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding drawing object online.
     */
    public function testInsertDrawingObjectOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestDrawingObject = new DrawingObjectInsert(array(
            "height" => 0,
            "left" => 0,
            "top" => 0,
            "width" => 0,
            "relative_horizontal_position" => "Margin",
            "relative_vertical_position" => "Margin",
            "wrap_type" => "Inline",
        ));
        $requestImageFile = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/aspose-cloud.png";
        $request = new InsertDrawingObjectOnlineRequest(
            $requestDocument,
            $requestDrawingObject,
            $requestImageFile,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertDrawingObjectOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for adding drawing object without node path.
     */
    public function testInsertDrawingObjectWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsetDrawingObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDrawingObject = new DrawingObjectInsert(array(
            "height" => 0,
            "left" => 0,
            "top" => 0,
            "width" => 0,
            "relative_horizontal_position" => "Margin",
            "relative_vertical_position" => "Margin",
            "wrap_type" => "Inline",
        ));
        $requestImageFile = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/aspose-cloud.png";
        $request = new InsertDrawingObjectRequest(
            $remoteFileName,
            $requestDrawingObject,
            $requestImageFile,
            NULL,
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

        $result = $this->words->insertDrawingObject($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting drawing object.
     */
    public function testDeleteDrawingObject()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteDrawingObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteDrawingObjectRequest(
            $remoteFileName,
            0,
            "",
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

        Assert::assertNull($this->words->deleteDrawingObject($request));
    }

    /*
     * Test for deleting drawing object online.
     */
    public function testDeleteDrawingObjectOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteDrawingObjectOnlineRequest(
            $requestDocument,
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteDrawingObjectOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for deleting drawing object without node path.
     */
    public function testDeleteDrawingObjectWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteDrawingObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteDrawingObjectRequest(
            $remoteFileName,
            0,
            NULL,
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

        Assert::assertNull($this->words->deleteDrawingObject($request));
    }

    /*
     * Test for updating drawing object.
     */
    public function testUpdateDrawingObject()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateDrawingObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDrawingObject = new DrawingObjectUpdate(array(
            "left" => 0,
        ));
        $requestImageFile = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/aspose-cloud.png";
        $request = new UpdateDrawingObjectRequest(
            $remoteFileName,
            $requestDrawingObject,
            $requestImageFile,
            0,
            "",
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

        $result = $this->words->updateDrawingObject($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating drawing object online.
     */
    public function testUpdateDrawingObjectOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestDrawingObject = new DrawingObjectUpdate(array(
            "left" => 0,
        ));
        $requestImageFile = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/aspose-cloud.png";
        $request = new UpdateDrawingObjectOnlineRequest(
            $requestDocument,
            $requestDrawingObject,
            $requestImageFile,
            0,
            "",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateDrawingObjectOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for updating drawing object without node path.
     */
    public function testUpdateDrawingObjectWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DrawingObjectss";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateDrawingObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDrawingObject = new DrawingObjectUpdate(array(
            "left" => 0,
        ));
        $requestImageFile = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/aspose-cloud.png";
        $request = new UpdateDrawingObjectRequest(
            $remoteFileName,
            $requestDrawingObject,
            $requestImageFile,
            0,
            NULL,
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

        $result = $this->words->updateDrawingObject($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }
}