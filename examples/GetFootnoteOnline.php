<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetFootnoteOnlineRequest(
    $documentsDir . "Sample.doc",
    0,
    NULL,
    NULL,
    NULL
);
$wordsApi->getFootnoteOnline($request);