<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetTablePropertiesRequest(
    "Sample.docx",
    1,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getTableProperties($request);