<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetListsOnlineRequest(
    $documentsDir . "DocumentElements/Lists/ListsGet.doc",
    NULL,
    NULL
);
$wordsApi->getListsOnline($request);