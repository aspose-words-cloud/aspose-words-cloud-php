<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetFieldsOnlineRequest(
    $requestDocument, "sections/0", NULL, NULL
);
$wordsApi->getFieldsOnline($request);