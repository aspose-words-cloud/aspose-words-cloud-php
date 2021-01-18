<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReadmeTests.php">
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
use Aspose\Words\ApiException;
use Aspose\Words\Model\Requests;
use Aspose\Words\WordsApi;
use PHPUnit\Framework\Assert;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Aspose\Words\Model\SaveOptionsData;

class ReadmeTests extends BaseTestContext
{
    /*
     * Test readme.md code
     */
    public function testReadmeCode()
    {
        $creds = parent::getConfig();
        $clientId = $creds["ClientId"];
        $clientSecret = $creds["ClientSecret"];
        $baseUrl = $creds["BaseUrl"];

        $localFilePath = realpath(__DIR__ . '/../../..') . '/TestData/Common/test_multi_pages.docx';

        // Start README example

        $api = new WordsApi($clientId, $clientSecret);
        // the step is optional, the default value is https://api.aspose.cloud
        $api->getConfig()->setHost($baseUrl);

        // upload file to cloud
        $upload_request = new Requests\UploadFileRequest($localFilePath, 'fileStoredInCloud.doc');
        $upload_result = $api->uploadFile($upload_request);

        // save as pdf file
        $saveOptions = new SaveOptionsData(array("save_format" => "pdf", "file_name" => 'destination.pdf'));
        $request = new Requests\SaveAsRequest('fileStoredInCloud.doc', $saveOptions);
        $result = $api->saveAs($request);

        // End README example

        self::writeToReadme();
    }

    private function writeToReadme() 
    {
        // set regexes
        $startPattern = '/^\s*\/\/ Start README example\s*$/';
        $endPattern = '/^\s*\/\/ End README example\s*$/';

        // set paths
        $sourcePath = __FILE__;
        $readmePath = __DIR__ . '/../../../README.md';

        // read the file
        $codeLines = file($sourcePath, FILE_IGNORE_NEW_LINES);

        // extract readme code
        $readmeCode = array();
        $skipMode = true;

        foreach ($codeLines as $line) {
            if ($skipMode)
            {
                $skipMode = ! preg_match( $startPattern, $line);
            }

            if (!$skipMode)
            {
                array_push($readmeCode, $line);
                $skipMode = preg_match ( $endPattern, $line);;
            }
        }

        Assert::assertGreaterThan(2, $readmeCode);

        // read README.md
        $readmeLines = file($readmePath, FILE_IGNORE_NEW_LINES);

        // replace the readme code
        $newReadmeLines = array();
        $codeMode = false;

        foreach ($readmeLines as $line)
        {
            if (!$codeMode)
            {
                $codeMode = preg_match ( $startPattern, $line);

                if ($codeMode)
                {
                    $newReadmeLines = array_merge($newReadmeLines, $readmeCode);
                }
            }

            if ($codeMode)
            {
                $codeMode = ! preg_match ( $endPattern, $line);
                continue;
            }

            if(!$codeMode)
            {
                array_push($newReadmeLines, $line);
            }
        }

        // write to README.md
        file_put_contents($readmePath, implode(PHP_EOL, $newReadmeLines));
    }
}
