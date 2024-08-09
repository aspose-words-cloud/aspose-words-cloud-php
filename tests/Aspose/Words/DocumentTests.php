<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DocumentTests.php">
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
use Aspose\Words\Model\Requests\{CreateDocumentRequest, GetDocumentRequest};
use PHPUnit\Framework\Assert;

/*
 * Example of how to get document.
 */
class DocumentTests extends BaseTestContext
{
    /*
     * Test for getting document.
     */
    public function testGetDocument()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Document";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocument.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new GetDocumentRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestGetDocument.docx", $result->getDocument()->getFileName());
    }

    /*
     * Test for creating word document.
     */
    public function testCreateDocument()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentActions/Document";
        $remoteFileName = "TestCreateDocument.doc";

        $request = new CreateDocumentRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL
        );

        $result = $this->words->createDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getDocument());
        Assert::assertEquals("TestCreateDocument.doc", $result->getDocument()->getFileName());
    }
}