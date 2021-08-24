<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetStyleOnlineRequest(
    $requestDocument, "Heading 1", NULL, NULL
);
$wordsApi->getStyleOnline($request);