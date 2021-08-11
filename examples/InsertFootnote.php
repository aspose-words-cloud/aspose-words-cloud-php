<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestFootnoteDto = new \Aspose\Words\Model\FootnoteInsert(array(
    "footnote_type" => "Endnote",
    "text" => "test endnote",
));
$insertRequest = new Requests\InsertFootnoteRequest(
    "Sample.docx",
    $requestFootnoteDto,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertFootnote($insertRequest);