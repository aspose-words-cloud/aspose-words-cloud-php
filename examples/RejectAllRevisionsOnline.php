<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$rejectRequest = new RejectAllRevisionsOnlineRequest(
    $requestDocument, NULL, NULL, NULL
);
$wordsApi->rejectAllRevisionsOnline($rejectRequest);