<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestFootnoteDto = new \Aspose\Words\Model\FootnoteUpdate(array(
    "text" => "new text is here",
));
$updateRequest = new Requests\UpdateFootnoteOnlineRequest(
    $documentsDir . "/Footnote.doc",
    $requestFootnoteDto,
    0,
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateFootnoteOnline($updateRequest);