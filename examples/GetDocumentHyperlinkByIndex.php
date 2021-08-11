<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetDocumentHyperlinkByIndexRequest(
    "Sample.docx",
    0,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getDocumentHyperlinkByIndex($request);