<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetHeaderFooterOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL
);
$wordsApi->getHeaderFooterOnline($request);