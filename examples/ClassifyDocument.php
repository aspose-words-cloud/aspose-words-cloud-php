<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$classifyRequest = new Requests\ClassifyDocumentRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL,
    "3",
    NULL
);
$wordsApi->classifyDocument($classifyRequest);