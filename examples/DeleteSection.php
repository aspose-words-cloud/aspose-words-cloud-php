<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteSectionRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteSection($deleteRequest);