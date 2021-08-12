<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$renderRequest = new Requests\RenderPageOnlineRequest(
    $documentsDir . "Sample.docx",
    1,
    "bmp",
    NULL,
    NULL,
    NULL
);
$wordsApi->renderPageOnline($renderRequest);