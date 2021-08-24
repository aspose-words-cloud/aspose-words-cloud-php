<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteAllParagraphTabStopsOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL, NULL
);
$wordsApi->deleteAllParagraphTabStopsOnline($deleteRequest);