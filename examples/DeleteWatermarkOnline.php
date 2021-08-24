<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteWatermarkOnlineRequest(
    $requestDocument, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteWatermarkOnline($deleteRequest);