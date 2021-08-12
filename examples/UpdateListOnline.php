<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestListUpdate = new \Aspose\Words\Model\ListUpdate(array(
    "is_restart_at_each_section" => true,
));
$updateRequest = new Requests\UpdateListOnlineRequest(
    $documentsDir . "Sample.doc",
    1,
    $requestListUpdate,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateListOnline($updateRequest);