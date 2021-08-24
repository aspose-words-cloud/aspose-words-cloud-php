<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestFormat = new TableCellFormat(array(
    "bottom_padding" => 5.0,
    "fit_text" => true,
    "horizontal_merge" => "First",
    "wrap_text" => true,
));
$updateRequest = new UpdateTableCellFormatRequest(
    "Sample.docx", "sections/0/tables/2/rows/0", 0, $requestFormat, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateTableCellFormat($updateRequest);