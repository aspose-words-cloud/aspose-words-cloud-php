<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$deleteRequest = new DeleteHeaderFooterOnlineRequest(
    $requestDocument, "", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteHeaderFooterOnline($deleteRequest);