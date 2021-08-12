<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteFieldOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    "sections/0/paragraphs/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteFieldOnline($deleteRequest);