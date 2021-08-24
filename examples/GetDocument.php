<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetDocumentRequest(
    "Sample.docx", NULL, NULL, NULL, NULL
);
$wordsApi->getDocument($request);