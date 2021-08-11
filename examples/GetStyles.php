<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetStylesRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getStyles($request);