<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetSectionPageSetupOnlineRequest(
    $requestDocument, 0, NULL, NULL
);
$wordsApi->getSectionPageSetupOnline($request);