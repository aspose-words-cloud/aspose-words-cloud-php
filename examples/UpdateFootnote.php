<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
    "text" => "new text is here",
));
$updateRequest = new Requests\UpdateFootnoteRequest(
    "Sample.docx",
    0,
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
$wordsApi->updateFootnote($updateRequest);