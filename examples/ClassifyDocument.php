<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$classifyRequest = new ClassifyDocumentRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, "3", NULL
);
$wordsApi->classifyDocument($classifyRequest);