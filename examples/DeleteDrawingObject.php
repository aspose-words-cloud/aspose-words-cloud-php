<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteDrawingObjectRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteDrawingObject($deleteRequest);