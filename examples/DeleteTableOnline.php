<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteTableOnlineRequest(
    $requestDocument, 1, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteTableOnline($deleteRequest);