<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestField = new \Aspose\Words\Model\FieldInsert(array(
    "field_code" => "{ NUMPAGES }",
));
$insertRequest = new Requests\InsertFieldRequest(
    "Sample.docx",
    $requestField,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertField($insertRequest);