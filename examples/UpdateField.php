<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestField = new FieldUpdate(array(
    "field_code" => "{ NUMPAGES }",
));
$updateRequest = new UpdateFieldRequest(
    "Sample.docx", 0, $requestField, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateField($updateRequest);