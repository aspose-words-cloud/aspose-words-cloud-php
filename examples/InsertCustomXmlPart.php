<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestCustomXmlPart = new \Aspose\Words\Model\CustomXmlPartInsert(array(
    "id" => "hello",
    "data" => "<data>Hello world</data>",
));
$insertRequest = new Requests\InsertCustomXmlPartRequest(
    "Sample.docx",
    $requestCustomXmlPart,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertCustomXmlPart($insertRequest);