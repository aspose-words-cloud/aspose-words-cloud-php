<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetTablesOnlineRequest(
    $requestDocument, NULL, NULL, NULL
);
$wordsApi->getTablesOnline($request);