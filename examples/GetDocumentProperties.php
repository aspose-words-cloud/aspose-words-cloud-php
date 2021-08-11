<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetDocumentPropertiesRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getDocumentProperties($request);