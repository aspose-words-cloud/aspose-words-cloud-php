<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetSectionsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL
);
$wordsApi->getSections($request);