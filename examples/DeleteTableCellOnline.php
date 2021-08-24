<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteTableCellOnlineRequest(
    $requestDocument, "sections/0/tables/2/rows/0", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteTableCellOnline($deleteRequest);