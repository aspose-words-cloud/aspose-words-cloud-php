<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetBordersOnlineRequest(
    $documentsDir . "Sample.docx",
    "tables/1/rows/0/cells/0",
    NULL,
    NULL
);
$wordsApi->getBordersOnline($request);