<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetBorderRequest(
    "Sample.docx", "left", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL
);
$wordsApi->getBorder($request);