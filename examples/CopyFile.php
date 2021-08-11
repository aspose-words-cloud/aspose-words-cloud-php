<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
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