<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetParagraphTabStopsOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL
);
$wordsApi->getParagraphTabStopsOnline($request);