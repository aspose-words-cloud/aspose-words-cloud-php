<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$removeRequest = new RemoveRangeRequest(
    "Sample.docx", "id0.0.0", "id0.0.1", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->removeRange($removeRequest);