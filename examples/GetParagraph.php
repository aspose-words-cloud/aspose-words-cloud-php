<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetParagraphRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getParagraph($request);