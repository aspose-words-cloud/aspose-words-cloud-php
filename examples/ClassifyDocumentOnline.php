<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$classifyRequest = new Requests\ClassifyDocumentOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL,
    "3",
    NULL
);
$wordsApi->classifyDocumentOnline($classifyRequest);