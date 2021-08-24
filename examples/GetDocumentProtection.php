<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetDocumentProtectionRequest(
    "Sample.docx", NULL, NULL, NULL, NULL
);
$wordsApi->getDocumentProtection($request);