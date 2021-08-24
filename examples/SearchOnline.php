<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$searchRequest = new SearchOnlineRequest(
    $requestDocument, "aspose", NULL, NULL
);
$wordsApi->searchOnline($searchRequest);