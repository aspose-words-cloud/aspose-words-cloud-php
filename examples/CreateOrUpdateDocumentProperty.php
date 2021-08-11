<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$requestProperty = new \Aspose\Words\Model\DocumentPropertyCreateOrUpdate(array(
    "value" => "Imran Anwar",
));
$createRequest = new Requests\CreateOrUpdateDocumentPropertyRequest(
    $remoteFileName,
    "AsposeAuthor",
    $requestProperty,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->createOrUpdateDocumentProperty($createRequest);