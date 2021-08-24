<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestRun = new RunUpdate(array(
    "text" => "run with text",
));
$updateRequest = new UpdateRunOnlineRequest(
    $requestDocument, "paragraphs/1", $requestRun, 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateRunOnline($updateRequest);