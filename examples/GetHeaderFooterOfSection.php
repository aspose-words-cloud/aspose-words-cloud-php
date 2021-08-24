<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetHeaderFooterOfSectionRequest(
    "Sample.docx", 0, 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getHeaderFooterOfSection($request);