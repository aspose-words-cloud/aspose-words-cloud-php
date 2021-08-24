<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$createRequest = new CreateDocumentRequest(
    "Sample.docx", NULL, NULL
);
$wordsApi->createDocument($createRequest);