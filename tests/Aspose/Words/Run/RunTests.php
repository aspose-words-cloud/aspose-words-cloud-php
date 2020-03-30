<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="RunTests.php">
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
use Aspose\Words\Model\RunInsert;
use Aspose\Words\Model\RunUpdate;
use PHPUnit\Framework\Assert;

class RunTests extends BaseTestContext
{
    /**
     * Test case for deleteRun
     *
     * Removes run from document..
     *
     */
    public function testDeleteRun()
    {
        $localName = "Run.doc";
        $remoteName = "TestDeleteRun.docx";
        $subfolder = "DocumentElements/Run";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Runs/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\DeleteRunRequest($remoteName, "paragraphs/1", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->deleteRun($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for updateRun
     *
     * Updates run's properties, returns updated run's data..
     *
     */
    public function testUpdateRun()
    {
        $localName = "Run.doc";
        $remoteName = "TestUpdateRun.docx";
        $subfolder = "DocumentElements/Run";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $index = 0;
        $run = new RunUpdate(array("text" => "Run with text"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Runs/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\UpdateRunRequest($remoteName, $run, "paragraphs/1", $index, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->updateRun($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /**
     * Test case for insertRun
     *
     * Adds run to document, returns added paragraph's data..
     *
     */
    public function testInsertRun()
    {
        $localName = "Run.doc";
        $remoteName = "TestInsertRun.docx";
        $subfolder = "DocumentElements/Run";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;
        $run = new RunInsert(array("text" => "run with text"));

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Runs/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\InsertRunRequest($remoteName, "paragraphs/1", $run, $folder=self::$baseTestPath . $subfolder);

        $result = $this->words->insertRun($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}