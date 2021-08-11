<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$rejectRequest = new Requests\RejectAllRevisionsRequest(
    $remoteFileName,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName
);
$wordsApi->rejectAllRevisions($rejectRequest);