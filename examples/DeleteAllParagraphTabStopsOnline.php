<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteAllParagraphTabStopsOnlineRequest(
    $documentsDir . "/ParagraphTabStops.docx",
    0,
    "",
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteAllParagraphTabStopsOnline($deleteRequest);