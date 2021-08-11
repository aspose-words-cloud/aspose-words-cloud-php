<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetDocumentFieldNamesOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL,
    true
);
$wordsApi->getDocumentFieldNamesOnline($request);