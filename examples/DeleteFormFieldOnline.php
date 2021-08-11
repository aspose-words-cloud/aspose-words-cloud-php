<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$deleteRequest = new Requests\DeleteFormFieldOnlineRequest(
    $documentsDir . "/FormFilled.docx",
    0,
    "sections/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->deleteFormFieldOnline($deleteRequest);