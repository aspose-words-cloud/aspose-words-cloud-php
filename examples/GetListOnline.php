<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetListOnlineRequest(
    $documentsDir . "Sample.doc",
    1,
    NULL,
    NULL
);
$wordsApi->getListOnline($request);