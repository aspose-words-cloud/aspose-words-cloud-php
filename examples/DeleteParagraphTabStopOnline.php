<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteParagraphTabStopOnlineRequest(
    $documentsDir . "/ParagraphTabStops.docx",
    72.0,
    0,
    "",
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteParagraphTabStopOnline($deleteRequest);