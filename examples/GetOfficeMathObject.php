<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetOfficeMathObjectRequest(
    "Sample.docx",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getOfficeMathObject($request);