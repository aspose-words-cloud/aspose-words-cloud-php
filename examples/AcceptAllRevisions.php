<?php
use Aspose\Words\WordsApi;
use Aspose\Words\Model\Requests\{AcceptAllRevisionsRequest, UploadFileRequest};

$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$fileName = "test_doc.docx";

/**
 * Upload original document to cloud storage.
 */
$myVar1 = $fileName;
$myVar2 = $fileName;
$uploadFileRequest = new UploadFileRequest(
    $myVar1, $myVar2, NULL
);
$wordsApi->uploadFile($uploadFileRequest);

/**
 * Calls AcceptAllRevisions method for document in cloud.
 */
$myVar3 = $fileName;
$request = new AcceptAllRevisionsRequest(
    $myVar3, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->acceptAllRevisions($request);