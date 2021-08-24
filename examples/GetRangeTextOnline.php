<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetRangeTextOnlineRequest(
    $requestDocument, "id0.0.0", "id0.0.1", NULL, NULL
);
$wordsApi->getRangeTextOnline($request);