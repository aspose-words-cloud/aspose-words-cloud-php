<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestTable = new \Aspose\Words\Model\TableInsert(array(
    "columns_count" => 5,
    "rows_count" => 4,
));
$insertRequest = new Requests\InsertTableRequest(
    "Sample.docx",
    $requestTable,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertTable($insertRequest);