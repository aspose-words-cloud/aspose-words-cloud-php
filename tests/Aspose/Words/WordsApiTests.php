<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="Aspose\Words\ApiTest.php">
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
use Aspose\Words\ApiException;
use Aspose\Words\Model\Requests;
use Aspose\Words\WordsApi;
use PHPUnit\Framework\Assert;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;

class WordsApiTests extends BaseTestContext
{
    /*
     * Test case for checking correct handle of server errors
     */
    public function testHandleServerErrors()
    {
        $remoteName = "noFileWithThisName.docx";
        $request = new Requests\GetSectionsRequest($remoteName);
        try{
            $this->words->GetSections($request);
            Assert::fail("Expected exception has not been thrown");
        }
        catch (ApiException $exception)
        {
            $errorObject = $exception->getResponseError();
            Assert::assertNotNull($errorObject);
            Assert::assertNotNull($errorObject->getInnerError());
            Assert::equalTo(404, $exception->getCode());
        }
    }
    
    /*
     * Test case for checking bad appSid
     */
    public function testHandleBadAppSid()
    {
        try{
            $this->words = new WordsApi("tttt", "qqq", "https://api-qa.aspose.cloud");
        }
        catch (RequestException $e)
        {
            Assert::equalTo(400, $e->getCode());
        }
    }

    public function testApiCoverage()
    {
        $classarr = array("BookmarkTests", "AppendDocumentTests", "CommentTests", "CompareDocumentTests", "ConvertDocumentTests", "ClassificationTests",
            "DocumentStatisticsTests", "DocumentTests", "DocumentWithFormatTests", "LoadWebDocumentTests", "RevisionsTests",
            "SplitDocumentToFormatTests", "DocumentPropertiesTests", "DocumentProtectionTests", "DrawingTests",
            "FieldTests", "FormFieldTests", "MailMergeFieldTests", "FontTests", "FootnoteTests", "HeaderFooterTests",
            "HyperlinkTests", "MacrosTests", "ExecuteMailMergeTests", "MathObjectTests",
            "PageSetupTests", "ParagraphTests", "RunTests", "SectionsTests", "TableTests", "TextTests", "WatermarkTests", "FileTests", "FolderTests", "RangeTests");
        $apiClass = new \ReflectionClass('Aspose\Words\WordsApi');
        $testMethods = array();
        foreach ($classarr as $cls)
        {
            $refClass = new \ReflectionClass('Aspose\Tests\\'.$cls);
            $methods = array_merge($testMethods, array_filter($refClass->getMethods(), function($elem) {
                return $elem->class != "PHPUnit_Framework_TestCase" && 
                    $elem->class != "PHPUnit_Framework_Assert" && 
                    $elem->class != "Aspose\Tests\BaseTestContext";
            }));

            foreach($methods as $testMethod){
                $testMethods[str_replace('test', '', strtolower($testMethod->name))] = $testMethod;
            }
        }
        $methods = array_map(function($elem) {
            return strtolower(str_replace('Request', '', $elem->name));
        }, $apiClass->getMethods(\ReflectionMethod::IS_PROTECTED));
        $errorList = "";
        foreach ($methods as $method)
        {
            try {
                $test = $testMethods[$method];
                if ($test == NULL)
                    throw new \ReflectionException("Missed test");
            }
            catch (\ReflectionException $e)
            {
                echo('error: '.$method."\n");
                $errorList = $errorList . $method . "\n";
            }
            unset($method);
        }

        Assert::assertEquals(0, strlen($errorList), "Uncovered API methods\n" . $errorList);
    }
}
