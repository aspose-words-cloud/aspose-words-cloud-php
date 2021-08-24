<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$acceptRequest = new AcceptAllRevisionsOnlineRequest(
    $requestDocument, NULL, NULL, NULL
);
$wordsApi->acceptAllRevisionsOnline($acceptRequest);