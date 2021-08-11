<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetBookmarksOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL
);
$wordsApi->getBookmarksOnline($request);