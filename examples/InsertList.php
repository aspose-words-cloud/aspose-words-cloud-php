<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestListInsert = new ListInsert(array(
    "template" => "OutlineLegal",
));
$insertRequest = new InsertListRequest(
    "TestGetLists.doc", $requestListInsert, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertList($insertRequest);