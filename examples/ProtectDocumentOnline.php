<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestProtectionRequest = new ProtectionRequest(array(
    "new_password" => "123",
));
$protectRequest = new ProtectDocumentOnlineRequest(
    $requestDocument, $requestProtectionRequest, NULL, NULL, NULL
);
$wordsApi->protectDocumentOnline($protectRequest);