<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$renderRequest = new Requests\RenderParagraphOnlineRequest(
    $documentsDir . "Sample.docx",
    "png",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->renderParagraphOnline($renderRequest);