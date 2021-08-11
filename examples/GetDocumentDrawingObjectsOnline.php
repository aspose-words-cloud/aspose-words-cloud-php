<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetDocumentDrawingObjectsOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0",
    NULL,
    NULL
);
$wordsApi->getDocumentDrawingObjectsOnline($request);