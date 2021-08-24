<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetListRequest(
    "TestGetLists.doc", 1, NULL, NULL, NULL, NULL
);
$wordsApi->getList($request);