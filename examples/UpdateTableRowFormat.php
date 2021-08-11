<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestFormat = new \Aspose\Words\Model\TableRowFormat(array(
    "allow_break_across_pages" => true,
    "heading_format" => true,
    "height" => 10.0,
    "height_rule" => "Exactly",
));
$updateRequest = new Requests\UpdateTableRowFormatRequest(
    "Sample.docx",
    "sections/0/tables/2",
    0,
    $requestFormat,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateTableRowFormat($updateRequest);