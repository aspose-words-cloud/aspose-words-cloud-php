<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetSectionOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    NULL,
    NULL
);
$wordsApi->getSectionOnline($request);