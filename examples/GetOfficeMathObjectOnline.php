<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetOfficeMathObjectOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL
);
$wordsApi->getOfficeMathObjectOnline($request);