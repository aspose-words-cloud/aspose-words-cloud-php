<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestTable = new TableInsert(array(
    "columns_count" => 5,
    "rows_count" => 4,
));
$insertRequest = new InsertTableRequest(
    "Sample.docx", $requestTable, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertTable($insertRequest);