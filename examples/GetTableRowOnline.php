<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetTableRowOnlineRequest(
    $requestDocument, "tables/1", 0, NULL, NULL
);
$wordsApi->getTableRowOnline($request);