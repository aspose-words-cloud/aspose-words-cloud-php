<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetParagraphsOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0",
    NULL,
    NULL
);
$wordsApi->getParagraphsOnline($request);