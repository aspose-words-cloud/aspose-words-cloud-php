<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetParagraphFormatRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getParagraphFormat($request);