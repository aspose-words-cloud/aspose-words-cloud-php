<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$renderRequest = new Requests\RenderPageRequest(
    "Sample.docx",
    1,
    "bmp",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->renderPage($renderRequest);