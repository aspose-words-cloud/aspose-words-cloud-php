<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetRunFontOnlineRequest(
    $documentsDir . "Sample.docx",
    "paragraphs/0",
    0,
    NULL,
    NULL
);
$wordsApi->getRunFontOnline($request);