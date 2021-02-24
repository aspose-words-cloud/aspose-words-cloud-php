<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WatermarkTests.php">
 *   Copyright (c) 2021 Aspose.Words for Cloud
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

use Aspose\Words\WordsApi;
use Aspose\Words\Model;
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with watermarks.
 */
class WatermarkTests extends BaseTestContext
{
    /*
     * Test for adding watermark image.
     */
    public function testInsertWatermarkImage()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Watermark";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertWatermarkImage.docx";
        $remoteImagePath = $remoteDataFolder . "/TestInsertWatermarkImage.png";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );
        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . "Common/aspose-cloud.png",
            $remoteImagePath
        );

        $request = new Requests\InsertWatermarkImageRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
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
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestInsertWatermarkImage.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for adding watermark image online.
     */
    public function testInsertWatermarkImageOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\InsertWatermarkImageOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . "Common/aspose-cloud.png",
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkImageOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for adding watermark text.
     */
    public function testInsertWatermarkText()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Watermark";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertWatermarkText.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestWatermarkText = new \Aspose\Words\Model\WatermarkText(array(
            "text" => "This is the text",
            "rotation_angle" => 90.0,
        ));
        $request = new Requests\InsertWatermarkTextRequest(
            $remoteFileName,
            $requestWatermarkText,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkText($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestInsertWatermarkText.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for adding watermark text online.
     */
    public function testInsertWatermarkTextOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestWatermarkText = new \Aspose\Words\Model\WatermarkText(array(
            "text" => "This is the text",
            "rotation_angle" => 90,
        ));
        $request = new Requests\InsertWatermarkTextOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            $requestWatermarkText,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkTextOnline($request);
        Assert::isTrue($result !== NULL);
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
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteWatermarkRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->deleteWatermark($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestDeleteWatermark.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for deleting watermark online.
     */
    public function testDeleteWatermarkOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\DeleteWatermarkOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteWatermarkOnline($request);
        Assert::isTrue($result !== NULL);
    }
}