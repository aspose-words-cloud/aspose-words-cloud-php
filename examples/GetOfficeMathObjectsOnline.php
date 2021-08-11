<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetOfficeMathObjectsOnlineRequest(
    $documentsDir . "Sample.docx",
    "",
    NULL,
    NULL
);
$wordsApi->getOfficeMathObjectsOnline($request);