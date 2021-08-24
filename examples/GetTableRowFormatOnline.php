<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetTableRowFormatOnlineRequest(
    $requestDocument, "sections/0/tables/2", 0, NULL, NULL
);
$wordsApi->getTableRowFormatOnline($request);