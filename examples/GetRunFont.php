<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetRunFontRequest(
    "Sample.docx", "paragraphs/0", 0, NULL, NULL, NULL, NULL
);
$wordsApi->getRunFont($request);