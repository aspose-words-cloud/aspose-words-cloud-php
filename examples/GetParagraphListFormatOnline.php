<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetParagraphListFormatOnlineRequest(
    $documentsDir . "Sample.doc",
    0,
    NULL,
    NULL,
    NULL
);
$wordsApi->getParagraphListFormatOnline($request);