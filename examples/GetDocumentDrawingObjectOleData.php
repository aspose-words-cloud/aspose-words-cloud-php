<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetDocumentDrawingObjectOleDataRequest(
    "Sample.docx",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getDocumentDrawingObjectOleData($request);