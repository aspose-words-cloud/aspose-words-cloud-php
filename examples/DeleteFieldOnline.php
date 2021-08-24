<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteFieldOnlineRequest(
    $requestDocument, 0, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteFieldOnline($deleteRequest);