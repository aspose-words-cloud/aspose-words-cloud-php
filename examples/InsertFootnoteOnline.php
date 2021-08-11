<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestFootnoteDto = new \Aspose\Words\Model\FootnoteInsert(array(
    "footnote_type" => "Endnote",
    "text" => "test endnote",
));
$insertRequest = new Requests\InsertFootnoteOnlineRequest(
    $documentsDir . "/Footnote.doc",
    $requestFootnoteDto,
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertFootnoteOnline($insertRequest);