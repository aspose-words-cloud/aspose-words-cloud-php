<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteDocumentPropertyRequest(
    "Sample.docx", "testProp", NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteDocumentProperty($deleteRequest);