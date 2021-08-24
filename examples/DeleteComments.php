<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteCommentsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteComments($deleteRequest);