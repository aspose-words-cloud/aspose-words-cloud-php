<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$updateRequest = new Requests\UpdateFieldsOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL,
    NULL
);
$wordsApi->updateFieldsOnline($updateRequest);