<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetTablesRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getTables($request);