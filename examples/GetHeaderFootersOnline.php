<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetHeaderFootersOnlineRequest(
    $documentsDir . "DocumentElements/HeaderFooters/HeadersFooters.doc",
    "",
    NULL,
    NULL,
    NULL
);
$wordsApi->getHeaderFootersOnline($request);