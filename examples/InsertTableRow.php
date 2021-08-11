<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestRow = new \Aspose\Words\Model\TableRowInsert(array(
    "columns_count" => 5,
));
$insertRequest = new Requests\InsertTableRowRequest(
    "Sample.docx",
    "sections/0/tables/2",
    $requestRow,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertTableRow($insertRequest);