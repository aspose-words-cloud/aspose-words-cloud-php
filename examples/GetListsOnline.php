<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetListsOnlineRequest(
    $documentsDir . "Sample.doc",
    NULL,
    NULL
);
$wordsApi->getListsOnline($request);