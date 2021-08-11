<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetTablesOnlineRequest(
    $documentsDir . "Sample.docx",
    "",
    NULL,
    NULL
);
$wordsApi->getTablesOnline($request);