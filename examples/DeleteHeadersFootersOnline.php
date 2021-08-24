<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$deleteRequest = new DeleteHeadersFootersOnlineRequest(
    $requestDocument, "", NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteHeadersFootersOnline($deleteRequest);