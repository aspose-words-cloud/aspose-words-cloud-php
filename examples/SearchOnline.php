<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$searchRequest = new Requests\SearchOnlineRequest(
    $documentsDir . "Sample.docx",
    "aspose",
    NULL,
    NULL
);
$wordsApi->searchOnline($searchRequest);