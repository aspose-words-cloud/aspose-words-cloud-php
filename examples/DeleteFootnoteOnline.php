<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$deleteRequest = new DeleteFootnoteOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteFootnoteOnline($deleteRequest);