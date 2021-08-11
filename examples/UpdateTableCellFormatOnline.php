<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestFormat = new \Aspose\Words\Model\TableCellFormat(array(
    "bottom_padding" => 5,
    "fit_text" => true,
    "horizontal_merge" => "First",
    "wrap_text" => true,
));
$updateRequest = new Requests\UpdateTableCellFormatOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0/tables/2/rows/0",
    $requestFormat,
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateTableCellFormatOnline($updateRequest);