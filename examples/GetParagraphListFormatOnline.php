<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetParagraphListFormatOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL
);
$wordsApi->getParagraphListFormatOnline($request);