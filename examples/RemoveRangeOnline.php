<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$removeRequest = new Requests\RemoveRangeOnlineRequest(
    $documentsDir . "Sample.doc",
    "id0.0.0",
    "id0.0.1",
    NULL,
    NULL,
    NULL
);
$wordsApi->removeRangeOnline($removeRequest);