<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetDocumentDrawingObjectByIndexRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getDocumentDrawingObjectByIndex($request);