<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetFieldsOnlineRequest(
    $documentsDir . "/GetField.docx",
    "sections/0",
    NULL,
    NULL
);
$wordsApi->getFieldsOnline($request);