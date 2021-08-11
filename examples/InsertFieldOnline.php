<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestField = new \Aspose\Words\Model\FieldInsert(array(
    "field_code" => "{ NUMPAGES }",
));
$insertRequest = new Requests\InsertFieldOnlineRequest(
    $documentsDir . "/GetField.docx",
    $requestField,
    "sections/0/paragraphs/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertFieldOnline($insertRequest);