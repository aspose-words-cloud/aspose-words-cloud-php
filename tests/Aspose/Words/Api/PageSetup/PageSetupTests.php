<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageSetupTests.php">
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
 * Example of how to work with macros.
 */
class PageSetupTests extends BaseTestContext
{
    /*
     * Test for getting page settings.
     */
    public function testGetSectionPageSetup()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/PageSetup";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetSectionPageSetup.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetSectionPageSetupRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getSectionPageSetup($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getPageSetup());
        Assert::assertEquals(1, $result->getPageSetup()->getLineStartingNumber());
    }

    /*
     * Test for getting page settings online.
     */
    public function testGetSectionPageSetupOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $request = new Requests\GetSectionPageSetupOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            0,
            NULL,
            NULL
        );

        $result = $this->words->getSectionPageSetupOnline($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for updating page settings.
     */
    public function testUpdateSectionPageSetup()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/PageSetup";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateSectionPageSetup.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestPageSetup = new \Aspose\Words\Model\PageSetup(array(
            "rtl_gutter" => true,
            "left_margin" => 10.0,
            "orientation" => "Landscape",
            "paper_size" => "A5",
        ));
        $request = new Requests\UpdateSectionPageSetupRequest(
            $remoteFileName,
            0,
            $requestPageSetup,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateSectionPageSetup($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getPageSetup());
        Assert::assertTrue($result->getPageSetup()->getRtlGutter());


    }

    /*
     * Test for updating page settings online.
     */
    public function testUpdateSectionPageSetupOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestPageSetup = new \Aspose\Words\Model\PageSetup(array(
            "rtl_gutter" => true,
            "left_margin" => 10,
            "orientation" => "Landscape",
            "paper_size" => "A5",
        ));
        $request = new Requests\UpdateSectionPageSetupOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localFile,
            0,
            $requestPageSetup,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->updateSectionPageSetupOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /*
     * Test for page rendering.
     */
    public function testGetRenderPage()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/PageSetup";
        $localTextFile = "DocumentElements/Text/SampleWordDocument.docx";
        $remoteFileName = "TestGetRenderPage.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localTextFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\RenderPageRequest(
            $remoteFileName,
            1,
            "bmp",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderPage($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for page rendering.
     */
    public function testGetRenderPageOnline()
    {
        $localTextFile = "DocumentElements/Text/SampleWordDocument.docx";

        $request = new Requests\RenderPageOnlineRequest(
            realpath(__DIR__ . '/../../../../..') . '/TestData/' . $localTextFile,
            1,
            "bmp",
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->renderPageOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }
}