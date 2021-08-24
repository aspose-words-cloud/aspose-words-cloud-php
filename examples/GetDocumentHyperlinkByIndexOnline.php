<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetDocumentHyperlinkByIndexOnlineRequest(
    $requestDocument, 0, NULL, NULL
);
$wordsApi->getDocumentHyperlinkByIndexOnline($request);