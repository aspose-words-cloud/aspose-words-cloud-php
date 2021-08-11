<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetFootnoteOnlineRequest(
    $documentsDir . "/Footnote.doc",
    0,
    "",
    NULL,
    NULL
);
$wordsApi->getFootnoteOnline($request);