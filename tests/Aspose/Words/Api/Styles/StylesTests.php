<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StylesTests.php">
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
 * Example of how to work with styles.
 */
class StylesTests extends BaseTestContext
{
    private static $remoteDataFolder = self::$baseRemoteFolder . "/DocumentElements/Styles";
    private static $localFile = "DocumentElements/Styles/GetStyles.docx";

    /*
     * Test for getting styles from document.
     */
    public function testGetStyles()
    {
        $remoteFileName = "TestGetStyles.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetStylesRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getStyles($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting style from document.
     */
    public function testGetStyle()
    {
        $remoteFileName = "TestGetStyle.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetStyleRequest(
            $remoteFileName,
            "Heading 1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getStyle($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating style from document.
     */
    public function testUpdateStyle()
    {
        $remoteFileName = "TestUpdateStyle.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestStyleUpdate = new \Aspose\Words\Model\StyleUpdate(array(
            "name" => "My Style",
        ));
        $request = new Requests\UpdateStyleRequest(
            $remoteFileName,
            $requestStyleUpdate,
            "Heading 1",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateStyle($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for inserting style from document.
     */
    public function testInsertStyle()
    {
        $remoteFileName = "TestInsertStyle.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestStyleInsert = new \Aspose\Words\Model\StyleInsert(array(
            "style_name" => "My Style",
            "style_type" => "Paragraph",
        ));
        $request = new Requests\InsertStyleRequest(
            $remoteFileName,
            $requestStyleInsert,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertStyle($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for coping style from document.
     */
    public function testCopyStyle()
    {
        $remoteFileName = "TestCopyStyle.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestStyleCopy = new \Aspose\Words\Model\StyleCopy(array(
            "style_name" => "Heading 1",
        ));
        $request = new Requests\CopyStyleRequest(
            $remoteFileName,
            $requestStyleCopy,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->copyStyle($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting style from document element.
     */
    public function testGetStyleFromDocumentElement()
    {
        $remoteFileName = "TestGetStyleFromDocumentElement.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetStyleFromDocumentElementRequest(
            $remoteFileName,
            "paragraphs/1/paragraphFormat",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getStyleFromDocumentElement($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for applying style to document element.
     */
    public function testApplyStyleToDocumentElement()
    {
        $remoteFileName = "TestApplyStyleToDocumentElement.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestStyleApply = new \Aspose\Words\Model\StyleApply(array(
            "style_name" => "Heading 1",
        ));
        $request = new Requests\ApplyStyleToDocumentElementRequest(
            $remoteFileName,
            $requestStyleApply,
            "paragraphs/1/paragraphFormat",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->applyStyleToDocumentElement($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}