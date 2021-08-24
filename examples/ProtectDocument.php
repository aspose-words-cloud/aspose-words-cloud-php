<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestProtectionRequest = new ProtectionRequest(array(
    "password" => "123",
    "protection_type" => "ReadOnly",
));
$protectRequest = new ProtectDocumentRequest(
    "Sample.docx", $requestProtectionRequest, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->protectDocument($protectRequest);