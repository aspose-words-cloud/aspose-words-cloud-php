<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetCustomXmlPartOnlineRequest(
    $requestDocument, 0, NULL, NULL
);
$wordsApi->getCustomXmlPartOnline($request);