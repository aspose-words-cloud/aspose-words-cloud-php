<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$classifyRequest = new ClassifyDocumentOnlineRequest(
    $requestDocument, NULL, NULL, "3", NULL
);
$wordsApi->classifyDocumentOnline($classifyRequest);