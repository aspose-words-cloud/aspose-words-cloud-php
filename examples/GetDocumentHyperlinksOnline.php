<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetDocumentHyperlinksOnlineRequest(
    $requestDocument, NULL, NULL
);
$wordsApi->getDocumentHyperlinksOnline($request);