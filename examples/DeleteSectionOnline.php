<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteSectionOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteSectionOnline($deleteRequest);