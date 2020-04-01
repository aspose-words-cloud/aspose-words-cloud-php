<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ReportingTests.php">
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
use Aspose\Words\Model\ReportEngineSettings;
use PHPUnit\Framework\Assert;
use Aspose\Words\ApiException;
class ReportingTests extends BaseTestContext
{
    /**
     * Test case for saveAs
     *
     * Build report online
     *
     */
    public function testBuildReportOnline()
    {
        $localName = "ReportTemplate.docx";
        $settings = new ReportEngineSettings(array("data_source_type" => "Json"));
        $template = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/Reporting/' . 'ReportTemplate.docx';
        $dataJson = file_get_contents(realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/Reporting/' . 'ReportData.json');
        $request = new Requests\BuildReportOnlineRequest($template, $dataJson, $settings);

        $result = $this->words->buildReportOnline($request);
        Assert::isTrue($result !== NULL);
    }

    /**
     * Test case for SaveAsFromPdfToDoc
     *
     * Build report.
     *
     */
    public function testBuildReport()
    {
        $remoteName = 'TestBuildReport.docx';
        $template = realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/Reporting/' . 'ReportTemplate.docx';
        $dataJson = file_get_contents(realpath(__DIR__ . '/../../../..') . '/TestData/DocumentActions/Reporting/' . 'ReportData.json');
        $fullName = self::$baseTestPath . "DocumentActions/Reporting/" . $remoteName;
        $this->uploadFile($template, $fullName);

        $settings = new ReportEngineSettings(array("data_source_type" => "Json", "report_build_options" => ["AllowMissingMembers", "RemoveEmptyParagraphs"]));
        $request = new Requests\BuildReportRequest($remoteName, $dataJson, $settings);
        $this->words->buildReport(request);
    }
}