<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestCustomXmlPart = new \Aspose\Words\Model\CustomXmlPartUpdate(array(
    "data" => "<data>Hello world</data>",
));
$updateRequest = new Requests\UpdateCustomXmlPartRequest(
    "Sample.docx",
    0,
    $requestCustomXmlPart,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateCustomXmlPart($updateRequest);