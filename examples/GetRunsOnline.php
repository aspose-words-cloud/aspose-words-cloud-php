<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetRunsOnlineRequest(
    $requestDocument, "sections/0/paragraphs/0", NULL, NULL
);
$wordsApi->getRunsOnline($request);