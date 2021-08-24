<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetHeaderFootersOnlineRequest(
    $requestDocument, "", NULL, NULL, NULL
);
$wordsApi->getHeaderFootersOnline($request);