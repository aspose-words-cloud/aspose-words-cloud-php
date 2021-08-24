<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetStylesOnlineRequest(
    $requestDocument, NULL, NULL
);
$wordsApi->getStylesOnline($request);