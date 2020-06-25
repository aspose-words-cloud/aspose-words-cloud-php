<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TableBorderTests.php">
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
 * Example of how to work with table borders.
 */
class TableBorderTests extends BaseTestContext
{
    private static $remoteDataFolder = baseRemoteFolder . "/DocumentElements/Tables";
    private static $localFile = "DocumentElements/Tables/TablesGet.docx";

    /*
     * Test for getting borders.
     */
    public function testGetBorders()
    {
        $remoteFileName = "TestGetBorders.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetBordersRequest(
            $remoteFileName,
            "tables/1/rows/0/cells/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getBorders($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting border.
     */
    public function testGetBorder()
    {
        $remoteFileName = "TestGetBorder.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetBorderRequest(
            $remoteFileName,
            "tables/1/rows/0/cells/0",
            "left",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getBorder($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting borders.
     */
    public function testDeleteBorders()
    {
        $remoteFileName = "TestDeleteBorders.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteBordersRequest(
            $remoteFileName,
            "tables/1/rows/0/cells/0",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteBorders($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting border.
     */
    public function testDeleteBorder()
    {
        $remoteFileName = "TestDeleteBorder.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteBorderRequest(
            $remoteFileName,
            "tables/1/rows/0/cells/0",
            "left",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteBorder($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating border.
     */
    public function testUpdateBorder()
    {
        $remoteFileName = "TestUpdateBorder.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestBorderPropertiesColor = new \Aspose\Words\Model\XmlColor(array(
            "alpha" => 2,
        ));
        $requestBorderProperties = new \Aspose\Words\Model\Border(array(
            "border_type" => "Left",
            "color" => $requestBorderPropertiesColor,
            "distance_from_text" => 6,
            "line_style" => "DashDotStroker",
            "line_width" => 2,
            "shadow" => true,
        ));
        $request = new Requests\UpdateBorderRequest(
            $remoteFileName,
            $requestBorderProperties,
            "tables/1/rows/0/cells/0",
            "left",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateBorder($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}