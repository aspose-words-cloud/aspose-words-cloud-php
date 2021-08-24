<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestStyleUpdate = new StyleUpdate(array(
    "name" => "My Style",
));
$updateRequest = new UpdateStyleOnlineRequest(
    $requestDocument, "Heading 1", $requestStyleUpdate, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateStyleOnline($updateRequest);