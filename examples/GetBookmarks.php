<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetBookmarksRequest(
    "Sample.docx", NULL, NULL, NULL, NULL
);
$wordsApi->getBookmarks($request);