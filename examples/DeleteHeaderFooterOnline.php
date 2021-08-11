<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteHeaderFooterOnlineRequest(
    $documentsDir . "DocumentElements/HeaderFooters/HeadersFooters.doc",
    "",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteHeaderFooterOnline($deleteRequest);