<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetDocumentDrawingObjectImageDataOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    "sections/0",
    NULL,
    NULL
);
$wordsApi->getDocumentDrawingObjectImageDataOnline($request);