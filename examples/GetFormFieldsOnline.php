<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetFormFieldsOnlineRequest(
    $documentsDir . "Sample.docx",
    "sections/0",
    NULL,
    NULL
);
$wordsApi->getFormFieldsOnline($request);