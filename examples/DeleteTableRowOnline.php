<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteTableRowOnlineRequest(
    $documentsDir . "Sample.docx",
    "tables/1",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteTableRowOnline($deleteRequest);