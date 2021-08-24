<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteRunRequest(
    "Sample.docx", "paragraphs/1", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteRun($deleteRequest);