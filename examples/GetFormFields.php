<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetFormFieldsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->getFormFields($request);