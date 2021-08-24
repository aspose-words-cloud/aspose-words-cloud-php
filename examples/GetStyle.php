<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetStyleRequest(
    "Sample.docx", "Heading 1", NULL, NULL, NULL, NULL
);
$wordsApi->getStyle($request);