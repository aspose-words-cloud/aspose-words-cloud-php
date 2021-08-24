<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetOfficeMathObjectsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getOfficeMathObjects($request);