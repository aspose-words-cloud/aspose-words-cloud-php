<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="Aspose\Words\ApiTest.php">
*   Copyright (c) 2017 Aspose.Words for Cloud
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

namespace Aspose\Words\Test;

use Aspose\Words\ApiException;
use Aspose\Words\WordsApi;
use Aspose\Words\Configuration;
use Aspose\Words\Model\Requests;
use Aspose\Storage\StorageApi;
use PHPUnit\Framework\Assert;

class WordsApiTests extends \PHPUnit_Framework_TestCase
{
	protected $words;
	
	protected $storage;
	
	protected $config;
	
	protected static $baseTestPath = "Temp/SdkTests/TestData/";
	protected static $baseTestOut = "TestOut/";
	
    /**
     * Setup before running each test case
     */
    public function setUp()
    {
		$this->storage = new StorageApi();
        $this->config = new Configuration();
        $this->storage->apiClient->apiKey = $this->config->getAppKey();
        $this->storage->apiClient->appSid = $this->config->getAppSid();
        $this->storage->apiClient->apiServer = $this->config->getHost() . "/v1.1/";
        $this->words = new WordsApi(null, $this->config);
    }

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
            Assert::assertEquals(400, $exception->getCode());
            Assert::assertContains("Error while loading file 'noFileWithThisName.docx' from storage:", $exception->getMessage());
        }
    }

    public function testAuthenticationTokenRefreshing()
    {
        $this->markTestSkipped("Ignored because we use local server to test this feature (access token is expired in 1s)");
        $this->words->getConfig()->setDebug(true);

        $request = new Requests\ResetCacheRequest();

        $result = $this->words->resetCache($request);
        ob_start();

        usleep(20000);

        $result = $this->words->resetCache($request);
        $contents = ob_get_contents();
        ob_get_clean();
        Assert::assertContains("grant_type=refresh_token", $contents, "Refresh token hasn't been used");
    }

    public function testApiCoverage()
    {
        $classarr = array("BookmarkTests", "AppendDocumentTests", "CommentTests", "CompareDocumentTests", "ConvertDocumentTests",
            "DocumentStatisticsTests", "DocumentTests", "DocumentWithFormatTests", "LoadWebDocumentTests", "RevisionsTests",
            "SplitDocumentToFormatTests", "DocumentPropertiesTests", "DocumentProtectionTests", "DrawingTests",
            "FieldTests", "FormFieldTests", "MailMergeFieldTests", "FontTests", "FootnoteTests", "HeaderFooterTests",
            "HyperlinkTests", "MacrosTests", "ExecuteMailMergeTests", "ExecuteTemplateTests", "MathObjectTests",
            "PageSetupTests", "ParagraphTests", "RunTests", "SectionsTests", "TableTests", "TextTests", "WatermarkTests");

        $apiClass = new \ReflectionClass('Aspose\Words\WordsApi');
        $testMethods = [];
        foreach ($classarr as $cls)
        {
            $refClass = new \ReflectionClass($cls);
            array_push($testMethods, $refClass->getMethods());
        }

        $methods = $apiClass->getMethods(\ReflectionMethod::IS_PROTECTED);
        $errorList = "";

        foreach ($methods as $method)
        {
            $methodName = "";
            try {
                $methodName = str_replace("Request", '', $method->getName());
                $test = $testMethods["test" . $methodName];
            }
            catch (\ReflectionException $e)
            {
                $errorList = $errorList . $methodName . "\n";
            }
            unset($method);
        }

        Assert::assertEquals(0, strlen($errorList), "Uncovered API methods\n" . $errorList);
    }
}
