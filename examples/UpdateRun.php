<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestRun = new \Aspose\Words\Model\RunUpdate(array(
    "text" => "run with text",
));
$updateRequest = new Requests\UpdateRunRequest(
    "Sample.docx",
    "paragraphs/1",
    0,
    $requestRun,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateRun($updateRequest);