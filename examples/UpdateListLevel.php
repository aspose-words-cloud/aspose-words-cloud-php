<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestListUpdate = new ListLevelUpdate(array(
    "alignment" => "Right",
));
$updateRequest = new UpdateListLevelRequest(
    "TestGetLists.doc", 1, 1, $requestListUpdate, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateListLevel($updateRequest);