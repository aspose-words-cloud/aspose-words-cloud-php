<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestProperty = new \Aspose\Words\Model\DocumentPropertyCreateOrUpdate(array(
    "value" => "Imran Anwar",
));
$createRequest = new Requests\CreateOrUpdateDocumentPropertyOnlineRequest(
    $documentsDir . "Sample.docx",
    "AsposeAuthor",
    $requestProperty,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->createOrUpdateDocumentPropertyOnline($createRequest);