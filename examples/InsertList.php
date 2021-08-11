<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestListInsert = new \Aspose\Words\Model\ListInsert(array(
    "template" => "OutlineLegal",
));
$insertRequest = new Requests\InsertListRequest(
    "TestGetLists.doc",
    $requestListInsert,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertList($insertRequest);