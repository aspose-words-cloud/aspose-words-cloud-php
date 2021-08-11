<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetDocumentProtectionRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getDocumentProtection($request);