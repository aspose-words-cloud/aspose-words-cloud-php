<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DrawingObjectsTests.php">
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
 * Example of how to get drawing objects.
 */
class DrawingObjectsTests extends BaseTestContext
{
    private static $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/DrawingObjectss";
    private static $localFile = "Common/test_multi_pages.docx";
    private static $localDrawingFile = "DocumentElements/DrawingObjects/sample_EmbeddedOLE.docx";

    /*
     * Test for getting drawing objects from document.
     */
    public function testGetDocumentDrawingObjects()
    {
        $remoteFileName = "TestGetDocumentDrawingObjects.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentDrawingObjectsRequest(
            $remoteFileName,
            "sections/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjects($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing objects from document without node path.
     */
    public function testGetDocumentDrawingObjectsWithoutNodePath()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentDrawingObjectsWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing object by specified index.
     */
    public function testGetDocumentDrawingObjectByIndex()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectByIndex.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentDrawingObjectByIndexRequest(
            $remoteFileName,
            "sections/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectByIndex($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing object by specified index without node path.
     */
    public function testGetDocumentDrawingObjectByIndexWithoutNodePath()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectByIndexWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentDrawingObjectByIndexWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectByIndexWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting drawing object by specified index and format.
     */
    public function testRenderDrawingObject()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectByIndexWithFormat.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderDrawingObjectRequest(
            $remoteFileName,
            "png",
            "sections/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderDrawingObject($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting drawing object by specified index and format without node path.
     */
    public function testRenderDrawingObjectWithoutNodePath()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectByIndexWithFormatWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderDrawingObjectWithoutNodePathRequest(
            $remoteFileName,
            "png",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderDrawingObjectWithoutNodePath($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for reading drawing object's image data.
     */
    public function testGetDocumentDrawingObjectImageData()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectImageData.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentDrawingObjectImageDataRequest(
            $remoteFileName,
            "sections/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectImageData($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for reading drawing object's image data without node path.
     */
    public function testGetDocumentDrawingObjectImageDataWithoutNodePath()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectImageDataWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentDrawingObjectImageDataWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectImageDataWithoutNodePath($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting drawing object OLE data.
     */
    public function testGetDocumentDrawingObjectOleData()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectOleData.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localDrawingFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentDrawingObjectOleDataRequest(
            $remoteFileName,
            "sections/0",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectOleData($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for getting drawing object OLE data without node path.
     */
    public function testGetDocumentDrawingObjectOleDataWithoutNodePath()
    {
        $remoteFileName = "TestGetDocumentDrawingObjectOleDataWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localDrawingFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentDrawingObjectOleDataWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentDrawingObjectOleDataWithoutNodePath($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for adding drawing object.
     */
    public function testInsertDrawingObject()
    {
        $remoteFileName = "TestInsetDrawingObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDrawingObject = new \Aspose\Words\Model\DrawingObjectInsert(array(
            "left" => 0,
        ));
        $request = new Requests\InsertDrawingObjectRequest(
            $remoteFileName,
            $requestDrawingObject,
            realpath(__DIR__ . '/../../../../..') . "Common/aspose-cloud.png",
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertDrawingObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding drawing object without node path.
     */
    public function testInsertDrawingObjectWithoutNodePath()
    {
        $remoteFileName = "TestInsetDrawingObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDrawingObject = new \Aspose\Words\Model\DrawingObjectInsert(array(
            "left" => 0,
        ));
        $request = new Requests\InsertDrawingObjectWithoutNodePathRequest(
            $remoteFileName,
            $requestDrawingObject,
            realpath(__DIR__ . '/../../../../..') . "Common/aspose-cloud.png",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertDrawingObjectWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting drawing object.
     */
    public function testDeleteDrawingObject()
    {
        $remoteFileName = "TestDeleteDrawingObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteDrawingObjectRequest(
            $remoteFileName,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteDrawingObject($request);
    }

    /*
     * Test for deleting drawing object without node path.
     */
    public function testDeleteDrawingObjectWithoutNodePath()
    {
        $remoteFileName = "TestDeleteDrawingObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteDrawingObjectWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

    $this->words->deleteDrawingObjectWithoutNodePath($request);
    }

    /*
     * Test for updating drawing object.
     */
    public function testUpdateDrawingObject()
    {
        $remoteFileName = "TestUpdateDrawingObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDrawingObject = new \Aspose\Words\Model\DrawingObjectUpdate(array(
            "left" => 0,
        ));
        $request = new Requests\UpdateDrawingObjectRequest(
            $remoteFileName,
            $requestDrawingObject,
            realpath(__DIR__ . '/../../../../..') . "Common/aspose-cloud.png",
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateDrawingObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating drawing object without node path.
     */
    public function testUpdateDrawingObjectWithoutNodePath()
    {
        $remoteFileName = "TestUpdateDrawingObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestDrawingObject = new \Aspose\Words\Model\DrawingObjectUpdate(array(
            "left" => 0,
        ));
        $request = new Requests\UpdateDrawingObjectWithoutNodePathRequest(
            $remoteFileName,
            $requestDrawingObject,
            realpath(__DIR__ . '/../../../../..') . "Common/aspose-cloud.png",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateDrawingObjectWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}