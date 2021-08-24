<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetTableCellFormatOnlineRequest(
    $requestDocument, "sections/0/tables/2/rows/0", 0, NULL, NULL
);
$wordsApi->getTableCellFormatOnline($request);