<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetTablePropertiesOnlineRequest(
    $requestDocument, 1, NULL, NULL, NULL
);
$wordsApi->getTablePropertiesOnline($request);