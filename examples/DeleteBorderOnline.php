<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteBorderOnlineRequest(
    $requestDocument, "left", "tables/1/rows/0/cells/0", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteBorderOnline($deleteRequest);