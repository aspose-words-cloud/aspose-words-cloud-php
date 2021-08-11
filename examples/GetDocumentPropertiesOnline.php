<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetDocumentPropertiesOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL
);
$wordsApi->getDocumentPropertiesOnline($request);