<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteDrawingObjectOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteDrawingObjectOnline($deleteRequest);