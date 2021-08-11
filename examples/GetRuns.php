<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetRunsRequest(
    "Sample.docx",
    "sections/0/paragraphs/0",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getRuns($request);