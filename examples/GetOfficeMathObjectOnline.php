<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetOfficeMathObjectOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    "",
    NULL,
    NULL
);
$wordsApi->getOfficeMathObjectOnline($request);