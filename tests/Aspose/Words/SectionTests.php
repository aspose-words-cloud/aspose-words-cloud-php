<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SectionTests.php">
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
use Aspose\Words\Model\Requests\{DeleteSectionOnlineRequest, DeleteSectionRequest, GetSectionOnlineRequest, GetSectionRequest, GetSectionsOnlineRequest, GetSectionsRequest, InsertSectionOnlineRequest, InsertSectionRequest, LinkHeaderFootersToPreviousRequest, MergeWithNextOnlineRequest, MergeWithNextRequest};
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with sections.
 */
class SectionTests extends BaseTestContext
{
    /*
     * Test for getting section by index.
     */
    public function testGetSection()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Section";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetSection.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetSectionRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getSection($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getSection());
        Assert::assertNotNull($result->getSection()->getChildNodes());
        Assert::assertCount(13, $result->getSection()->getChildNodes());
        Assert::assertEquals("0.3.0", $result->getSection()->getChildNodes()[0]->getNodeId());
    }

    /*
     * Test for getting section by index online.
     */
    public function testGetSectionOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetSectionOnlineRequest(
            $requestDocument,
            0,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getSectionOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for getting sections.
     */
    public function testGetSections()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Section";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetSections.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetSectionsRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getSections($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getSections());
        Assert::assertNotNull($result->getSections()->getSectionLinkList());
        Assert::assertCount(1, $result->getSections()->getSectionLinkList());
        Assert::assertEquals("0", $result->getSections()->getSectionLinkList()[0]->getNodeId());
    }

    /*
     * Test for getting sections online.
     */
    public function testGetSectionsOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new GetSectionsOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getSectionsOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for delete a section.
     */
    public function testDeleteSection()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Section";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteSection.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new DeleteSectionRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->deleteSection($request));
    }

    /*
     * Test for delete a section online.
     */
    public function testDeleteSectionOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new DeleteSectionOnlineRequest(
            $requestDocument,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->deleteSectionOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for merge a section with the next one.
     */
    public function testMergeWithNext()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Section";
        $remoteFileName = "TestMergeWithNext.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . "DocumentElements/Sections/Source.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new MergeWithNextRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->mergeWithNext($request));
    }

    /*
     * Test for merge a section with the next one online.
     */
    public function testMergeWithNextOnline()
    {
        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . "DocumentElements/Sections/Source.docx";
        $request = new MergeWithNextOnlineRequest(
            $requestDocument,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->mergeWithNextOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for insertion a section.
     */
    public function testInsertSection()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Section";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestInsertSection.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new InsertSectionRequest(
            $remoteFileName,
            0,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        Assert::assertNull($this->words->insertSection($request));
    }

    /*
     * Test for insertion a section online.
     */
    public function testInsertSectionOnline()
    {
        $localFile = "Common/test_multi_pages.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFile;
        $request = new InsertSectionOnlineRequest(
            $requestDocument,
            0,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->insertSectionOnline($request);
        Assert::assertNotNull($result, "Error occurred");
    }

    /*
     * Test for linking headers and footers to previous section.
     */
    public function testLinkHeaderFootersToPrevious()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/Section";
        $remoteFileName = "TestLinkHeaderFootersToPrevious.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . "DocumentElements/Sections/Source.docx",
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new LinkHeaderFootersToPreviousRequest(
            $remoteFileName,
            1,
            $remoteDataFolder,
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

        Assert::assertNull($this->words->linkHeaderFootersToPrevious($request));
    }
}