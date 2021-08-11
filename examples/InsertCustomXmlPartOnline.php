<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestCustomXmlPart = new \Aspose\Words\Model\CustomXmlPartInsert(array(
    "id" => "hello",
    "data" => "<data>Hello world</data>",
));
$insertRequest = new Requests\InsertCustomXmlPartOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestCustomXmlPart,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertCustomXmlPartOnline($insertRequest);