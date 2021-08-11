<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetTableRequest(
    "Sample.docx",
    1,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getTable($request);