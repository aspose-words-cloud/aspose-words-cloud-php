<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetTableRowFormatOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0/tables/2",
    0,
    NULL,
    NULL
);
$wordsApi->getTableRowFormatOnline($request);