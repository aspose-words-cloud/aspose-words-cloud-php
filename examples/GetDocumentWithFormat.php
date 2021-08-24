<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetDocumentWithFormatRequest(
    "Sample.docx", "text", NULL, NULL, NULL, NULL, "/TestGetDocumentWithFormatAndOutPath.text", NULL
);
$wordsApi->getDocumentWithFormat($request);