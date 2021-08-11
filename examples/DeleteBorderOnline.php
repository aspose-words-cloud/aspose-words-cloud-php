<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteBorderOnlineRequest(
    $documentsDir . "Sample.docx",
    "left",
    "tables/1/rows/0/cells/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteBorderOnline($deleteRequest);