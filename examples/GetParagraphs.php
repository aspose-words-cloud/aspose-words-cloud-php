<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetParagraphsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getParagraphs($request);