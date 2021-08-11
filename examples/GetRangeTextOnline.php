<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetRangeTextOnlineRequest(
    $documentsDir . "DocumentElements/Range/RangeGet.doc",
    "id0.0.0",
    "id0.0.1",
    NULL,
    NULL
);
$wordsApi->getRangeTextOnline($request);