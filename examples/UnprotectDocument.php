<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestProtectionRequest = new \Aspose\Words\Model\ProtectionRequest(array(
    "password" => "aspose",
));
$unprotectRequest = new Requests\UnprotectDocumentRequest(
    "Sample.docx",
    $requestProtectionRequest,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->unprotectDocument($unprotectRequest);