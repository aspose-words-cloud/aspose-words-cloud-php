<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$request = new GetFootnoteOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL
);
$wordsApi->getFootnoteOnline($request);