<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestField = new FieldInsert(array(
    "field_code" => "{ NUMPAGES }",
));
$insertRequest = new InsertFieldRequest(
    "Sample.docx", $requestField, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertField($insertRequest);