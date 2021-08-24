<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetParagraphsOnlineRequest(
    $requestDocument, "sections/0", NULL, NULL
);
$wordsApi->getParagraphsOnline($request);