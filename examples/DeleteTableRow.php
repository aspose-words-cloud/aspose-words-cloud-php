<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteTableRowRequest(
    "Sample.docx", "tables/1", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteTableRow($deleteRequest);