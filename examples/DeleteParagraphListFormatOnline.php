<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$deleteRequest = new DeleteParagraphListFormatOnlineRequest(
    $requestDocument, 0, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteParagraphListFormatOnline($deleteRequest);