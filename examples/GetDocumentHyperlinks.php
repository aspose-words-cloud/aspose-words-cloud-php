<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetDocumentHyperlinksRequest(
    "Sample.docx", NULL, NULL, NULL, NULL
);
$wordsApi->getDocumentHyperlinks($request);