<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$deleteRequest = new Requests\DeleteWatermarkRequest(
    $remoteFileName,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->deleteWatermark($deleteRequest);