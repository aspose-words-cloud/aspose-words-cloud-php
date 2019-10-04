<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="DrawingTests.php">
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
use PHPUnit\Framework\Assert;

class DrawingTests extends BaseTestContext
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

        $request = new Requests\GetDocumentDrawingObjectByIndexRequest($remoteName,'sections/0', $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectByIndex($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentDrawingObjectByIndexWithoutNodePath
     *
     * Read document drawing object common info by its index or convert to format specified..
     *
     */
    public function testGetDocumentDrawingObjectByIndexWithoutNodePath()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentDrawingObjectByIndexWithoutNodePath.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentDrawingObjectByIndexWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->GetDocumentDrawingObjectByIndexWithoutNodePath($request);
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

        $request = new Requests\GetDocumentDrawingObjectImageDataRequest($remoteName,"sections/0", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectImageData($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentDrawingObjectImageDataWithoutNodePath
     *
     * Read drawing object image data..
     *
     */
    public function testGetDocumentDrawingObjectImageDataWithoutNodePath()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentDrawingObjectImageDataWithoutNodePath.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentDrawingObjectImageDataWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectImageDataWithoutNodePath($request);
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

        $request = new Requests\GetDocumentDrawingObjectOleDataRequest($remoteName,"sections/0", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectOleData($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getDocumentDrawingObjectOleDataWithoutNodePath
     *
     * Get drawing object OLE data..
     *
     */
    public function testGetDocumentDrawingObjectOleDataWithoutNodePath()
    {
        $localName = "sample_EmbeddedOLE.docx";
        $remoteName = "TestGetDocumentDrawingObjectOleDataWithoutNodePath.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/DrawingObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentDrawingObjectOleDataWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectOleDataWithoutNodePath($request);
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
     * Test case for getDocumentDrawingObjectsWithoutNodePath
     *
     * Read document drawing objects common info..
     *
     */
    public function testGetDocumentDrawingObjectsWithoutNodePath()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestGetDocumentDrawingObjectsWithoutNodePath.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetDocumentDrawingObjectsWithoutNodePathRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getDocumentDrawingObjectsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }


    /**
     * Test case for updateDrawingObject
     *
     * Updates drawing object, returns updated  drawing object's data..
     *
     */
    public function testUpdateDrawingObject()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestUpdateDrawingObject.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $data = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . "aspose-cloud.png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateDrawingObjectRequest($remoteName, "{\"Left\": 0}", $data,"", 0, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->updateDrawingObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for updateDrawingObjectWithoutNodePath
     *
     * Updates drawing object, returns updated  drawing object's data..
     *
     */
    public function testUpdateDrawingObjectWithoutNodePath()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestUpdateDrawingObjectWithoutNodePath.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $data = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . "aspose-cloud.png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateDrawingObjectWithoutNodePathRequest($remoteName, "{\"Left\": 0}", $data, 0, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->updateDrawingObjectWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for insertDrawingObject
     *
     * Adds  drawing object to document, returns added  drawing object's data..
     *
     */
    public function testInsertDrawingObject()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestInsertDrawingObject.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $image = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . "aspose-cloud.png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertDrawingObjectRequest($remoteName, "{\"Left\": 0}", $image, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->insertDrawingObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for insertDrawingObjectWithoutNodePath
     *
     * Adds  drawing object to document, returns added  drawing object's data..
     *
     */
    public function testInsertDrawingObjectWithoutNodePath()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestInsertDrawingObjectWithoutNodePath.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $image = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . "aspose-cloud.png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertDrawingObjectWithoutNodePathRequest($remoteName, "{\"Left\": 0}", $image, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->insertDrawingObjectWithoutNodePath($request);
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

        $request = new Requests\RenderDrawingObjectRequest($remoteName, $format,"sections/0", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->renderDrawingObject($request);
        Assert::assertNotNull($result, "Error occurred while drawing object rendering");
    }

     /**
     * Test case for renderDrawingObjectWithoutNodePath
     *
     * Renders drawing object to specified format..
     *
     */
    public function testRenderDrawingObjectWithoutNodePath()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestRenderDrawingObjectWithoutNodePath.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $format = "png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\RenderDrawingObjectWithoutNodePathRequest($remoteName, $format, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->renderDrawingObjectWithoutNodePath($request);
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

        $request = new Requests\DeleteDrawingObjectRequest($remoteName, "",
            $objectIndex, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteDrawingObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteDrawingObjectWithoutNodePath
     *
     * Removes drawing object from document..
     *
     */
    public function testDeleteDrawingObjectWithoutNodePath()
    {
        $localName = "test_multi_pages.docx";
        $remoteName = "TestDeleteDrawingObjectWithoutNodePath.docx";
        $subfolder = "DocumentElements/DrawingObjects";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $objectIndex = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/Common/' . $localName;
        $file = str_replace("\\", "/", $file);
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteDrawingObjectWithoutNodePathRequest($remoteName,
            $objectIndex, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteDrawingObjectWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}