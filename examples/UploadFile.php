<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$uploadRequest = new Requests\UploadFileRequest(
    $documentsDir . "Sample.docx",
    "Sample.docx",
    NULL
);
$wordsApi->uploadFile($uploadRequest);