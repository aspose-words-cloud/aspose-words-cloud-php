<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetFormFieldRequest(
    "Sample.docx",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->getFormField($request);