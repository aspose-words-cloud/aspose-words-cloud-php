<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetBordersOnlineRequest(
    $requestDocument, "tables/1/rows/0/cells/0", NULL, NULL
);
$wordsApi->getBordersOnline($request);