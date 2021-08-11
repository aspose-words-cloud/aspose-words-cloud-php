<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$deleteRequest = new Requests\DeleteFileRequest(
    "Sample.docx",
    NULL,
    NULL
);
$wordsApi->deleteFile($deleteRequest);