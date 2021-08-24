<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetParagraphListFormatRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getParagraphListFormat($request);