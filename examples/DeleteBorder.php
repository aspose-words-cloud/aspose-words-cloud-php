<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$deleteRequest = new Requests\DeleteBorderRequest(
    "Sample.docx",
    "left",
    "tables/1/rows/0/cells/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteBorder($deleteRequest);