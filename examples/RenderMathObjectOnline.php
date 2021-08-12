<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$renderRequest = new Requests\RenderMathObjectOnlineRequest(
    $documentsDir . "Sample.docx",
    "png",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->renderMathObjectOnline($renderRequest);