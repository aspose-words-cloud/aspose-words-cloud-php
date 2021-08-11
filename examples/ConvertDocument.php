<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$convertRequest = new Requests\ConvertDocumentRequest(
    $documentsDir . "/test_uploadfile.docx",
    "pdf",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->convertDocument($convertRequest);