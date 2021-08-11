<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$deleteRequest = new Requests\DeleteFormFieldRequest(
    $remoteFileName,
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->deleteFormField($deleteRequest);