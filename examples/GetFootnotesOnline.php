<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetFootnotesOnlineRequest(
    $documentsDir . "/Footnote.doc",
    "",
    NULL,
    NULL
);
$wordsApi->getFootnotesOnline($request);