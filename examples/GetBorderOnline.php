<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetBorderOnlineRequest(
    $requestDocument, "left", "tables/1/rows/0/cells/0", NULL, NULL
);
$wordsApi->getBorderOnline($request);