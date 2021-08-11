<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestListUpdate = new \Aspose\Words\Model\ListLevelUpdate(array(
    "alignment" => "Right",
));
$updateRequest = new Requests\UpdateListLevelOnlineRequest(
    $documentsDir . "DocumentElements/Lists/ListsGet.doc",
    1,
    $requestListUpdate,
    1,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateListLevelOnline($updateRequest);