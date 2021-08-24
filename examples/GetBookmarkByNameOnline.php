<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetBookmarkByNameOnlineRequest(
    $requestDocument, "aspose", NULL, NULL
);
$wordsApi->getBookmarkByNameOnline($request);