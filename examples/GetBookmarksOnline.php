<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetBookmarksOnlineRequest(
    $requestDocument, NULL, NULL
);
$wordsApi->getBookmarksOnline($request);