<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteOfficeMathObjectOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteOfficeMathObjectOnline($deleteRequest);