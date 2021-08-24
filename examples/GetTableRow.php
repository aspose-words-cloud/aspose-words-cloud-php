<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetTableRowRequest(
    "Sample.docx", "tables/1", 0, NULL, NULL, NULL, NULL
);
$wordsApi->getTableRow($request);