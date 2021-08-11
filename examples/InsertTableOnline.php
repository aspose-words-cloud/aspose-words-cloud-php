<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestTable = new \Aspose\Words\Model\TableInsert(array(
    "columns_count" => 5,
    "rows_count" => 4,
));
$insertRequest = new Requests\InsertTableOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestTable,
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertTableOnline($insertRequest);