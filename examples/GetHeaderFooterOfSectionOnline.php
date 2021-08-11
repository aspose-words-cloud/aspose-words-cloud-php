<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetHeaderFooterOfSectionOnlineRequest(
    $documentsDir . "DocumentElements/HeaderFooters/HeadersFooters.doc",
    0,
    0,
    NULL,
    NULL,
    NULL
);
$wordsApi->getHeaderFooterOfSectionOnline($request);