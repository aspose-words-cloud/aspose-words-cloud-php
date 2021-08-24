<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteWatermarkRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteWatermark($deleteRequest);