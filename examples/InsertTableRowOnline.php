<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestRow = new TableRowInsert(array(
    "columns_count" => 5,
));
$insertRequest = new InsertTableRowOnlineRequest(
    $requestDocument, "sections/0/tables/2", $requestRow, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertTableRowOnline($insertRequest);