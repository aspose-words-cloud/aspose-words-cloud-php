<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestTemplate = "Sample.docx";
$request = new GetDocumentFieldNamesOnlineRequest(
    $requestTemplate, NULL, NULL, true
);
$wordsApi->getDocumentFieldNamesOnline($request);