<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$splitRequest = new SplitDocumentRequest(
    "Sample.docx", "text", NULL, NULL, NULL, NULL, "/TestSplitDocument.text", 1, 2, NULL, NULL
);
$wordsApi->splitDocument($splitRequest);