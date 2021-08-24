<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetListsRequest(
    "TestGetLists.doc", NULL, NULL, NULL, NULL
);
$wordsApi->getLists($request);