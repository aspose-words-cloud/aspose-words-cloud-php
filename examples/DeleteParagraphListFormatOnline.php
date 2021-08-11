<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteParagraphListFormatOnlineRequest(
    $documentsDir . "/ParagraphDeleteListFormat.doc",
    0,
    "",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteParagraphListFormatOnline($deleteRequest);