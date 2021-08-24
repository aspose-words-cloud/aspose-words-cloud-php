<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetListsOnlineRequest(
    $requestDocument, NULL, NULL
);
$wordsApi->getListsOnline($request);