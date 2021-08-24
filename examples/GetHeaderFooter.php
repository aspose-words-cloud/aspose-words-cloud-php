<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetHeaderFooterRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getHeaderFooter($request);