<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetFootnotesOnlineRequest(
    $documentsDir . "Sample.doc",
    NULL,
    NULL,
    NULL
);
$wordsApi->getFootnotesOnline($request);