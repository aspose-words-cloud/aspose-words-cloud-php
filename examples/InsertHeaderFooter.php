<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$insertRequest = new Requests\InsertHeaderFooterRequest(
    "Sample.docx",
    "",
    "FooterEven",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertHeaderFooter($insertRequest);