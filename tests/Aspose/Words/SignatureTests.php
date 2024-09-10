<?php
/*
 * --------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SignatureTests.php">
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
use Aspose\Words\Model\Requests\{GetSignaturesOnlineRequest, GetSignaturesRequest, RemoveAllSignaturesOnlineRequest, RemoveAllSignaturesRequest, SignDocumentOnlineRequest, SignDocumentRequest};
use PHPUnit\Framework\Assert;

/*
 * Example of how to work with signatures.
 */
class SignatureTests extends BaseTestContext
{
    /*
     * Test for getting all document signatures.
     */
    public function testGetSignatures()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/Signature";
        $localFolder = "DocumentActions/Signature";
        $signedDocument = "signedDocument.docx";
        $remoteName = "TestGetSignatures.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $signedDocument,
            $remoteFolder . "/" . $remoteName
        );

        $request = new GetSignaturesRequest(
            $remoteName,
            $remoteFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getSignatures($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getSignatures());
        Assert::assertCount(1, $result->getSignatures());
    }

    /*
     * Test for getting all document signatures online.
     */
    public function testGetSignaturesOnline()
    {
        $localFolder = "DocumentActions/Signature";
        $signedDocument = "signedDocument.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFolder . "/" . $signedDocument;
        $request = new GetSignaturesOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->getSignaturesOnline($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getSignatures());
        Assert::assertCount(1, $result->getSignatures());
    }

    /*
     * Test for removing all document signatures.
     */
    public function testRemoveAllSignatures()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/Signature";
        $localFolder = "DocumentActions/Signature";
        $signedDocument = "signedDocument.docx";
        $remoteName = "TestRemoveAllSignatures.docx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $signedDocument,
            $remoteFolder . "/" . $remoteName
        );

        $request = new RemoveAllSignaturesRequest(
            $remoteName,
            $remoteFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->removeAllSignatures($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getSignatures());
        Assert::assertCount(0, $result->getSignatures());
    }

    /*
     * Test for removing all document signatures online.
     */
    public function testRemoveAllSignaturesOnline()
    {
        $localFolder = "DocumentActions/Signature";
        $signedDocument = "signedDocument.docx";

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFolder . "/" . $signedDocument;
        $request = new RemoveAllSignaturesOnlineRequest(
            $requestDocument,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->removeAllSignaturesOnline($request);
        Assert::assertTrue($result !== NULL);
        Assert::assertNotNull($result->getModel()->getSignatures());
        Assert::assertCount(0, $result->getModel()->getSignatures());
    }

    /*
     * Test for signing document.
     */
    public function testSignDocument()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/Signature";
        $localFolder = "DocumentActions/Signature";
        $unsignedDocument = "unsignedDocument.docx";
        $certificateName = "morzal.pfx";
        $certificatePassword = "aw";
        $remoteName = "TestSignDocument.docx";
        $remoteCertificateName = "TestCertificate.pfx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $unsignedDocument,
            $remoteFolder . "/" . $remoteName
        );
        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $certificateName,
            $remoteFolder . "/" . $remoteCertificateName
        );

        $request = new SignDocumentRequest(
            $remoteName,
            $remoteFolder . "/" . $remoteCertificateName,
            $certificatePassword,
            $remoteFolder,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->signDocument($request);
        Assert::assertTrue(json_decode($result, true) !== NULL);
        Assert::assertNotNull($result->getSignatures());
        Assert::assertCount(1, $result->getSignatures());
    }

    /*
     * Test for signing document online.
     */
    public function testSignDocumentOnline()
    {
        $remoteFolder = self::$baseRemoteFolderPath . "/DocumentActions/Signature";
        $localFolder = "DocumentActions/Signature";
        $unsignedDocument = "unsignedDocument.docx";
        $certificateName = "morzal.pfx";
        $certificatePassword = "aw";
        $remoteCertificateName = "TestCertificateOnline.pfx";

        $this->uploadFile(
            realpath(__DIR__ . '/../../..') . "/TestData/" . $localFolder . "/" . $certificateName,
            $remoteFolder . "/" . $remoteCertificateName
        );

        $requestDocument = realpath(__DIR__ . '/../../..') . '/TestData/' . $localFolder . "/" . $unsignedDocument;
        $request = new SignDocumentOnlineRequest(
            $requestDocument,
            $remoteFolder . "/" . $remoteCertificateName,
            $certificatePassword,
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
        );

        $result = $this->words->signDocumentOnline($request);
        Assert::assertTrue($result !== NULL);
        Assert::assertNotNull($result->getModel()->getSignatures());
        Assert::assertCount(1, $result->getModel()->getSignatures());
    }
}