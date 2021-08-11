<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$renderRequest = new Requests\RenderDrawingObjectOnlineRequest(
    $documentsDir . "Sample.docx",
    "png",
    0,
    "sections/0",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->renderDrawingObjectOnline($renderRequest);