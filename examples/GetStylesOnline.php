<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetStylesOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL
);
$wordsApi->getStylesOnline($request);