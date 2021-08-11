<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetCommentOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    NULL,
    NULL
);
$wordsApi->getCommentOnline($request);