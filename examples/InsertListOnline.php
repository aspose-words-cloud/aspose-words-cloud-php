<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestListInsert = new ListInsert(array(
    "template" => "OutlineLegal",
));
$insertRequest = new InsertListOnlineRequest(
    $requestDocument, $requestListInsert, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertListOnline($insertRequest);