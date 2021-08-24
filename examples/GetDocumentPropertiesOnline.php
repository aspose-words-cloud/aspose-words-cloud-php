<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetDocumentPropertiesOnlineRequest(
    $requestDocument, NULL, NULL
);
$wordsApi->getDocumentPropertiesOnline($request);