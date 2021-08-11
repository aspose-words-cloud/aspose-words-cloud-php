<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetBookmarkByNameRequest(
    "Sample.docx",
    "aspose",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getBookmarkByName($request);