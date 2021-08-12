<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
    "password" => "123",
    "protection_type" => "ReadOnly",
));
$protectRequest = new Requests\ProtectDocumentRequest(
    "Sample.docx",
    $requestProtectionRequest,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->protectDocument($protectRequest);