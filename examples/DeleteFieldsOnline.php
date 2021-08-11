<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteFieldsOnlineRequest(
    $documentsDir . "Sample.docx",
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteFieldsOnline($deleteRequest);