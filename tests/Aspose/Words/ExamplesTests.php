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

namespace Aspose\Tests;

use Aspose\Words\WordsApi;
use Aspose\Words\Model;
use Aspose\Words\Model\Requests;
use PHPUnit\Framework\Assert;
class ExamplesTests extends BaseTestContext
{
    public function setUp()
    {
        parent::setUp();
          $this->uploadFile(realpath(__DIR__ . '/../../../ExamplesData/test_doc.docx'), 'test_doc.docx');
    }

    public function testExampleAcceptAllRevisions()
    {
      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $fileName  = "test_doc.docx";

      /**
       * Upload original document to cloud storage.
       */
      $uploadFileRequest = new Requests\UploadFileRequest(
          $documentsDir . $fileName,
          $fileName,
          NULL
      );
      $wordsApi->uploadFile($uploadFileRequest);

      /**
       * Calls AcceptAllRevisions method for document in cloud.
       */
      $request = new Requests\AcceptAllRevisionsRequest(
          $fileName,
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
      );
      $wordsApi->acceptAllRevisions($request);
    }

    public function testExampleAcceptAllRevisionsOnline()
    {
      $documentsDir = realpath(__DIR__ . '/../../..') . '/ExamplesData/';
      $wordsApi = $this->words;
      $fileName  = "test_doc.docx";

      /**
       * Calls AcceptAllRevisionsOnline method for document in cloud.
       */
      $request = new Requests\AcceptAllRevisionsOnlineRequest(
          $documentsDir . $fileName,
          NULL,
          NULL,
          NULL
      );
      $acceptAllRevisionsOnlineResult = $wordsApi->acceptAllRevisionsOnline($request);
      rename($acceptAllRevisionsOnlineResult->getDocument()->getPathname(), 'test_result.docx');
    }
}