<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetRunOnlineRequest(
    $documentsDir . "Sample.docx",
    "paragraphs/0",
    0,
    NULL,
    NULL
);
$wordsApi->getRunOnline($request);