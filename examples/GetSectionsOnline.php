<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetSectionsOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL
);
$wordsApi->getSectionsOnline($request);