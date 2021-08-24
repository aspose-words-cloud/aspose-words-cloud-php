<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestListUpdate = new ListUpdate(array(
    "is_restart_at_each_section" => true,
));
$updateRequest = new UpdateListRequest(
    "TestGetLists.doc", 1, $requestListUpdate, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateList($updateRequest);