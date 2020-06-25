<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MathObjectTests.php">
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
 * Example of how to work with MathObjects.
 */
class MathObjectTests extends BaseTestContext
{
    /*
     * Test for getting mathObjects.
     */
    public function testGetOfficeMathObjects()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/MathObjects";
        $localFile = "DocumentElements/MathObjects/MathObjects.docx";
        $remoteFileName = "TestGetOfficeMathObjects.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetOfficeMathObjectsRequest(
            $remoteFileName,
            "",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getOfficeMathObjects($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting mathObjects without node path.
     */
    public function testGetOfficeMathObjectsWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/MathObjects";
        $localFile = "DocumentElements/MathObjects/MathObjects.docx";
        $remoteFileName = "TestGetOfficeMathObjectsWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetOfficeMathObjectsWithoutNodePathRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getOfficeMathObjectsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting mathObject.
     */
    public function testGetOfficeMathObject()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/MathObjects";
        $localFile = "DocumentElements/MathObjects/MathObjects.docx";
        $remoteFileName = "TestGetOfficeMathObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetOfficeMathObjectRequest(
            $remoteFileName,
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getOfficeMathObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting mathObject without node path.
     */
    public function testGetOfficeMathObjectWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/MathObjects";
        $localFile = "DocumentElements/MathObjects/MathObjects.docx";
        $remoteFileName = "TestGetOfficeMathObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetOfficeMathObjectWithoutNodePathRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getOfficeMathObjectWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for rendering mathObject.
     */
    public function testRenderMathObject()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/MathObjects";
        $localFile = "DocumentElements/MathObjects/MathObjects.docx";
        $remoteFileName = "TestRenderMathObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderMathObjectRequest(
            $remoteFileName,
            "png",
            "",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderMathObject($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for rendering mathObject without node path.
     */
    public function testRenderMathObjectWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/MathObjects";
        $localFile = "DocumentElements/MathObjects/MathObjects.docx";
        $remoteFileName = "TestRenderMathObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderMathObjectWithoutNodePathRequest(
            $remoteFileName,
            "png",
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderMathObjectWithoutNodePath($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for deleting mathObject.
     */
    public function testDeleteOfficeMathObject()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/MathObjects";
        $localFile = "DocumentElements/MathObjects/MathObjects.docx";
        $remoteFileName = "TestDeleteOfficeMathObject.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteOfficeMathObjectRequest(
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

    $this->words->deleteOfficeMathObject($request);
    }

    /*
     * Test for deleting mathObject without node path.
     */
    public function testDeleteOfficeMathObjectWithoutNodePath()
    {
        $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/MathObjects";
        $localFile = "DocumentElements/MathObjects/MathObjects.docx";
        $remoteFileName = "TestDeleteOfficeMathObjectWithoutNodePath.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteOfficeMathObjectWithoutNodePathRequest(
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

    $this->words->deleteOfficeMathObjectWithoutNodePath($request);
    }
}