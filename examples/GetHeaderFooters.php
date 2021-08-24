<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetHeaderFootersRequest(
    "Sample.docx", "", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getHeaderFooters($request);