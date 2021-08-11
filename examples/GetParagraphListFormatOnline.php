<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetParagraphListFormatOnlineRequest(
    $documentsDir . "/ParagraphGetListFormat.doc",
    0,
    "",
    NULL,
    NULL
);
$wordsApi->getParagraphListFormatOnline($request);