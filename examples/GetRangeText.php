<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetRangeTextRequest(
    "Sample.docx",
    "id0.0.0",
    "id0.0.1",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getRangeText($request);