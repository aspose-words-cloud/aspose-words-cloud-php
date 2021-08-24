<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestProperties = new TableProperties(array(
    "alignment" => "Right",
    "allow_auto_fit" => false,
    "bidi" => true,
    "bottom_padding" => 1.0,
    "cell_spacing" => 2.0,
    "style_options" => "ColumnBands",
));
$updateRequest = new UpdateTablePropertiesRequest(
    "Sample.docx", 1, $requestProperties, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateTableProperties($updateRequest);