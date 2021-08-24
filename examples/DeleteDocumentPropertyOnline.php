<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteDocumentPropertyOnlineRequest(
    $requestDocument, "testProp", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteDocumentPropertyOnline($deleteRequest);