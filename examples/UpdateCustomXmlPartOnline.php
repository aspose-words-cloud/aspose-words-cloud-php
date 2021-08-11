<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestCustomXmlPart = new \Aspose\Words\Model\CustomXmlPartUpdate(array(
    "data" => "<data>Hello world</data>",
));
$updateRequest = new Requests\UpdateCustomXmlPartOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    $requestCustomXmlPart,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateCustomXmlPartOnline($updateRequest);