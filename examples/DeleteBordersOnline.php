<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteBordersOnlineRequest(
    $requestDocument, "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteBordersOnline($deleteRequest);