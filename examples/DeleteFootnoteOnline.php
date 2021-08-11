<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteFootnoteOnlineRequest(
    $documentsDir . "/Footnote.doc",
    0,
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteFootnoteOnline($deleteRequest);