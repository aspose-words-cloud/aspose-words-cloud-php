<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetSectionRequest(
    "Sample.docx",
    0,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getSection($request);