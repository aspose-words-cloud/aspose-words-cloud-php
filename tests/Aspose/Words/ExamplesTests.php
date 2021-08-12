<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExamplesTests.php">
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

namespace Aspose\Words\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model;
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;
class ExamplesTests extends BaseTestContext
{
    public function setUp() : void
    {
        parent::setUp();
    }

    public function testExampleAcceptAllRevisions()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $acceptRequest = new Requests\AcceptAllRevisionsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->acceptAllRevisions($acceptRequest);
    }

    public function testExampleAcceptAllRevisionsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $acceptRequest = new Requests\AcceptAllRevisionsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->acceptAllRevisionsOnline($acceptRequest);
    }

    public function testExampleAppendDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $remoteFileName = "Sample.docx";

      /**
       */
      $requestDocumentListDocumentEntries0 = new \Aspose\Words\Model\DocumentEntry(array(
          "href" => $remoteFileName,
          "import_format_mode" => "KeepSourceFormatting",
      ));
      $requestDocumentListDocumentEntries = [
          $requestDocumentListDocumentEntries0,
      ];
      $requestDocumentList = new \Aspose\Words\Model\DocumentEntryList(array(
          "document_entries" => $requestDocumentListDocumentEntries,
      ));
      $appendRequest = new Requests\AppendDocumentRequest(
          $remoteFileName,
          $requestDocumentList,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->appendDocument($appendRequest);
    }

    public function testExampleAppendDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestDocumentListDocumentEntries0 = new \Aspose\Words\Model\DocumentEntry(array(
          "href" => "Sample.docx",
          "import_format_mode" => "KeepSourceFormatting",
      ));
      $requestDocumentListDocumentEntries = [
          $requestDocumentListDocumentEntries0,
      ];
      $requestDocumentList = new \Aspose\Words\Model\DocumentEntryList(array(
          "document_entries" => $requestDocumentListDocumentEntries,
      ));
      $appendRequest = new Requests\AppendDocumentOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestDocumentList,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->appendDocumentOnline($appendRequest);
    }

    public function testExampleApplyStyleToDocumentElement()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestStyleApply = new \Aspose\Words\Model\StyleApply(array(
          "style_name" => "Heading 1",
      ));
      $applyStyleRequest = new Requests\ApplyStyleToDocumentElementRequest(
          "Sample.docx",
          "paragraphs/1/paragraphFormat",
          $requestStyleApply,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->applyStyleToDocumentElement($applyStyleRequest);
    }

    public function testExampleApplyStyleToDocumentElementOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestStyleApply = new \Aspose\Words\Model\StyleApply(array(
          "style_name" => "Heading 1",
      ));
      $applyStyleRequest = new Requests\ApplyStyleToDocumentElementOnlineRequest(
          $documentsDir . "Sample.docx",
          "paragraphs/1/paragraphFormat",
          $requestStyleApply,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->applyStyleToDocumentElementOnline($applyStyleRequest);
    }

    public function testExampleBuildReport()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestReportEngineSettingsReportBuildOptions = [
          "AllowMissingMembers",
          "RemoveEmptyParagraphs",
      ];
      $requestReportEngineSettings = new \Aspose\Words\Model\ReportEngineSettings(array(
          "data_source_type" => "Json",
          "report_build_options" => $requestReportEngineSettingsReportBuildOptions,
      ));
      $buildReportRequest = new Requests\BuildReportRequest(
          "Sample.docx",
          "Data.json",
          $requestReportEngineSettings,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->buildReport($buildReportRequest);
    }

    public function testExampleBuildReportOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestReportEngineSettings = new \Aspose\Words\Model\ReportEngineSettings(array(
          "data_source_type" => "Json",
          "data_source_name" => "persons",
      ));
      $buildReportRequest = new Requests\BuildReportOnlineRequest(
          $documentsDir . "Sample.docx",
          "Data.json",
          $requestReportEngineSettings,
          NULL
      );
      $wordsApi->buildReportOnline($buildReportRequest);
    }

    public function testExampleClassify()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $classifyRequest = new Requests\ClassifyRequest(
          "Try text classification",
          "3"
      );
      $wordsApi->classify($classifyRequest);
    }

    public function testExampleClassifyDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $classifyRequest = new Requests\ClassifyDocumentRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          "3",
          NULL
      );
      $wordsApi->classifyDocument($classifyRequest);
    }

    public function testExampleClassifyDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $classifyRequest = new Requests\ClassifyDocumentOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          "3",
          NULL
      );
      $wordsApi->classifyDocumentOnline($classifyRequest);
    }

    public function testExampleCompareDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestCompareData = new \Aspose\Words\Model\CompareData(array(
          "author" => "author",
          "comparing_with_document" => "TestCompareDocument2.doc",
          "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
      ));
      $compareRequest = new Requests\CompareDocumentRequest(
          "TestCompareDocument1.doc",
          $requestCompareData,
          NULL,
          NULL,
          NULL,
          NULL,
          "/TestCompareDocumentOut.doc"
      );
      $wordsApi->compareDocument($compareRequest);
    }

    public function testExampleCompareDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestCompareData = new \Aspose\Words\Model\CompareData(array(
          "author" => "author",
          "comparing_with_document" => "TestCompareDocument2.doc",
          "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
      ));
      $compareRequest = new Requests\CompareDocumentOnlineRequest(
          $documentsDir . "compareTestDoc1.doc",
          $requestCompareData,
          $documentsDir . "compareTestDoc2.doc",
          NULL,
          NULL,
          "/TestCompareDocumentOut.doc"
      );
      $wordsApi->compareDocumentOnline($compareRequest);
    }

    public function testExampleConvertDocument()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $convertRequest = new Requests\ConvertDocumentRequest(
          $documentsDir . "Sample.docx",
          "pdf",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->convertDocument($convertRequest);
    }

    public function testExampleCopyFile()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $copyRequest = new Requests\CopyFileRequest(
          "/TestCopyFileDest.docx",
          "Sample.docx",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->copyFile($copyRequest);
    }

    public function testExampleCopyFolder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $folderToCopy = "/TestCopyFolder";

      /**
       */
      $copyRequest = new Requests\CopyFolderRequest(
          $folderToCopy . "Dest",
          $folderToCopy . "Src",
          NULL,
          NULL
      );
      $wordsApi->copyFolder($copyRequest);
    }

    public function testExampleCopyStyle()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestStyleCopy = new \Aspose\Words\Model\StyleCopy(array(
          "style_name" => "Heading 1",
      ));
      $copyRequest = new Requests\CopyStyleRequest(
          "Sample.docx",
          $requestStyleCopy,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->copyStyle($copyRequest);
    }

    public function testExampleCopyStyleOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestStyleCopy = new \Aspose\Words\Model\StyleCopy(array(
          "style_name" => "Heading 1",
      ));
      $copyRequest = new Requests\CopyStyleOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestStyleCopy,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->copyStyleOnline($copyRequest);
    }

    public function testExampleCreateDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $createRequest = new Requests\CreateDocumentRequest(
          "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->createDocument($createRequest);
    }

    public function testExampleCreateFolder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $createRequest = new Requests\CreateFolderRequest(
          "/TestCreateFolder",
          NULL
      );
      $wordsApi->createFolder($createRequest);
    }

    public function testExampleCreateOrUpdateDocumentProperty()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestProperty = new \Aspose\Words\Model\DocumentPropertyCreateOrUpdate(array(
          "value" => "Imran Anwar",
      ));
      $createRequest = new Requests\CreateOrUpdateDocumentPropertyRequest(
          "Sample.docx",
          "AsposeAuthor",
          $requestProperty,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->createOrUpdateDocumentProperty($createRequest);
    }

    public function testExampleCreateOrUpdateDocumentPropertyOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestProperty = new \Aspose\Words\Model\DocumentPropertyCreateOrUpdate(array(
          "value" => "Imran Anwar",
      ));
      $createRequest = new Requests\CreateOrUpdateDocumentPropertyOnlineRequest(
          $documentsDir . "Sample.docx",
          "AsposeAuthor",
          $requestProperty,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->createOrUpdateDocumentPropertyOnline($createRequest);
    }

    public function testExampleDeleteAllParagraphTabStops()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteAllParagraphTabStopsRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteAllParagraphTabStops($deleteRequest);
    }

    public function testExampleDeleteAllParagraphTabStopsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteAllParagraphTabStopsOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteAllParagraphTabStopsOnline($deleteRequest);
    }

    public function testExampleDeleteBorder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteBorderRequest(
          "Sample.docx",
          "left",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteBorder($deleteRequest);
    }

    public function testExampleDeleteBorderOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteBorderOnlineRequest(
          $documentsDir . "Sample.docx",
          "left",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteBorderOnline($deleteRequest);
    }

    public function testExampleDeleteBorders()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteBordersRequest(
          "Sample.docx",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteBorders($deleteRequest);
    }

    public function testExampleDeleteBordersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteBordersOnlineRequest(
          $documentsDir . "Sample.docx",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteBordersOnline($deleteRequest);
    }

    public function testExampleDeleteComment()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteCommentRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteComment($deleteRequest);
    }

    public function testExampleDeleteCommentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteCommentOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteCommentOnline($deleteRequest);
    }

    public function testExampleDeleteComments()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteCommentsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteComments($deleteRequest);
    }

    public function testExampleDeleteCommentsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteCommentsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteCommentsOnline($deleteRequest);
    }

    public function testExampleDeleteCustomXmlPart()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteCustomXmlPartRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteCustomXmlPart($deleteRequest);
    }

    public function testExampleDeleteCustomXmlPartOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteCustomXmlPartOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteCustomXmlPartOnline($deleteRequest);
    }

    public function testExampleDeleteCustomXmlParts()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteCustomXmlPartsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteCustomXmlParts($deleteRequest);
    }

    public function testExampleDeleteCustomXmlPartsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteCustomXmlPartsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteCustomXmlPartsOnline($deleteRequest);
    }

    public function testExampleDeleteDocumentProperty()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteDocumentPropertyRequest(
          "Sample.docx",
          "testProp",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteDocumentProperty($deleteRequest);
    }

    public function testExampleDeleteDocumentPropertyOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteDocumentPropertyOnlineRequest(
          $documentsDir . "Sample.docx",
          "testProp",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteDocumentPropertyOnline($deleteRequest);
    }

    public function testExampleDeleteDrawingObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteDrawingObjectRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteDrawingObject($deleteRequest);
    }

    public function testExampleDeleteDrawingObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteDrawingObjectOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteDrawingObjectOnline($deleteRequest);
    }

    public function testExampleDeleteField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFieldRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteField($deleteRequest);
    }

    public function testExampleDeleteFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFieldOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          "sections/0/paragraphs/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteFieldOnline($deleteRequest);
    }

    public function testExampleDeleteFields()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFieldsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteFields($deleteRequest);
    }

    public function testExampleDeleteFieldsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFieldsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteFieldsOnline($deleteRequest);
    }

    public function testExampleDeleteFile()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFileRequest(
          "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->deleteFile($deleteRequest);
    }

    public function testExampleDeleteFolder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFolderRequest(
          "",
          NULL,
          NULL
      );
      $wordsApi->deleteFolder($deleteRequest);
    }

    public function testExampleDeleteFootnote()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFootnoteRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteFootnote($deleteRequest);
    }

    public function testExampleDeleteFootnoteOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFootnoteOnlineRequest(
          $documentsDir . "Sample.doc",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteFootnoteOnline($deleteRequest);
    }

    public function testExampleDeleteFormField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFormFieldRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteFormField($deleteRequest);
    }

    public function testExampleDeleteFormFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteFormFieldOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          "sections/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteFormFieldOnline($deleteRequest);
    }

    public function testExampleDeleteHeaderFooter()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteHeaderFooterRequest(
          "Sample.docx",
          "",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteHeaderFooter($deleteRequest);
    }

    public function testExampleDeleteHeaderFooterOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteHeaderFooterOnlineRequest(
          $documentsDir . "Sample.doc",
          "",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteHeaderFooterOnline($deleteRequest);
    }

    public function testExampleDeleteHeadersFooters()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteHeadersFootersRequest(
          "Sample.docx",
          "",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteHeadersFooters($deleteRequest);
    }

    public function testExampleDeleteHeadersFootersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteHeadersFootersOnlineRequest(
          $documentsDir . "Sample.doc",
          "",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteHeadersFootersOnline($deleteRequest);
    }

    public function testExampleDeleteMacros()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteMacrosRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteMacros($deleteRequest);
    }

    public function testExampleDeleteMacrosOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteMacrosOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteMacrosOnline($deleteRequest);
    }

    public function testExampleDeleteOfficeMathObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteOfficeMathObjectRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteOfficeMathObject($deleteRequest);
    }

    public function testExampleDeleteOfficeMathObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteOfficeMathObjectOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteOfficeMathObjectOnline($deleteRequest);
    }

    public function testExampleDeleteParagraph()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteParagraphRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteParagraph($deleteRequest);
    }

    public function testExampleDeleteParagraphListFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteParagraphListFormatRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteParagraphListFormat($deleteRequest);
    }

    public function testExampleDeleteParagraphListFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteParagraphListFormatOnlineRequest(
          $documentsDir . "Sample.doc",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteParagraphListFormatOnline($deleteRequest);
    }

    public function testExampleDeleteParagraphOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteParagraphOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteParagraphOnline($deleteRequest);
    }

    public function testExampleDeleteParagraphTabStop()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteParagraphTabStopRequest(
          "Sample.docx",
          72.0,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteParagraphTabStop($deleteRequest);
    }

    public function testExampleDeleteParagraphTabStopOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteParagraphTabStopOnlineRequest(
          $documentsDir . "Sample.docx",
          72.0,
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteParagraphTabStopOnline($deleteRequest);
    }

    public function testExampleDeleteRun()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteRunRequest(
          "Sample.docx",
          "paragraphs/1",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteRun($deleteRequest);
    }

    public function testExampleDeleteRunOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteRunOnlineRequest(
          $documentsDir . "Sample.doc",
          "paragraphs/1",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteRunOnline($deleteRequest);
    }

    public function testExampleDeleteSection()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteSectionRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteSection($deleteRequest);
    }

    public function testExampleDeleteSectionOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteSectionOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteSectionOnline($deleteRequest);
    }

    public function testExampleDeleteTable()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteTableRequest(
          "Sample.docx",
          1,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteTable($deleteRequest);
    }

    public function testExampleDeleteTableCell()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteTableCellRequest(
          "Sample.docx",
          "sections/0/tables/2/rows/0",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteTableCell($deleteRequest);
    }

    public function testExampleDeleteTableCellOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteTableCellOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/tables/2/rows/0",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteTableCellOnline($deleteRequest);
    }

    public function testExampleDeleteTableOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteTableOnlineRequest(
          $documentsDir . "Sample.docx",
          1,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteTableOnline($deleteRequest);
    }

    public function testExampleDeleteTableRow()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteTableRowRequest(
          "Sample.docx",
          "tables/1",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteTableRow($deleteRequest);
    }

    public function testExampleDeleteTableRowOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteTableRowOnlineRequest(
          $documentsDir . "Sample.docx",
          "tables/1",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteTableRowOnline($deleteRequest);
    }

    public function testExampleDeleteWatermark()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteWatermarkRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteWatermark($deleteRequest);
    }

    public function testExampleDeleteWatermarkOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $deleteRequest = new Requests\DeleteWatermarkOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->deleteWatermarkOnline($deleteRequest);
    }

    public function testExampleDownloadFile()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $downloadRequest = new Requests\DownloadFileRequest(
          "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->downloadFile($downloadRequest);
    }

    public function testExampleExecuteMailMerge()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $mailMergeRequest = new Requests\ExecuteMailMergeRequest(
          "Sample.docx",
          "TestExecuteTemplateData.txt",
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
      $wordsApi->executeMailMerge($mailMergeRequest);
    }

    public function testExampleExecuteMailMergeOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $mailMergeRequest = new Requests\ExecuteMailMergeOnlineRequest(
          $documentsDir . "TestExecuteTemplate.doc",
          $documentsDir . "TestExecuteTemplateData.txt",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->executeMailMergeOnline($mailMergeRequest);
    }

    public function testExampleGetAvailableFonts()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetAvailableFontsRequest(
          NULL
      );
      $wordsApi->getAvailableFonts($request);
    }

    public function testExampleGetBookmarkByName()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetBookmarkByNameRequest(
          "Sample.docx",
          "aspose",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getBookmarkByName($request);
    }

    public function testExampleGetBookmarkByNameOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetBookmarkByNameOnlineRequest(
          $documentsDir . "Sample.docx",
          "aspose",
          NULL,
          NULL
      );
      $wordsApi->getBookmarkByNameOnline($request);
    }

    public function testExampleGetBookmarks()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetBookmarksRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getBookmarks($request);
    }

    public function testExampleGetBookmarksOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetBookmarksOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->getBookmarksOnline($request);
    }

    public function testExampleGetBorder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetBorderRequest(
          "Sample.docx",
          "left",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getBorder($request);
    }

    public function testExampleGetBorderOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetBorderOnlineRequest(
          $documentsDir . "Sample.docx",
          "left",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL
      );
      $wordsApi->getBorderOnline($request);
    }

    public function testExampleGetBorders()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetBordersRequest(
          "Sample.docx",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getBorders($request);
    }

    public function testExampleGetBordersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetBordersOnlineRequest(
          $documentsDir . "Sample.docx",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL
      );
      $wordsApi->getBordersOnline($request);
    }

    public function testExampleGetComment()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetCommentRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getComment($request);
    }

    public function testExampleGetCommentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetCommentOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL
      );
      $wordsApi->getCommentOnline($request);
    }

    public function testExampleGetComments()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetCommentsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getComments($request);
    }

    public function testExampleGetCommentsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetCommentsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->getCommentsOnline($request);
    }

    public function testExampleGetCustomXmlPart()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetCustomXmlPartRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getCustomXmlPart($request);
    }

    public function testExampleGetCustomXmlPartOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetCustomXmlPartOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL
      );
      $wordsApi->getCustomXmlPartOnline($request);
    }

    public function testExampleGetCustomXmlParts()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetCustomXmlPartsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getCustomXmlParts($request);
    }

    public function testExampleGetCustomXmlPartsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetCustomXmlPartsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->getCustomXmlPartsOnline($request);
    }

    public function testExampleGetDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocument($request);
    }

    public function testExampleGetDocumentDrawingObjectByIndex()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentDrawingObjectByIndexRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentDrawingObjectByIndex($request);
    }

    public function testExampleGetDocumentDrawingObjectByIndexOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentDrawingObjectByIndexOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getDocumentDrawingObjectByIndexOnline($request);
    }

    public function testExampleGetDocumentDrawingObjectImageData()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentDrawingObjectImageDataRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentDrawingObjectImageData($request);
    }

    public function testExampleGetDocumentDrawingObjectImageDataOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentDrawingObjectImageDataOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getDocumentDrawingObjectImageDataOnline($request);
    }

    public function testExampleGetDocumentDrawingObjectOleData()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentDrawingObjectOleDataRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentDrawingObjectOleData($request);
    }

    public function testExampleGetDocumentDrawingObjectOleDataOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentDrawingObjectOleDataOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getDocumentDrawingObjectOleDataOnline($request);
    }

    public function testExampleGetDocumentDrawingObjects()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentDrawingObjectsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentDrawingObjects($request);
    }

    public function testExampleGetDocumentDrawingObjectsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentDrawingObjectsOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getDocumentDrawingObjectsOnline($request);
    }

    public function testExampleGetDocumentFieldNames()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentFieldNamesRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentFieldNames($request);
    }

    public function testExampleGetDocumentFieldNamesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentFieldNamesOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          true
      );
      $wordsApi->getDocumentFieldNamesOnline($request);
    }

    public function testExampleGetDocumentHyperlinkByIndex()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentHyperlinkByIndexRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentHyperlinkByIndex($request);
    }

    public function testExampleGetDocumentHyperlinkByIndexOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentHyperlinkByIndexOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL
      );
      $wordsApi->getDocumentHyperlinkByIndexOnline($request);
    }

    public function testExampleGetDocumentHyperlinks()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentHyperlinksRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentHyperlinks($request);
    }

    public function testExampleGetDocumentHyperlinksOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentHyperlinksOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->getDocumentHyperlinksOnline($request);
    }

    public function testExampleGetDocumentProperties()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentPropertiesRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentProperties($request);
    }

    public function testExampleGetDocumentPropertiesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentPropertiesOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->getDocumentPropertiesOnline($request);
    }

    public function testExampleGetDocumentProperty()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentPropertyRequest(
          "Sample.docx",
          "Author",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentProperty($request);
    }

    public function testExampleGetDocumentPropertyOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentPropertyOnlineRequest(
          $documentsDir . "Sample.docx",
          "Author",
          NULL,
          NULL
      );
      $wordsApi->getDocumentPropertyOnline($request);
    }

    public function testExampleGetDocumentProtection()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentProtectionRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentProtection($request);
    }

    public function testExampleGetDocumentProtectionOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentProtectionOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->getDocumentProtectionOnline($request);
    }

    public function testExampleGetDocumentStatistics()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentStatisticsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentStatistics($request);
    }

    public function testExampleGetDocumentStatisticsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentStatisticsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getDocumentStatisticsOnline($request);
    }

    public function testExampleGetDocumentWithFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetDocumentWithFormatRequest(
          "Sample.docx",
          "text",
          NULL,
          NULL,
          NULL,
          NULL,
          "/TestGetDocumentWithFormatAndOutPath.text",
          NULL
      );
      $wordsApi->getDocumentWithFormat($request);
    }

    public function testExampleGetField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFieldRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getField($request);
    }

    public function testExampleGetFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFieldOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          "sections/0/paragraphs/0",
          NULL,
          NULL
      );
      $wordsApi->getFieldOnline($request);
    }

    public function testExampleGetFields()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFieldsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getFields($request);
    }

    public function testExampleGetFieldsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFieldsOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getFieldsOnline($request);
    }

    public function testExampleGetFilesList()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFilesListRequest(
          "",
          NULL
      );
      $wordsApi->getFilesList($request);
    }

    public function testExampleGetFootnote()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFootnoteRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getFootnote($request);
    }

    public function testExampleGetFootnoteOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFootnoteOnlineRequest(
          $documentsDir . "Sample.doc",
          0,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getFootnoteOnline($request);
    }

    public function testExampleGetFootnotes()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFootnotesRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getFootnotes($request);
    }

    public function testExampleGetFootnotesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFootnotesOnlineRequest(
          $documentsDir . "Sample.doc",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getFootnotesOnline($request);
    }

    public function testExampleGetFormField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFormFieldRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getFormField($request);
    }

    public function testExampleGetFormFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFormFieldOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getFormFieldOnline($request);
    }

    public function testExampleGetFormFields()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFormFieldsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getFormFields($request);
    }

    public function testExampleGetFormFieldsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetFormFieldsOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getFormFieldsOnline($request);
    }

    public function testExampleGetHeaderFooter()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetHeaderFooterRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getHeaderFooter($request);
    }

    public function testExampleGetHeaderFooterOfSection()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetHeaderFooterOfSectionRequest(
          "Sample.docx",
          0,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getHeaderFooterOfSection($request);
    }

    public function testExampleGetHeaderFooterOfSectionOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetHeaderFooterOfSectionOnlineRequest(
          $documentsDir . "Sample.doc",
          0,
          0,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getHeaderFooterOfSectionOnline($request);
    }

    public function testExampleGetHeaderFooterOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetHeaderFooterOnlineRequest(
          $documentsDir . "Sample.doc",
          0,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getHeaderFooterOnline($request);
    }

    public function testExampleGetHeaderFooters()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetHeaderFootersRequest(
          "Sample.docx",
          "",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getHeaderFooters($request);
    }

    public function testExampleGetHeaderFootersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetHeaderFootersOnlineRequest(
          $documentsDir . "Sample.doc",
          "",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getHeaderFootersOnline($request);
    }

    public function testExampleGetList()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetListRequest(
          "TestGetLists.doc",
          1,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getList($request);
    }

    public function testExampleGetListOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetListOnlineRequest(
          $documentsDir . "Sample.doc",
          1,
          NULL,
          NULL
      );
      $wordsApi->getListOnline($request);
    }

    public function testExampleGetLists()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetListsRequest(
          "TestGetLists.doc",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getLists($request);
    }

    public function testExampleGetListsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetListsOnlineRequest(
          $documentsDir . "Sample.doc",
          NULL,
          NULL
      );
      $wordsApi->getListsOnline($request);
    }

    public function testExampleGetOfficeMathObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetOfficeMathObjectRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getOfficeMathObject($request);
    }

    public function testExampleGetOfficeMathObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetOfficeMathObjectOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getOfficeMathObjectOnline($request);
    }

    public function testExampleGetOfficeMathObjects()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetOfficeMathObjectsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getOfficeMathObjects($request);
    }

    public function testExampleGetOfficeMathObjectsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetOfficeMathObjectsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getOfficeMathObjectsOnline($request);
    }

    public function testExampleGetParagraph()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getParagraph($request);
    }

    public function testExampleGetParagraphFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphFormatRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getParagraphFormat($request);
    }

    public function testExampleGetParagraphFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphFormatOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getParagraphFormatOnline($request);
    }

    public function testExampleGetParagraphListFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphListFormatRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getParagraphListFormat($request);
    }

    public function testExampleGetParagraphListFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphListFormatOnlineRequest(
          $documentsDir . "Sample.doc",
          0,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getParagraphListFormatOnline($request);
    }

    public function testExampleGetParagraphOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getParagraphOnline($request);
    }

    public function testExampleGetParagraphs()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getParagraphs($request);
    }

    public function testExampleGetParagraphsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphsOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0",
          NULL,
          NULL
      );
      $wordsApi->getParagraphsOnline($request);
    }

    public function testExampleGetParagraphTabStops()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphTabStopsRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getParagraphTabStops($request);
    }

    public function testExampleGetParagraphTabStopsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetParagraphTabStopsOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getParagraphTabStopsOnline($request);
    }

    public function testExampleGetPublicKey()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetPublicKeyRequest(
      );
      $wordsApi->getPublicKey($request);
    }

    public function testExampleGetRangeText()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetRangeTextRequest(
          "Sample.docx",
          "id0.0.0",
          "id0.0.1",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getRangeText($request);
    }

    public function testExampleGetRangeTextOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetRangeTextOnlineRequest(
          $documentsDir . "Sample.doc",
          "id0.0.0",
          "id0.0.1",
          NULL,
          NULL
      );
      $wordsApi->getRangeTextOnline($request);
    }

    public function testExampleGetRun()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetRunRequest(
          "Sample.docx",
          "paragraphs/0",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getRun($request);
    }

    public function testExampleGetRunFont()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetRunFontRequest(
          "Sample.docx",
          "paragraphs/0",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getRunFont($request);
    }

    public function testExampleGetRunFontOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetRunFontOnlineRequest(
          $documentsDir . "Sample.docx",
          "paragraphs/0",
          0,
          NULL,
          NULL
      );
      $wordsApi->getRunFontOnline($request);
    }

    public function testExampleGetRunOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetRunOnlineRequest(
          $documentsDir . "Sample.docx",
          "paragraphs/0",
          0,
          NULL,
          NULL
      );
      $wordsApi->getRunOnline($request);
    }

    public function testExampleGetRuns()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetRunsRequest(
          "Sample.docx",
          "sections/0/paragraphs/0",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getRuns($request);
    }

    public function testExampleGetRunsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetRunsOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/paragraphs/0",
          NULL,
          NULL
      );
      $wordsApi->getRunsOnline($request);
    }

    public function testExampleGetSection()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetSectionRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getSection($request);
    }

    public function testExampleGetSectionOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetSectionOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL
      );
      $wordsApi->getSectionOnline($request);
    }

    public function testExampleGetSectionPageSetup()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetSectionPageSetupRequest(
          "Sample.docx",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getSectionPageSetup($request);
    }

    public function testExampleGetSectionPageSetupOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetSectionPageSetupOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          NULL,
          NULL
      );
      $wordsApi->getSectionPageSetupOnline($request);
    }

    public function testExampleGetSections()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetSectionsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getSections($request);
    }

    public function testExampleGetSectionsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetSectionsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->getSectionsOnline($request);
    }

    public function testExampleGetStyle()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetStyleRequest(
          "Sample.docx",
          "Heading 1",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getStyle($request);
    }

    public function testExampleGetStyleFromDocumentElement()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetStyleFromDocumentElementRequest(
          "Sample.docx",
          "paragraphs/1/paragraphFormat",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getStyleFromDocumentElement($request);
    }

    public function testExampleGetStyleFromDocumentElementOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetStyleFromDocumentElementOnlineRequest(
          $documentsDir . "Sample.docx",
          "paragraphs/1/paragraphFormat",
          NULL,
          NULL
      );
      $wordsApi->getStyleFromDocumentElementOnline($request);
    }

    public function testExampleGetStyleOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetStyleOnlineRequest(
          $documentsDir . "Sample.docx",
          "Heading 1",
          NULL,
          NULL
      );
      $wordsApi->getStyleOnline($request);
    }

    public function testExampleGetStyles()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetStylesRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getStyles($request);
    }

    public function testExampleGetStylesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetStylesOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->getStylesOnline($request);
    }

    public function testExampleGetTable()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableRequest(
          "Sample.docx",
          1,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTable($request);
    }

    public function testExampleGetTableCell()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableCellRequest(
          "Sample.docx",
          "sections/0/tables/2/rows/0",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTableCell($request);
    }

    public function testExampleGetTableCellFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableCellFormatRequest(
          "Sample.docx",
          "sections/0/tables/2/rows/0",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTableCellFormat($request);
    }

    public function testExampleGetTableCellFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableCellFormatOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/tables/2/rows/0",
          0,
          NULL,
          NULL
      );
      $wordsApi->getTableCellFormatOnline($request);
    }

    public function testExampleGetTableCellOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableCellOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/tables/2/rows/0",
          0,
          NULL,
          NULL
      );
      $wordsApi->getTableCellOnline($request);
    }

    public function testExampleGetTableOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableOnlineRequest(
          $documentsDir . "Sample.docx",
          1,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTableOnline($request);
    }

    public function testExampleGetTableProperties()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTablePropertiesRequest(
          "Sample.docx",
          1,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTableProperties($request);
    }

    public function testExampleGetTablePropertiesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTablePropertiesOnlineRequest(
          $documentsDir . "Sample.docx",
          1,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTablePropertiesOnline($request);
    }

    public function testExampleGetTableRow()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableRowRequest(
          "Sample.docx",
          "tables/1",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTableRow($request);
    }

    public function testExampleGetTableRowFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableRowFormatRequest(
          "Sample.docx",
          "sections/0/tables/2",
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTableRowFormat($request);
    }

    public function testExampleGetTableRowFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableRowFormatOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/tables/2",
          0,
          NULL,
          NULL
      );
      $wordsApi->getTableRowFormatOnline($request);
    }

    public function testExampleGetTableRowOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTableRowOnlineRequest(
          $documentsDir . "Sample.docx",
          "tables/1",
          0,
          NULL,
          NULL
      );
      $wordsApi->getTableRowOnline($request);
    }

    public function testExampleGetTables()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTablesRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTables($request);
    }

    public function testExampleGetTablesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $request = new Requests\GetTablesOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->getTablesOnline($request);
    }

    public function testExampleInsertComment()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestCommentRangeStartNode = new \Aspose\Words\Model\NodeLink(array(
          "node_id" => "0.3.0.3",
      ));
      $requestCommentRangeStart = new \Aspose\Words\Model\DocumentPosition(array(
          "node" => $requestCommentRangeStartNode,
          "offset" => 0,
      ));
      $requestCommentRangeEndNode = new \Aspose\Words\Model\NodeLink(array(
          "node_id" => "0.3.0.3",
      ));
      $requestCommentRangeEnd = new \Aspose\Words\Model\DocumentPosition(array(
          "node" => $requestCommentRangeEndNode,
          "offset" => 0,
      ));
      $requestComment = new \Aspose\Words\Model\CommentInsert(array(
          "range_start" => $requestCommentRangeStart,
          "range_end" => $requestCommentRangeEnd,
          "initial" => "IA",
          "author" => "Imran Anwar",
          "text" => "A new Comment",
      ));
      $insertRequest = new Requests\InsertCommentRequest(
          "Sample.docx",
          $requestComment,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertComment($insertRequest);
    }

    public function testExampleInsertCommentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestCommentRangeStartNode = new \Aspose\Words\Model\NodeLink(array(
          "node_id" => "0.3.0.3",
      ));
      $requestCommentRangeStart = new \Aspose\Words\Model\DocumentPosition(array(
          "node" => $requestCommentRangeStartNode,
          "offset" => 0,
      ));
      $requestCommentRangeEndNode = new \Aspose\Words\Model\NodeLink(array(
          "node_id" => "0.3.0.3",
      ));
      $requestCommentRangeEnd = new \Aspose\Words\Model\DocumentPosition(array(
          "node" => $requestCommentRangeEndNode,
          "offset" => 0,
      ));
      $requestComment = new \Aspose\Words\Model\CommentInsert(array(
          "range_start" => $requestCommentRangeStart,
          "range_end" => $requestCommentRangeEnd,
          "initial" => "IA",
          "author" => "Imran Anwar",
          "text" => "A new Comment",
      ));
      $insertRequest = new Requests\InsertCommentOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestComment,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertCommentOnline($insertRequest);
    }

    public function testExampleInsertCustomXmlPart()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestCustomXmlPart = new \Aspose\Words\Model\CustomXmlPartInsert(array(
          "id" => "hello",
          "data" => "<data>Hello world</data>",
      ));
      $insertRequest = new Requests\InsertCustomXmlPartRequest(
          "Sample.docx",
          $requestCustomXmlPart,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertCustomXmlPart($insertRequest);
    }

    public function testExampleInsertCustomXmlPartOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestCustomXmlPart = new \Aspose\Words\Model\CustomXmlPartInsert(array(
          "id" => "hello",
          "data" => "<data>Hello world</data>",
      ));
      $insertRequest = new Requests\InsertCustomXmlPartOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestCustomXmlPart,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertCustomXmlPartOnline($insertRequest);
    }

    public function testExampleInsertDrawingObject()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestDrawingObject = new \Aspose\Words\Model\DrawingObjectInsert(array(
          "height" => 0,
          "left" => 0,
          "top" => 0,
          "width" => 0,
          "relative_horizontal_position" => "Margin",
          "relative_vertical_position" => "Margin",
          "wrap_type" => "Inline",
      ));
      $insertRequest = new Requests\InsertDrawingObjectRequest(
          "Sample.docx",
          $requestDrawingObject,
          $documentsDir . "Common/aspose-cloud.png",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertDrawingObject($insertRequest);
    }

    public function testExampleInsertDrawingObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestDrawingObject = new \Aspose\Words\Model\DrawingObjectInsert(array(
          "height" => 0,
          "left" => 0,
          "top" => 0,
          "width" => 0,
          "relative_horizontal_position" => "Margin",
          "relative_vertical_position" => "Margin",
          "wrap_type" => "Inline",
      ));
      $insertRequest = new Requests\InsertDrawingObjectOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestDrawingObject,
          $documentsDir . "Common/aspose-cloud.png",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertDrawingObjectOnline($insertRequest);
    }

    public function testExampleInsertField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestField = new \Aspose\Words\Model\FieldInsert(array(
          "field_code" => "{ NUMPAGES }",
      ));
      $insertRequest = new Requests\InsertFieldRequest(
          "Sample.docx",
          $requestField,
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
      $wordsApi->insertField($insertRequest);
    }

    public function testExampleInsertFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestField = new \Aspose\Words\Model\FieldInsert(array(
          "field_code" => "{ NUMPAGES }",
      ));
      $insertRequest = new Requests\InsertFieldOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestField,
          "sections/0/paragraphs/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertFieldOnline($insertRequest);
    }

    public function testExampleInsertFootnote()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestFootnoteDto = new \Aspose\Words\Model\FootnoteInsert(array(
          "footnote_type" => "Endnote",
          "text" => "test endnote",
      ));
      $insertRequest = new Requests\InsertFootnoteRequest(
          "Sample.docx",
          $requestFootnoteDto,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertFootnote($insertRequest);
    }

    public function testExampleInsertFootnoteOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestFootnoteDto = new \Aspose\Words\Model\FootnoteInsert(array(
          "footnote_type" => "Endnote",
          "text" => "test endnote",
      ));
      $insertRequest = new Requests\InsertFootnoteOnlineRequest(
          $documentsDir . "Sample.doc",
          $requestFootnoteDto,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertFootnoteOnline($insertRequest);
    }

    public function testExampleInsertFormField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
          "name" => "FullName",
          "enabled" => true,
          "calculate_on_exit" => true,
          "status_text" => "",
          "text_input_type" => "Regular",
          "text_input_default" => "123",
          "text_input_format" => "UPPERCASE",
      ));
      $insertRequest = new Requests\InsertFormFieldRequest(
          "Sample.docx",
          $requestFormField,
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
      $wordsApi->insertFormField($insertRequest);
    }

    public function testExampleInsertFormFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
          "name" => "FullName",
          "enabled" => true,
          "calculate_on_exit" => true,
          "status_text" => "",
          "text_input_type" => "Regular",
          "text_input_default" => "123",
          "text_input_format" => "UPPERCASE",
      ));
      $insertRequest = new Requests\InsertFormFieldOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestFormField,
          "sections/0/paragraphs/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertFormFieldOnline($insertRequest);
    }

    public function testExampleInsertHeaderFooter()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $insertRequest = new Requests\InsertHeaderFooterRequest(
          "Sample.docx",
          "",
          "FooterEven",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertHeaderFooter($insertRequest);
    }

    public function testExampleInsertHeaderFooterOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $insertRequest = new Requests\InsertHeaderFooterOnlineRequest(
          $documentsDir . "Sample.doc",
          "",
          "FooterEven",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertHeaderFooterOnline($insertRequest);
    }

    public function testExampleInsertList()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestListInsert = new \Aspose\Words\Model\ListInsert(array(
          "template" => "OutlineLegal",
      ));
      $insertRequest = new Requests\InsertListRequest(
          "TestGetLists.doc",
          $requestListInsert,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertList($insertRequest);
    }

    public function testExampleInsertListOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestListInsert = new \Aspose\Words\Model\ListInsert(array(
          "template" => "OutlineLegal",
      ));
      $insertRequest = new Requests\InsertListOnlineRequest(
          $documentsDir . "Sample.doc",
          $requestListInsert,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertListOnline($insertRequest);
    }

    public function testExampleInsertOrUpdateParagraphTabStop()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestTabStopInsertDto = new \Aspose\Words\Model\TabStopInsert(array(
          "alignment" => "Left",
          "leader" => "None",
          "position" => 100.0,
      ));
      $insertRequest = new Requests\InsertOrUpdateParagraphTabStopRequest(
          "Sample.docx",
          0,
          $requestTabStopInsertDto,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertOrUpdateParagraphTabStop($insertRequest);
    }

    public function testExampleInsertOrUpdateParagraphTabStopOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestTabStopInsertDto = new \Aspose\Words\Model\TabStopInsert(array(
          "alignment" => "Left",
          "leader" => "None",
          "position" => 72,
      ));
      $insertRequest = new Requests\InsertOrUpdateParagraphTabStopOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestTabStopInsertDto,
          0,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertOrUpdateParagraphTabStopOnline($insertRequest);
    }

    public function testExampleInsertPageNumbers()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestPageNumber = new \Aspose\Words\Model\PageNumber(array(
          "alignment" => "center",
          "format" => "{PAGE} of {NUMPAGES}",
      ));
      $insertRequest = new Requests\InsertPageNumbersRequest(
          "Sample.docx",
          $requestPageNumber,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertPageNumbers($insertRequest);
    }

    public function testExampleInsertPageNumbersOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestPageNumber = new \Aspose\Words\Model\PageNumber(array(
          "alignment" => "center",
          "format" => "{PAGE} of {NUMPAGES}",
      ));
      $insertRequest = new Requests\InsertPageNumbersOnlineRequest(
          $documentsDir . "Common/Sample.docx",
          $requestPageNumber,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertPageNumbersOnline($insertRequest);
    }

    public function testExampleInsertParagraph()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestParagraph = new \Aspose\Words\Model\ParagraphInsert(array(
          "text" => "This is a new paragraph for your document",
      ));
      $insertRequest = new Requests\InsertParagraphRequest(
          "Sample.docx",
          $requestParagraph,
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
      $wordsApi->insertParagraph($insertRequest);
    }

    public function testExampleInsertParagraphOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestParagraph = new \Aspose\Words\Model\ParagraphInsert(array(
          "text" => "This is a new paragraph for your document",
      ));
      $insertRequest = new Requests\InsertParagraphOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestParagraph,
          "sections/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertParagraphOnline($insertRequest);
    }

    public function testExampleInsertRun()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestRun = new \Aspose\Words\Model\RunInsert(array(
          "text" => "run with text",
      ));
      $insertRequest = new Requests\InsertRunRequest(
          "Sample.docx",
          "paragraphs/1",
          $requestRun,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertRun($insertRequest);
    }

    public function testExampleInsertRunOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestRun = new \Aspose\Words\Model\RunInsert(array(
          "text" => "run with text",
      ));
      $insertRequest = new Requests\InsertRunOnlineRequest(
          $documentsDir . "Sample.doc",
          "paragraphs/1",
          $requestRun,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertRunOnline($insertRequest);
    }

    public function testExampleInsertStyle()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestStyleInsert = new \Aspose\Words\Model\StyleInsert(array(
          "style_name" => "My Style",
          "style_type" => "Paragraph",
      ));
      $insertRequest = new Requests\InsertStyleRequest(
          "Sample.docx",
          $requestStyleInsert,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertStyle($insertRequest);
    }

    public function testExampleInsertStyleOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestStyleInsert = new \Aspose\Words\Model\StyleInsert(array(
          "style_name" => "My Style",
          "style_type" => "Paragraph",
      ));
      $insertRequest = new Requests\InsertStyleOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestStyleInsert,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertStyleOnline($insertRequest);
    }

    public function testExampleInsertTable()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestTable = new \Aspose\Words\Model\TableInsert(array(
          "columns_count" => 5,
          "rows_count" => 4,
      ));
      $insertRequest = new Requests\InsertTableRequest(
          "Sample.docx",
          $requestTable,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertTable($insertRequest);
    }

    public function testExampleInsertTableCell()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestCell = new \Aspose\Words\Model\TableCellInsert(array(
      ));
      $insertRequest = new Requests\InsertTableCellRequest(
          "Sample.docx",
          "sections/0/tables/2/rows/0",
          $requestCell,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertTableCell($insertRequest);
    }

    public function testExampleInsertTableCellOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestCell = new \Aspose\Words\Model\TableCellInsert(array(
      ));
      $insertRequest = new Requests\InsertTableCellOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/tables/2/rows/0",
          $requestCell,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertTableCellOnline($insertRequest);
    }

    public function testExampleInsertTableOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestTable = new \Aspose\Words\Model\TableInsert(array(
          "columns_count" => 5,
          "rows_count" => 4,
      ));
      $insertRequest = new Requests\InsertTableOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestTable,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertTableOnline($insertRequest);
    }

    public function testExampleInsertTableRow()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestRow = new \Aspose\Words\Model\TableRowInsert(array(
          "columns_count" => 5,
      ));
      $insertRequest = new Requests\InsertTableRowRequest(
          "Sample.docx",
          "sections/0/tables/2",
          $requestRow,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertTableRow($insertRequest);
    }

    public function testExampleInsertTableRowOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestRow = new \Aspose\Words\Model\TableRowInsert(array(
          "columns_count" => 5,
      ));
      $insertRequest = new Requests\InsertTableRowOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/tables/2",
          $requestRow,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertTableRowOnline($insertRequest);
    }

    public function testExampleInsertWatermarkImage()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $insertRequest = new Requests\InsertWatermarkImageRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          "Sample.png"
      );
      $wordsApi->insertWatermarkImage($insertRequest);
    }

    public function testExampleInsertWatermarkImageOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $insertRequest = new Requests\InsertWatermarkImageOnlineRequest(
          $documentsDir . "Sample.docx",
          $documentsDir . "Common/aspose-cloud.png",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertWatermarkImageOnline($insertRequest);
    }

    public function testExampleInsertWatermarkText()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestWatermarkText = new \Aspose\Words\Model\WatermarkText(array(
          "text" => "This is the text",
          "rotation_angle" => 90.0,
      ));
      $insertRequest = new Requests\InsertWatermarkTextRequest(
          "Sample.docx",
          $requestWatermarkText,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertWatermarkText($insertRequest);
    }

    public function testExampleInsertWatermarkTextOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestWatermarkText = new \Aspose\Words\Model\WatermarkText(array(
          "text" => "This is the text",
          "rotation_angle" => 90,
      ));
      $insertRequest = new Requests\InsertWatermarkTextOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestWatermarkText,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->insertWatermarkTextOnline($insertRequest);
    }

    public function testExampleLoadWebDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestDataSaveOptions = new \Aspose\Words\Model\SaveOptionsData(array(
          "file_name" => "google.doc",
          "save_format" => "doc",
          "dml_effects_rendering_mode" => "1",
          "dml_rendering_mode" => "1",
          "update_sdt_content" => false,
          "zip_output" => false,
      ));
      $requestData = new \Aspose\Words\Model\LoadWebDocumentData(array(
          "loading_document_url" => "http://google.com",
          "save_options" => $requestDataSaveOptions,
      ));
      $loadRequest = new Requests\LoadWebDocumentRequest(
          $requestData,
          NULL
      );
      $wordsApi->loadWebDocument($loadRequest);
    }

    public function testExampleMoveFile()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $moveRequest = new Requests\MoveFileRequest(
          "/TestMoveFileDest_Sample.docx",
          "Sample.docx",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->moveFile($moveRequest);
    }

    public function testExampleMoveFolder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $moveRequest = new Requests\MoveFolderRequest(
          "/TestMoveFolderDest_Sample",
          "/TestMoveFolderSrc",
          NULL,
          NULL
      );
      $wordsApi->moveFolder($moveRequest);
    }

    public function testExampleOptimizeDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestOptions = new \Aspose\Words\Model\OptimizationOptions(array(
          "ms_word_version" => "Word2002",
      ));
      $optimizeRequest = new Requests\OptimizeDocumentRequest(
          "Sample.docx",
          $requestOptions,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->optimizeDocument($optimizeRequest);
    }

    public function testExampleOptimizeDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestOptions = new \Aspose\Words\Model\OptimizationOptions(array(
          "ms_word_version" => "Word2002",
      ));
      $optimizeRequest = new Requests\OptimizeDocumentOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestOptions,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->optimizeDocumentOnline($optimizeRequest);
    }

    public function testExampleProtectDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
          "password" => "123",
          "protection_type" => "ReadOnly",
      ));
      $protectRequest = new Requests\ProtectDocumentRequest(
          "Sample.docx",
          $requestProtectionRequest,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->protectDocument($protectRequest);
    }

    public function testExampleProtectDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
          "new_password" => "123",
      ));
      $protectRequest = new Requests\ProtectDocumentOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestProtectionRequest,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->protectDocumentOnline($protectRequest);
    }

    public function testExampleRejectAllRevisions()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $rejectRequest = new Requests\RejectAllRevisionsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->rejectAllRevisions($rejectRequest);
    }

    public function testExampleRejectAllRevisionsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $rejectRequest = new Requests\RejectAllRevisionsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->rejectAllRevisionsOnline($rejectRequest);
    }

    public function testExampleRemoveRange()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $removeRequest = new Requests\RemoveRangeRequest(
          "Sample.docx",
          "id0.0.0",
          "id0.0.1",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->removeRange($removeRequest);
    }

    public function testExampleRemoveRangeOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $removeRequest = new Requests\RemoveRangeOnlineRequest(
          $documentsDir . "Sample.doc",
          "id0.0.0",
          "id0.0.1",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->removeRangeOnline($removeRequest);
    }

    public function testExampleRenderDrawingObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderDrawingObjectRequest(
          "Sample.docx",
          "png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderDrawingObject($renderRequest);
    }

    public function testExampleRenderDrawingObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderDrawingObjectOnlineRequest(
          $documentsDir . "Sample.docx",
          "png",
          0,
          "sections/0",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderDrawingObjectOnline($renderRequest);
    }

    public function testExampleRenderMathObject()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderMathObjectRequest(
          "Sample.docx",
          "png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderMathObject($renderRequest);
    }

    public function testExampleRenderMathObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderMathObjectOnlineRequest(
          $documentsDir . "Sample.docx",
          "png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderMathObjectOnline($renderRequest);
    }

    public function testExampleRenderPage()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderPageRequest(
          "Sample.docx",
          1,
          "bmp",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderPage($renderRequest);
    }

    public function testExampleRenderPageOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderPageOnlineRequest(
          $documentsDir . "Sample.docx",
          1,
          "bmp",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderPageOnline($renderRequest);
    }

    public function testExampleRenderParagraph()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderParagraphRequest(
          "Sample.docx",
          "png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderParagraph($renderRequest);
    }

    public function testExampleRenderParagraphOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderParagraphOnlineRequest(
          $documentsDir . "Sample.docx",
          "png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderParagraphOnline($renderRequest);
    }

    public function testExampleRenderTable()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderTableRequest(
          "Sample.docx",
          "png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderTable($renderRequest);
    }

    public function testExampleRenderTableOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $renderRequest = new Requests\RenderTableOnlineRequest(
          $documentsDir . "Sample.docx",
          "png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->renderTableOnline($renderRequest);
    }

    public function testExampleReplaceText()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestReplaceText = new \Aspose\Words\Model\ReplaceTextParameters(array(
          "old_value" => "Testing",
          "new_value" => "Aspose testing",
      ));
      $replaceRequest = new Requests\ReplaceTextRequest(
          "Sample.docx",
          $requestReplaceText,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->replaceText($replaceRequest);
    }

    public function testExampleReplaceTextOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestReplaceText = new \Aspose\Words\Model\ReplaceTextParameters(array(
          "old_value" => "aspose",
          "new_value" => "aspose new",
      ));
      $replaceRequest = new Requests\ReplaceTextOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestReplaceText,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->replaceTextOnline($replaceRequest);
    }

    public function testExampleReplaceWithText()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestRangeText = new \Aspose\Words\Model\ReplaceRange(array(
          "text" => "Replaced header",
      ));
      $replaceRequest = new Requests\ReplaceWithTextRequest(
          "Sample.docx",
          "id0.0.0",
          $requestRangeText,
          "id0.0.1",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->replaceWithText($replaceRequest);
    }

    public function testExampleReplaceWithTextOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestRangeText = new \Aspose\Words\Model\ReplaceRange(array(
          "text" => "Replaced header",
      ));
      $replaceRequest = new Requests\ReplaceWithTextOnlineRequest(
          $documentsDir . "Sample.doc",
          "id0.0.0",
          $requestRangeText,
          "id0.0.1",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->replaceWithTextOnline($replaceRequest);
    }

    public function testExampleResetCache()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $resetRequest = new Requests\ResetCacheRequest(
      );
      $wordsApi->resetCache($resetRequest);
    }

    public function testExampleSaveAs()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
          "save_format" => "docx",
          "file_name" => "/TestSaveAsFromPdfToDoc.docx",
      ));
      $saveRequest = new Requests\SaveAsRequest(
          "Sample.docx",
          $requestSaveOptionsData,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->saveAs($saveRequest);
    }

    public function testExampleSaveAsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
          "save_format" => "pdf",
          "file_name" => "/TestSaveAs.pdf",
      ));
      $saveRequest = new Requests\SaveAsOnlineRequest(
          $documentsDir . "Common/test_multi_pages.docx",
          $requestSaveOptionsData,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->saveAsOnline($saveRequest);
    }

    public function testExampleSaveAsRange()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestDocumentParameters = new \Aspose\Words\Model\RangeDocument(array(
          "document_name" => "/NewDoc.docx",
      ));
      $saveRequest = new Requests\SaveAsRangeRequest(
          "Sample.docx",
          "id0.0.0",
          $requestDocumentParameters,
          "id0.0.1",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->saveAsRange($saveRequest);
    }

    public function testExampleSaveAsRangeOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestDocumentParameters = new \Aspose\Words\Model\RangeDocument(array(
          "document_name" => "/NewDoc.docx",
      ));
      $saveRequest = new Requests\SaveAsRangeOnlineRequest(
          $documentsDir . "Sample.doc",
          "id0.0.0",
          $requestDocumentParameters,
          "id0.0.1",
          NULL,
          NULL
      );
      $wordsApi->saveAsRangeOnline($saveRequest);
    }

    public function testExampleSaveAsTiff()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestSaveOptions = new \Aspose\Words\Model\TiffSaveOptionsData(array(
          "save_format" => "tiff",
          "file_name" => "/abc.tiff",
      ));
      $saveRequest = new Requests\SaveAsTiffRequest(
          "Sample.docx",
          $requestSaveOptions,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
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
      $wordsApi->saveAsTiff($saveRequest);
    }

    public function testExampleSaveAsTiffOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestSaveOptions = new \Aspose\Words\Model\TiffSaveOptionsData(array(
          "save_format" => "tiff",
          "file_name" => "/abc.tiff",
      ));
      $saveRequest = new Requests\SaveAsTiffOnlineRequest(
          $documentsDir . "Common/test_multi_pages.docx",
          $requestSaveOptions,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
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
      $wordsApi->saveAsTiffOnline($saveRequest);
    }

    public function testExampleSearch()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $searchRequest = new Requests\SearchRequest(
          "Sample.docx",
          "aspose",
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->search($searchRequest);
    }

    public function testExampleSearchOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $searchRequest = new Requests\SearchOnlineRequest(
          $documentsDir . "Sample.docx",
          "aspose",
          NULL,
          NULL
      );
      $wordsApi->searchOnline($searchRequest);
    }

    public function testExampleSplitDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $splitRequest = new Requests\SplitDocumentRequest(
          "Sample.docx",
          "text",
          NULL,
          NULL,
          NULL,
          NULL,
          "/TestSplitDocument.text",
          1,
          2,
          NULL,
          NULL
      );
      $wordsApi->splitDocument($splitRequest);
    }

    public function testExampleSplitDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $splitRequest = new Requests\SplitDocumentOnlineRequest(
          $documentsDir . "Sample.docx",
          "text",
          NULL,
          NULL,
          "/TestSplitDocument.text",
          1,
          2,
          NULL,
          NULL
      );
      $wordsApi->splitDocumentOnline($splitRequest);
    }

    public function testExampleUnprotectDocument()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
          "password" => "aspose",
      ));
      $unprotectRequest = new Requests\UnprotectDocumentRequest(
          "Sample.docx",
          $requestProtectionRequest,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->unprotectDocument($unprotectRequest);
    }

    public function testExampleUnprotectDocumentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
          "password" => "aspose",
      ));
      $unprotectRequest = new Requests\UnprotectDocumentOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestProtectionRequest,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->unprotectDocumentOnline($unprotectRequest);
    }

    public function testExampleUpdateBookmark()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      $bookmarkName = "aspose";

      /**
       */
      $requestBookmarkData = new \Aspose\Words\Model\BookmarkData(array(
          "name" => $bookmarkName,
          "text" => "This will be the text for Aspose",
      ));
      $updateRequest = new Requests\UpdateBookmarkRequest(
          "Sample.docx",
          $bookmarkName,
          $requestBookmarkData,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateBookmark($updateRequest);
    }

    public function testExampleUpdateBookmarkOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $bookmarkName = "aspose";

      /**
       */
      $requestBookmarkData = new \Aspose\Words\Model\BookmarkData(array(
          "name" => $bookmarkName,
          "text" => "This will be the text for Aspose",
      ));
      $updateRequest = new Requests\UpdateBookmarkOnlineRequest(
          $documentsDir . "Sample.docx",
          $bookmarkName,
          $requestBookmarkData,
          NULL,
          NULL,
          "Sample.docx",
          NULL,
          NULL
      );
      $wordsApi->updateBookmarkOnline($updateRequest);
    }

    public function testExampleUpdateBorder()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestBorderPropertiesColor = new \Aspose\Words\Model\XmlColor(array(
          "web" => "#AABBCC",
      ));
      $requestBorderProperties = new \Aspose\Words\Model\Border(array(
          "border_type" => "Left",
          "color" => $requestBorderPropertiesColor,
          "distance_from_text" => 6.0,
          "line_style" => "DashDotStroker",
          "line_width" => 2.0,
          "shadow" => true,
      ));
      $updateRequest = new Requests\UpdateBorderRequest(
          "Sample.docx",
          "left",
          $requestBorderProperties,
          "tables/1/rows/0/cells/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateBorder($updateRequest);
    }

    public function testExampleUpdateBorderOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestBorderPropertiesColor = new \Aspose\Words\Model\XmlColor(array(
          "web" => "#AABBCC",
      ));
      $requestBorderProperties = new \Aspose\Words\Model\Border(array(
          "border_type" => "Left",
          "color" => $requestBorderPropertiesColor,
          "distance_from_text" => 6,
          "line_style" => "DashDotStroker",
          "line_width" => 2,
          "shadow" => true,
      ));
      $updateRequest = new Requests\UpdateBorderOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestBorderProperties,
          "left",
          "tables/1/rows/0/cells/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateBorderOnline($updateRequest);
    }

    public function testExampleUpdateComment()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestCommentRangeStartNode = new \Aspose\Words\Model\NodeLink(array(
          "node_id" => "0.3.0",
      ));
      $requestCommentRangeStart = new \Aspose\Words\Model\DocumentPosition(array(
          "node" => $requestCommentRangeStartNode,
          "offset" => 0,
      ));
      $requestCommentRangeEndNode = new \Aspose\Words\Model\NodeLink(array(
          "node_id" => "0.3.0",
      ));
      $requestCommentRangeEnd = new \Aspose\Words\Model\DocumentPosition(array(
          "node" => $requestCommentRangeEndNode,
          "offset" => 0,
      ));
      $requestComment = new \Aspose\Words\Model\CommentUpdate(array(
          "range_start" => $requestCommentRangeStart,
          "range_end" => $requestCommentRangeEnd,
          "initial" => "IA",
          "author" => "Imran Anwar",
          "text" => "A new Comment",
      ));
      $updateRequest = new Requests\UpdateCommentRequest(
          "Sample.docx",
          0,
          $requestComment,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateComment($updateRequest);
    }

    public function testExampleUpdateCommentOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestCommentRangeStartNode = new \Aspose\Words\Model\NodeLink(array(
          "node_id" => "0.3.0",
      ));
      $requestCommentRangeStart = new \Aspose\Words\Model\DocumentPosition(array(
          "node" => $requestCommentRangeStartNode,
          "offset" => 0,
      ));
      $requestCommentRangeEndNode = new \Aspose\Words\Model\NodeLink(array(
          "node_id" => "0.3.0",
      ));
      $requestCommentRangeEnd = new \Aspose\Words\Model\DocumentPosition(array(
          "node" => $requestCommentRangeEndNode,
          "offset" => 0,
      ));
      $requestComment = new \Aspose\Words\Model\CommentUpdate(array(
          "range_start" => $requestCommentRangeStart,
          "range_end" => $requestCommentRangeEnd,
          "initial" => "IA",
          "author" => "Imran Anwar",
          "text" => "A new Comment",
      ));
      $updateRequest = new Requests\UpdateCommentOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          $requestComment,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateCommentOnline($updateRequest);
    }

    public function testExampleUpdateCustomXmlPart()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestCustomXmlPart = new \Aspose\Words\Model\CustomXmlPartUpdate(array(
          "data" => "<data>Hello world</data>",
      ));
      $updateRequest = new Requests\UpdateCustomXmlPartRequest(
          "Sample.docx",
          0,
          $requestCustomXmlPart,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateCustomXmlPart($updateRequest);
    }

    public function testExampleUpdateCustomXmlPartOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestCustomXmlPart = new \Aspose\Words\Model\CustomXmlPartUpdate(array(
          "data" => "<data>Hello world</data>",
      ));
      $updateRequest = new Requests\UpdateCustomXmlPartOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          $requestCustomXmlPart,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateCustomXmlPartOnline($updateRequest);
    }

    public function testExampleUpdateDrawingObject()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestDrawingObject = new \Aspose\Words\Model\DrawingObjectUpdate(array(
          "left" => 0,
      ));
      $updateRequest = new Requests\UpdateDrawingObjectRequest(
          "Sample.docx",
          $requestDrawingObject,
          $documentsDir . "Common/aspose-cloud.png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateDrawingObject($updateRequest);
    }

    public function testExampleUpdateDrawingObjectOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestDrawingObject = new \Aspose\Words\Model\DrawingObjectUpdate(array(
          "left" => 0,
      ));
      $updateRequest = new Requests\UpdateDrawingObjectOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestDrawingObject,
          $documentsDir . "Common/aspose-cloud.png",
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateDrawingObjectOnline($updateRequest);
    }

    public function testExampleUpdateField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestField = new \Aspose\Words\Model\FieldUpdate(array(
          "field_code" => "{ NUMPAGES }",
      ));
      $updateRequest = new Requests\UpdateFieldRequest(
          "Sample.docx",
          0,
          $requestField,
          "sections/0/paragraphs/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateField($updateRequest);
    }

    public function testExampleUpdateFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestField = new \Aspose\Words\Model\FieldUpdate(array(
          "field_code" => "{ NUMPAGES }",
      ));
      $updateRequest = new Requests\UpdateFieldOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestField,
          0,
          "sections/0/paragraphs/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateFieldOnline($updateRequest);
    }

    public function testExampleUpdateFields()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $updateRequest = new Requests\UpdateFieldsRequest(
          "Sample.docx",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateFields($updateRequest);
    }

    public function testExampleUpdateFieldsOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $updateRequest = new Requests\UpdateFieldsOnlineRequest(
          $documentsDir . "Sample.docx",
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateFieldsOnline($updateRequest);
    }

    public function testExampleUpdateFootnote()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
          "text" => "new text is here",
      ));
      $updateRequest = new Requests\UpdateFootnoteRequest(
          "Sample.docx",
          0,
          $requestFootnoteDto,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateFootnote($updateRequest);
    }

    public function testExampleUpdateFootnoteOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
          "text" => "new text is here",
      ));
      $updateRequest = new Requests\UpdateFootnoteOnlineRequest(
          $documentsDir . "Sample.doc",
          $requestFootnoteDto,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateFootnoteOnline($updateRequest);
    }

    public function testExampleUpdateFormField()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
          "name" => "FullName",
          "enabled" => true,
          "calculate_on_exit" => true,
          "status_text" => "",
          "text_input_type" => "Regular",
          "text_input_default" => "No name",
      ));
      $updateRequest = new Requests\UpdateFormFieldRequest(
          "Sample.docx",
          0,
          $requestFormField,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateFormField($updateRequest);
    }

    public function testExampleUpdateFormFieldOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
          "name" => "FullName",
          "enabled" => true,
          "calculate_on_exit" => true,
          "status_text" => "",
          "text_input_type" => "Regular",
          "text_input_default" => "No name",
      ));
      $updateRequest = new Requests\UpdateFormFieldOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestFormField,
          0,
          "sections/0",
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateFormFieldOnline($updateRequest);
    }

    public function testExampleUpdateList()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestListUpdate = new \Aspose\Words\Model\ListUpdate(array(
          "is_restart_at_each_section" => true,
      ));
      $updateRequest = new Requests\UpdateListRequest(
          "TestGetLists.doc",
          1,
          $requestListUpdate,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateList($updateRequest);
    }

    public function testExampleUpdateListLevel()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestListUpdate = new \Aspose\Words\Model\ListLevelUpdate(array(
          "alignment" => "Right",
      ));
      $updateRequest = new Requests\UpdateListLevelRequest(
          "TestGetLists.doc",
          1,
          1,
          $requestListUpdate,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateListLevel($updateRequest);
    }

    public function testExampleUpdateListLevelOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestListUpdate = new \Aspose\Words\Model\ListLevelUpdate(array(
          "alignment" => "Right",
      ));
      $updateRequest = new Requests\UpdateListLevelOnlineRequest(
          $documentsDir . "Sample.doc",
          1,
          $requestListUpdate,
          1,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateListLevelOnline($updateRequest);
    }

    public function testExampleUpdateListOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestListUpdate = new \Aspose\Words\Model\ListUpdate(array(
          "is_restart_at_each_section" => true,
      ));
      $updateRequest = new Requests\UpdateListOnlineRequest(
          $documentsDir . "Sample.doc",
          1,
          $requestListUpdate,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateListOnline($updateRequest);
    }

    public function testExampleUpdateParagraphFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestParagraphFormatDto = new \Aspose\Words\Model\ParagraphFormatUpdate(array(
          "alignment" => "Right",
      ));
      $updateRequest = new Requests\UpdateParagraphFormatRequest(
          "Sample.docx",
          0,
          $requestParagraphFormatDto,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateParagraphFormat($updateRequest);
    }

    public function testExampleUpdateParagraphFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestParagraphFormatDto = new \Aspose\Words\Model\ParagraphFormatUpdate(array(
          "alignment" => "Right",
      ));
      $updateRequest = new Requests\UpdateParagraphFormatOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestParagraphFormatDto,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateParagraphFormatOnline($updateRequest);
    }

    public function testExampleUpdateParagraphListFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestListFormatDto = new \Aspose\Words\Model\ListFormatUpdate(array(
          "list_id" => 2,
      ));
      $updateRequest = new Requests\UpdateParagraphListFormatRequest(
          "Sample.docx",
          0,
          $requestListFormatDto,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateParagraphListFormat($updateRequest);
    }

    public function testExampleUpdateParagraphListFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestListFormatDto = new \Aspose\Words\Model\ListFormatUpdate(array(
          "list_id" => 2,
      ));
      $updateRequest = new Requests\UpdateParagraphListFormatOnlineRequest(
          $documentsDir . "Sample.doc",
          $requestListFormatDto,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateParagraphListFormatOnline($updateRequest);
    }

    public function testExampleUpdateRun()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestRun = new \Aspose\Words\Model\RunUpdate(array(
          "text" => "run with text",
      ));
      $updateRequest = new Requests\UpdateRunRequest(
          "Sample.docx",
          "paragraphs/1",
          0,
          $requestRun,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateRun($updateRequest);
    }

    public function testExampleUpdateRunFont()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestFontDto = new \Aspose\Words\Model\Font(array(
          "bold" => true,
      ));
      $updateRequest = new Requests\UpdateRunFontRequest(
          "Sample.docx",
          "paragraphs/0",
          0,
          $requestFontDto,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateRunFont($updateRequest);
    }

    public function testExampleUpdateRunFontOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestFontDto = new \Aspose\Words\Model\Font(array(
          "bold" => true,
      ));
      $updateRequest = new Requests\UpdateRunFontOnlineRequest(
          $documentsDir . "Sample.docx",
          "paragraphs/0",
          $requestFontDto,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateRunFontOnline($updateRequest);
    }

    public function testExampleUpdateRunOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestRun = new \Aspose\Words\Model\RunUpdate(array(
          "text" => "run with text",
      ));
      $updateRequest = new Requests\UpdateRunOnlineRequest(
          $documentsDir . "Sample.doc",
          "paragraphs/1",
          $requestRun,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateRunOnline($updateRequest);
    }

    public function testExampleUpdateSectionPageSetup()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestPageSetup = new \Aspose\Words\Model\PageSetup(array(
          "rtl_gutter" => true,
          "left_margin" => 10.0,
          "orientation" => "Landscape",
          "paper_size" => "A5",
      ));
      $updateRequest = new Requests\UpdateSectionPageSetupRequest(
          "Sample.docx",
          0,
          $requestPageSetup,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateSectionPageSetup($updateRequest);
    }

    public function testExampleUpdateSectionPageSetupOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestPageSetup = new \Aspose\Words\Model\PageSetup(array(
          "rtl_gutter" => true,
          "left_margin" => 10,
          "orientation" => "Landscape",
          "paper_size" => "A5",
      ));
      $updateRequest = new Requests\UpdateSectionPageSetupOnlineRequest(
          $documentsDir . "Sample.docx",
          0,
          $requestPageSetup,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateSectionPageSetupOnline($updateRequest);
    }

    public function testExampleUpdateStyle()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestStyleUpdate = new \Aspose\Words\Model\StyleUpdate(array(
          "name" => "My Style",
      ));
      $updateRequest = new Requests\UpdateStyleRequest(
          "Sample.docx",
          "Heading 1",
          $requestStyleUpdate,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateStyle($updateRequest);
    }

    public function testExampleUpdateStyleOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestStyleUpdate = new \Aspose\Words\Model\StyleUpdate(array(
          "name" => "My Style",
      ));
      $updateRequest = new Requests\UpdateStyleOnlineRequest(
          $documentsDir . "Sample.docx",
          "Heading 1",
          $requestStyleUpdate,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateStyleOnline($updateRequest);
    }

    public function testExampleUpdateTableCellFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestFormat = new \Aspose\Words\Model\TableCellFormat(array(
          "bottom_padding" => 5.0,
          "fit_text" => true,
          "horizontal_merge" => "First",
          "wrap_text" => true,
      ));
      $updateRequest = new Requests\UpdateTableCellFormatRequest(
          "Sample.docx",
          "sections/0/tables/2/rows/0",
          0,
          $requestFormat,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateTableCellFormat($updateRequest);
    }

    public function testExampleUpdateTableCellFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestFormat = new \Aspose\Words\Model\TableCellFormat(array(
          "bottom_padding" => 5,
          "fit_text" => true,
          "horizontal_merge" => "First",
          "wrap_text" => true,
      ));
      $updateRequest = new Requests\UpdateTableCellFormatOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/tables/2/rows/0",
          $requestFormat,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateTableCellFormatOnline($updateRequest);
    }

    public function testExampleUpdateTableProperties()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestProperties = new \Aspose\Words\Model\TableProperties(array(
          "alignment" => "Right",
          "allow_auto_fit" => false,
          "bidi" => true,
          "bottom_padding" => 1.0,
          "cell_spacing" => 2.0,
          "style_options" => "ColumnBands",
      ));
      $updateRequest = new Requests\UpdateTablePropertiesRequest(
          "Sample.docx",
          1,
          $requestProperties,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateTableProperties($updateRequest);
    }

    public function testExampleUpdateTablePropertiesOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestProperties = new \Aspose\Words\Model\TableProperties(array(
          "alignment" => "Right",
          "allow_auto_fit" => false,
          "bidi" => true,
          "bottom_padding" => 1,
          "cell_spacing" => 2,
          "style_options" => "ColumnBands",
      ));
      $updateRequest = new Requests\UpdateTablePropertiesOnlineRequest(
          $documentsDir . "Sample.docx",
          $requestProperties,
          1,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateTablePropertiesOnline($updateRequest);
    }

    public function testExampleUpdateTableRowFormat()
    {
      $this->expectNotToPerformAssertions();

      $wordsApi = $this->words;
      /**
       */
      $requestFormat = new \Aspose\Words\Model\TableRowFormat(array(
          "allow_break_across_pages" => true,
          "heading_format" => true,
          "height" => 10.0,
          "height_rule" => "Exactly",
      ));
      $updateRequest = new Requests\UpdateTableRowFormatRequest(
          "Sample.docx",
          "sections/0/tables/2",
          0,
          $requestFormat,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateTableRowFormat($updateRequest);
    }

    public function testExampleUpdateTableRowFormatOnline()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $requestFormat = new \Aspose\Words\Model\TableRowFormat(array(
          "allow_break_across_pages" => true,
          "heading_format" => true,
          "height" => 10,
          "height_rule" => "Auto",
      ));
      $updateRequest = new Requests\UpdateTableRowFormatOnlineRequest(
          $documentsDir . "Sample.docx",
          "sections/0/tables/2",
          $requestFormat,
          0,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->updateTableRowFormatOnline($updateRequest);
    }

    public function testExampleUploadFile()
    {
      $this->expectNotToPerformAssertions();

      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      /**
       */
      $uploadRequest = new Requests\UploadFileRequest(
          $documentsDir . "Sample.docx",
          "Sample.docx",
          NULL
      );
      $wordsApi->uploadFile($uploadRequest);
    }
}