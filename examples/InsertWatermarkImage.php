<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
$remoteFileName = "Sample.docx";

/**
 */
$insertRequest = new Requests\InsertWatermarkImageRequest(
    $remoteFileName,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL,
    NULL,
    "Sample.png"
);
$wordsApi->insertWatermarkImage($insertRequest);