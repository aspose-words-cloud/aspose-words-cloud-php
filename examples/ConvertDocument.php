<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$convertRequest = new ConvertDocumentRequest(
    $requestDocument, "pdf", NULL, NULL, NULL, NULL
);
$wordsApi->convertDocument($convertRequest);