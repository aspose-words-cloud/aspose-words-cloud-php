<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestFormat = new TableRowFormat(array(
    "allow_break_across_pages" => true,
    "heading_format" => true,
    "height" => 10,
    "height_rule" => "Auto",
));
$updateRequest = new UpdateTableRowFormatOnlineRequest(
    $requestDocument, "sections/0/tables/2", $requestFormat, 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateTableRowFormatOnline($updateRequest);