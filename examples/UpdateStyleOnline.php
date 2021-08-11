<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestStyleUpdate = new \Aspose\Words\Model\StyleUpdate(array(
    "name" => "My Style",
));
$updateRequest = new Requests\UpdateStyleOnlineRequest(
    $documentsDir . "Sample.docx",
    "Heading 1",
    $requestStyleUpdate,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateStyleOnline($updateRequest);