<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetDocumentPropertyOnlineRequest(
    $documentsDir . "Sample.docx",
    "Author",
    NULL,
    NULL
);
$wordsApi->getDocumentPropertyOnline($request);