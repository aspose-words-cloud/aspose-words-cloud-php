<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestListUpdate = new ListUpdate(array(
    "is_restart_at_each_section" => true,
));
$updateRequest = new UpdateListOnlineRequest(
    $requestDocument, 1, $requestListUpdate, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateListOnline($updateRequest);