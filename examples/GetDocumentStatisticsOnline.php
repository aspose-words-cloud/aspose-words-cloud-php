<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetDocumentStatisticsOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getDocumentStatisticsOnline($request);