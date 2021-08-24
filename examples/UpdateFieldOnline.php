<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestField = new FieldUpdate(array(
    "field_code" => "{ NUMPAGES }",
));
$updateRequest = new UpdateFieldOnlineRequest(
    $requestDocument, $requestField, 0, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateFieldOnline($updateRequest);