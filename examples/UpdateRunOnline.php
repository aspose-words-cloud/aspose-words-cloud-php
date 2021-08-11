<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestRun = new \Aspose\Words\Model\RunUpdate(array(
    "text" => "run with text",
));
$updateRequest = new Requests\UpdateRunOnlineRequest(
    $documentsDir . "DocumentElements/Runs/Run.doc",
    "paragraphs/1",
    $requestRun,
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateRunOnline($updateRequest);