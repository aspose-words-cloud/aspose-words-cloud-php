<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetDocumentProtectionOnlineRequest(
    $requestDocument, NULL, NULL
);
$wordsApi->getDocumentProtectionOnline($request);