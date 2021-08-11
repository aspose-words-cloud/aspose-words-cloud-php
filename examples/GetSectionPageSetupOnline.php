<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetSectionPageSetupOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    NULL,
    NULL
);
$wordsApi->getSectionPageSetupOnline($request);