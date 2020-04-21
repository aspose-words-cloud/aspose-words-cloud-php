<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="StylesTests.php">
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
use Aspose\Words\Model\StyleUpdate;
use Aspose\Words\Model\StyleCopy;
use Aspose\Words\Model\StyleInsert;
use PHPUnit\Framework\Assert;

class StylesTests extends BaseTestContext
{
    /**
     *
     * Test for getting styles
     *
     */
    public function testGetStyles()
    {
        $localName = "GetStyles.docx";
        $remoteName = "TestGetStyles.docx";
        $subfolder = "DocumentElements/Styles";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Styles/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetStylesRequest($remoteName, self::$baseTestPath . $subfolder);
        $result = $this->words->getStyles($request);
    }

    /**
     *
     * Test for getting style
     *
     */
    public function testGetStyle()
    {
        $localName = "GetStyles.docx";
        $remoteName = "testGetStyle.docx";
        $subfolder = "Styles";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Styles/' . $localName;
        $this->uploadFile($file, $fullName);

        $request = new Requests\GetStyleRequest($remoteName, "Heading 1", self::$baseTestPath . $subfolder);
        $result = $this->words->getStyle($request);
    }
    
    /**
     *
     * Test for updating style
     *
     */
    public function testUpdateStyle()
    {
        $localName = "GetStyles.docx";
        $remoteName = "testUpdateStyle.docx";
        $subfolder = "Styles";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Styles/' . $localName;
        $this->uploadFile($file, $fullName);

        $data = new StyleUpdate(array("name" => "My Style"));
        $request = new Requests\UpdateStyleRequest($remoteName, $data, "Heading 1", self::$baseTestPath . $subfolder);
        $result = $this->words->updateStyle($request);
    }
    
    /**
     *
     * Test for inserting style
     *
     */
    public function testInsertStyle()
    {
        $localName = "GetStyles.docx";
        $remoteName = "testInsertStyle.docx";
        $subfolder = "Styles";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Styles/' . $localName;
        $this->uploadFile($file, $fullName);

        $data = new StyleInsert(array("style_name" => "My Style", "style_type" => "Paragraph"));
        $request = new Requests\InsertStyleRequest($remoteName, $data, self::$baseTestPath . $subfolder);
        $result = $this->words->insertStyle($request);
    }
    
    /**
     *
     * Test for coping style
     *
     */
    public function testCopyStyle()
    {
        $localName = "GetStyles.docx";
        $remoteName = "testCopyStyle.docx";
        $subfolder = "Styles";
        $fullName = self::$baseTestPath . $subfolder . "/" . $remoteName;

        $file = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentElements/Styles/' . $localName;
        $this->uploadFile($file, $fullName);

        $data = new StyleCopy(array("style_name" => "Heading 1"));
        $request = new Requests\CopyStyleRequest($remoteName, $data, self::$baseTestPath . $subfolder);
        $result = $this->words->copyStyle($request);
    }
}