<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteFieldsOnlineRequest(
    $requestDocument, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteFieldsOnline($deleteRequest);