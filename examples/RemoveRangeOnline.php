<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$removeRequest = new RemoveRangeOnlineRequest(
    $requestDocument, "id0.0.0", "id0.0.1", NULL, NULL, NULL
);
$wordsApi->removeRangeOnline($removeRequest);