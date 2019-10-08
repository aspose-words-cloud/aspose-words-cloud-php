<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="CompareDocumentTests.php">
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
use Aspose\Words\Model\CompareData;
use PHPUnit\Framework\Assert;

class CompareDocumentTests extends BaseTestContext
{
    /**
     * Test case for compareDocument
     *
     * Compare document with original document..
     *
     */
    public function testCompareDocument()
    {
        $localName1 = "compareTestDoc1.doc";
        $localName2 = "compareTestDoc2.doc";
        $remoteName1 = "TestCompareDocument1.doc";
        $remoteName2 = "TestCompareDocument2.doc";
        $subfolder = "DocumentActions/CompareDocument";
        $fullName1 = self::$baseTestPath . $subfolder . "/" . $remoteName1;
        $fullName2 = self::$baseTestPath . $subfolder . "/" . $remoteName2;
        $destName = self::$baseTestOut . "TestCompareDocumentOut.doc";
        $compareData = new CompareData(array("author" => "author", "comparing_with_document" => $fullName2, "date_time" => new \DateTime("now")));

        $file1 = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/CompareDocument/' . $localName1;
        $this->uploadFile($file1, $fullName1);
        $file2 = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/CompareDocument/' . $localName2;
        $this->uploadFile($file2, $fullName2);


        $request = new Requests\CompareDocumentRequest($remoteName1, $compareData, $folder=self::$baseTestPath . $subfolder,
            null, null, null, $destName);

        $result = $this->words->compareDocument($request);
        Assert::isTrue(json_decode($result, true) !== NULL);
    }
}