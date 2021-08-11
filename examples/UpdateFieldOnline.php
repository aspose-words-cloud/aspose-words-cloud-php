<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestField = new \Aspose\Words\Model\FieldUpdate(array(
    "field_code" => "{ NUMPAGES }",
));
$updateRequest = new Requests\UpdateFieldOnlineRequest(
    $documentsDir . "/GetField.docx",
    $requestField,
    0,
    "sections/0/paragraphs/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateFieldOnline($updateRequest);