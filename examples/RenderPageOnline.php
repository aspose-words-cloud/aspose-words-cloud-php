<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$renderRequest = new Requests\RenderPageOnlineRequest(
    $documentsDir . "DocumentElements/Text/SampleWordDocument.docx",
    1,
    "bmp",
    NULL,
    NULL,
    NULL
);
$wordsApi->renderPageOnline($renderRequest);