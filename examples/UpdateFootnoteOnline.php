<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestFootnoteDto = new FootnoteUpdate(array(
    "text" => "new text is here",
));
$updateRequest = new UpdateFootnoteOnlineRequest(
    $requestDocument, $requestFootnoteDto, 0, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateFootnoteOnline($updateRequest);