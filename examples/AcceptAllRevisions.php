<?php
use Aspose\Words\WordsApi;
use Aspose\Words\Model;
use Aspose\Words\Model\Requests;

$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
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