<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestRangeText = new ReplaceRange(array(
    "text" => "Replaced header",
));
$replaceRequest = new ReplaceWithTextOnlineRequest(
    $requestDocument, "id0.0.0", $requestRangeText, "id0.0.1", NULL, NULL, NULL
);
$wordsApi->replaceWithTextOnline($replaceRequest);