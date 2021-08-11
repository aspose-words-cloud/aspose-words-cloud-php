<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetTableCellFormatRequest(
    "Sample.docx",
    "sections/0/tables/2/rows/0",
    0,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getTableCellFormat($request);