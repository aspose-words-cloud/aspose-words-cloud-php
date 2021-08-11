<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetTableRowFormatRequest(
    "Sample.docx",
    "sections/0/tables/2",
    0,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getTableRowFormat($request);