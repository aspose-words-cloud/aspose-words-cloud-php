<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestFootnoteDto = new FootnoteInsert(array(
    "footnote_type" => "Endnote",
    "text" => "test endnote",
));
$insertRequest = new InsertFootnoteOnlineRequest(
    $requestDocument, $requestFootnoteDto, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertFootnoteOnline($insertRequest);