<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteOfficeMathObjectRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteOfficeMathObject($deleteRequest);