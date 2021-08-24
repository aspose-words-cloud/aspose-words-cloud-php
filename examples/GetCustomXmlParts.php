<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetCustomXmlPartsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL
);
$wordsApi->getCustomXmlParts($request);