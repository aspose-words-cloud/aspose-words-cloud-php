<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetBorderOnlineRequest(
    $documentsDir . "Sample.docx",
    "left",
    "tables/1/rows/0/cells/0",
    NULL,
    NULL
);
$wordsApi->getBorderOnline($request);