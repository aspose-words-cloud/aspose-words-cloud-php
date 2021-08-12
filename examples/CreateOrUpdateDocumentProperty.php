<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestProperty = new \Aspose\Words\Model\DocumentPropertyCreateOrUpdate(array(
    "value" => "Imran Anwar",
));
$createRequest = new Requests\CreateOrUpdateDocumentPropertyRequest(
    "Sample.docx",
    "AsposeAuthor",
    $requestProperty,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->createOrUpdateDocumentProperty($createRequest);