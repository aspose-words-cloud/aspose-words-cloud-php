<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetDocumentDrawingObjectsRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getDocumentDrawingObjects($request);