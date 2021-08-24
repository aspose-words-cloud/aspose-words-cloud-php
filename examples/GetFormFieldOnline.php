<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetFormFieldOnlineRequest(
    $requestDocument, 0, "sections/0", NULL, NULL
);
$wordsApi->getFormFieldOnline($request);