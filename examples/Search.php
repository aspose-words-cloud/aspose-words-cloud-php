<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$searchRequest = new SearchRequest(
    "Sample.docx", "aspose", NULL, NULL, NULL, NULL
);
$wordsApi->search($searchRequest);