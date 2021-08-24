<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetCommentRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL
);
$wordsApi->getComment($request);