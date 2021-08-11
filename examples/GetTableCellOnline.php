<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetTableCellOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0/tables/2/rows/0",
    0,
    NULL,
    NULL
);
$wordsApi->getTableCellOnline($request);