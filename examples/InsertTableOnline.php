<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestTable = new TableInsert(array(
    "columns_count" => 5,
    "rows_count" => 4,
));
$insertRequest = new InsertTableOnlineRequest(
    $requestDocument, $requestTable, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertTableOnline($insertRequest);