<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetRunsOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0/paragraphs/0",
    NULL,
    NULL
);
$wordsApi->getRunsOnline($request);