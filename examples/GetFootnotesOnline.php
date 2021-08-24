<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetFootnotesOnlineRequest(
    $requestDocument, NULL, NULL, NULL
);
$wordsApi->getFootnotesOnline($request);