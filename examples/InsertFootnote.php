<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestFootnoteDto = new FootnoteInsert(array(
    "footnote_type" => "Endnote",
    "text" => "test endnote",
));
$insertRequest = new InsertFootnoteRequest(
    "Sample.docx", $requestFootnoteDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertFootnote($insertRequest);