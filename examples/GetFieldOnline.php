<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetFieldOnlineRequest(
    $documentsDir . "/GetField.docx",
    0,
    "sections/0/paragraphs/0",
    NULL,
    NULL
);
$wordsApi->getFieldOnline($request);