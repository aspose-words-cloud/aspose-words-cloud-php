<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteMacrosRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteMacros($deleteRequest);