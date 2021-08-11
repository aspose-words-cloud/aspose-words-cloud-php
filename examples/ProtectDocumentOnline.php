<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
    "new_password" => "123",
));
$protectRequest = new Requests\ProtectDocumentOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestProtectionRequest,
    NULL,
    NULL,
    NULL
);
$wordsApi->protectDocumentOnline($protectRequest);