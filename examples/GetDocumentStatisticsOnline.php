<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetDocumentStatisticsOnlineRequest(
    $requestDocument, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getDocumentStatisticsOnline($request);