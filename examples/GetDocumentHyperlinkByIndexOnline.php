<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetDocumentHyperlinkByIndexOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    NULL,
    NULL
);
$wordsApi->getDocumentHyperlinkByIndexOnline($request);