<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetCustomXmlPartOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    NULL,
    NULL
);
$wordsApi->getCustomXmlPartOnline($request);