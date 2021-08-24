<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestListUpdate = new ListLevelUpdate(array(
    "alignment" => "Right",
));
$updateRequest = new UpdateListLevelOnlineRequest(
    $requestDocument, 1, $requestListUpdate, 1, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateListLevelOnline($updateRequest);