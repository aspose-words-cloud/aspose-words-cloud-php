<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetTableOnlineRequest(
    $documentsDir . "Sample.docx",
    1,
    NULL,
    NULL,
    NULL
);
$wordsApi->getTableOnline($request);