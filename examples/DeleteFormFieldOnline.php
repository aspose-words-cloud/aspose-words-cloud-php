<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteFormFieldOnlineRequest(
    $requestDocument, 0, "sections/0", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteFormFieldOnline($deleteRequest);