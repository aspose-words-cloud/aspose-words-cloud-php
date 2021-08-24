<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteCustomXmlPartRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteCustomXmlPart($deleteRequest);