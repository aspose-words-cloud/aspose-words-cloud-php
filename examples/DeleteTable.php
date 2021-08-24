<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteTableRequest(
    "Sample.docx", 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteTable($deleteRequest);