<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$rejectRequest = new RejectAllRevisionsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->rejectAllRevisions($rejectRequest);