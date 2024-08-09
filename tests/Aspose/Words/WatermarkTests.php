<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WatermarkTests.php">
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
use Aspose\Words\Model\Requests\{DeleteWatermarkOnlineRequest, DeleteWatermarkRequest, InsertWatermarkImageOnlineRequest, InsertWatermarkImageRequest, InsertWatermarkOnlineRequest, InsertWatermarkRequest, InsertWatermarkTextOnlineRequest, InsertWatermarkTextRequest};
use Aspose\Words\Model\{FileReference, WatermarkDataImage, WatermarkDataText, WatermarkText};
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with watermarks.
 */
class WatermarkTests extends BaseTestContext
{
    /*
     * Test for adding watermark text.
     */
    public function testInsertWatermarkText()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Watermark";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertWatermarkText.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestWatermarkData = new WatermarkDataText(array(
            "text" => "watermark text",
        ));
        $request = new InsertWatermarkRequest(
            $remoteFileName,
            $requestWatermarkData,
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

        $result = $this->words->insertWatermark($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
    }

    /*
     * Test for adding watermark text online.
     */
    public function testInsertWatermarkTextOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestWatermarkData = new WatermarkDataText(array(
            "text" => "watermark text",
        ));
        $request = new InsertWatermarkOnlineRequest(
            $requestDocument,
            $requestWatermarkData,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for adding watermark text.
     */
    public function testInsertWatermarkImage()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Watermark";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertWatermarkImage.docx";
        $remoteImagePath = $remoteDataFolder . "/TestInsertWatermarkImage.png";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );
        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/aspose-cloud.png",
            $remoteImagePath
        );

        $requestWatermarkDataImage = FileReference::fromRemoteFilePath($remoteImagePath);
        $requestWatermarkData = new WatermarkDataImage(array(
            "image" => $requestWatermarkDataImage,
        ));
        $request = new InsertWatermarkRequest(
            $remoteFileName,
            $requestWatermarkData,
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

        $result = $this->words->insertWatermark($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
    }

    /*
     * Test for adding watermark text online.
     */
    public function testInsertWatermarkImageOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestWatermarkDataImageStream = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/aspose-cloud.png";
        $requestWatermarkDataImage = FileReference::fromLocalFileContent($requestWatermarkDataImageStream);
        $requestWatermarkData = new WatermarkDataImage(array(
            "image" => $requestWatermarkDataImage,
        ));
        $request = new InsertWatermarkOnlineRequest(
            $requestDocument,
            $requestWatermarkData,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for adding watermark image.
     */
    public function testInsertWatermarkImageDeprecated()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Watermark";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertWatermarkImage.docx";
        $remoteImagePath = $remoteDataFolder . "/TestInsertWatermarkImage.png";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );
        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . "Common/aspose-cloud.png",
            $remoteImagePath
        );

        $request = new InsertWatermarkImageRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL,
            $remoteImagePath
        );

        $result = $this->words->insertWatermarkImage($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestInsertWatermarkImage.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for adding watermark image online.
     */
    public function testInsertWatermarkImageDeprecatedOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestImageFile = realpath(__DIR__ . '/../../..') . '/TestData/' . "Common/aspose-cloud.png";
        $request = new InsertWatermarkImageOnlineRequest(
            $requestDocument,
            $requestImageFile,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkImageOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for adding watermark text.
     */
    public function testInsertWatermarkTextDeprecated()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Watermark";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertWatermarkText.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestWatermarkText = new WatermarkText(array(
            "text" => "This is the text",
            "rotation_angle" => 90.0,
        ));
        $request = new InsertWatermarkTextRequest(
            $remoteFileName,
            $requestWatermarkText,
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

        $result = $this->words->insertWatermarkText($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestInsertWatermarkText.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for adding watermark text online.
     */
    public function testInsertWatermarkTextDeprecatedOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $requestWatermarkText = new WatermarkText(array(
            "text" => "This is the text",
            "rotation_angle" => 90,
        ));
        $request = new InsertWatermarkTextOnlineRequest(
            $requestDocument,
            $requestWatermarkText,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkTextOnline($request);
        Assert::assertTrue($result !== NULL);
    }

    /*
     * Test for deleting watermark.
     */
    public function testDeleteWatermark()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Watermark";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteWatermark.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteWatermarkRequest(
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

        $result = $this->words->deleteWatermark($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestDeleteWatermark.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for deleting watermark online.
     */
    public function testDeleteWatermarkOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteWatermarkOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteWatermarkOnline($request);
        Assert::assertTrue($result !== NULL);
    }
}