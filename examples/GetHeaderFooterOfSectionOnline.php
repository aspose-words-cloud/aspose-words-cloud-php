<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetHeaderFooterOfSectionOnlineRequest(
    $documentsDir . "Sample.doc",
    0,
    0,
    NULL,
    NULL,
    NULL
);
$wordsApi->getHeaderFooterOfSectionOnline($request);