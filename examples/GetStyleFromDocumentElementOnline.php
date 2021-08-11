<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$request = new Requests\GetStyleFromDocumentElementOnlineRequest(
    $documentsDir . "Sample.docx",
    "paragraphs/1/paragraphFormat",
    NULL,
    NULL
);
$wordsApi->getStyleFromDocumentElementOnline($request);