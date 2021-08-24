<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetFieldsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getFields($request);