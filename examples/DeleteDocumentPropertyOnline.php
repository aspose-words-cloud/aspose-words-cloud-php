<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteDocumentPropertyOnlineRequest(
    $documentsDir . "Sample.docx",
    "testProp",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteDocumentPropertyOnline($deleteRequest);