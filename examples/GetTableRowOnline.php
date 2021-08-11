<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetTableRowOnlineRequest(
    $documentsDir . "Sample.docx",
    "tables/1",
    0,
    NULL,
    NULL
);
$wordsApi->getTableRowOnline($request);