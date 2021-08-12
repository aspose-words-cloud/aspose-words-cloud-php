<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetHeaderFooterOnlineRequest(
    $documentsDir . "Sample.doc",
    0,
    NULL,
    NULL,
    NULL
);
$wordsApi->getHeaderFooterOnline($request);