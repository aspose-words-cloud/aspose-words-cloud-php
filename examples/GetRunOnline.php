<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetRunOnlineRequest(
    $requestDocument, "paragraphs/0", 0, NULL, NULL
);
$wordsApi->getRunOnline($request);