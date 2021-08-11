<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetStyleOnlineRequest(
    $documentsDir . "Sample.docx",
    "Heading 1",
    NULL,
    NULL
);
$wordsApi->getStyleOnline($request);