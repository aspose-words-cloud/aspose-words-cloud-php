<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestListInsert = new \Aspose\Words\Model\ListInsert(array(
    "template" => "OutlineLegal",
));
$insertRequest = new Requests\InsertListOnlineRequest(
    $documentsDir . "Sample.doc",
    $requestListInsert,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertListOnline($insertRequest);