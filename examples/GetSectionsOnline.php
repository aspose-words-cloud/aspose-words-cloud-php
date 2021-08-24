<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetSectionsOnlineRequest(
    $requestDocument, NULL, NULL
);
$wordsApi->getSectionsOnline($request);