<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteHeaderFooterRequest(
    "Sample.docx", "", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteHeaderFooter($deleteRequest);