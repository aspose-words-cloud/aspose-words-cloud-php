<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetParagraphFormatOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL
);
$wordsApi->getParagraphFormatOnline($request);