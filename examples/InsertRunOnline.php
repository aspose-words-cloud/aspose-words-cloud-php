<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestRun = new \Aspose\Words\Model\RunInsert(array(
    "text" => "run with text",
));
$insertRequest = new Requests\InsertRunOnlineRequest(
    $documentsDir . "DocumentElements/Runs/Run.doc",
    "paragraphs/1",
    $requestRun,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertRunOnline($insertRequest);