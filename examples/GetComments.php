<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetCommentsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL
);
$wordsApi->getComments($request);