<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$insertRequest = new Requests\InsertHeaderFooterOnlineRequest(
    $documentsDir . "DocumentElements/HeaderFooters/HeadersFooters.doc",
    "",
    "FooterEven",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertHeaderFooterOnline($insertRequest);