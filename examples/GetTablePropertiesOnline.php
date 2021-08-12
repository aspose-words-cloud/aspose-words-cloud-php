<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetTablePropertiesOnlineRequest(
    $documentsDir . "Sample.docx",
    1,
    NULL,
    NULL,
    NULL
);
$wordsApi->getTablePropertiesOnline($request);