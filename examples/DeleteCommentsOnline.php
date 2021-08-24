<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteCommentsOnlineRequest(
    $requestDocument, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteCommentsOnline($deleteRequest);