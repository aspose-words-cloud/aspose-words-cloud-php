<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestListUpdate = new \Aspose\Words\Model\ListUpdate(array(
    "is_restart_at_each_section" => true,
));
$updateRequest = new Requests\UpdateListRequest(
    "TestGetLists.doc",
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
$wordsApi->updateList($updateRequest);