<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestCell = new \Aspose\Words\Model\TableCellInsert(array(
));
$insertRequest = new Requests\InsertTableCellOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0/tables/2/rows/0",
    $requestCell,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertTableCellOnline($insertRequest);