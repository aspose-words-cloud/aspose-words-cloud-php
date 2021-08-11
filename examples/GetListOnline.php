<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetListOnlineRequest(
    $documentsDir . "DocumentElements/Lists/ListsGet.doc",
    1,
    NULL,
    NULL
);
$wordsApi->getListOnline($request);