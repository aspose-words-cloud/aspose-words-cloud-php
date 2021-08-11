<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteBordersOnlineRequest(
    $documentsDir . "Sample.docx",
    "tables/1/rows/0/cells/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteBordersOnline($deleteRequest);