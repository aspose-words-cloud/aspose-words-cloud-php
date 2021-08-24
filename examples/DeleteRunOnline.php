<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$deleteRequest = new DeleteRunOnlineRequest(
    $requestDocument, "paragraphs/1", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteRunOnline($deleteRequest);