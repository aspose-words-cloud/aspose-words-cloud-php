<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetBookmarkByNameOnlineRequest(
    $documentsDir . "Sample.docx",
    "aspose",
    NULL,
    NULL
);
$wordsApi->getBookmarkByNameOnline($request);