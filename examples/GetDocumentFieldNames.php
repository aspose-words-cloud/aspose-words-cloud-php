<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetDocumentFieldNamesRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getDocumentFieldNames($request);