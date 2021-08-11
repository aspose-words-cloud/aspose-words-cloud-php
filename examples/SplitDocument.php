<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
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