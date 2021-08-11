<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
    "password" => "aspose",
));
$unprotectRequest = new Requests\UnprotectDocumentOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestProtectionRequest,
    NULL,
    NULL,
    NULL
);
$wordsApi->unprotectDocumentOnline($unprotectRequest);