<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestFormat = new \Aspose\Words\Model\TableRowFormat(array(
    "allow_break_across_pages" => true,
    "heading_format" => true,
    "height" => 10,
    "height_rule" => "Auto",
));
$updateRequest = new Requests\UpdateTableRowFormatOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0/tables/2",
    $requestFormat,
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateTableRowFormatOnline($updateRequest);