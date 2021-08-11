<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$createRequest = new Requests\CreateDocumentRequest(
    "Sample.docx",
    NULL,
    NULL
);
$wordsApi->createDocument($createRequest);