<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$splitRequest = new SplitDocumentOnlineRequest(
    $requestDocument, "text", NULL, NULL, "/TestSplitDocument.text", 1, 2, NULL, NULL
);
$wordsApi->splitDocumentOnline($splitRequest);