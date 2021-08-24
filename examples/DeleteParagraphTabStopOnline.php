<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteParagraphTabStopOnlineRequest(
    $requestDocument, 72.0, 0, NULL, NULL, NULL, NULL
);
$wordsApi->deleteParagraphTabStopOnline($deleteRequest);