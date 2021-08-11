<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteHeadersFootersOnlineRequest(
    $documentsDir . "DocumentElements/HeaderFooters/HeadersFooters.doc",
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteHeadersFootersOnline($deleteRequest);