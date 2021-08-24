<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteMacrosOnlineRequest(
    $requestDocument, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteMacrosOnline($deleteRequest);