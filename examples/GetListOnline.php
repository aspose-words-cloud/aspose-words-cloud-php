<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetListOnlineRequest(
    $requestDocument, 1, NULL, NULL
);
$wordsApi->getListOnline($request);