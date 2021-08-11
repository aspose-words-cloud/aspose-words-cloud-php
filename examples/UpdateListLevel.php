<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestListUpdate = new \Aspose\Words\Model\ListLevelUpdate(array(
    "alignment" => "Right",
));
$updateRequest = new Requests\UpdateListLevelRequest(
    "TestGetLists.doc",
    1,
    1,
    $requestListUpdate,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateListLevel($updateRequest);