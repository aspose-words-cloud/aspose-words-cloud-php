<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetCustomXmlPartRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL
);
$wordsApi->getCustomXmlPart($request);