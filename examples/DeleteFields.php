<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteFieldsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteFields($deleteRequest);