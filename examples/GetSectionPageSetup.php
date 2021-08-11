<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetSectionPageSetupRequest(
    "Sample.docx",
    0,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getSectionPageSetup($request);