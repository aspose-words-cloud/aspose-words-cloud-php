<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetHeaderFooterOfSectionOnlineRequest(
    $requestDocument, 0, 0, NULL, NULL, NULL
);
$wordsApi->getHeaderFooterOfSectionOnline($request);