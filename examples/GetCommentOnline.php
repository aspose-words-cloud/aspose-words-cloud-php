<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetCommentOnlineRequest(
    $requestDocument, 0, NULL, NULL
);
$wordsApi->getCommentOnline($request);