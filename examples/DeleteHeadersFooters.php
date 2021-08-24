<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteHeadersFootersRequest(
    "Sample.docx", "", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteHeadersFooters($deleteRequest);