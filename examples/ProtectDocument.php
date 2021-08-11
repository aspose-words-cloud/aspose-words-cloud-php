<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
    "password" => "123",
    "protection_type" => "ReadOnly",
));
$protectRequest = new Requests\ProtectDocumentRequest(
    $remoteFileName,
    $requestProtectionRequest,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName
);
$wordsApi->protectDocument($protectRequest);