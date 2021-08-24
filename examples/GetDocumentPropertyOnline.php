<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetDocumentPropertyOnlineRequest(
    $requestDocument, "Author", NULL, NULL
);
$wordsApi->getDocumentPropertyOnline($request);