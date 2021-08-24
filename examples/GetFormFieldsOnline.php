<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetFormFieldsOnlineRequest(
    $requestDocument, "sections/0", NULL, NULL
);
$wordsApi->getFormFieldsOnline($request);