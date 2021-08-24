<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetOfficeMathObjectsOnlineRequest(
    $requestDocument, NULL, NULL, NULL
);
$wordsApi->getOfficeMathObjectsOnline($request);