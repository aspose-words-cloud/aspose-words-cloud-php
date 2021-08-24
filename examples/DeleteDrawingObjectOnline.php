<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteDrawingObjectOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteDrawingObjectOnline($deleteRequest);