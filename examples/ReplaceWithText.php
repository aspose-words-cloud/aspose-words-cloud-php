<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestRangeText = new ReplaceRange(array(
    "text" => "Replaced header",
));
$replaceRequest = new ReplaceWithTextRequest(
    "Sample.docx", "id0.0.0", $requestRangeText, "id0.0.1", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->replaceWithText($replaceRequest);