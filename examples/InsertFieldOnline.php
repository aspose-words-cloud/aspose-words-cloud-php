<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestField = new FieldInsert(array(
    "field_code" => "{ NUMPAGES }",
));
$insertRequest = new InsertFieldOnlineRequest(
    $requestDocument, $requestField, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertFieldOnline($insertRequest);