<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$insertRequest = new Requests\InsertWatermarkImageRequest(
    "Sample.docx",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    "Sample.png"
);
$wordsApi->insertWatermarkImage($insertRequest);