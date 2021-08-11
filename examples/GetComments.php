<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetCommentsRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getComments($request);