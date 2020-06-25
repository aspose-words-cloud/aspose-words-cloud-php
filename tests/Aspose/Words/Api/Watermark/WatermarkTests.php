<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WatermarkTests.php">
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
 * Example of how to work with watermarks.
 */
class WatermarkTests extends BaseTestContext
{
    private static $remoteDataFolder = self::$baseRemoteFolder . "/DocumentActions/Watermark";
    private static $localFile = "Common/test_multi_pages.docx";

    /*
     * Test for adding watermark image.
     */
    public function testInsertDocumentWatermarkImage()
    {
        $remoteFileName = "TestInsertWatermarkImage.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\InsertWatermarkImageRequest(
            $remoteFileName,
            realpath(__DIR__ . '/../../../../..') . "Common/aspose-cloud.png",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkImage($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding watermark image.
     */
    public function testInsertWatermarkImage()
    {
        $remoteFileName = "TestInsertWatermarkImage.docx";
        $remoteImagePath = $remoteDataFolder . "/TestInsertWatermarkImage.png";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );
        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "Common/aspose-cloud.png",
            $remoteImagePath
        );

        $request = new Requests\InsertWatermarkImageRequest(
            $remoteFileName,
            NULL,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL,
            NULL,
            $remoteImagePath
        );

        $result = $this->words->insertWatermarkImage($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for adding watermark text.
     */
    public function testInsertWatermarkText()
    {
        $remoteFileName = "TestInsertWatermarkText.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestWatermarkText = new \Aspose\Words\Model\WatermarkText(array(
            "text" => "This is the text",
            "rotation_angle" => 90,
        ));
        $request = new Requests\InsertWatermarkTextRequest(
            $remoteFileName,
            $requestWatermarkText,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->insertWatermarkText($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting watermark.
     */
    public function testDeleteWatermark()
    {
        $remoteFileName = "TestDeleteWatermark.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteWatermarkRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOut . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->deleteWatermark($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}