<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetFieldOnlineRequest(
    $requestDocument, 0, "sections/0/paragraphs/0", NULL, NULL
);
$wordsApi->getFieldOnline($request);