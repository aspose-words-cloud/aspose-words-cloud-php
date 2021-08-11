<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetDocumentFieldNamesRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getDocumentFieldNames($request);