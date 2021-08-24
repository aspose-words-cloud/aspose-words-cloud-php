<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteCustomXmlPartsRequest(
    "Sample.docx", NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteCustomXmlParts($deleteRequest);