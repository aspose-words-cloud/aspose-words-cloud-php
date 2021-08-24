<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestFootnoteDto = new FootnoteUpdate(array(
    "text" => "new text is here",
));
$updateRequest = new UpdateFootnoteRequest(
    "Sample.docx", 0, $requestFootnoteDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateFootnote($updateRequest);