<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$insertRequest = new InsertWatermarkImageRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, "Sample.png"
);
$wordsApi->insertWatermarkImage($insertRequest);