<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetTableOnlineRequest(
    $requestDocument, 1, NULL, NULL, NULL
);
$wordsApi->getTableOnline($request);