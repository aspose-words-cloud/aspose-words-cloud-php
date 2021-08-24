<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetBordersRequest(
    "Sample.docx", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL
);
$wordsApi->getBorders($request);