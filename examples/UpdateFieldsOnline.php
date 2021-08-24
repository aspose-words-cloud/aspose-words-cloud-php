<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$updateRequest = new UpdateFieldsOnlineRequest(
    $requestDocument, NULL, NULL, NULL
);
$wordsApi->updateFieldsOnline($updateRequest);