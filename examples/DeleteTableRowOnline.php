<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteTableRowOnlineRequest(
    $requestDocument, "tables/1", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteTableRowOnline($deleteRequest);