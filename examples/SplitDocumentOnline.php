<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
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