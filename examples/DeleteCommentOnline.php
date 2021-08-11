<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteCommentOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteCommentOnline($deleteRequest);