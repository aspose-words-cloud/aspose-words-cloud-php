<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteBordersRequest(
    "Sample.docx", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteBorders($deleteRequest);