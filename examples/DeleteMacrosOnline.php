<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteMacrosOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteMacrosOnline($deleteRequest);