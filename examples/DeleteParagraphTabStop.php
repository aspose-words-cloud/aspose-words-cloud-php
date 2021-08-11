<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$deleteRequest = new Requests\DeleteParagraphTabStopRequest(
    "Sample.docx",
    72.0,
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteParagraphTabStop($deleteRequest);