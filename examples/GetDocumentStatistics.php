<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetDocumentStatisticsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getDocumentStatistics($request);