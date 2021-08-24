<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetCustomXmlPartsOnlineRequest(
    $requestDocument, NULL, NULL
);
$wordsApi->getCustomXmlPartsOnline($request);