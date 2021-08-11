<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestStyleUpdate = new \Aspose\Words\Model\StyleUpdate(array(
    "name" => "My Style",
));
$updateRequest = new Requests\UpdateStyleRequest(
    "Sample.docx",
    "Heading 1",
    $requestStyleUpdate,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateStyle($updateRequest);