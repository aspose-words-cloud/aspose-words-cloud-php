<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetCustomXmlPartsOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL
);
$wordsApi->getCustomXmlPartsOnline($request);