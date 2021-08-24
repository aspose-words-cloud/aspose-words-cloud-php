<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$deleteRequest = new DeleteCustomXmlPartsOnlineRequest(
    $requestDocument, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteCustomXmlPartsOnline($deleteRequest);