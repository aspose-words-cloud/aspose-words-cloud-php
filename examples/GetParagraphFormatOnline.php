<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetParagraphFormatOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    NULL,
    NULL,
    NULL
);
$wordsApi->getParagraphFormatOnline($request);