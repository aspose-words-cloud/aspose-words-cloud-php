<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetDocumentDrawingObjectsOnlineRequest(
    $requestDocument, "sections/0", NULL, NULL
);
$wordsApi->getDocumentDrawingObjectsOnline($request);