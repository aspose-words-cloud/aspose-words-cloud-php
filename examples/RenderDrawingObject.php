<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$renderRequest = new Requests\RenderDrawingObjectRequest(
    "Sample.docx",
    "png",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->renderDrawingObject($renderRequest);