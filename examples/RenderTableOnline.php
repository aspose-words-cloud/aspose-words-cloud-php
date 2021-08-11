<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$renderRequest = new Requests\RenderTableOnlineRequest(
    $documentsDir . "Sample.docx",
    "png",
    0,
    "",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->renderTableOnline($renderRequest);