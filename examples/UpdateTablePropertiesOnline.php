<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestProperties = new \Aspose\Words\Model\TableProperties(array(
    "alignment" => "Right",
    "allow_auto_fit" => false,
    "bidi" => true,
    "bottom_padding" => 1,
    "cell_spacing" => 2,
    "style_options" => "ColumnBands",
));
$updateRequest = new Requests\UpdateTablePropertiesOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestProperties,
    1,
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateTablePropertiesOnline($updateRequest);