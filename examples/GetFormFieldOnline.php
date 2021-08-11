<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetFormFieldOnlineRequest(
    $documentsDir . "/FormFilled.docx",
    0,
    "sections/0",
    NULL,
    NULL
);
$wordsApi->getFormFieldOnline($request);