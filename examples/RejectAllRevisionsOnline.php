<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$rejectRequest = new Requests\RejectAllRevisionsOnlineRequest(
    $documentsDir . "Sample.docx",
    NULL,
    NULL,
    NULL
);
$wordsApi->rejectAllRevisionsOnline($rejectRequest);