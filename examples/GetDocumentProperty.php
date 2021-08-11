<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetDocumentPropertyRequest(
    "Sample.docx",
    "Author",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getDocumentProperty($request);