<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetDocumentPropertiesRequest(
    "Sample.docx", NULL, NULL, NULL, NULL
);
$wordsApi->getDocumentProperties($request);