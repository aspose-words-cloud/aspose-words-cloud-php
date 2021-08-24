<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetFootnotesRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getFootnotes($request);