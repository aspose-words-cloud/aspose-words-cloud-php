<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetHeaderFootersOnlineRequest(
    $documentsDir . "Sample.doc",
    "",
    NULL,
    NULL,
    NULL
);
$wordsApi->getHeaderFootersOnline($request);