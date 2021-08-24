<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$updateRequest = new UpdateFieldsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateFields($updateRequest);