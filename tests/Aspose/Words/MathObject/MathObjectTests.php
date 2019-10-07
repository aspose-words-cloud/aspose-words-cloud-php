<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="MathObjectTests.php">
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

class MathObjectTests extends BaseTestContext
{
    /**
     * Test case for deleteOfficeMathObject
     *
     * Removes OfficeMath object from document..
     *
     */
    public function testDeleteOfficeMathObject()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestDeleteOfficeMathObject.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/MathObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteOfficeMathObjectRequest($remoteName, "", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteOfficeMathObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for deleteOfficeMathObjectWithoutNodePath
     *
     * Removes OfficeMath object from document..
     *
     */
    public function testDeleteOfficeMathObjectWithoutNodePath()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestDeleteOfficeMathObjectWithoutNodePath.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/MathObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteOfficeMathObjectWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null, null,
            null, null);

        $result = $this->words->deleteOfficeMathObjectWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getOfficeMathObject
     *
     * Read OfficeMath object by index..
     *
     */
    public function testGetOfficeMathObject()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestGetOfficeMathObject.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/MathObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetOfficeMathObjectRequest($remoteName, "", $index,$folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getOfficeMathObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getOfficeMathObjectWithoutNodePath
     *
     * Read OfficeMath object by index..
     *
     */
    public function testGetOfficeMathObjectWithoutNodePath()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestGetOfficeMathObjectWithoutNodePath.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/MathObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetOfficeMathObjectWithoutNodePathRequest($remoteName, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getOfficeMathObjectWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getOfficeMathObjects
     *
     * Get OfficeMath objects from document..
     *
     */
    public function testGetOfficeMathObjects()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestGetOfficeMathObjects.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/MathObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetOfficeMathObjectsRequest($remoteName, "", $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getOfficeMathObjects($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for getOfficeMathObjectsWithoutNodePath
     *
     * Get OfficeMath objects from document..
     *
     */
    public function testGetOfficeMathObjectsWithoutNodePath()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestGetOfficeMathObjectsWithoutNodePath.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/MathObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetOfficeMathObjectsWithoutNodePathRequest($remoteName, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->getOfficeMathObjectsWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for renderMathObject
     *
     * Renders math object to specified format..
     *
     */
    public function testRenderMathObject()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestRenderMathObject.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $format = "png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/MathObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\RenderMathObjectRequest($remoteName, $format, "", $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->renderMathObject($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for renderMathObjectWithoutNodePath
     *
     * Renders math object to specified format..
     *
     */
    public function testRenderMathObjectWithoutNodePath()
    {
        $localName = "MathObjects.docx";
        $remoteName = "TestRenderMathObjectWithoutNodePath.docx";
        $subfolder = "DocumentElements/MathObject";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $format = "png";

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/MathObjects/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\RenderMathObjectWithoutNodePathRequest($remoteName, $format, $index, $folder=self::$baseTestPath . $subfolder,
            null, null, null);

        $result = $this->words->renderMathObjectWithoutNodePath($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}