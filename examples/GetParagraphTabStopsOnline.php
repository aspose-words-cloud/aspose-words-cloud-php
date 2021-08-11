<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetParagraphTabStopsOnlineRequest(
    $documentsDir . "/ParagraphTabStops.docx",
    0,
    "",
    NULL,
    NULL
);
$wordsApi->getParagraphTabStopsOnline($request);