<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestProtectionRequest = new ProtectionRequest(array(
    "password" => "aspose",
));
$unprotectRequest = new UnprotectDocumentOnlineRequest(
    $requestDocument, $requestProtectionRequest, NULL, NULL, NULL
);
$wordsApi->unprotectDocumentOnline($unprotectRequest);