<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestProtectionRequest = new ProtectionRequest(array(
    "password" => "aspose",
));
$unprotectRequest = new UnprotectDocumentRequest(
    "Sample.docx", $requestProtectionRequest, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->unprotectDocument($unprotectRequest);