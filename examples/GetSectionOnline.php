<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetSectionOnlineRequest(
    $requestDocument, 0, NULL, NULL
);
$wordsApi->getSectionOnline($request);