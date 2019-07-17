<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DrawingTests.php">
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
use PHPUnit\Framework\Assert;

class DrawingTests extends \BaseTest\BaseTestContext
{
    /**
     * Test case for getDocumentDrawingObjectByIndex
     *
     * Read document drawing object common info by its index or convert to format specified..
     *
     */
    public function testGetDocumentDrawingObjectByIndex()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentDrawingObjectByIndex.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentDrawingObjectByIndexRequest($remoteName, $index, $node_path='sections/0', $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectByIndex($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentDrawingObjectImageData
     *
     * Read drawing object image data..
     *
     */
    public function testGetDocumentDrawingObjectImageData()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentDrawingObjectImageData.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentDrawingObjectImageDataRequest($remoteName, $index, $node_path = "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectImageData($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentDrawingObjectOleData
     *
     * Get drawing object OLE data..
     *
     */
    public function testGetDocumentDrawingObjectOleData()
    {
        $localName = "sample_EmbeddedOLE.docx";
        $remoteName = "TestGetDocumentDrawingObjectOleData.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/DrawingObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentDrawingObjectOleDataRequest($remoteName, $index, $node_path = "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectOleData($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentDrawingObjects
     *
     * Read document drawing objects common info..
     *
     */
    public function testGetDocumentDrawingObjects()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentDrawingObjects.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentDrawingObjectsRequest($remoteName, $node_path = "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjects($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for postDrawingObject
     *
     * Updates drawing object, returns updated  drawing object's data..
     *
     */
    public function testPostDrawingObject()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPostDrawingObject.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $data = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . "aspose-cloud.png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateDrawingObjectRequest($remoteName, "{\"Left\": 0}", $data, 0,$node_path = "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->updateDrawingObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for putDrawingObject
     *
     * Adds  drawing object to document, returns added  drawing object's data..
     *
     */
    public function testPutDrawingObject()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestPutDrawingObject.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $image = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . "aspose-cloud.png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertDrawingObjectRequest($remoteName, "{\"Left\": 0}", $image, $node_path = "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->insertDrawingObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for renderDrawingObject
     *
     * Renders drawing object to specified format..
     *
     */
    public function testRenderDrawingObject()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestRenderDrawingObject.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $format = "png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\RenderDrawingObjectRequest($remoteName, $format, $index,$node_path = "sections/0", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->renderDrawingObject($request);
        Assert::assertNotNull($result, "Error occurred while drawing object rendering");
    }

    /**
     * Test case for deleteDrawingObject
     *
     * Removes drawing object from document..
     *
     */
    public function testDeleteDrawingObject()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDeleteDrawingObject.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $objectIndex = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $file = str_replace("\\", "/", $file);
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteDrawingObjectRequest($remoteName,
            $objectIndex, $node_path = "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteDrawingObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}