<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DocumentPropertiesTests.php">
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
use PHPUnit\Framework\Assert;

/*
 * Example of how to get document properties.
 */
class DocumentPropertiesTests extends BaseTestContext
{
    /*
     * Test for getting document properties.
     */
    public function testGetDocumentProperties()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProperties";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentProperties.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentPropertiesRequest(
            $remoteFileName,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentProperties($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * A test for GetDocumentProperty.
     */
    public function testGetDocumentProperty()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProperties";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestGetDocumentProperty.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\GetDocumentPropertyRequest(
            $remoteFileName,
            "Author",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getDocumentProperty($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }

    /*
     * Test for deleting document property.
     */
    public function testDeleteDocumentProperty()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProperties";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestDeleteDocumentProperty.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $request = new Requests\DeleteDocumentPropertyRequest(
            $remoteFileName,
            "testProp",
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

    $this->words->deleteDocumentProperty($request);
    }

    /*
     * Test for updating document property.
     */
    public function testUpdateDocumentProperty()
    {
        $remoteDataFolder = self::$baseRemoteFolderPath . "/DocumentElements/DocumentProperties";
        $localFile = "Common/test_multi_pages.docx";
        $remoteFileName = "TestUpdateDocumentProperty.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../../../..') . "/TestData/" . $localFile,
            $remoteDataFolder . "/" . $remoteFileName
        );

        $requestProperty = new \Aspose\Words\Model\DocumentPropertyCreateOrUpdate(array(
            "value" => "Imran Anwar",
        ));
        $request = new Requests\CreateOrUpdateDocumentPropertyRequest(
            $remoteFileName,
            "AsposeAuthor",
            $requestProperty,
            $remoteDataFolder,
            NULL,
            NULL,
            NULL,
            self::$baseTestOutPath . "/" . $remoteFileName,
            NULL,
            NULL
        );

        $result = $this->words->createOrUpdateDocumentProperty($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}