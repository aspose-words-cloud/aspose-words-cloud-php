<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestCell = new \Aspose\Words\Model\TableCellInsert(array(
));
$insertRequest = new Requests\InsertTableCellRequest(
    "Sample.docx",
    "sections/0/tables/2/rows/0",
    $requestCell,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertTableCell($insertRequest);