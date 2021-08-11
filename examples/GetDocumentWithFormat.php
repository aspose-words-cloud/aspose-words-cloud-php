<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetDocumentWithFormatRequest(
    "Sample.docx",
    "text",
    NULL,
    NULL,
    NULL,
    NULL,
    "/TestGetDocumentWithFormatAndOutPath.text",
    NULL
);
$wordsApi->getDocumentWithFormat($request);