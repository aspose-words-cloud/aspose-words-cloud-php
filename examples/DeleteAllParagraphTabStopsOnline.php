<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteAllParagraphTabStopsOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteAllParagraphTabStopsOnline($deleteRequest);